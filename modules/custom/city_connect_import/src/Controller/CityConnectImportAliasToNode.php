<?php

namespace Drupal\city_connect_import\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Entity\EntityTypeManagerInterface;
use Drupal\Core\Link;
use Drupal\Core\Logger\LoggerChannelInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Returns responses for City Connect Import routes.
 */
class CityConnectImportAliasToNode extends ControllerBase {

  /**
   * The city_connect_import.link_generator service.
   *
   * @var \Drupal\Core\Link
   */
  protected $linkGenerator;

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
  protected $logger;

  /**
   * The controller constructor.
   *
   * @param \Drupal\Core\Link $link_generator
   *   The city_connect_import.link_generator service.
   * @param \Drupal\Core\Entity\EntityTypeManagerInterface $entity_type_manager
   *   The entity type manager.
   * @param \Drupal\Core\Logger\LoggerChannelInterface $logger
   *   The logger.channel.city_connect_import service.
   */
  public function __construct(Link $link_generator, EntityTypeManagerInterface $entity_type_manager, LoggerChannelInterface $logger) {
    $this->linkGenerator = $link_generator;
    $this->entityTypeManager = $entity_type_manager;
    $this->cityConnectImport = $logger;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('city_connect_import.link_generator'),
      $container->get('entity_type.manager'),
      $container->get('logger.channel.city_connect_import')
    );
  }

  /**
   * Builds the response.
   */
  public function build() {

    $link = parse_url('https://casafirjan.com.br/lab-de-tendencias/aquario-casa-firjan/design-para-abundancia-com-michael-braungart');

    // Original values
    // $parent_taxonomy = 1; // Lab de Tendências
    // $child_taxonomy = 2; // Aquário Casa Firjan
    $alias_current = $link['path'];

    // New values
    // $parent_taxonomy = 582; // George Parent Taxonomy 1
    $child_taxonomy = 648; // George Test 1
    // $alias_current = '/george-parent-taxonomy-1/george-test-1/design-para-abundancia-com-michael-braungart';



    // Current item link.
    if ($alias_current) {
      /*
       * \Drupal\Core\Url $url
       */
      if ($url = $this->linkGenerator->getUrl()->fromUserInput($alias_current)) {
        // Create link when current item is a node.
        if ( ('entity.node.canonical' == $url->getRouteName()) && ($nid = $url->getRouteParameters()['node']) ) {
          /*
           * \Drupal\Node\Entity\Node $node
           */
          $node = $this->entityTypeManager->getStorage('node')->load($nid);
          // Type conteudo
          if (($node) && ($node->getType() == 'conteudo')) {
            $node->set('field_categoria', ['target_id' => $child_taxonomy]);
            $node->save();
          }
          // Type ...
        }
        // Create link when current item is a taxonomy.
        if ( ('entity.taxonomy_term.canonical' == $url->getRouteName()) && ($nid = $url->getRouteParameters()['node']) ) {
          // To do ...
          dump('Is taxonomy');
          die();
        }
        else {
          // Create link when current item is not a node.
          // if ($current_title = $this->getCurrentTitle()) {
          //   $links[] = $this->linkGenerator->fromTextAndUrl($current_title, $url);
          // }
        }
      }
    }


    dump("ROUTE NAME: " . $url->getRouteName());
    dump("NID: " . $nid);
    dump("TYPE: " . $node->getType());
    dump($node);

    // $node = $this->entityTypeManager->getStorage('node')->load('631');
    // $node->set('field_categoria', ['target_id' => $child_taxonomy]);
    // $node->save();
    // $nodeUp = $this->entityTypeManager->getStorage('node')->load($nid);
    // dump($nodeUp);


    $build['content'] = [
      '#type' => 'item',
      '#markup' => $this->t('It works!'),
    ];

    return $build;
  }

}
