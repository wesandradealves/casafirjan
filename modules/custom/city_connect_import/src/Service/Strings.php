<?php

namespace Drupal\city_connect_import\Service;

use Drupal\Core\Config\ConfigFactoryInterface;

/**
 * Class Strings for the module source strings.
 *
 * @package Drupal\city_connect_import
 */
class Strings implements StringsInterface {

  /**
   * The config factory.
   *
   * @var \Drupal\Core\Config\ConfigFactoryInterface
   */
  protected $configFactory;

  /**
   * QRCodeScanStrings constructor.
   *
   * @param \Drupal\Core\Config\ConfigFactoryInterface $configFactory
   *   The config factory service.
   */
  public function __construct(ConfigFactoryInterface $configFactory) {
    $this->configFactory = $configFactory->get('city_connect_import.strings');
  }

  /**
   * {@inheritdoc}
   */
  public function fileExtNotAllowed(): string {
    return $this->configFactory->get('file_ext_not_allowed') ?? NULL;
  }

  /**
   * {@inheritdoc}
   */
  public function fileNotFound(): string {
    return $this->configFactory->get('file_not_found') ?? NULL;
  }

  /**
   * {@inheritdoc}
   */
  public function fileEmpty(): string {
    return $this->configFactory->get('file_empty') ?? NULL;
  }

  /**
   * {@inheritdoc}
   */
  public function fileRemove(): string {
    return $this->configFactory->get('file_remove') ?? NULL;
  }

  /**
   * {@inheritdoc}
   */
  public function importSuccess(): string {
    return $this->configFactory->get('import_success') ?? NULL;
  }

  /**
   * {@inheritdoc}
   */
  public function importFail(): string {
    return $this->configFactory->get('import_fail') ?? NULL;
  }

}
