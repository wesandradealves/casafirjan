<?php

namespace Drupal\city_connect_import\Utility\Batch;

/**
 * Methods for running the import test batch.
 *
 * @package Drupal\city_connect_import\Utility\Batch\BatchTest
 */
class BatchTest {

  /**
   * Process Test Batch.
   */
  public static function test($args, $line, &$context) {
    $line++;
    $context['message'] = t('Running test for line @line', ['@line' => $line]);
    $field_validate     = \Drupal::service('city_connect_import.batch.validate');
    $field_validate->validate($args);
    if (!$field_validate->isValid()) {
      $context['results']['has_error']       = 1;
      $context['results']['total_error']     = (isset($context['results']['total_error'])) ? $context['results']['total_error']++ : 1;
      $context['results']['invalid_items'][] = [
        'line'           => $line,
        'invalid_fields' => $field_validate->getInvalidFields(),
      ];
    }
  }

}
