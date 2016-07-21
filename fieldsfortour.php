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
    'label' => 'Dificultad Titulo',
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
    'label' => 'Desde',
    'bundle' => 'tour',
    'description' => st('Define precio label.'),
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
    'label' => 'Monto de Precio',
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
    'label' => 'Moneda del Precio',
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
    'label' => 'Imagen de Paypal',
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
    'label' => 'Itinerario Cuerpo',
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
    'label' => 'Incluye Cuerpo',
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
    'label' => 'No Incluye Cuerpo',
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
      'label' => 'Precios Cuerpo',
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
