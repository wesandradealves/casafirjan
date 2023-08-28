<?php

namespace Drupal\city_connect_import\Utility\Validate;

use Drupal\Core\Config\ConfigFactoryInterface;
use Drupal\Core\Datetime\DrupalDateTime;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\StringTranslation\TranslationInterface;
use Drupal\Core\Logger\LoggerChannel;

/**
 * The data validate.
 */
class Validate {

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
   * The logger.channel.city_connect_import service.
   *
   * @var \Drupal\Core\Logger\LoggerChannel
   */
  protected $logger;

  /**
   * The Drupal date time.
   *
   * @var \Drupal\Core\Datetime\DrupalDateTime
   */
  protected $drupalDatetime;

  /**
   * The Drupal system timezone.
   *
   * @var timezone
   */
  protected $timezone;

  /**
   * The valid property.
   *
   * @var isValid
   */
  protected $isValid;

  /**
   * The fields to skip validate array.
   *
   * @var skipValidate
   */
  protected $skipValidate;

  /**
   * The invalid fields property.
   *
   * @var invalidFields
   */
  protected $invalidFields;

  /**
   * The controller constructor.
   *
   * @param \Drupal\Core\Session\AccountInterface $account
   *   The current user.
   * @param \Drupal\Core\StringTranslation\TranslationInterface $string_translation
   *   The string translation service.
   * @param \Drupal\Core\Config\ConfigFactoryInterface $config_factory
   *   The config factory.
   * @param \Drupal\Core\Logger\LoggerChannel $logger
   *   The logger.channel.city_connect_import service.
   * @param \Drupal\Core\Datetime\DrupalDateTime $drupal_datetime
   *   The date.drupaldatetime.city_connect_import service.
   */
  public function __construct(
    AccountInterface $account,
    TranslationInterface $string_translation,
    ConfigFactoryInterface $config_factory,
    LoggerChannel $logger,
    DrupalDateTime $drupal_datetime
  ) {
    $this->account           = $account;
    $this->stringTranslation = $string_translation;
    $this->logger            = $logger;
    $this->drupalDatetime    = $drupal_datetime;
    $this->timezone          = $config_factory->get('system.date')->get('timezone.default') ?? date_default_timezone_get();
    $this->isValid           = TRUE;
    $this->skipValidate      = [
      'field_texto',
      'promote',
      'field_topicos',
      'field_video',
      'field_imagem',
      'field_thumb',
      'field_tags',
      'field_tipo_de_midia',
      'field_categoria',
      'field_campanha_ga',
      'field_ciclo_tematico',
      'field_comprar_ingresso',
      'field_exibir_no_portal_da_firjan',
      'field_id_lumis',
      'field_link_externo',
      'field_texto_do_link',
      'field_link_do_formulario',
      'field_texto_do_link_2',
      'field_categoria_agenda',
      'field_chamada',
      'field_link_para_compra',
      'field_status',
      'field_turno',
      'uid',
      'field_descricao',
      'field_pagina',
      'field_autor',
      'field_e_destaque'
    ];
    $this->invalidFields     = [];
  }

  /**
   * Validates the file data.
   *
   * @param array $args
   *   Args to be imported.
   *
   * @return bool
   *   Return false if the field is not valid.
   */
  public function validate(array $args) {
    $this->invalidFields = [];
    $this->isValid       = TRUE;
    if (!empty($args)) {
      foreach ($args as $field => $value) {
        if (!in_array($field, $this->skipValidate)) {
          $this->validateFields($field, $value);
        }
      }
      return $this->isValid();
    }
    return FALSE;
  }

  /**
   * Checks if the field is valid.
   *
   * @return bool
   *   Return false if the field is not valid.
   */
  public function isValid() {
    return $this->isValid;
  }

  /**
   * Retrieve the invalid fields.
   *
   * @return array
   *   Return the invalid fields from the args array.
   */
  public function getInvalidFields() {
    return $this->invalidFields;
  }

  /**
   * Sets invalid fields.
   *
   * @param string $field
   *   Field name.
   * @param string $message
   *   Field message.
   */
  protected function setInvalidFields($field = NULL, $message = NULL) {
    $this->isValid         = FALSE;
    $this->invalidFields[] = [
      'field'   => $field,
      'message' => $message,
    ];
  }

  /**
   * Checks about validate field instructions.
   *
   * @param string $field
   *   Field name.
   * @param string $value
   *   Field value.
   */
  protected function validateFields($field, $value) {
    switch ($field) {
      case 'start_date':
        $this->validateDate($field, $value);
        break;

      default:
        $this->checkEmpty($field, $value);
        break;
    }
  }

  /**
   * Checks about empty field.
   *
   * @param string $field
   *   Field name.
   * @param string $value
   *   Field value.
   */
  protected function checkEmpty($field = NULL, $value = NULL) {
    if (!$field || !$value) {
      $tmessage = $this->stringTranslation->translate('The @field_name must be not empty.', ['@field_name' => $field]);
      $this->setInvalidFields($field, $tmessage);
    }
  }

  /**
   * Validates date type fields.
   *
   * @param string $field
   *   Field name.
   * @param string $value
   *   Date to be validated.
   */
  protected function validateDate($field, $value) {
    $separator = '|';
    if (substr_count($value, $separator) == 1) {
      $this->validateDateDay($field, $value, $separator);
      $this->validateDateHour($field, $value, $separator);
      if (FALSE !== $this->isValid) {
        $this->validateTestTimestamp($field, $value, $separator);
      }
    }
    else {
      $this->setInvalidFields($field, $this->stringTranslation->translate('The @field_name must have an unique separator.'));
      if (!strpos($value, $separator)) {
        $this->setInvalidFields($field, $this->stringTranslation->translate('The @field_name is missing the separator.'));
      }
    }
  }

  /**
   * Validates date fields day.
   *
   * @param string $field
   *   Field name.
   * @param string $value
   *   String of the date formatted as Y-m-d|H:m:s.
   * @param string $separator
   *   The date separator.
   */
  protected function validateDateDay($field, $value, $separator) {
    $value = explode($separator, $value);
    $day   = $value[0];
    if (substr_count($day, '-') == 2 && strlen($day) == 10) {
      $day = explode('-', $day);
      $y   = $day[0];
      $m   = $day[1];
      $d   = $day[2];
      // Checks date Y.
      if (strlen($y) == 4 && is_numeric($y)) {
        $date_time         = $this->drupalDatetime->getPhpDateTime(NULL, $this->timezone);
        $date_current_year = $date_time->format('Y');
        if ($y < $date_current_year) {
          $this->setInvalidFields($field, 'The year cannot be less than the current year.');
        }
      }
      else {
        $this->setInvalidFields($field, 'The year must have exactly 4 numeric characters.');
      }
      // Checks date m.
      if (strlen($m) == 2 && is_numeric($m)) {
        if ($m < 1 || $m > 12) {
          $this->setInvalidFields($field, 'The month must be between 01 and 12.');
        }
      }
      else {
        $this->setInvalidFields($field, 'The month must have exactly 2 numeric characters.');
      }
      // Checks date d.
      if (strlen($d) == 2 && is_numeric($d)) {
        if ($d < 1 || $d > 31) {
          $this->setInvalidFields($field, 'The day must be between 01 and 31.');
        }
      }
      else {
        $this->setInvalidFields($field, 'The day must have exactly 2 numeric characters.');
      }
    }
    else {
      $this->setInvalidFields($field, 'The date is out of format.');
    }
  }

  /**
   * Validates data fields hour.
   *
   * @param string $field
   *   Field name.
   * @param string $value
   *   String of the date formatted as Y-m-d|H:m:s.
   * @param string $separator
   *   The date separator.
   */
  protected function validateDateHour($field, $value, $separator) {
    $value = explode($separator, $value);
    $hour  = $value[1];
    if (substr_count($hour, ':') == 2 && strlen($hour) == 8) {
      $hour = explode(':', $hour);
      $h    = $hour[0];
      $i    = $hour[1];
      $s    = $hour[2];
      // Checks hour H.
      if (strlen($h) == 2 && is_numeric($h)) {
        if ($h > 23) {
          $this->setInvalidFields($field, 'The hour must be between 01 and 23.');
        }
      }
      else {
        $this->setInvalidFields($field, 'The hour must have exactly 2 numeric characters.');
      }
      // Checks hour i.
      if (strlen($i) == 2 && is_numeric($i)) {
        if ($i > 59) {
          $this->setInvalidFields($field, 'The minutes must be between 00 and 59.');
        }
      }
      else {
        $this->setInvalidFields($field, 'The minutes must have exactly 2 numeric characters.');
      }
      // Checks date s.
      if (strlen($s) == 2 && is_numeric($s)) {
        if ($s > 59) {
          $this->setInvalidFields($field, 'The seconds must be between 00 and 59.');
        }
      }
      else {
        $this->setInvalidFields($field, 'The seconds must have exactly 2 numeric characters.');
      }
    }
    else {
      $this->setInvalidFields($field, 'The hour is out of format.');
    }
  }

  /**
   * Validates the timestamp creation for date fields hour.
   *
   * @param string $field
   *   Field name.
   * @param string $value
   *   String of the date formatted as Y-m-d|H:m:s.
   * @param string $separator
   *   The date separator.
   */
  protected function validateTestTimestamp($field, $value, $separator) {
    $value     = str_replace('|', ' ', $value);
    $date_time = $this->drupalDatetime->getPhpDateTime(NULL, $this->timezone);
    $date      = $date_time->createFromFormat('Y-m-d H:i:s', $value);
    if (FALSE !== $date) {
      if (!$date->getTimestamp()) {
        $tmessage = $this->stringTranslation->translate('The system has generated a date but was unable to generate a timestamp.');
        $this->setInvalidFields($field, $tmessage);
        $this->logger->critical($tmessage);
      }
    }
    else {
      $tmessage = $this->stringTranslation->translate('The system was unable to generate a date.');
      $this->setInvalidFields($field, $tmessage);
      $this->logger->critical($tmessage);
    }
  }

}
