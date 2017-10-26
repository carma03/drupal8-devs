<?php
/**
 * @file FormSampleConfiguration.php
 *
 * @autor Carlos Puello <carlospuello03@gmail.com>
 */

 namespace Drupal\form_samples\Form;

 use Drupal\Core\Form\ConfigFormBase;
 use Drupal\Core\Form\FormStateInterface;

class FormSampleConfiguration extends ConfigFormBase {

  /**
   * {@inheritDoc}
   */
  public function getFormId() {
    return 'form_samples_configuration';
  }

  /**
   * {@inheriteDoc}
   */
  public function getEditableConfigNames() {
    return [
      'form_samples.settings',
    ];
  }

  /**
   * {@inheritDoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config('form_samples.settings');
    $form['sample_key'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Sample Key'),
      '#default_value' => $config->get('sample_key'),
    ];

    return parent::buildForm($form, $form_state);
  }

  public function submitForm(array &$form, FormStateInterface $form_state) {
    $values = $form_state->getValues();
    $this->config('form_samples.settings')
      ->set('sample_key', $values['sample_key'])
      ->save();
  }
}
