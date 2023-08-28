<?php

namespace Drupal\city_connect_import\Utility\Batch\Resolver;

/**
 * Methods for resolver taxonomies.
 *
 * @package Drupal\city_connect_import\Utility\Batch\Batch\Resolver
 */
class TaxonomyResolver {

  /**
   * Process Taxonomy Resolver.
   *
   * @param int $line
   *   The file to be imported line number.
   * @param int $nid
   *   The node id.
   * @param string $taxonomies
   *   The taxonomies.
   * @param string $field_name
   *   The node field to update.
   * @param string $type
   *   The tag type.
   */
  public static function resolver($line, $nid, $taxonomies, $field_name, $type) {
    /**
     * The entity type manager.
     *
     * @var \Drupal\Core\Entity\EntityTypeManagerInterface $entity_type_manager
     */
    $entity_type_manager = \Drupal::service('entity_type.manager');

    /**
     * The city_connect_import.batch.log service.
     *
     * @var \Drupal\city_connect_import\Service\ImportLog $batch_log
     */
    $batch_log = \Drupal::service('city_connect_import.batch.log');

    try {
      $node_taxonomy_tid = NULL;
      $categories = explode('|', $taxonomies);
      if (!empty($categories)) {
        /**
         * @var \Drupal\taxonomy\Entity\Term $parent_taxonomy[]
         */
        $parent_taxonomy = $entity_type_manager->getStorage('taxonomy_term')->loadByProperties([
          'vid' => $type,
          'parent' => 0,
          'name' => $categories[0],
        ]);

        if (!empty($parent_taxonomy)) {
          $parent_taxonomy = reset($parent_taxonomy);
          $node_taxonomy_tid = $parent_taxonomy->id();
        }
        else {
          $new_parent_taxonomy = $entity_type_manager->getStorage('taxonomy_term')->create(['vid' => $type]);
          $new_parent_taxonomy->set('name', $categories[0]);
          $new_parent_taxonomy->enforceIsNew();
          if ($new_parent_taxonomy->save()) {
            $node_taxonomy_tid = $new_parent_taxonomy->id();
            $batch_log->log([
              'line_number' => $line,
              'line_status' => 'taxonomy_success',
              'line_subject' => 'node|parent_taxonomy',
              'label' => 'New parent taxonomy created',
              'description' => 'The new parent taxonomy has been successfully created.',
              'line_data' => [
                'taxonomies' => $taxonomies,
                'tid' => $node_taxonomy_tid,
                'nid' => $nid,
              ],
            ]);
          }
        }

        if (NULL !== $node_taxonomy_tid && count($categories) > 1) {
          /**
           * @var \Drupal\taxonomy\Entity\Term $child_taxonomy[]
           */
          $child_taxonomy = $entity_type_manager->getStorage('taxonomy_term')->loadByProperties([
            'vid' => $type,
            'parent' => $node_taxonomy_tid,
            'name' => $categories[1],
          ]);
          if (!empty($child_taxonomy)) {
            $child_taxonomy = reset($child_taxonomy);
            $node_taxonomy_tid = $child_taxonomy->id();
          }
          else {
            $new_child_taxonomy = $entity_type_manager->getStorage('taxonomy_term')->create(['vid' => $type]);
            $new_child_taxonomy->set('parent', $node_taxonomy_tid);
            $new_child_taxonomy->set('name', $categories[1]);
            $new_child_taxonomy->enforceIsNew();
            if ($new_child_taxonomy->save()) {
              $node_taxonomy_tid = $new_child_taxonomy->id();
              $batch_log->log([
                'line_number' => $line,
                'line_status' => 'taxonomy_success',
                'line_subject' => 'node|child_taxonomy',
                'label' => 'New child taxonomy created',
                'description' => 'The new child taxonomy has been successfully created.',
                'line_data' => [
                  'taxonomies' => $taxonomies,
                  'tid' => $node_taxonomy_tid,
                  'nid' => $nid,
                ],
              ]);
            }
          }
        }

        if (NULL !== $node_taxonomy_tid && $nid && $field_name) {
          /**
           * @var \Drupal\Node\Entity\Node $node
           */
          $node = $entity_type_manager->getStorage('node')->load($nid);
          $node->set($field_name, ['target_id' => $node_taxonomy_tid]);
          $node->save();
          $batch_log->log([
            'line_number' => $line,
            'line_status' => 'taxonomy_success',
            'line_subject' => 'node|taxonomy',
            'label' => 'Taxonomy attached to node',
            'description' => 'The taxonomy has been successfully attached to node.',
            'line_data' => [
              'taxonomies' => $taxonomies,
              'tid' => $node_taxonomy_tid,
              'nid' => $nid,
            ],
          ]);
        }
      }
    }
    catch (\Exception $e) {
      /**
       * The city_connect_import.batch.log service.
       *
       * @var \Drupal\city_connect_import\Service $batch_log
       */
      $batch_log = \Drupal::service('city_connect_import.batch.log');
      $batch_log->log([
        'line_number' => $line,
        'line_status' => 'taxonomy_error',
        'line_subject' => 'node|taxonomy',
        'label' => 'Taxonomy could not be attached to node',
        'description' => 'Taxonomy could not be attached to node',
        'line_data' => [
          'taxonomies' => $taxonomies,
          'nid' => $nid,
        ],
      ]);
      return NULL;
    }
  }

}
