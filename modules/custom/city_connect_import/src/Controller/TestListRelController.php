<?php

namespace Drupal\city_connect_import\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\city_connect_import\Service\ImportMenu;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\Core\Entity\EntityTypeManagerInterface;

/**
 * Returns responses for City Connect Import routes.
 */
class TestListRelController extends ControllerBase {

  /**
   * The city_connect_import.import_menu service.
   *
   * @var \Drupal\city_connect_import\Service\ImportMenu
   */
  protected $importMenu;

  /**
   * The entity type manager.
   *
   * @var \Drupal\Core\Entity\EntityTypeManagerInterface
   */
  protected $entityTypeManager;

  /**
   * The controller constructor.
   * @param \Drupal\Core\Entity\EntityTypeManagerInterface $entity_type_manager
   *   The entity type manager.
   * @param \Drupal\city_connect_import\Service\ImportMenu $import_menu
   *   The city_connect_import.import_menu service.
   */
  public function __construct(
    EntityTypeManagerInterface $entity_type_manager,
    ImportMenu $import_menu
  ) {
    $this->entityTypeManager = $entity_type_manager;
    $this->importMenu = $import_menu;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('entity_type.manager'),
      $container->get('city_connect_import.import_menu')
    );
  }

  /**
   * Builds the response.
   */
  public function build() {
    $args = [
      'TIPO' => 'Cultura maker',
      'MARCADOR' => '',
      'TÍTULO' => 'Design para Abundância, com Michael Braungart',
      'LINK' => 'https://casafirjan.com.br/lab-de-tendencias/aquario-casa-firjan/design-para-abundancia-com-michael-braungart',
    ];

    $result = $this->entityTypeManager->getStorage('taxonomy_term')->loadByProperties([
      'vid' => 'categorias',
      'parent' => 0,
      'name' => 'George Parent Taxonomy 1',
    ]);
    dump($result);

    $parent_taxonomy = reset($result)->get('tid')->getString();
    dump('Parent taxonomy: ' . $parent_taxonomy);

    $result = $this->entityTypeManager->getStorage('taxonomy_term')->loadByProperties([
      'vid' => 'categorias',
      'parent' => $parent_taxonomy,
    ]);
    // dump($result);
    foreach ($result as $tax) {
      // dump($tax->get('path'));
      // dump($tax->get('path')->getString());
      // dump($tax->get('path')->getString('alias'));
      // dump($tax->get('path')->getValue());
      // dump($tax->get('path')->getValue()->getString('alias'));
      // Working
      // dump(explode(',', $tax->get('path')->getString())[0]);
      // dump(reset(explode(',', $tax->get('path')->getString())));
      dump($tax->get('path')->getValue()[0]['alias']);
    }

    die();

    $build['content'] = [
      '#type' => 'item',
      '#markup' => $this->t('It works!'),
    ];

    return $build;
  }

}
