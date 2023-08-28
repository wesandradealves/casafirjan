<?php

namespace Drupal\city_connect_import_log;

use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Entity\EntityListBuilder;
use Drupal\Component\Render\FormattableMarkup;

/**
 * Provides a list controller for the city connect import log entity type.
 */
class CityConnectImportLogListBuilder extends EntityListBuilder {

  /**
   * {@inheritdoc}
   */
  public function render() {
    $build['table'] = parent::render();

    $total = $this->getStorage()
      ->getQuery()
      ->accessCheck(FALSE)
      ->count()
      ->execute();

    $build['summary']['#markup'] = $this->t('Total city connect import logs: @total', ['@total' => $total]);
    return $build;
  }

  /**
   * {@inheritdoc}
   */
  public function buildHeader() {
    $header['label'] = $this->t('Title');
    $header['line_number'] = $this->t('Line');
    $header['line_status'] = $this->t('Status');
    $header['line_type'] = $this->t('Type');
    return $header + parent::buildHeader();
  }

  /**
   * {@inheritdoc}
   */
  public function buildRow(EntityInterface $entity) {
    /** @var \Drupal\city_connect_import_log\CityConnectImportLogInterface $entity */
    $row['label'] = $entity->toLink();
    $row['line_number'] = $entity->getLineNumber();
    $row['line_status'] = new FormattableMarkup($this->getStatusType($entity->getLineStatus()), [
      '@data' => ucfirst(explode('_', $entity->getLineStatus())[1]),
    ]);
    $row['line_type'] = ('taxonomy' == explode('_', $entity->getLineStatus())[0]) ? $this->t('Taxonomy') : $this->t('Content');
    return $row + parent::buildRow($entity);
  }

  /**
   * Gets the status type.
   *
   * @param string $status
   *   The status.
   *
   * @return string
   *   Returns the status type.
   */
  protected function getStatusType(string $status) {
    switch ($status) {
      case 'taxonomy_error':
        $status = '<span style="display: block; max-width: 72px; text-align: center; border: 1px solid #935050; background-color: #d25d71; padding: 3px; border-radius: 5px;">@data</span>';

        break;

      case 'taxonomy_success':
        $status = '<span style="display: block; max-width: 72px; text-align: center; border: 1px solid #0f610f; background-color: #80df80; padding: 3px; border-radius: 5px;">@data</span>';

        break;

      case 'content_error':
        $status = '<span style="display: block; max-width: 72px; text-align: center; border: 1px solid #ff0000; background-color: #ffc0cb; padding: 3px; border-radius: 5px;">@data</span>';

        break;

      case 'content_success':
        $status = '<span style="display: block; max-width: 72px; text-align: center; border: 1px solid #39d739; background-color: #aaf9aa; padding: 3px; border-radius: 5px;">@data</span>';

        break;

      case 'taxonomy_warning':
      case 'content_warning':
        $status = '<span style="display: block; max-width: 72px; text-align: center; border: 1px solid #baba0c; background-color: #ebeb52; padding: 3px; border-radius: 5px;">@data</span>';

        break;

      case 'content_unrelated':
        $status = '<span style="display: block; max-width: 72px; text-align: center; border: 1px solid #ff0000; background-color: #000000; color: #ffffff; padding: 3px; border-radius: 5px;">@data</span>';

        break;
    }
    return $status;
  }

}
