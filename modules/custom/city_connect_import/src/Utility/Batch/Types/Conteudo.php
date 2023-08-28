<?php

namespace Drupal\city_connect_import\Utility\Batch\Types;

use Drupal\city_connect_import\Utility\Batch\Resolver\TaxonomyResolver;
use Drupal\city_connect_import\Utility\Batch\Resolver\TagResolver;
use Drupal\node\Entity\Node;

function translator($view_node) {
  $dictionary = json_decode(file_get_contents(__DIR__ . '/Resources/categories.json'));
  foreach ($dictionary as $row) {
    if(in_array($view_node, $row->data)) {
      return explode('|', $row->category);      
    }
  }
}   

/**
 * Methods for running the import batch for the content type 'conteudo'.
 *
 * @package Drupal\city_connect_import\Utility\Batch\Batch\Types\Conteudo
 */
class Conteudo {

  /**
   * Process Content Type conteudo.
   *
   * @param array $args
   *   The file to be imported line data.
   * @param int $line
   *   The file to be imported line number.
   * @param \Drupal\node\Entity\Node|null $node
   *   The node entity class.
   */
  public static function build(array $args, $line, $node) {
    /**
     * The entity type manager.
     *
     * @var \Drupal\Core\Entity\EntityTypeManagerInterface $entity_type_manager
     */
    $entity_type_manager = \Drupal::service('entity_type.manager');

    /**
     * The city_connect_import.attach_thumbnail service.
     *
     * @var \Drupal\city_connect_import\Service\ImportAttachThumbnail $attach_thumbnail
     */
    $attach_thumbnail = \Drupal::service('city_connect_import.attach_thumbnail');

    /**
     * The city_connect_import.batch.log service.
     *
     * @var \Drupal\city_connect_import\Service\ImportLog $batch_log
     */
    $batch_log = \Drupal::service('city_connect_import.batch.log');

    try {
      // if (!empty($node)) {
      //   /**
      //    * Node already exists - update it
      //    * @var \Drupal\Node\Entity\Node $new_node
      //    */    

      //   $logger = \Drupal::service('logger.channel.city_connect_import');
      //   $el = \Drupal::entityQuery('node')->condition('title', $args['title'])->sort('nid', 'DESC')->execute();
  
      //   // $nd = Node::load(reset($el));
      //   if($el) {
      //     $new_node = $entity_type_manager->getStorage('node')->load(reset($el));
      //     $new_node_op = 'SAVED_UPDATED';
      //   } else {
      //     $new_node = $entity_type_manager->getStorage('node')->create(['type' => 'conteudo']);
      //     $new_node_op = 'SAVED_NEW';
      //   }

      //   $logger->notice(reset($el));           
        
      //   // $new_node = $entity_type_manager->getStorage('node')->load($node->id());
        
      //   $logger->notice($new_node_op); 
      // }
      // else {
      //   /**
      //    * Node not exists - create it
      //    * @var \Drupal\Node\Entity\Node $new_node
      //    */
      //   $new_node = $entity_type_manager->getStorage('node')->create(['type' => 'conteudo']);
        
      // }

      $logger = \Drupal::service('logger.channel.city_connect_import');
      $el = \Drupal::entityQuery('node')->condition('title', $args['title'])->sort('nid', 'DESC')->execute();

      // $nd = Node::load(reset($el));
      if($el) {
        $new_node = $entity_type_manager->getStorage('node')->load(reset($el));
        $new_node_op = 'SAVED_UPDATED';
      } else {
        $new_node = $entity_type_manager->getStorage('node')->create(['type' => 'conteudo']);
        $new_node_op = 'SAVED_NEW';
      }

      $logger->notice(reset($el));           
      
      // $new_node = $entity_type_manager->getStorage('node')->load($node->id());
      
      $logger->notice($new_node_op); 

      if ($new_node) {
        // Save no relational fiel types.
        if ($args['title']) {
          $new_node->set('title', $args['title']);
        }
        if ($args['field_chamada']) {
          $new_node->set('field_chamada', $args['field_chamada']);
        }
        if ($args['field_texto']) {
          $new_node->set('field_texto', $args['field_texto']);
        }
        if ($args['uid']) {
          $new_node->set('field_autor', (int)$args['uid']);
        }        
        if ($args['promote']) {
          $new_node->set('promote', $args['promote']);
        }
        if ($args['field_video']) {
          $new_node->set('field_video', $args['field_video']);
        }
        if ($args['field_tipo_de_midia']) {
          $new_node->set('field_tipo_de_midia', $args['field_tipo_de_midia']);
        }
        if ($args['langcode']) {
          $new_node->set('langcode', $args['langcode']);
        }
        if ($args['created']) {
          $new_node->set('created', $args['created']);
        }
        // Save operation and retriveve the node id.
        if ('SAVED_UPDATED' == $new_node_op) {
          $nid = $new_node->id();
          $new_node->save();
        }
        else {
          $new_node->enforceIsNew();
          if ($new_node->save()) {
            $nid = $new_node->id();
          }
        }
        $logger = \Drupal::service('logger.channel.city_connect_import');
        $logger->notice($new_node_op); 

        // Update relational field types.
        if ($nid) {
          if ($args['field_categoria']) {         
            $logger = \Drupal::service('logger.channel.city_connect_import');
            $translate = translator( $args['view_node'] );

            if($translate) {
              $field_tags_de_menu = array_shift($translate);
              $field_nova_categoria = implode('|', $translate);

              $logger->notice( "field_tags_de_menu: " . json_encode($field_tags_de_menu) ); 
              TaxonomyResolver::resolver($line, $nid, $field_tags_de_menu, 'field_tags_de_menu', 'tags_de_menu');

              $logger->notice( "field_categoria: " . json_encode(implode('|', $translate)) ); 
              TaxonomyResolver::resolver($line, $nid, $field_nova_categoria, 'field_categoria', 'categorias');
            } else {
              $logger->notice( "field_categoria: " . $args['field_categoria'] ); 
              TaxonomyResolver::resolver($line, $nid, $args['field_categoria'], 'field_categoria', 'categorias');
            }
          }        
          if ($args['field_tags']) {
            $logger = \Drupal::service('logger.channel.city_connect_import');
            $logger->notice( "field_tags: " . json_encode($args['field_tags']) ); 
            TagResolver::resolver($line, $nid, $args['field_tags'], 'field_tags', 'tags_conteudo');
          }
          if ($args['field_topicos']) {
            $logger = \Drupal::service('logger.channel.city_connect_import');
            $logger->notice( "field_topicos: " . json_encode($args['field_topicos']) );
            TagResolver::resolver($line, $nid, $args['field_topicos'], 'field_topicos', 'tags');
          }
          if ($args['field_imagem']) {
            $attach_thumbnail->attach($nid, $args['field_imagem'], 'field_imagem');
          }
          if ($args['field_thumb']) {
            $attach_thumbnail->attach($nid, $args['field_thumb'], 'field_thumb');
          }

          if ('SAVED_UPDATED' == $new_node_op) {
            $batch_log->log([
              'line_number' => $line,
              'line_status' => 'content_success',
              'line_subject' => 'node|content',
              'label' => 'Content updated successfully',
              'description' => 'The new content has been updated successfully.',
              'line_data' => $args,
            ]);
          }
          else {
            $batch_log->log([
              'line_number' => $line,
              'line_status' => 'content_success',
              'line_subject' => 'node|content',
              'label' => 'New content successfully inserted',
              'description' => 'The new content has been inserted successfully.',
              'line_data' => $args,
            ]);
          }

        }
      }
    }
    catch (\Exception $e) {
      $batch_log->log([
        'line_number' => $line,
        'line_status' => 'content_error',
        'line_subject' => 'node|content',
        'label' => 'Error while inserting content',
        'description' => 'An error occurred and the content could not be inserted.',
        'line_data' => $args,
      ]);
      return NULL;
    }
  }

}
