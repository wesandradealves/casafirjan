<?php

namespace Drupal\city_connect_import\Utility\Parser;

use Drupal\city_connect_import\Factory\ParserInterface;

/**
 * The data parser.
 */
class ParserJSON implements ParserInterface {

  /**
   * The file uri to be parsed.
   *
   * @var string
   */
  protected $fileUri;

  /**
   * Constructs a Parser object.
   *
   * @param string $file_uri
   *   The file uri to be imported.
   */
  public function __construct(string $file_uri) {
    $this->fileUri = $file_uri;
  }

  /**
   * {@inheritdoc}
   */
  public function parser(string $file_uri): array {
    if (!empty($file_uri)) {
      if ($json_data = file_get_contents($file_uri)) {
        return json_decode($json_data, TRUE);
      }
      return [];
    }
    throw new Exception('An invalid file has been submitted', 500);
  }

  /**
   * {@inheritdoc}
   */
  public function get(): array {
    return $this->parser($this->fileUri);
  }

}
