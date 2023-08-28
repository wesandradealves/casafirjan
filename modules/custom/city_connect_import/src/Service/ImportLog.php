<?php

namespace Drupal\city_connect_import\Service;

use Drupal\Core\Entity\EntityTypeManagerInterface;
use Drupal\Core\Logger\LoggerChannelInterface;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\StringTranslation\TranslationInterface;

/**
 * Service Import Log.
 */
class ImportLog implements ImportLogInterface {

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
   * The entity type manager.
   *
   * @var \Drupal\Core\Entity\EntityTypeManagerInterface
   */
  protected $entityTypeManager;

  /**
   * The logger.channel.city_connect_import service.
   *
   * @var \Drupal\Core\Logger\LoggerChannelInterface
   */
  protected $logger;

  /**
   * Constructs an ImportLog object.
   *
   * @param \Drupal\Core\Session\AccountInterface $account
   *   The current user.
   * @param \Drupal\Core\StringTranslation\TranslationInterface $string_translation
   *   The string translation service.
   * @param \Drupal\Core\Entity\EntityTypeManagerInterface $entity_type_manager
   *   The entity type manager.
   * @param \Drupal\Core\Logger\LoggerChannelInterface $logger
   *   The logger.channel.city_connect_import service.
   */
  public function __construct(
    AccountInterface $account,
    TranslationInterface $string_translation,
    EntityTypeManagerInterface $entity_type_manager,
    LoggerChannelInterface $logger
  ) {
    $this->account = $account;
    $this->stringTranslation = $string_translation;
    $this->entityTypeManager = $entity_type_manager;
    $this->logger = $logger;
  }

  /**
   * {@inheritdoc}
   */
  public function log(array $args): bool {
    return $this->create($args);
  }

  /**
   * {@inheritdoc}
   */
  public function create(array $args): bool {
    try {
      $log = $this->entityTypeManager->getStorage('city_connect_import_log')
        ->create(['type' => 'city_connect_import_log']);
      $log->set('label', $args['label']);
      $log->set('line_number', $args['line_number']);
      $log->set('line_status', $args['line_status']);
      $log->set('line_subject', $args['line_subject']);
      $log->set('description', $args['description']);
      $log->set('line_data', json_encode($args['line_data']));
      $log->enforceIsNew();
      $log->save();
      if (is_numeric($log->id())) {
        return TRUE;
      }
    }
    catch (\Exception $e) {
      $this->logger->error($this->stringTranslation->translate('Error while creating the import log for the user ID @user_id.', ['@user_id' => $this->account->id()]));
    }
    return FALSE;
  }

  /**
   * {@inheritdoc}
   */
  public function clear(): bool {
    try {
      $entity_log = $this->entityTypeManager->getStorage('city_connect_import_log');
      if (!empty($logs = $entity_log->getQuery()->execute())) {
        foreach ($logs as $log) {
          $entity_log->load($log)->delete();
        }
        if (empty($entity_log->getQuery()->execute())) {
          return TRUE;
        }
      }
    }
    catch (\Exception $e) {
      $this->logger->error($this->stringTranslation->translate('Error while cleaning the import log for the user ID @user_id.', ['@user_id' => $this->account->id()]));
    }
    return FALSE;
  }

  /**
   * {@inheritdoc}
   */
  public function remove(int $id): bool {
    try {
      $entity_log = $this->entityTypeManager->getStorage('city_connect_import_log');
      if (is_int($id)) {
        $entity_log->load($id)->delete();
        if (empty($entity_log->load($id))) {
          return TRUE;
        }
      }
    }
    catch (\Exception $e) {
      $this->logger->error($this->stringTranslation->translate('Error while removing the import log with id [@id] for the user ID @user_id.', [
        '@id' => $id,
        '@user_id' => $this->account->id(),
      ]));
    }
    return FALSE;
  }

  /**
   * {@inheritdoc}
   */
  public function list(): array {
    try {
      if (!empty($logs = $this->entityTypeManager->getStorage('city_connect_import_log')->getQuery()->execute())) {
        return $logs;
      }
    }
    catch (\Exception $e) {
      $this->logger->error($this->stringTranslation->translate('Error while cleaning the import log for the user ID @user_id.', ['@user_id' => $this->account->id()]));
    }
    return [];
  }

}
