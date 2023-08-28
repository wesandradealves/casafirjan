<?php

namespace Drupal\city_connect_import\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\city_connect_import\Service\ImportLog;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\Core\Entity\EntityTypeManagerInterface;

/**
 * Returns responses for City Connect Import routes.
 */
class TestServiceLogController extends ControllerBase {

  /**
   * The city_connect_import.batch.log service.
   *
   * @var \Drupal\city_connect_import\Service\ImportLog
   */
  protected $batchLog;

  /**
   * The controller constructor.
   * @param \Drupal\city_connect_import\Service\ImportLog $batch_log
   *   The city_connect_import.batch.log service.
   */
  public function __construct(
    ImportLog $batch_log
  ) {
    $this->batchLog = $batch_log;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('city_connect_import.batch.log')
    );
  }

  /**
   * Builds the response.
   */
  public function build() {

    /**
     * Log error inserting the new taxonomy.
     */
    $this->batchLog->log([
      'line_number' => 99,
      'line_subject' => 'testing',
      'label' => '1Line [99] error while importing',
      'description' => 'Testing from controller',
      'line_data' => [ 1 => "Eu", 2 => "Tu" ],
      'line_status' => 'error',
    ]);

    $this->batchLog->log([
      'line_number' => 99,
      'line_subject' => 'testing',
      'label' => '1Line [99] error while importing',
      'description' => 'Testing from controller',
      'line_data' => [ 1 => "Eu", 2 => "Tu" ],
      'line_status' => 'success',
    ]);

    $this->batchLog->log([
      'line_number' => 99,
      'line_subject' => 'testing',
      'label' => '1Line [99] error while importing',
      'description' => 'Testing from controller',
      'line_data' => [ 1 => "Eu", 2 => "Tu" ],
      'line_status' => 'warning',
    ]);

    $build['content'] = [
      '#type' => 'item',
      '#markup' => $this->t('Test Service Controller!'),
    ];

    return $build;
  }

}
