<?php

namespace Drupal\azure_appinsights\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Class AzureAppInsightsAdminForm.
 */
class AzureAppInsightsAdminForm extends ConfigFormBase {

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return [
      'azure_appinsights.settings',
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'azure_app_insights_admin_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config('azure_appinsights.settings');
    $form['instrumentation_key'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Instrumentation Key'),
      '#description' => $this->t('Instrumentation key for your application.'),
      '#maxlength' => 255,
      '#size' => 64,
      '#default_value' => $config->get('instrumentation_key'),
    ];
    return parent::buildForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    parent::submitForm($form, $form_state);

    $this->config('azure_appinsights.settings')
      ->set('instrumentation_key', $form_state->getValue('instrumentation_key'))
      ->save();
  }

}
