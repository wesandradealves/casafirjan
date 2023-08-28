<?php

namespace Drupal\city_connect_import\Utility\Batch\Types;

use Drupal\city_connect_import\Utility\Batch\Resolver\TaxonomyResolver;
use Drupal\city_connect_import\Utility\Batch\Resolver\TagResolver;

/**
 * Methods for running the import batch for the content type 'produto'.
 *
 * @package Drupal\city_connect_import\Utility\Batch\Batch\Types\Produto
 */
class Produto {

  /**
   * Process Content Type produto.
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
        $new_node = $entity_type_manager->getStorage('node')->create(['type' => 'produto']);
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
        if ($args['field_descricao']) {
          $new_node->set('field_descricao', $args['field_descricao']);
        }
        if ($args['field_link']) {
          $new_node->set('field_link', $args['field_link']);
        }
        if ($args['field_pagina']) {
          $new_node->set('field_pagina', $args['field_pagina']);
        }
        if ($args['field_tipo_de_associacao']) {
          $new_node->set('field_tipo_de_associacao', $args['field_tipo_de_associacao']);
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
