<?php

namespace Drupal\city_connect_import\Service;

/**
 * Defines ImportAttachThumbnailInterface interface.
 *
 * @package Drupal\city_connect_import
 */
interface ImportAttachThumbnailInterface {

  /**
   * Start the attach.
   *
   * @param int $nid
   *   The node id.
   * @param string $attachment_url
   *   The attachment url.
   * @param string $field_thumbnail
   *   The field thumbnail machine name.
   *
   * @throws \Exception
   *   Returns generic error.
   *
   * @return bool
   *   Returns if the attachment has been created.
   */
  public function attach(int $nid, string $attachment_url, string $field_thumbnail): ?string;

  /**
   * Save the image file.
   *
   * @param string $attachment_url
   *   The attachment url.
   *
   * @throws \Exception
   *   Returns generic error.
   *
   * @return int|null
   *   Returns the saved image id or null.
   */
  public function saveExternalImage(string $attachment_url): ?int;

  /**
   * Get the image extension.
   *
   * @param string $file_path
   *   The file path.
   *
   * @return string|null
   *   Returns the image extension or null.
   */
  public function getImageExtension(string $file_path): ?string;

  /**
   * Get the external image data from url.
   *
   * @param string $image_url
   *   The external image url.
   *
   * @throws \Exception
   *   Returns generic error.
   *
   * @return string|null
   *   Returns external image url data or null.
   */
  public function getImageFromUrl(string $image_url): ?string;

  /**
   * Delete the temporary image.
   *
   * @param string $image_path
   *   The image path.
   *
   * @throws \Exception
   *   Returns generic error.
   *
   * @return bool
   *   Returns if the image has been deleted.
   */
  public function deleteImage(string $image_path): bool;

  /**
   * Verifies that the destination directory of files is prepared.
   *
   * @return bool
   *   Returns if the destination actuality is prepared.
   */
  public function isPreparedDestination(): bool;

  /**
   * Verifies that the temporary destination directory of files is prepared.
   *
   * @return bool
   *   Returns if the destination actuality is prepared.
   */
  public function isPreparedTempDestination(): bool;

  /**
   * Prepare the destination directory.
   *
   * @throws \Exception
   *   Returns generic error.
   *
   * @return string|null
   *   Returns a string in case of errors otherside null.
   */
  public function prepareDestination(): ?string;

  /**
   * Prepare the temporary destination directory.
   *
   * @throws \Exception
   *   Returns generic error.
   *
   * @return string|null
   *   Returns a string in case of errors otherside null.
   */
  public function prepareTempDestination(): ?string;

  /**
   * Attach the image to the content.
   *
   * @param int $nid
   *   The node id.
   * @param int $fid
   *   The file id.
   * @param string $field_thumbnail
   *   The field thumbnail machine name.
   *
   * @throws \Exception
   *   Returns generic error.
   *
   * @return bool
   *   Returns if the attachment has been attached to the content.
   */
  public function attachImageToContent(int $nid, int $fid, string $field_thumbnail): bool;

}
