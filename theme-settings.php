<?php

use Drupal\Core\Form\FormStateInterface;

/*
**/
function cityad_drupal_theme_form_system_theme_settings_alter(&$form, FormStateInterface $form_state) {
  $form['fancy_header'] = [
    '#type' => 'checkbox',
    '#title' => t('Fancy header'),
    '#description' => t('Attach the ish_drupal_module fancy header library.'),
    '#default_value' => theme_get_setting('fancy_header'),
  ];
}
