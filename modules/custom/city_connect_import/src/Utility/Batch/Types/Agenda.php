<?php

namespace Drupal\city_connect_import\Utility\Batch\Types;

use Drupal\city_connect_import\Utility\Batch\Resolver\TaxonomyResolver;
use Drupal\city_connect_import\Utility\Batch\Resolver\TagResolver;

/**
 * Methods for running the import batch for the content type 'agenda'.
 *
 * @package Drupal\city_connect_import\Utility\Batch\Batch\Types\Agenda
 */
class Agenda {

  /**
   * Process Content Type agenda.
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
      $logger = \Drupal::service('logger.channel.city_connect_import');
      $el = \Drupal::entityQuery('node')->condition('title', $args['title'])->sort('nid', 'DESC')->execute();

      // $nd = Node::load(reset($el));
      // if($el) {
      //   $new_node = $entity_type_manager->getStorage('node')->load(reset($el));
      //   $new_node_op = 'SAVED_UPDATED';
      // } else {
      //   $new_node = $entity_type_manager->getStorage('node')->create(['type' => 'agenda']);
      //   $new_node_op = 'SAVED_NEW';
      // }

      $new_node = $entity_type_manager->getStorage('node')->create(['type' => 'agenda']);
      $new_node_op = 'SAVED_NEW';

      $logger->notice(reset($el));           
      
      // $new_node = $entity_type_manager->getStorage('node')->load($node->id());
      
      $logger->notice($new_node_op); 

      if ($new_node) {
        $logger = \Drupal::service('logger.channel.city_connect_import');
                
        // Save no relational fiel types.
        if ($args['title']) {
          $new_node->set('title', $args['title']);
        }
        if ($args['field_chamada']) {
          $new_node->set('field_chamada', $args['field_chamada']);
        }
        if ($args['field_campanha_ga']) {
          $new_node->set('field_campanha_ga', $args['field_campanha_ga']);
        }
        if ($args['field_comprar_ingresso']) {
          $new_node->set('field_comprar_ingresso', $args['field_comprar_ingresso']);
        }
        if ($args['field_descricao']) {
          $new_node->set('field_descricao', $args['field_descricao']);
        }
        if ($args['field_duracao']) {
          $new_node->set('field_duracao', $args['field_duracao']);
        }
        if ($args['field_exibir_no_portal_da_firjan']) {
          $new_node->set('field_exibir_no_portal_da_firjan', $args['field_exibir_no_portal_da_firjan']);
        }
        if ($args['field_hora_de_inicio']) {
          date_default_timezone_set('America/Sao_Paulo');
          $dateTime = \Drupal\Core\Datetime\DrupalDateTime::createFromTimestamp($args['field_hora_de_inicio']);
          $dateTime->setTimezone(new \DateTimeZone('America/Sao_Paulo'));
          $new_node->set('field_hora_de_inicio', $dateTime->format('Y-m-d\TH:i:s'));
          $logger->notice( '@@@@@@'.$args['title'].' '.$dateTime->format('Y-m-d\TH:i:s').' '.$new_node->get('field_hora_de_inicio')->value.'@@@@@@' ); 
        }
        if ($args['field_horario_livre']) {
          $new_node->set('field_horario_livre', $args['field_horario_livre']);
        }
        if ($args['field_id_lumis']) {
          $new_node->set('field_id_lumis', $args['field_id_lumis']);
        }
        if ($args['field_link_do_formulario']) {
          $new_node->set('field_link_do_formulario', $args['field_link_do_formulario']);
        }
        if ($args['field_link_externo']) {
          $new_node->set('field_link_externo', $args['field_link_externo']);
        }
        if ($args['field_preco_livre']) {
          $new_node->set('field_preco_livre', $args['field_preco_livre']);
        }
        if ($args['field_status']) {
          $new_node->set('field_status', $args['field_status']);
        }
        if ($args['field_texto_do_link']) {
          $new_node->set('field_texto_do_link', $args['field_texto_do_link']);
        }
        if ($args['field_texto_do_link_2']) {
          $new_node->set('field_texto_do_link_2', $args['field_texto_do_link_2']);
        }
        if ($args['promote']) {
          $new_node->set('promote', $args['promote']);
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
        // Update relational field types.
        if ($nid) {
          if ($args['field_categoria']) {
            TaxonomyResolver::resolver($line, $nid, $args['field_categoria'], 'field_categoria', 'categorias');
          }
          if ($args['field_categoria_agenda']) {
            TaxonomyResolver::resolver($line, $nid, $args['field_categoria_agenda'], 'field_categoria_agenda', 'categorias_de_agenda');
          }
          if ($args['field_ciclo_tematico']) {
            TaxonomyResolver::resolver($line, $nid, $args['field_ciclo_tematico'], 'field_ciclo_tematico', 'ciclo_tematico');
          }
          if ($args['field_tags']) {
            TagResolver::resolver($line, $nid, $args['field_tags'], 'field_tags', 'tags_conteudo');
          }
          if ($args['field_topicos']) {
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
