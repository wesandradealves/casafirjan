<?php

namespace Drupal\city_connect_import\Form;

use Drupal\Component\Utility\Environment;
use Drupal\Core\Entity\EntityTypeManagerInterface;
use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Logger\LoggerChannel;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\StringTranslation\TranslationInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\city_connect_import\Service\Import;

/**
 * Provides a City Connect Import form.
 */
class ImportForm extends FormBase {

  /**
   * The current user.
   *
   * @var \Drupal\Core\Session\AccountInterface
   */
  protected $account;

  /**
   * The string translation service.
   *
   * @var \Drupal\Core\StringTranslation\TranslationInterface
   */
  protected $stringTranslation;

  /**
   * The logger.channel.city_connect_import service.
   *
   * @var \Drupal\Core\Logger\LoggerChannel
   */
  protected $logger;

  /**
   * The entity type manager.
   *
   * @var \Drupal\Core\Entity\EntityTypeManagerInterface
   */
  protected $entityTypeManager;

  /**
   * The environment.drupalenvironment.city_connect_import service.
   *
   * @var \Drupal\Component\Utility\Environment
   */
  protected $environment;

  /**
   * The city_connect_import.import service.
   *
   * @var \Drupal\city_connect_import\Service\Import
   */
  protected $import;

  /**
   * Constructs an Form object.
   *
   * @param \Drupal\Core\Session\AccountInterface $account
   *   The current user.
   * @param \Drupal\Core\StringTranslation\TranslationInterface $string_translation
   *   The string translation service.
   * @param \Drupal\Core\Entity\EntityTypeManagerInterface $entity_type_manager
   *   The entity type manager.
   * @param \Drupal\Component\Utility\Environment $environment
   *   The environment.drupalenvironment.city_connect_import service.
   * @param \Drupal\Core\Logger\LoggerChannel $logger
   *   The logger.channel.city_connect_import service.
   * @param \Drupal\city_connect_import\Service\Import $import
   *   The city_connect_import.import service.
   */
  public function __construct(
    AccountInterface $account,
    TranslationInterface $string_translation,
    EntityTypeManagerInterface $entity_type_manager,
    Environment $environment,
    LoggerChannel $logger,
    Import $import
  ) {
    $this->account = $account;
    $this->stringTranslation = $string_translation;
    $this->entityTypeManager = $entity_type_manager;
    $this->environment = $environment;
    $this->logger = $logger;
    $this->import = $import;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('current_user'),
      $container->get('string_translation'),
      $container->get('entity_type.manager'),
      $container->get('environment.drupalenvironment.city_connect_import'),
      $container->get('logger.channel.city_connect_import'),
      $container->get('city_connect_import.import')
    );
  }

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'city_connect_import_settings';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form = [
      '#attributes' => ['enctype' => 'multipart/form-data'],
    ];
    $validators = [
      'file_validate_extensions' => ['csv json'],
    ];
    $form['city_connect_import_parent_taxonomy'] = [
      '#type'          => 'select',
      '#title'         => $this->stringTranslation->translate('Parent Taxonomy'),
      '#name'          => 'city_connect_import_parent_taxonomy',
      '#default_value' => '',
      '#options'       => $this->getTaxonomiesList(),
      '#description'   => $this->stringTranslation->translate('Choose the parent taxonomy to import.'),
      '#required'      => FALSE,
    ];
    $form['city_connect_import_file'] = [
      '#type'              => 'managed_file',
      '#name'              => 'city_connect_import_file',
      '#multiple'          => FALSE,
      '#title'             => $this->stringTranslation->translate('File to import (csv,json)'),
      '#upload_location'   => 'public://city_connect_import',
      '#description'       => ($maxsize = $this->environment->getUploadMaxSize()) ? $this->stringTranslation->translate('The maximum size allowed for uploading files on this server is: @maxsize', ["@maxsize" => format_size($maxsize)]) : $this->stringTranslation->translate('Choose your file (csv, json)'),
      '#upload_validators' => $validators,
    ];
    $form['actions']['#type'] = 'actions';
    $form['actions']['submit'] = [
      '#type'        => 'submit',
      '#value'       => $this->stringTranslation->translate('Import'),
      '#button_type' => 'primary',
    ];
    return $form;
  }

  /**
   * The getTaxonomiesList function.
   */
  protected function getTaxonomiesList(): array {
    $parent_taxonomies = $this->entityTypeManager->getStorage('taxonomy_term')->loadByProperties(['vid' => 'categorias']);
    $taxonomies = [];
    if (!empty($parent_taxonomies)) {
      foreach ($parent_taxonomies as $parent_taxonomy) {
        if (!$parent_taxonomy->get('parent')->getString()) {
          $taxonomies[$parent_taxonomy->id()] = $parent_taxonomy->getName();
        }
      }
    }
    return $taxonomies;
  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
    if (FALSE !== empty($form_state->getValue('city_connect_import_parent_taxonomy'))) {
      $form_state->setErrorByName('city_connect_import_parent_taxonomy', $this->stringTranslation->translate('Error: Please select a entity type option.'));
      $error_message = 'User @user_id tried to upload a file. But the entity type option was empty';
    }
    if (FALSE !== empty($form_state->getValue('city_connect_import_file'))) {
      $form_state->setErrorByName('city_connect_import_file', $this->stringTranslation->translate('Error: File not found [1].'));
      $error_message = 'User @user_id tried to upload a file. But the csv file could not be found [1]';
    }
    if (FALSE !== $form_state->hasAnyErrors()) {
      $this->logger->error($this->stringTranslation->translate($error_message, ["@user_id" => $this->account->id()]));
    }
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $parent_taxonomy = $form_state->getValue('city_connect_import_parent_taxonomy');
    $fid = $form_state->getValue('city_connect_import_file');
    if ($fid && $parent_taxonomy) {
      $this->messenger()->addStatus($this->stringTranslation->translate('Import Running.'));
      $this->import->importer($parent_taxonomy, $fid[0]);
    }
    else {
      $this->logger->error($this->stringTranslation->translate('User @user_id tried to upload a file. But the csv file could not be found [2].', ["@user_id" => $this->account->id()]));
      die($this->stringTranslation->translate('Error: File not found [2].'));
    }
  }

}
