<?php

namespace Drupal\city_connect_import\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Entity\EntityTypeManagerInterface;
use Drupal\Core\Logger\LoggerChannelInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Returns responses for City Connect Import routes.
 */
class CityConnectImportListCTypes extends ControllerBase {

  /**
   * The entity type manager.
   *
   * @var \Drupal\Core\Entity\EntityTypeManagerInterface
   */
  protected $entityTypeManager;

  /**
   * The logger.channel.city_connect_import service.
   *
   * @var \Drupal\Core\Logger\LoggerChannelInterface
   */
  protected $cityConnectImport;

  /**
   * The controller constructor.
   *
   * @param \Drupal\Core\Entity\EntityTypeManagerInterface $entity_type_manager
   *   The entity type manager.
   * @param \Drupal\Core\Logger\LoggerChannelInterface $city_connect_import
   *   The logger.channel.city_connect_import service.
   */
  public function __construct(EntityTypeManagerInterface $entity_type_manager, LoggerChannelInterface $city_connect_import) {
    $this->entityTypeManager = $entity_type_manager;
    $this->cityConnectImport = $city_connect_import;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('entity_type.manager'),
      $container->get('logger.channel.city_connect_import')
    );
  }

  /**
   * Builds the response.
   */
  public function build() {

    $nodes = $this->entityTypeManager->getStorage("node")->loadByProperties([]);

    $types = [];
    foreach ($nodes as $node) {
      $types[] = $node->get("type")->getValue()[0]["target_id"];
    }

    $types = array_values(array_unique($types));
    dump($types);
    // die();

    $types_and_count = [];
    foreach ($types as $type) {
      $total_node = $this->entityTypeManager->getStorage("node")->loadByProperties([
        "type" => $type,
      ]);
      $types_and_count[$type] = "Total of items: " . count($total_node);
    }
    dump($types_and_count);

    $build['content'] = [
      '#type' => 'item',
      '#markup' => $this->t('It works!'),
    ];

    return $build;
  }

}
