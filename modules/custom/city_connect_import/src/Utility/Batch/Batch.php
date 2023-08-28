<?php

namespace Drupal\city_connect_import\Utility\Batch;

/**
 * Methods for running the import batch.
 *
 * @package Drupal\city_connect_import\Utility\Batch\Batch
 */
class Batch {

  /**
   * Process Batch Import.
   *
   * @param array $args
   *   The file to be imported line data.
   * @param int $line
   *   The file to be imported line number.
   * @param array|null $context
   *   The context.
   */
  public static function batchImport(array $args, $line, &$context) {
    if (!isset($context['results']['has_error'])) {
      $line++;
      $context['message'] = t('Synchronizing for line @line', ['@line' => $line]);
      if (FALSE !== $node = self::contentResolver($args, $line)) {
        self::batchTypes($args, $line, $node);
      }
      else {
        /**
         * The city_connect_import.batch.log service.
         *
         * @var \Drupal\city_connect_import\Service\ImportLog $batch_log
         */
        $batch_log = \Drupal::service('city_connect_import.batch.log');
        $batch_log->log([
          'line_number' => $line,
          'line_status' => 'content_error',
          'line_subject' => 'node|child_taxonomy',
          'label' => 'Line content link field is missing',
          'description' => 'Line content link field is missing.',
          'line_data' => $args,
        ]);
      }
    }
  }

  /**
   * Process Batch Content Resolver.
   *
   * @param array $args
   *   The file to be imported line data.
   * @param int $line
   *   The file to be imported line number.
   *
   * @return \Drupal\node\Entity\Node|null
   *   Return the node entity class or null.
   */
  public static function contentResolver(array $args, $line) {
    /**
     * The entity type manager.
     *
     * @var \Drupal\Core\Entity\EntityTypeManagerInterface $entity_type_manager
     */
    $entity_type_manager = \Drupal::service('entity_type.manager');

    /**
     * The city_connect_import.link_generator service.
     *
     * @var \Drupal\Core\Logger\LoggerChannel $link_generator
     */
    $link_generator = \Drupal::service('city_connect_import.link_generator');

    /**
     * The city_connect_import.batch.log service.
     *
     * @var \Drupal\city_connect_import\Service\ImportLog $batch_log
     */
    $batch_log = \Drupal::service('city_connect_import.batch.log');

    /*
     * Works content link and content by type.
     */
    $link = parse_url($args['view_node']);
    // Current item link.
    if ($alias_current = $link['path']) {
      /*
       * \Drupal\Core\Url $url
       */
      if ($url = $link_generator->getUrl()->fromUserInput($alias_current)) {
        // Check if current path is attached to any content.
        if (!empty($url->getOptions())) {
          // Check if current path is attached to a node type.
          if (('entity.node.canonical' == $url->getRouteName()) && ($nid = $url->getRouteParameters()['node'])) {
            /*
             * Found content is a node type
             * \Drupal\Node\Entity\Node $node
             */
            if ($node = $entity_type_manager->getStorage('node')->load($nid)) {
              if ($args['type'] == $node->getType()) {
                return $node;
              }
            }
          }
          else {
            // Found content is not a node type.
            $batch_log->log([
              'line_number' => $line,
              'line_status' => 'content_error',
              'line_subject' => 'node|content',
              'label' => 'Found content is not a node type',
              'description' => 'Found content is not a node [entity.node.canonical] content. The type detected is: [' . $url->getRouteName() . '].',
              'line_data' => $args,
            ]);
          }
        }
        else {
          // Current path is not attached to any content: create it.
          $batch_log->log([
            'line_number' => $line,
            'line_status' => 'content_error',
            'line_subject' => 'node|content',
            'label' => 'No node content found to the line',
            'description' => 'Current path is not attached to any content [' . $args['view_node'] . '].',
            'line_data' => $args,
          ]);
        }
      }
      return NULL;
    }
    return FALSE;
  }

  /**
   * Resolver to ther proper method.
   *
   * @param array $args
   *   The file to be imported line data.
   * @param int $line
   *   The file to be imported line number.
   * @param \Drupal\node\Entity\Node|null $node
   *   The node entity class.
   */
  public static function batchTypes(array $args, $line, $node) {
    /**
     * The city_connect_import.batch.log service.
     *
     * @var \Drupal\city_connect_import\Service\ImportLog $batch_log
     */
    $batch_log = \Drupal::service('city_connect_import.batch.log');
    if ($node || $args['type']) {
      $type = (NULL !== $node) ? $node->getType() : $args['type'];
      if (method_exists($c = '\Drupal\city_connect_import\Utility\Batch\Types\\' . ucfirst($type), 'build')) {
        $c::build($args, $line, $node);
      }
      else {
        $batch_log->log([
          'line_number' => $line,
          'line_status' => 'content_error',
          'line_subject' => 'node|unrelated',
          'label' => 'Unrelated content type',
          'description' => 'No build() method was found to handle the content type.',
          'line_data' => [
            'args' => $args,
            'type' => $type,
          ],
        ]);
      }
    }
    else {
      $batch_log->log([
        'line_number' => $line,
        'line_status' => 'content_error',
        'line_subject' => 'node|unrelated',
        'label' => 'Impossible to determine the content type',
        'description' => 'Impossible to determine the content type while attempting to create it. No node content found and file field_type was empty.',
        'line_data' => $args,
      ]);
    }
  }

}
