<?php
// Slider for Destino
$field = array(
  'field_name' => 'field_slider_destiny',
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
  'field_name' => 'field_slider_destiny',
  'entity_type' => 'node',
  'label' => 'Imagenes para slider para este destino',
  'bundle' => 'destiny',
  'description' => st('Upload images to go with this destiny.'),
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
$field = array(
  'field_name' => 'field_destiny',
  'type' => 'taxonomy_term_reference',
  'cardinality' => FIELD_CARDINALITY_UNLIMITED,
  'settings' => array(
    'allowed_values' => array(
      array(
        'vocabulary' => 'destinies',
        'parent' => 0,
      ),
    ),
  ),
);
field_create_field($field);
// assingning the fields to the content types
$instance = array(
  'field_name' => 'field_destiny',
  'entity_type' => 'node',
  'label' => 'Escribe el destino',
  'bundle' => 'destiny',
  'description' => st('Type commas to separate the words that describes your content.'),
  'widget' => array(
    'type' => 'taxonomy_autocomplete',
    'weight' => -4,
  ),
  'display' => array(
    'default' => array(
      'type' => 'taxonomy_term_reference_link',
      'weight' => 10,
    ),
    'teaser' => array(
      'type' => 'taxonomy_term_reference_link',
      'weight' => 10,
    ),
  ),
);
field_create_instance($instance);
