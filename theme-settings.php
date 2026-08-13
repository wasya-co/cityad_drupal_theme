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

  $form['footer_image_hero'] = [
    '#type' => 'managed_file',
    '#title' => t('Footer hero image'),
    '#upload_location' => 'public://theme/footer',
    '#default_value' => theme_get_setting('footer_image_hero'),
    '#upload_validators' => [
      'FileExtension' => [
        'extensions' => 'png jpg jpeg webp',
      ],
    ],
  ];

  // $form['#submit'][] = 'cityad_drupal_theme_settings_submit';
}

/*
**/
// function cityad_drupal_theme_settings_submit($form, FormStateInterface $form_state) {
//   $file_ids = $form_state->getValue('footer_image_hero');
//   if (!empty($file_ids)) {
//     $file_id = reset($file_ids);
//     $file = \Drupal\file\Entity\File::load($file_id);
//     if ($file) {
//       $file->setPermanent();
//       $file->save();
//     }
//   }
// }

