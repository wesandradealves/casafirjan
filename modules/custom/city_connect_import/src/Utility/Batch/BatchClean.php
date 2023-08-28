<?php

namespace Drupal\city_connect_import\Utility\Batch;

/**
 * Methods for clear the import batch log.
 *
 * @package Drupal\city_connect_import\Utility\Batch\BatchClean
 */
class BatchClean {

  /**
   * Process Import Batch Clean.
   */
  public static function clear(&$context) {
    if (!isset($context['results']['has_error'])) {
      $context['message'] = t('Cleaning log ...');
      /**
       * The city_connect_import.batch.log service.
       *
       * @var \Drupal\city_connect_import\Service $batch_log
       */
      $batch_log = \Drupal::service('city_connect_import.batch.log');
      $batch_log->clear();
    }
  }

}
