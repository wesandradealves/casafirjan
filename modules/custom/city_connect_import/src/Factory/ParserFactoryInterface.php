<?php

namespace Drupal\city_connect_import\Factory;

/**
 * Defines ParserFactoryInterface interface.
 *
 * @package Drupal\city_connect_import
 */
interface ParserFactoryInterface {

  /**
   * Returns a parser for the uploaded file extension.
   *
   * @throws \Exception
   *   Returns generic error.
   *
   * @return \Drupal\city_connect_import\Factory\ParserInterface
   *   The parser interface.
   */
  public function create($file_uri): ParserInterface;

  /**
   * Returns a ParserFactoryInterface.
   *
   * @throws \Exception
   *   Returns generic error.
   *
   * @return \Drupal\city_connect_import\Factory\ParserFactoryInterface
   *   The parser interface.
   */
  public function get(): ParserFactoryInterface;

}
