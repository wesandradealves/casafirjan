<?php

namespace Drupal\city_connect_import\Service;

use Drupal\file\Entity\File;

/**
 * Defines ImportInterface interface.
 *
 * @package Drupal\city_connect_import
 */
interface ImportInterface {

  /**
   * Importer the uploaded file.
   *
   * @param string $parent_taxonomy
   *   The parent_taxonomy id where the file will be imported.
   * @param int $fid
   *   The file id to be imported.
   *
   * @throws \Drupal\city_connect_import\Exception\ImportFailException
   *   If Import fail returns generic error.
   *
   * @return bool
   *   Returns if the file is imported or null.
   */
  public function importer(string $parent_taxonomy, int $fid): ?bool;

  /**
   * Validate the importing file.
   *
   * @param \Drupal\file\Entity\File $file
   *   The file to be validated.
   *
   * @throws \Drupal\city_connect_import\Exception\FileExtNotAllowedException
   *   If File Ext Not Allowed returns generic error.
   *
   * @throws \Drupal\city_connect_import\Exception\FileNotFoundException
   *   If File Not Found returns generic error.
   *
   * @throws \Drupal\city_connect_import\Exception\FileEmptyException
   *   If File is Empty returns generic error.
   *
   * @return bool
   *   Returns if the file is validated or not.
   */
  public function validate(File $file): bool;

  /**
   * Removes the imported file.
   *
   * @param \Drupal\file\Entity\File $file
   *   The file to be validated.
   *
   * @throws \Drupal\city_connect_import\Exception\FileRemoveException
   *   If File Removes returns generic error.
   *
   * @return bool
   *   Returns if the file was removed or not.
   */
  public function removeFile(File $file): bool;

  /**
   * Run the batch.
   *
   * @param string $parent_taxonomy
   *   The parent_taxonomy id where the file will be imported.
   * @param string $file_uri
   *   The file uri to be imported.
   *
   * @throws \Drupal\city_connect_import\Exception\BatchFailException
   *   If Batch fail returns generic error.
   *
   * @return bool|null
   *   Returns if the batch was successful or null.
   */
  public function batch(string $parent_taxonomy, string $file_uri): ?bool;

}
