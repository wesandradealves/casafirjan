<?php

namespace Drupal\city_connect_import\Factory;

/**
 * Defines ParserInterface interface.
 *
 * @package Drupal\city_connect_import
 */
interface ParserInterface {

  /**
   * Loads the file and returns a parsed data array.
   *
   * @param string $file_uri
   *   The file uri to be imported.
   *
   * @throws \Exception
   *   Returns generic error.
   *
   * @return array
   *   The file parsed data array.
   */
  public function parser(string $file_uri): array;

  /**
   * Loads the parsed data array.
   *
   * @throws \Exception
   *   Returns generic error.
   *
   * @return array
   *   The parsed data array.
   */
  public function get(): array;

}
