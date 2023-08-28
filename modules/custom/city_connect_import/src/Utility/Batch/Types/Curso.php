<?php

namespace Drupal\city_connect_import\Utility\Batch\Types;

use Drupal\city_connect_import\Utility\Batch\Resolver\TaxonomyResolver;
use Drupal\city_connect_import\Utility\Batch\Resolver\TagResolver;

/**
 * Methods for running the import batch for the content type 'curso'.
 *
 * @package Drupal\city_connect_import\Utility\Batch\Batch\Types\Curso
 */
class Curso {

  /**
   * Process Content Type curso.
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
      if (!empty($node)) {
        /**
         * Node already exists - update it
         * @var \Drupal\Node\Entity\Node $new_node
         */
        $new_node = $entity_type_manager->getStorage('node')->load($node->id());
        $new_node_op = 'SAVED_UPDATED';
      }
      else {
        /**
         * Node not exists - create it
         * @var \Drupal\Node\Entity\Node $new_node
         */
        $new_node = $entity_type_manager->getStorage('node')->create(['type' => 'curso']);
        $new_node_op = 'SAVED_NEW';
      }
      if ($new_node) {
        // Save no relational fiel types.
        if ($args['title']) {
          $new_node->set('title', $args['title']);
        }
        if ($args['field_chamada']) {
          $new_node->set('field_chamada', $args['field_chamada']);
        }
        if ($args['field_carga_horaria']) {
          $new_node->set('field_carga_horaria', $args['field_carga_horaria']);
        }
        if ($args['field_data_da_aula']) {
          $new_node->set('field_data_da_aula', $args['field_data_da_aula']);
        }
        if ($args['field_exibir_no_portal_da_firjan']) {
          $new_node->set('field_exibir_no_portal_da_firjan', $args['field_exibir_no_portal_da_firjan']);
        }
        if ($args['field_hora_de_inicio']) {
          $new_node->set('field_hora_de_inicio', $args['field_hora_de_inicio']);
        }
        if ($args['field_id_shopify']) {
          $new_node->set('field_id_shopify', $args['field_id_shopify']);
        }
        if ($args['field_link_para_compra']) {
          $new_node->set('field_link_para_compra', $args['field_link_para_compra']);
        }
        if ($args['field_loja']) {
          $new_node->set('field_loja', $args['field_loja']);
        }
        if ($args['field_preco']) {
          $new_node->set('field_preco', $args['field_preco']);
        }
        if ($args['field_status']) {
          $new_node->set('field_status', $args['field_status']);
        }
        if ($args['field_turno']) {
          $new_node->set('field_turno', $args['field_turno']);
        }
        if ($args['field_texto']) {
          $new_node->set('field_texto', $args['field_texto']);
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
          if ($args['field_categoria_curso']) {
            TaxonomyResolver::resolver($line, $nid, $args['field_categoria_curso'], 'field_categoria_curso', 'categorias_de_cursos');
          }
          if ($args['field_ciclo_tematico']) {
            TaxonomyResolver::resolver($line, $nid, $args['field_ciclo_tematico'], 'field_ciclo_tematico', 'ciclo_tematico');
          }  
          if ($args['field_programa_subprograma']) {
            TaxonomyResolver::resolver($line, $nid, $args['field_programa_subprograma'], 'field_programa_subprograma', 'categorias');
          }          
          if ($args['field_tags']) {
            TagResolver::resolver($line, $nid, $args['field_tags'], 'field_tags', 'tags_conteudo');
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
