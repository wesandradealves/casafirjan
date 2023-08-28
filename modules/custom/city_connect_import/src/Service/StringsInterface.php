<?php

namespace Drupal\city_connect_import\Service;

/**
 * Defines StringsInterface interface.
 *
 * @package Drupal\city_connect_import
 */
interface StringsInterface {

  /**
   * Gets string for the fileExtNotAllowed.
   *
   * @return string
   *   The string.
   */
  public function fileExtNotAllowed(): string;

  /**
   * Gets string for the fileNotFound.
   *
   * @return string
   *   The string.
   */
  public function fileNotFound(): string;

  /**
   * Gets string for the fileEmpty.
   *
   * @return string
   *   The string.
   */
  public function fileEmpty(): string;

  /**
   * Gets string for the fileRemove.
   *
   * @return string
   *   The string.
   */
  public function fileRemove(): string;

  /**
   * Gets string for the importSuccess.
   *
   * @return string
   *   The string.
   */
  public function importSuccess(): string;

  /**
   * Gets string for the importFail.
   *
   * @return string
   *   The string.
   */
  public function importFail(): string;

}
