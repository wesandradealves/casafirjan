<?php

namespace Drupal\city_connect_import\Utility\Batch\Resolver;

/**
 * Methods for resolver tags.
 *
 * @package Drupal\city_connect_import\Utility\Batch\Batch\Resolver
 */
class TagResolver {

  /**
   * Process Tag Resolver.
   *
   * @param int $line
   *   The file to be imported line number.
   * @param int $nid
   *   The node id.
   * @param string $tags
   *   The tags.
   * @param string $field_name
   *   The node field to update.
   * @param string $type
   *   The tag type.
   */
  public static function resolver($line, $nid, $tags, $field_name, $type) {
    /**
     * The entity type manager.
     *
     * @var \Drupal\Core\Entity\EntityTypeManagerInterface $entity_type_manager
     */
    $entity_type_manager = \Drupal::service('entity_type.manager');

    /**
     * The city_connect_import.batch.log service.
     *
     * @var \Drupal\city_connect_import\Service $batch_log
     */
    $batch_log = \Drupal::service('city_connect_import.batch.log');

    $tags_to_rel = [];
    try {
      $tax_tags = explode('|', $tags);
      if (!empty($tax_tags)) {
        /**
         * @var \Drupal\taxonomy\Entity\Term $tag[]
         */
        foreach ($tax_tags as $tax_tag) {
          $tag = $entity_type_manager->getStorage('taxonomy_term')->loadByProperties([
            'vid' => $type,
            'name' => $tax_tag,
          ]);
          if (!empty($tag)) {
            $tag = reset($tag);
            $tags_to_rel[] = $tag->id();
          }
          else {
            $new_tag = $entity_type_manager->getStorage('taxonomy_term')->create(['vid' => $type]);
            $new_tag->set('name', $tax_tag);
            $new_tag->enforceIsNew();
            if ($new_tag->save()) {
              $tags_to_rel[] = $new_tag->id();
              $batch_log->log([
                'line_number' => $line,
                'line_status' => 'taxonomy_success',
                'line_subject' => 'node|tag',
                'label' => 'New tag created',
                'description' => 'The new tag has been successfully created.',
                'line_data' => [
                  'tags' => $tags,
                  'tag' => $tax_tag,
                  'nid' => $nid,
                ],
              ]);
            }
          }
        }
        if (!empty($tags_to_rel)) {
          /**
           * @var \Drupal\Node\Entity\Node $node
           */
          $node = $entity_type_manager->getStorage('node')->load($nid);
          $node->set($field_name, $tags_to_rel);
          $node->save();
        }
      }
    }
    catch (\Exception $e) {
      $batch_log->log([
        'line_number' => $line,
        'line_status' => 'content_warning',
        'line_subject' => 'node:' . $nid . '|tag',
        'label' => 'Tag could not be attached to node',
        'description' => 'Tag could not be attached to node',
        'line_data' => [
          'tags' => $tags,
          'nid' => $nid,
        ],
      ]);
      return NULL;
    }

  }

}
