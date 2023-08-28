<?php

namespace Drupal\city_connect_import\Service;

use Drupal\Core\Config\ConfigFactoryInterface;
use Drupal\Core\Datetime\DrupalDateTime;
use Drupal\Core\Entity\EntityTypeManagerInterface;
use Drupal\Core\File\FileSystemInterface;
use Drupal\Core\Logger\LoggerChannelInterface;
use Drupal\Core\StringTranslation\TranslationInterface;

/**
 * Attach Image Service.
 */
class ImportAttachThumbnail implements ImportAttachThumbnailInterface {

  /**
   * The file handler.
   *
   * @var \Drupal\Core\File\FileSystemInterface
   */
  protected $fileSystem;

  /**
   * The entity type manager.
   *
   * @var \Drupal\Core\Entity\EntityTypeManagerInterface
   */
  protected $entityTypeManager;

  /**
   * The string translation service.
   *
   * @var \Drupal\Core\StringTranslation\TranslationInterface
   */
  protected $stringTranslation;

  /**
   * The config factory.
   *
   * @var \Drupal\Core\Config\ConfigFactoryInterface
   */
  protected $configFactory;

  /**
   * The date.drupaldatetime.city_connect_import service.
   *
   * @var \Drupal\Core\Datetime\DrupalDateTime
   */
  protected $drupalDatetime;

  /**
   * The logger.channel.city_connect_import service.
   *
   * @var \Drupal\Core\Logger\LoggerChannelInterface
   */
  protected $logger;

  /**
   * The thumbnailUri.
   *
   * @var thumbnailUri
   */
  protected $thumbnailUri;

  /**
   * The thumbnailUriTemp.
   *
   * @var thumbnailUriTemp
   */
  protected $thumbnailUriTemp;

  /**
   * Constructs an ImportThumbnail object.
   *
   * @param \Drupal\Core\File\FileSystemInterface $file_system
   *   The file handler.
   * @param \Drupal\Core\Entity\EntityTypeManagerInterface $entity_type_manager
   *   The entity type manager.
   * @param \Drupal\Core\StringTranslation\TranslationInterface $string_translation
   *   The string translation service.
   * @param \Drupal\Core\Config\ConfigFactoryInterface $config_factory
   *   The config factory.
   * @param \Drupal\Core\Datetime\DrupalDateTime $drupal_datetime
   *   The date.drupaldatetime.city_connect_import service.
   * @param \Drupal\Core\Logger\LoggerChannelInterface $logger
   *   The logger.channel.city_connect_import service.
   */
  public function __construct(
    FileSystemInterface $file_system,
    EntityTypeManagerInterface $entity_type_manager,
    TranslationInterface $string_translation,
    ConfigFactoryInterface $config_factory,
    DrupalDateTime $drupal_datetime,
    LoggerChannelInterface $logger
  ) {
    $this->fileSystem = $file_system;
    $this->entityTypeManager = $entity_type_manager;
    $this->stringTranslation = $string_translation;
    $this->configFactory = $config_factory;
    $this->drupalDatetime = $drupal_datetime;
    $this->logger = $logger;
    $this->thumbnailUriTemp = 'temporary://city_connect_import_temp';
    $this->thumbnailDirTemp = $this->fileSystem->realpath($this->thumbnailUriTemp);
    $timezone = $config_factory->get('system.date')->get('timezone.default') ?? date_default_timezone_get();
    $dirDate = $drupal_datetime->format('Y-m', ['timezone' => $timezone]);
    $this->thumbnailUri = 'public://' . $dirDate;
    $this->thumbnailDir = $this->fileSystem->realpath($this->thumbnailUri);
  }

  /**
   * {@inheritdoc}
   */
  public function attach(int $nid, string $attachment_url, string $field_thumbnail): ?string {
    try {
      if ($nid && $attachment_url && $field_thumbnail) {
        if (!$this->isPreparedDestination()) {
          if (NULL !== $this->prepareDestination()) {
            $this->fileSystem->mkdir($this->thumbnailUri);
            if (!$this->isPreparedDestination()) {
              return $this->stringTranslation->translate('Error: The destination directory do not exists or it is not writable.');
            }
          }
        }
        if (!$this->isPreparedTempDestination()) {
          if (NULL !== $this->prepareTempDestination()) {
            $this->fileSystem->deleteRecursive($this->thumbnailUriTemp);
            $this->fileSystem->mkdir($this->thumbnailUriTemp);
            if (!$this->isPreparedTempDestination()) {
              return $this->stringTranslation->translate('Error: The temporary destination directory do not exists or it is not writable.');
            }
          }
        }
        if ($fid = $this->saveExternalImage($attachment_url)) {
          if ($this->attachImageToContent($nid, $fid, $field_thumbnail)) {
            return $this->stringTranslation->translate('Success: Image [@attachment_url] successfully attached to node [@nid].', [
              '@attachment_url' => $attachment_url,
              '@nid' => $nid,
            ]);
          }
          else {
            $message = $this->stringTranslation->translate('Error: Image [@attachment_url] could not be attached to node [@nid].', [
              '@attachment_url' => $attachment_url,
              '@nid' => $nid,
            ]);
            $this->logger->error($message);
            return $message;
          }
        }
      }
      else {
        return $this->stringTranslation->translate('Error: Parameters nid, attachment_url and field_thumbnail cannot be empty.');
      }
    }
    catch (\Exception $e) {
      $message = $this->stringTranslation->translate('Error: An error occurred while attacking the image [@attachment_url] for the nid [@nid].', [
        'attachment_url' => $attachment_url,
        'nid' => $nid,
      ]);
      $this->logger->error($message);
      return $message;
    }
    return NULL;
  }

  /**
   * {@inheritdoc}
   */
  public function saveExternalImage($attachment_url): ?int {
    $saved_image_id = NULL;
    try {
      if ($attachment_url) {
        if ($input_file_ext = $this->getImageExtension($attachment_url)) {
          if ($external_image = $this->getImageFromUrl($attachment_url)) {
            if ($tmp_saved_img = $this->fileSystem->saveData(
              $external_image,
              $this->fileSystem->tempnam($this->thumbnailDirTemp, 'img'),
              $this->fileSystem::EXISTS_REPLACE)) {
              $node_filename = $this->fileSystem->basename($tmp_saved_img) . '.' . $input_file_ext;
              if ($new_file = $this->fileSystem->copy(
                $tmp_saved_img,
                $this->thumbnailUri . '/' . $node_filename,
                $this->fileSystem::EXISTS_RENAME
              )) {
                $filemime = ('jpg' == $input_file_ext) ? 'image/jpeg' : 'image/' . $input_file_ext;
                $node_new_file = $this->entityTypeManager->getStorage('file')->create([
                  'filename' => $node_filename,
                  'uri' => $new_file,
                  'filemime' => $filemime,
                  'status' => 0,
                  'uid' => 1,
                ]);
                $node_new_file->enforceIsNew();
                $node_new_file->setTemporary();
                if ($node_new_file->save()) {
                  $saved_image_id = $node_new_file->id();
                }
              }
            }
          }
        }
      }
      else {
        $this->logger->error($this->stringTranslation->translate('Error: parameter attachment_url cannot be empty.'));
      }
    }
    catch (\Exception $e) {
      return NULL;
    }
    return $saved_image_id;
  }

  /**
   * {@inheritdoc}
   */
  public function getImageExtension(string $file_path): ?string {
    if ($ext = pathinfo($file_path, PATHINFO_EXTENSION)) {
      return $ext;
    }
    $this->logger->error($this->stringTranslation->translate('Error while importing external image: The system cannot determine the image file extension for file path: [@file_path]', ['@file_path' => $file_path]));
    return NULL;
  }

  /**
   * {@inheritdoc}
   */
  public function getImageFromUrl(string $image_url): ?string {
    try {
      $image = file_get_contents(
        $image_url,
        FALSE,
        stream_context_create([
          'ssl' => [
            'verify_peer' => FALSE,
            'verify_peer_name' => FALSE,
          ],
        ])
      );
      return $image;
    }
    catch (\Exception $e) {
      $this->logger->warning(('Error while importing external image: Error while downloading image | ' . $e->getMessage()));
    }
    return NULL;
  }

  /**
   * {@inheritdoc}
   */
  public function deleteImage(string $path): bool {
    try {
      return $this->fileSystem->unlink($path);
    }
    catch (\Exception $e) {
      return FALSE;
    }
    return FALSE;
  }

  /**
   * {@inheritdoc}
   */
  public function isPreparedDestination(): bool {
    return (!is_dir($this->thumbnailDir) || !is_writable($this->thumbnailDir)) ? FALSE : TRUE;
  }

  /**
   * {@inheritdoc}
   */
  public function isPreparedTempDestination(): bool {
    return (!is_dir($this->thumbnailDirTemp) || !is_writable($this->thumbnailDirTemp)) ? FALSE : TRUE;
  }

  /**
   * {@inheritdoc}
   */
  public function prepareDestination(): ?string {
    try {
      if (!$this->fileSystem->prepareDirectory($this->thumbnailUri, $this->fileSystem::CREATE_DIRECTORY)) {
        $message = $this->stringTranslation->translate('The upload directory do not exists and could no be created: [@up_dir]', ['@up_dir' => $this->thumbnailUri]);
        $this->logger->emergency($message);
        return $message;
      }
    }
    catch (\Exception $e) {
      return NULL;
    }
    return NULL;
  }

  /**
   * {@inheritdoc}
   */
  public function prepareTempDestination(): ?string {
    try {
      if (!$this->fileSystem->prepareDirectory($this->thumbnailUriTemp, $this->fileSystem::CREATE_DIRECTORY)) {
        $message = $this->stringTranslation->translate('The temp directory do not exists and could no be created: [@temp_dir]', ['@temp_dir' => $this->thumbnailUriTemp]);
        $this->logger->emergency($message);
        return $message;
      }
    }
    catch (\Exception $e) {
      return NULL;
    }
    return NULL;
  }

  /**
   * {@inheritdoc}
   */
  public function attachImageToContent(int $nid, int $fid, string $field_thumbnail): bool {
    try {
      if ($nid && $fid && $field_thumbnail) {
        if ($node = $this->entityTypeManager->getStorage('node')->load($nid)) {
          $node->get($field_thumbnail)->setValue([
            'target_id' => $fid,
            'alt' => $node->getTitle(),
            'title' => $node->getTitle(),
          ]);
          $node->save();
          $node_check = $this->entityTypeManager->getStorage('node')->load($nid);
          if ($fid == $node_check->get($field_thumbnail)->getValue()[0]['target_id']) {
            return TRUE;
          }
        }
      }
    }
    catch (\Exception $e) {
      return FALSE;
    }
    return FALSE;
  }

}
