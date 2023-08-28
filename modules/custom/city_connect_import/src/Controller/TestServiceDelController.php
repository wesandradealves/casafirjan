<?php

namespace Drupal\city_connect_import\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\city_connect_import\Service\ImportLog;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\Core\Entity\EntityTypeManagerInterface;

/**
 * Returns responses for City Connect Import routes.
 */
class TestServiceDelController extends ControllerBase {

  /**
   * The entity type manager.
   *
   * @var \Drupal\Core\Entity\EntityTypeManagerInterface
   */
  protected $entityTypeManager;

  /**
   * The city_connect_import.batch.log service.
   *
   * @var \Drupal\city_connect_import\Service\ImportLog
   */
  protected $batchLog;

  /**
   * The controller constructor.
   * The controller constructor.
   * @param \Drupal\Core\Entity\EntityTypeManagerInterface $entity_type_manager
   * @param \Drupal\city_connect_import\Service\ImportLog $batch_log
   *   The city_connect_import.batch.log service.
   */
  public function __construct(
    EntityTypeManagerInterface $entity_type_manager,
    ImportLog $batch_log
  ) {
    $this->entityTypeManager = $entity_type_manager;
    $this->batchLog = $batch_log;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('entity_type.manager'),
      $container->get('city_connect_import.batch.log')
    );
  }

  /**
   * Builds the response.
   */
  public function build() {
    $this->batchLog->clear();

    $parent_taxonomy = $this->entityTypeManager->getStorage('taxonomy_term')->loadByProperties([
      'vid' => 'categorias',
      'name' => 'George Parent Taxonomy 1',
    ]);

    if (!empty($parent_taxonomy)) {
      $parent_taxonomy = reset($parent_taxonomy);
      $child_taxonomy = $this->entityTypeManager->getStorage('taxonomy_term')->loadByProperties([
        'vid' => 'categorias',
        'parent' => $parent_taxonomy->id(),
      ]);

      foreach ($child_taxonomy as $tax) {
        $tax->delete();
      }
    }

    $build['content'] = [
      '#type' => 'item',
      '#markup' => $this->t('Test Service Controller!'),
    ];

    return $build;
  }

}
