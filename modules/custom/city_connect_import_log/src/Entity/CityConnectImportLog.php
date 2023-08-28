<?php

namespace Drupal\city_connect_import_log\Entity;

use Drupal\Core\Entity\ContentEntityBase;
use Drupal\Core\Entity\EntityTypeInterface;
use Drupal\Core\Field\BaseFieldDefinition;
use Drupal\city_connect_import_log\CityConnectImportLogInterface;

/**
 * Defines the city connect import log entity class.
 *
 * @ContentEntityType(
 *   id = "city_connect_import_log",
 *   label = @Translation("City Connect Import Log"),
 *   label_collection = @Translation("City Connect Import Logs"),
 *   label_singular = @Translation("city connect import log"),
 *   label_plural = @Translation("city connect import logs"),
 *   label_count = @PluralTranslation(
 *     singular = "@count city connect import logs",
 *     plural = "@count city connect import logs",
 *   ),
 *   handlers = {
 *     "list_builder" = "Drupal\city_connect_import_log\CityConnectImportLogListBuilder",
 *     "views_data" = "Drupal\views\EntityViewsData",
 *     "form" = {
 *       "add" = "Drupal\city_connect_import_log\Form\CityConnectImportLogForm",
 *       "edit" = "Drupal\city_connect_import_log\Form\CityConnectImportLogForm",
 *       "delete" = "Drupal\Core\Entity\ContentEntityDeleteForm",
 *     },
 *     "route_provider" = {
 *       "html" = "Drupal\Core\Entity\Routing\AdminHtmlRouteProvider",
 *     }
 *   },
 *   base_table = "city_connect_import_log",
 *   admin_permission = "administer city connect import log",
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "label",
 *     "uuid" = "uuid",
 *   },
 *   links = {
 *     "collection" = "/admin/content/city-connect-import-log",
 *     "add-form" = "/city-connect-import-log/add",
 *     "canonical" = "/city-connect-import-log/{city_connect_import_log}",
 *     "edit-form" = "/city-connect-import-log/{city_connect_import_log}/edit",
 *     "delete-form" = "/city-connect-import-log/{city_connect_import_log}/delete",
 *   },
 * )
 */
class CityConnectImportLog extends ContentEntityBase implements CityConnectImportLogInterface {

  /**
   * Gets the Line Number.
   *
   * @return int
   *   The Line Number.
   */
  public function getLineNumber() {
    return $this->get('line_number')->value ?? 0;
  }

  /**
   * Sets the Line Number.
   *
   * @params int $line_number
   *   The Line Number.
   *
   * @return $this
   *   The Line Number.
   */
  public function setLineNumber(int $line_number) {
    $this->set('line_number', $line_number);
    return $this;
  }

  /**
   * Gets the Line Status.
   *
   * @return string
   *   The Line Status.
   */
  public function getLineStatus() {
    return $this->get('line_status')->value;
  }

  /**
   * Sets the Line Status.
   *
   * @params int $line_status
   *   The Line Status.
   *
   * @return $this
   *   The Line Status.
   */
  public function setLineStatus(string $line_status) {
    $this->set('line_status', $line_status);
    return $this;
  }

  /**
   * Gets the Line Subject.
   *
   * @return string
   *   The Line Subject.
   */
  public function getLineSubject() {
    return $this->get('line_subject')->value;
  }

  /**
   * Sets the Line Subject.
   *
   * @params string $line_subject
   *   The Line Subject.
   *
   * @return $this
   *   The Line Subject.
   */
  public function setLineSubject(string $line_subject) {
    $this->set('line_subject', $line_subject);
    return $this;
  }

  /**
   * Gets the Line Data.
   *
   * @return int
   *   The Line Data.
   */
  public function getLineData() {
    return $this->get('line_data')->value;
  }

  /**
   * Sets the Line Data.
   *
   * @params int $line_data
   *   The Line Data.
   *
   * @return $this
   *   The Line Data.
   */
  public function setLineData(string $line_data) {
    $this->set('line_data', $line_data);
    return $this;
  }

  /**
   * {@inheritdoc}
   */
  public static function baseFieldDefinitions(EntityTypeInterface $entity_type) {

    $fields = parent::baseFieldDefinitions($entity_type);

    $fields['label'] = BaseFieldDefinition::create('string')
      ->setLabel(t('Title'))
      ->setRequired(TRUE)
      ->setSetting('max_length', 255)
      ->setDisplayOptions('form', [
        'type' => 'string_textfield',
        'weight' => -5,
      ])
      ->setDisplayConfigurable('form', TRUE)
      ->setDisplayOptions('view', [
        'label' => 'hidden',
        'type' => 'string',
        'weight' => -5,
      ])
      ->setDisplayConfigurable('view', TRUE);

    $fields['line_number'] = BaseFieldDefinition::create('integer')
      ->setLabel(t('Line Number'))
      ->setRequired(TRUE)
      ->setSetting('min', 0)
      ->setDisplayOptions('form', [
        'type' => 'number',
        'weight' => -5,
      ])
      ->setDisplayConfigurable('view', TRUE);

    $fields['line_status'] = BaseFieldDefinition::create('string')
      ->setLabel(t('Status'))
      ->setRequired(TRUE)
      ->setSetting('max_length', 255)
      ->setDisplayOptions('form', [
        'type' => 'string_textfield',
        'weight' => -5,
      ])
      ->setDisplayConfigurable('form', TRUE)
      ->setDisplayOptions('view', [
        'label' => 'hidden',
        'type' => 'string',
        'weight' => -5,
      ])
      ->setDisplayConfigurable('view', TRUE);

    $fields['line_subject'] = BaseFieldDefinition::create('string')
      ->setLabel(t('Subject'))
      ->setRequired(TRUE)
      ->setSetting('max_length', 255)
      ->setDisplayOptions('form', [
        'type' => 'string_textfield',
        'weight' => -5,
      ])
      ->setDisplayConfigurable('form', TRUE)
      ->setDisplayOptions('view', [
        'label' => 'hidden',
        'type' => 'string',
        'weight' => -5,
      ])
      ->setDisplayConfigurable('view', TRUE);

    $fields['description'] = BaseFieldDefinition::create('string_long')
      ->setLabel(t('Description'))
      ->setSetting('max_length', 500)
      ->setDisplayOptions('form', [
        'type' => 'string_textarea',
        'weight' => 10,
        'settings' => [
          'rows' => 3,
          'disabled' => 'disabled',
        ],
      ])
      ->setDisplayConfigurable('form', TRUE)
      ->setDisplayOptions('view', [
        'type' => 'string',
        'label' => 'hidden',
        'weight' => 10,
      ])
      ->setDisplayConfigurable('view', TRUE);

    $fields['line_data'] = BaseFieldDefinition::create('string_long')
      ->setLabel(t('Line Data'))
      ->setSetting('max_length', 999)
      ->setDisplayOptions('form', [
        'type' => 'string_textarea',
        'weight' => 10,
        'settings' => [
          'rows' => 3,
        ],
      ])
      ->setDisplayConfigurable('form', TRUE)
      ->setDisplayOptions('view', [
        'type' => 'string',
        'label' => 'hidden',
        'weight' => 10,
      ])
      ->setDisplayConfigurable('view', TRUE);

    return $fields;
  }

}
