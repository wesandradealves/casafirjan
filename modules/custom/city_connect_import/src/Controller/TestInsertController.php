<?php

namespace Drupal\city_connect_import\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\city_connect_import\Service\ImportMenu;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\Core\Entity\EntityTypeManagerInterface;

/**
 * Returns responses for City Connect Import routes.
 */
class TestInsertController extends ControllerBase {

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
      'TIPO' => 'George Test 4',
      // 'TIPO' => 'George Test 3',
      // 'TIPO' => 'Aquário Casa Firjan',
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

    // Create
    $args['parent_taxonomy'] = $parent_taxonomy;
    $child_taxonomy = $this->insert($args);

    dump($child_taxonomy);
    // Create

    $build['content'] = [
      '#type' => 'item',
      '#markup' => $this->t('It works!'),
    ];

    return $build;
  }

  protected function insert($args) {
    $child_taxonomy = $this->entityTypeManager->getStorage('taxonomy_term')->loadByProperties([
      'vid' => 'categorias',
      'parent' => $args['parent_taxonomy'],
      'name' => $args['TIPO'],
    ]);

    if (empty($child_taxonomy)) {
      dump('Child Taxonomy: ' . $args['TIPO'] . ' Do not exists in Parent Taxonomy: ' . $args['parent_taxonomy']);

      $child_taxonomy = $this->entityTypeManager->getStorage('taxonomy_term')->create(['vid' => 'categorias']);
      $child_taxonomy->set('name', $args['TIPO']);
      $child_taxonomy->set('parent', $args['parent_taxonomy']);
      $child_taxonomy->enforceIsNew();

      $tid = 0;
      if ($child_taxonomy->save()) {
        $tid = $child_taxonomy->id();
      }

      // return $child_taxonomy->id();
      return $tid;

      // if (is_numeric($tid)) {
      //   dump('Child Taxonomy with the title ['.$args['TIPO'].'] inserted successful for the Parent Taxonomy id ['.$args['parent_taxonomy'].']');

        // $batch_log->log([
        //   'line_number' => $line,
        //   'label' => 'Line [' . $line . '] imported successful',
        //   'description' => 'Child Taxonomy with the title ['.$args['TIPO'].'] imported successful for the parent taxonomy id ['.$args['parent_taxonomy'].']',
        //   'line_data' => $args,
        // ]);
      // }

      // $result = $this->entityTypeManager->getStorage('taxonomy_term')->loadByProperties([
      //   'vid' => 'categorias',
      //   'parent' => $args['parent_taxonomy'],
      //   'name' => $args['TIPO'],
      // ]);
      // dump('Child Taxonomy Inserted:');
      // dump($result);
    }
    else {
      // dump('Child Taxonomy: ' . $args['TIPO'] . ' could not be inserted cuz it already exists in Parent Taxonomy: ' . $args['parent_taxonomy']);
    }

    // return $child_taxonomy->id();

  }

}
