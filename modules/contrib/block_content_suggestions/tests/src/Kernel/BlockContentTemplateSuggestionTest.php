<?php

namespace Drupal\Tests\block_content_suggestions\Kernel;

use Drupal\block_content\Entity\BlockContent;
use Drupal\block_content\Entity\BlockContentType;
use Drupal\Core\Entity\Entity\EntityViewMode;
use Drupal\field\Entity\FieldConfig;
use Drupal\field\Entity\FieldStorageConfig;
use Drupal\Tests\field\Kernel\FieldKernelTestBase;

/**
 * Test the Block content template suggestions logic.
 *
 * @group nppe_hreflang
 * @coversDefaultClass \Drupal\block_content_suggestions\BlockContentViewBuilder
 */
class BlockContentTemplateSuggestionTest extends FieldKernelTestBase {

  /**
   * The entity type manager service.
   *
   * @var \Drupal\Core\Entity\EntityTypeManagerInterface
   */
  protected $entityTypeManager;

  /**
   * The renderer service.
   *
   * @var \Drupal\Core\Render\RendererInterface
   */
  protected $renderer;

  /**
   * The BlockContent entity used for testing.
   *
   * @var \Drupal\block_content\Entity\BlockContent
   */
  protected $squareBlockEntity;

  /**
   * The BlockContent entity used for testing.
   *
   * @var \Drupal\block_content\Entity\BlockContent
   */
  protected $roundBlockEntity;

  /**
   * {@inheritdoc}
   */
  protected static $modules = [
    'block_content',
    'block_content_suggestions',
    'block_content_suggestions_test',
  ];

  /**
   * {@inheritdoc}
   */
  public function setUp(): void {
    parent::setUp();

    $this->entityTypeManager = $this->container->get('entity_type.manager');
    $this->renderer = $this->container->get('renderer');
    $this->installEntitySchema('block_content');

    // Create a block content type.
    $block_content_type = BlockContentType::create([
      'id' => 'square',
      'label' => 'A square block type',
      'description' => "Provides a block type that is square.",
    ]);
    $block_content_type->save();

    // Create a block content type.
    $block_content_type = BlockContentType::create([
      'id' => 'round',
      'label' => 'A round block type',
      'description' => "Provides a block type that is round.",
    ]);
    $block_content_type->save();

    $this->squareBlockEntity = BlockContent::create([
      'info' => 'The square block',
      'type' => 'square',
    ]);
    $this->squareBlockEntity->save();

    $this->roundBlockEntity = BlockContent::create([
      'info' => 'The round block',
      'type' => 'round',
    ]);
    $this->roundBlockEntity->save();

    EntityViewMode::create([
      'targetEntityType' => 'block_content',
      'id' => 'block_content.test',
    ])->save();
  }

  /**
   * Tests the suggestions logic.
   *
   * @dataProvider blockContentSuggestionsDataProvider
   */
  public function testSuggestions($block_name, $view_mode, $expected) {
    $element = $this->entityTypeManager->getViewBuilder('block_content')->view($this->{$block_name}, $view_mode);
    $markup = $this->renderer->renderPlain($element);
    $this->assertEquals($expected, trim($markup->__toString()));
  }

  /**
   * Tests that fields are rendered properly.
   */
  public function testContent() {
    // Create a content field to validate.
    $storage = FieldStorageConfig::create([
      'field_name' => 'content',
      'entity_type' => 'block_content',
      'type' => 'string',
    ]);
    $storage->save();
    $field = FieldConfig::create([
      'field_name' => 'content',
      'entity_type' => 'block_content',
      'bundle' => 'round',
      'label' => 'Content',
      'required' => FALSE,
    ]);
    $field->save();
    // Create a display for the full view mode.
    \Drupal::service('entity_display.repository')->getViewDisplay('block_content', 'round', 'default')
      ->setComponent('content', [
        'type' => 'text_default',
      ])
      ->save();

    $content = mb_strtolower($this->randomMachineName());
    $this->roundBlockEntity = BlockContent::create([
      'info' => 'The round block',
      'type' => 'round',
      'content' => $content,
    ]);
    $this->roundBlockEntity->save();

    $element = $this->entityTypeManager->getViewBuilder('block_content')->view($this->roundBlockEntity);
    $markup = $this->renderer->renderPlain($element);
    $this->assertStringContainsString($content, trim($markup->__toString()));

  }

  /**
   * Data provider for suggestion tests.
   *
   * @return array
   *   The suggestions test data
   */
  public function blockContentSuggestionsDataProvider() {
    return [
      'view_mode' => [
        'roundBlockEntity',
        'test',
        'This is the test view mode',
      ],
      'bundle' => [
        'squareBlockEntity',
        'full',
        'This is the square bundle',
      ],
      'bundle_view_mode' => [
        'squareBlockEntity',
        'test',
        'This is the square bundle and test view mode',
      ],
    ];
  }

}
