<?php

namespace Drupal\qsi\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Defines a form that configures forms module settings.
 */
class ModuleConfigurationForm extends ConfigFormBase {

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'qsi_admin_settings';
  }

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return [
      'qsi.settings',
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config('qsi.settings');
    $form['facebook'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Facebook'),
      '#default_value' => $config->get('facebook'),
    );
    $form['twitter'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Twitter'),
      '#default_value' => $config->get('twitter'),
    );
    $form['youtube'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Youtube'),
      '#default_value' => $config->get('youtube'),
    );
    $form['instagram'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Instagram'),
      '#default_value' => $config->get('instagram'),
    );
    $form['linkedin'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Linkedin'),
      '#default_value' => $config->get('linkedin'),
    );
    $form['icon_size'] = [
      '#type' => 'select',
      '#title' => $this->t('Icon size'),
      '#options' => [
        'small' => $this->t('Small'),
        'medium' => $this->t('Medium'),
        'large' => $this->t('Large'),
      ],
    ];
    return parent::buildForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $values = $form_state->getValues();
    $this->config('qsi.settings')
      ->set('facebook', $values['facebook'])
      ->set('twitter', $values['twitter'])
      ->set('youtube', $values['youtube'])
      ->set('instagram', $values['instagram'])
      ->set('linkedin', $values['linkedin'])
      ->set('icon_size', $values['icon_size'])
      ->save();
  }

}