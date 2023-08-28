<?php

namespace Drupal\city_connect_import\Utility\Parser;

use Drupal\city_connect_import\Factory\ParserInterface;

/**
 * The data parser.
 */
class ParserCSV implements ParserInterface {

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
      $csv = array_map('str_getcsv', file($file_uri));
      if (!empty($csv)) {
        array_walk($csv, function (&$a) use ($csv) {
          $a = array_combine($csv[0], $a);
        });
        array_shift($csv);
        return $csv;
      }
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
