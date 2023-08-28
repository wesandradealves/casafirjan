<?php

namespace Drupal\city_connect_import\Service;

use Drupal\city_connect_import\Exception\FileExtNotAllowedException;
use Drupal\city_connect_import\Exception\FileNotFoundException;
use Drupal\city_connect_import\Exception\FileEmptyException;
use Drupal\city_connect_import\Exception\FileRemoveException;
use Drupal\city_connect_import\Exception\BatchFailException;
use Drupal\city_connect_import\Exception\ImportFailException;
use Drupal\city_connect_import\Factory\ParserFactoryInterface;
use Drupal\Core\Batch\BatchBuilder;
use Drupal\Core\Entity\EntityTypeManagerInterface;
use Drupal\Core\File\FileSystemInterface;
use Drupal\Core\Logger\LoggerChannel;
use Drupal\Core\Messenger\MessengerInterface;
use Drupal\Core\Render\Markup;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\StringTranslation\TranslationInterface;
use Drupal\file\Entity\File;

/**
 * Import Service for uploaded file.
 */
class Import implements ImportInterface {

  /**
   * The current user.
   *
   * @var \Drupal\Core\Session\AccountInterface
   */
  protected $account;

  /**
   * The string translation service.
   *
   * @var \Drupal\Core\StringTranslation\TranslationInterface
   */
  protected $stringTranslation;

  /**
   * The messenger.
   *
   * @var \Drupal\Core\Messenger\MessengerInterface
   */
  protected $messenger;

  /**
   * The entity type manager.
   *
   * @var \Drupal\Core\Entity\EntityTypeManagerInterface
   */
  protected $entityTypeManager;

  /**
   * The file handler.
   *
   * @var \Drupal\Core\File\FileSystemInterface
   */
  protected $fileSystem;

  /**
   * The markup.drupalrender.city_connect_import service.
   *
   * @var \Drupal\Core\Render\Markup
   */
  protected $markup;

  /**
   * The batch.drupalbatch.city_connect_import service.
   *
   * @var \Drupal\Core\Batch\BatchBuilder
   */
  protected $batchBuilder;

  /**
   * The logger.channel.city_connect_import service.
   *
   * @var \Drupal\Core\Logger\LoggerChannel
   */
  protected $logger;

  /**
   * The city_connect_import.strings service.
   *
   * @var \Drupal\city_connect_import\Service\StringsInterface
   */
  protected $strings;

  /**
   * The city_connect_import.parser service.
   *
   * @var \Drupal\city_connect_import\Factory\ParserFactoryInterface
   */
  protected $parser;

  /**
   * The file entity.
   *
   * @var \Drupal\file\Entity\File
   */
  protected $file;

  /**
   * Constructs an ImportCsv object.
   *
   * @param \Drupal\Core\Session\AccountInterface $account
   *   The current user.
   * @param \Drupal\Core\StringTranslation\TranslationInterface $string_translation
   *   The string translation service.
   * @param \Drupal\Core\Messenger\MessengerInterface $messenger
   *   The messenger.
   * @param \Drupal\Core\Entity\EntityTypeManagerInterface $entity_type_manager
   *   The entity type manager.
   * @param \Drupal\Core\File\FileSystemInterface $file_system
   *   The file handler.
   * @param \Drupal\Core\Render\Markup $markup
   *   The markup.drupalrender.city_connect_import service.
   * @param \Drupal\Core\Batch\BatchBuilder $batchBuilder
   *   The batch.drupalbatch.city_connect_import service.
   * @param \Drupal\Core\Logger\LoggerChannel $logger
   *   The logger.channel.city_connect_import service.
   * @param \Drupal\city_connect_import\Service\StringsInterface $strings
   *   The city_connect_import.strings service.
   * @param \Drupal\city_connect_import\Factory\ParserFactoryInterface $parser
   *   The city_connect_import.parser service.
   */
  public function __construct(
    AccountInterface $account,
    TranslationInterface $string_translation,
    MessengerInterface $messenger,
    EntityTypeManagerInterface $entity_type_manager,
    FileSystemInterface $file_system,
    Markup $markup,
    BatchBuilder $batchBuilder,
    LoggerChannel $logger,
    StringsInterface $strings,
    ParserFactoryInterface $parser
  ) {
    $this->account = $account;
    $this->stringTranslation = $string_translation;
    $this->messenger = $messenger;
    $this->logger = $logger;
    $this->fileSystem = $file_system;
    $this->markup = $markup;
    $this->batchBuilder = $batchBuilder;
    $this->strings = $strings;
    $this->parser = $parser;
    $this->file = $entity_type_manager->getStorage('file');
  }

  /**
   * {@inheritdoc}
   */
  public function importer($parent_menu, $fid): bool {
    try {
      if (FALSE !== $this->validate($uploaded_file = $this->file->load($fid))) {
        $uploaded_file->setTemporary();
        $this->batch($parent_menu, $this->fileSystem->realpath($uploaded_file->getFileUri()));
        $this->messenger->addStatus($this->stringTranslation->translate('Start Importing ...'));
        $this->removeFile($uploaded_file);
        return TRUE;
      }
      throw new ImportFailException('An error occurred while trying to import', 500);
    }
    catch (FileExtNotAllowedException $e) {
      $this->logger->error('@error', ['@error' => $e->getMessage()]);
      $this->messenger->addError($this->strings->fileExtNotAllowed());
    }
    catch (FileNotFoundException $e) {
      $this->logger->error('@error', ['@error' => $e->getMessage()]);
      $this->messenger->addError($this->strings->fileNotFound());
    }
    catch (FileEmptyException $e) {
      $this->logger->error('@error', ['@error' => $e->getMessage()]);
      $this->messenger->addError($this->strings->fileEmpty());
    }
    catch (FileRemoveException $e) {
      $this->logger->error('@error', ['@error' => $e->getMessage()]);
      $this->messenger->addError($this->strings->fileRemove());
    }
    catch (BatchFailException | ImportFailException $e) {
      $this->logger->error('@error', ['@error' => $e->getMessage()]);
      $this->messenger->addError($this->strings->importFail());
    }
    catch (\Exception $e) {
      $this->logger->error('@error', ['@error' => $e->getMessage()]);
      $this->messenger->addError($this->strings->importFail());
    }
    return FALSE;
  }

  /**
   * {@inheritdoc}
   */
  public function validate(File $file): bool {
    if (!in_array($file->getMimeType(), [
      'text/csv',
      'text/json',
      'application/octet-stream',
    ])) {
      throw new FileExtNotAllowedException('File extension not allowed.', 401);
    }
    if ($file->getSize() <= 0) {
      throw new FileEmptyException('File cannot be empty.', 500);
    }
    if (FALSE !== empty($this->fileSystem->realpath($file->getFileUri()))) {
      throw new FileNotFoundException('File not found.', 400);
    }
    return TRUE;
  }

  /**
   * {@inheritdoc}
   */
  public function removeFile(File $file): bool {
    $file->delete();
    if (FALSE === $this->fileSystem->getDestinationFilename($this->fileSystem->realpath($file->getFileUri()), $this->fileSystem::EXISTS_ERROR)) {
      throw new FileRemoveException('An error occurred while trying to remove the uploaded file.', 500);
    }
    return TRUE;
  }

  /**
   * {@inheritdoc}
   */
  public function batch($parent_taxonomy, $file_uri): ?bool {
    try {
      $this->logger->info($this->stringTranslation->translate('Import Started.'));
      $this->batchBuilder->setFinishCallback([
        'Drupal\city_connect_import\Utility\Batch\BatchFinish',
        'finish',
      ]);
      $this->batchBuilder->setTitle($this->stringTranslation->translate('Importing the file...'));
      $this->batchBuilder->setInitMessage($this->stringTranslation->translate('Import process is starting.'));
      $this->batchBuilder->setProgressMessage($this->stringTranslation->translate('Processed @current out of @total. Estimated time: @estimate.'));
      $this->batchBuilder->setErrorMessage($this->stringTranslation->translate('The process has encountered an error.'));
      if (!empty($uploaded_file_data = $this->parser->create($file_uri)->get())) {
        $this->batchBuilder->addOperation([
          'Drupal\city_connect_import\Utility\Batch\BatchClean',
          'clear',
        ]);
        foreach ($uploaded_file_data as $line => $args) {
          $this->batchBuilder->addOperation(
            [
              'Drupal\city_connect_import\Utility\Batch\BatchTest',
              'test',
            ],
            [
              $args,
              $line,
            ]);
        }
        foreach ($uploaded_file_data as $line => $args) {
          $args['parent_taxonomy'] = $parent_taxonomy;
          $this->batchBuilder->addOperation(
            [
              'Drupal\city_connect_import\Utility\Batch\Batch',
              'batchImport',
            ],
            [
              $args,
              $line,
            ]);
        }
        $this->batchBuilder->setProgressive(FALSE);
        batch_set($this->batchBuilder->toArray());
      }
      else {
        $message = $this->stringTranslation->translate('There is no data to import.');
        $this->messenger->addWarning($this->markup->create($message));
        throw new \Exception($message, 500);
      }
      return TRUE;
    }
    catch (\Exception $e) {
      throw new BatchFailException($e->getMessage(), 500);
    }
  }

}
