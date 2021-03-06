<?php
  // Difucultad
  /// Dificultad Titulo
  $field = array(
    'field_name' => 'field_dificultad_titulo',
    'type' => 'text',
  );
  field_create_field($field);
  $instance = array(
    'field_name' => 'field_dificultad_titulo',
    'entity_type' => 'node',
    'label' => st('Dificult Title'),
    'bundle' => 'tour',
    'description' => st('Define the name on the dificult label.'),
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
  // Precio
  /// Precio desde label
  $field = array(
    'field_name' => 'field_precio_desde',
    'type' => 'text',
  );
  field_create_field($field);
  $instance = array(
    'field_name' => 'field_precio_desde',
    'entity_type' => 'node',
    'label' => st('From Price'),
    'bundle' => 'tour',
    'description' => st('Define price label.'),
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
  /// Precio Monto
  $field = array(
    'field_name' => 'field_precio_monto',
    'type' => 'text',
  );
  field_create_field($field);
  $instance = array(
    'field_name' => 'field_precio_monto',
    'entity_type' => 'node',
    'label' => st('Amount of Price'),
    'bundle' => 'tour',
    'description' => st('Define the amount of money for the tour.'),
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
  /// Precio Moneda
  $field = array(
    'field_name' => 'field_precio_moneda',
    'type' => 'text',
  );
  field_create_field($field);
  $instance = array(
    'field_name' => 'field_precio_moneda',
    'entity_type' => 'node',
    'label' => st('Price currency'),
    'bundle' => 'tour',
    'description' => st('Define the money currency (e.g S/, $)'),
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

  // Paypal
  $field = array(
    'field_name' => 'field_paypal',
    'type' => 'text_long',
  );
  field_create_field($field);
  $instance = array(
    'field_name' => 'field_paypal',
    'entity_type' => 'node',
    'label' => st('Paypal Image'),
    'bundle' => 'tour',
    'description' => st('Insert the paypal image.'),
    'required' => FALSE,
    'settings' => array(
      // Here you inform either or not you want this field showing up on the registration form.
      'user_register_form' => 1,
    ),
    'widget' => array(
      'type' => 'textarea',
    ),
  );
  field_create_instance($instance);
  // Itinerario
  /// Itinerario Titulo
  /// Itinerario Cuerpo
  $field = array(
    'field_name' => 'field_itinerario_cuerpo',
    'type' => 'text_long',
  );
  field_create_field($field);
  $instance = array(
    'field_name' => 'field_itinerario_cuerpo',
    'entity_type' => 'node',
    'label' => st('Itinerary Body'),
    'bundle' => 'tour',
    'description' => st('Write the body for itinerary.'),
    'required' => FALSE,
    'settings' => array(
      // Here you inform either or not you want this field showing up on the registration form.
      'user_register_form' => 1,
    ),
    'widget' => array(
      'type' => 'textarea',
    ),
  );
  field_create_instance($instance);
  //  Incluye
  /// Incluye Titulo
  /// Incluye Cuerpo
  $field = array(
    'field_name' => 'field_incluye_cuerpo',
    'type' => 'text_long',
  );
  field_create_field($field);
  $instance = array(
    'field_name' => 'field_incluye_cuerpo',
    'entity_type' => 'node',
    'label' => st('Include Body'),
    'bundle' => 'tour',
    'description' => st('Write the body for include.'),
    'required' => FALSE,
    'settings' => array(
      // Here you inform either or not you want this field showing up on the registration form.
      'user_register_form' => 1,
    ),
    'widget' => array(
      'type' => 'textarea',
    ),
  );
  field_create_instance($instance);

  //  No Incluye
  /// No Incluye Titulo
  /// No Incluye Cuerpo
  $field = array(
    'field_name' => 'field_no_incluye_cuerpo',
    'type' => 'text_long',
  );
  field_create_field($field);
  $instance = array(
    'field_name' => 'field_no_incluye_cuerpo',
    'entity_type' => 'node',
    'label' => st('No Include Body'),
    'bundle' => 'tour',
    'description' => st('Write the body for non include.'),
    'required' => FALSE,
    'settings' => array(
      // Here you inform either or not you want this field showing up on the registration form.
      'user_register_form' => 1,
    ),
    'widget' => array(
      'type' => 'textarea',
    ),
  );
  field_create_instance($instance);

    //  Precios
    /// Precios Titulo
    /// Precios Cuerpo
    $field = array(
      'field_name' => 'field_precios_cuerpo',
      'type' => 'text_long',
    );
    field_create_field($field);
    $instance = array(
      'field_name' => 'field_precios_cuerpo',
      'entity_type' => 'node',
      'label' => st('Prices Body'),
      'bundle' => 'tour',
      'description' => st('Write the body for precios.'),
      'required' => FALSE,
      'settings' => array(
        // Here you inform either or not you want this field showing up on the registration form.
        'user_register_form' => 1,
      ),
      'widget' => array(
        'type' => 'textarea',
      ),
    );
    field_create_instance($instance);
    $field = array(
      'field_name' => 'field_slider_tour',
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

    // Slider
    $instance = array(
      'field_name' => 'field_slider_tour',
      'entity_type' => 'node',
      'label' => st('Slider Tour Images'),
      'bundle' => 'tour',
      'description' => st('Upload an image to go with this tour.'),
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
