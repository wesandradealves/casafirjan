<?php

namespace Drupal\city_connect_import\Factory;

use Drupal\Core\Session\AccountInterface;
use Drupal\Core\StringTranslation\TranslationInterface;
use Drupal\Core\Logger\LoggerChannel;

/**
 * The Parser Factory.
 */
class ParserFactory implements ParserFactoryInterface {

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
   * Constructs a Parser object.
   *
   * @param \Drupal\Core\Session\AccountInterface $account
   *   The current user.
   * @param \Drupal\Core\StringTranslation\TranslationInterface $string_translation
   *   The string translation service.
   * @param \Drupal\Core\Logger\LoggerChannel $logger
   *   The logger.channel.city_connect_import service.
   */
  public function __construct(
    AccountInterface $account,
    TranslationInterface $string_translation,
    LoggerChannel $logger
  ) {
    $this->account = $account;
    $this->stringTranslation = $string_translation;
    $this->logger = $logger;
  }

  /**
   * {@inheritdoc}
   */
  public function create($file_uri): ParserInterface {
    if (empty($x = explode('.', $file_uri))) {
      $this->logger->error($this->stringTranslation->translate('User @user_id tried to upload a file. But the csv file extension could not be recognized', ["@user_id" => $this->account->id()]));
      throw new \Exception('File extension not recognized', 500);
    }
    $class = '\Drupal\city_connect_import\Utility\Parser\Parser' . strtoupper($ext = array_slice($x, -1)[0]);
    if (!class_exists($class)) {
      $this->logger->error($this->stringTranslation->translate('User @user_id tried to upload a file. But the parser class [@class] for the file extension [@extension] do not exists', ["@user_id" => $this->account->id()]));
      throw new \Exception("Parser class [" . $class . "] for the file extension [" . $ext . "] do not exists", 500);
    }
    return new $class($file_uri);
  }

  /**
   * {@inheritdoc}
   */
  public function get(): ParserFactoryInterface {
    return $this;
  }

}
