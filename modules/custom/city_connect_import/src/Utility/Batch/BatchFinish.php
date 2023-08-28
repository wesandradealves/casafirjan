<?php

namespace Drupal\city_connect_import\Utility\Batch;

/**
 * Methods for finishing the import batch.
 *
 * @package Drupal\city_connect_import\Utility\Batch\BatchFinish
 */
class BatchFinish {

  /**
   * Process End Batch.
   */
  public static function finish($success, $results, $operations) {
    $logger      = \Drupal::service('logger.channel.city_connect_import');
    $translation = \Drupal::service('string_translation');
    $messenger   = \Drupal::service('messenger');
    $markup      = \Drupal::service('markup.drupalrender.city_connect_import');
    $messenger->deleteAll();
    if (!$success || isset($results['has_error'])) {
      if (FALSE !== $results['has_error']) {
        $tmessage = $translation->translate('The import test ended with a total of @total_errors rows containing errors.<br>Please fix errors and try again.<br>No data have been imported.', ['@total_errors' => $results['total_error']]);
        $messenger->addError($markup->create($tmessage));
        $message_field = $translation->translate('Line <b style="color: #e0ac00">%s</b>: Error found at field [<b style="color: #e0ac00">%s</b>]<br><span style="padding-left: 30px; color: red;">Error:</span> %s');
        foreach ($results['invalid_items'] as $invalid_item) {
          $messenger->addWarning($markup->create('<hr/>'), 1);
          foreach ($invalid_item['invalid_fields'] as $invalid_field) {
            $tmessage = sprintf($message_field, $invalid_item['line'], $invalid_field['field'], $invalid_field['message']);
            $messenger->addWarning($markup->create($tmessage), 1);
          }
        }
      }
      $logger->error($translation->translate('Import finished with error.'));
    }
    else {
      $tmessage = $translation->translate('Import finished successful.');
      $messenger->addStatus($markup->create($tmessage));
      $logger->info($tmessage);
    }
  }

}
