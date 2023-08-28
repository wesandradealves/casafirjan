<?php

namespace Drupal\city_connect_import\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Returns responses for City Connect Import routes.
 */
class CityConnectImportNodeToAlias extends ControllerBase {

  /**
   * Builds the response.
   */
  public function build() {
    /**
     * The entity type manager.
     *
     * @var \Drupal\Core\Entity\EntityTypeManagerInterface $entity_type_manager
     */
    $entity_type_manager = \Drupal::service('entity_type.manager');
    $nid = 631;

    /**
     * Get the node
     *
     * @var \Drupal\Node\Entity\Node $node
     */
    $node = $entity_type_manager->getStorage('node')->load($nid);



    dump($node);
    dump($node->toLink());
    dump($node->toLink()->getUrl());
    // dump($node->toLink()->getUrl()->getUri());

    $node_alias_previous = $node->toLink()->getUrl();
    if ($node_alias_previous->isRouted()) {
      dump("Routed");
      dump( $node_alias_previous->toUriString() );
      dump( $node_alias_previous->getOptions() );
      dump( $node_alias_previous->getInternalPath() );
      dump( $node_alias_previous->toString() ); // works
    }
    else {
      dump("Unrouted");
      $node_alias_previous = $node->toLink()->getUrl()->getUri();
      dump($node_alias_previous);
    }

    die();





    $build['content'] = [
      '#type' => 'item',
      '#markup' => $this->t('It works!'),
    ];

    return $build;
  }

}
