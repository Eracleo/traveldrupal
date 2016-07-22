<?php
// Images for experiencia
$field = array(
  'field_name' => 'field_slider_experience',
  'type' => 'image',
  'cardinality' => 1,
  'locked' => FALSE,
  'indexes' => array('fid' => array('fid')),
  'settings' => array(
    'uri_scheme' => 'public',
    'default_image' => FALSE,
  ),
  'storage' => array(
    'type' => 'field_sql_storage',
    'settings' => array(),
  ),
);
field_create_field($field);
$instance = array(
  'field_name' => 'field_slider_experience',
  'entity_type' => 'node',
  'label' => 'Imagen para experiencia',
  'bundle' => 'experience',
  'description' => st('Upload an image to go with this experience.'),
  'required' => FALSE,

  'settings' => array(
    'file_directory' => 'field/image',
    'file_extensions' => 'png gif jpg jpeg',
    'max_filesize' => '',
    'max_resolution' => '',
    'min_resolution' => '',
    'alt_field' => TRUE,
    'title_field' => '',
  ),

  'widget' => array(
    'type' => 'image_image',
    'settings' => array(
      'progress_indicator' => 'throbber',
      'preview_image_style' => 'thumbnail',
    ),
    'weight' => -1,
  ),

  'display' => array(
    'default' => array(
      'label' => 'hidden',
      'type' => 'image',
      'settings' => array('image_style' => 'large', 'image_link' => ''),
      'weight' => -1,
    ),
    'teaser' => array(
      'label' => 'hidden',
      'type' => 'image',
      'settings' => array('image_style' => 'medium', 'image_link' => 'content'),
      'weight' => -1,
    ),
  ),
);
field_create_instance($instance);
// Subtitulo
$field = array(
  'field_name' => 'field_subtitulo_experience',
  'type' => 'text',
);
field_create_field($field);
$instance = array(
  'field_name' => 'field_subtitulo_experience',
  'entity_type' => 'node',
  'label' => 'Subtitulo de la experiecia',
  'bundle' => 'experience',
  'description' => st('Define the subtitle for this experience. (e.g. experiencie)'),
  'required' => FALSE,
  'settings' => array(
    // Here you inform either or not you want this field showing up on the registration form.
    'user_register_form' => 1,
  ),
  'widget' => array(
    'type' => 'textfield',
  ),
);
field_create_instance($instance);
// Color view
