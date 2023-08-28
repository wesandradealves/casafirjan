<?php

namespace Drupal\city_connect_import\Service;

/**
 * Defines ImportLogInterface interface.
 *
 * @package Drupal\city_connect_import
 */
interface ImportLogInterface {

  /**
   * An alias to create.
   *
   * @param array $args
   *   The arguments to log.
   *
   * @throws \Exception
   *   Returns generic error.
   *
   * @return bool
   *   Returns if the log has been created.
   */
  public function log(array $args): bool;

  /**
   * Creates a single log.
   *
   * @param array $args
   *   The arguments to log.
   *
   * @throws \Exception
   *   Returns generic error.
   *
   * @return bool
   *   Returns if the log has been created.
   */
  public function create(array $args): bool;

  /**
   * Remove all log.
   *
   * @throws \Exception
   *   Returns generic error.
   *
   * @return bool
   *   Returns if all log has been removed.
   */
  public function clear(): bool;

  /**
   * Remove a single log.
   *
   * @param int $id
   *   The log id to be removed.
   *
   * @throws \Exception
   *   Returns generic error.
   *
   * @return bool
   *   Returns if the log has been removed.
   */
  public function remove(int $id): bool;

  /**
   * List all log ids.
   *
   * @throws \Exception
   *   Returns generic error.
   *
   * @return array
   *   Returns an array of logs.
   */
  public function list(): array;

}
