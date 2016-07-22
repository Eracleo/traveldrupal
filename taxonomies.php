<?php
  // THIS CODE CREATE TAXONOMIES AND ADDED TO TOUR CONTENT TYPE
  $taxonames = ['Destinies','Durations','Experiences'];
  $taxomachines = ['destinies','durations','experiences'];
  $taxodescriptions = ['The tour\'s destinies.','The tour\'s durations.','The tour\'s experiences'];
  $fields = ['field_experiencias_secundarias', 'field_experiencia_principal', 'field_duracion', 'field_destino_principal', 'field_destinos_secundarios'];
  $fieldslabels = ['Secondary Experiences', 'Principal Experience', 'Duration','Principal Destiny','Secondary Destinies'];
  $fieldsvocabularies = ['experiences', 'experiences', 'durations', 'destinies', 'destinies'];

  // Creating the vocabularies
  foreach ($taxonames as $key => $taxo) {
    $description = st($taxodescriptions[$key]);
    $vocabulary = (object) array(
      'name' => st($taxo),
      'description' => st($description),
      'machine_name' => $taxomachines[$key],
    );
    taxonomy_vocabulary_save($vocabulary);
  }

  // Generating the fields on the taxonomies for content types
  foreach ($fields as $key => $field) {
    $fieldtocreate = array(
      'field_name' => $field,
      'type' => 'taxonomy_term_reference',
      'cardinality' => FIELD_CARDINALITY_UNLIMITED,
      'settings' => array(
        'allowed_values' => array(
          array(
            'vocabulary' => $fieldsvocabularies[$key],
            'parent' => 0,
          ),
        ),
      ),
    );
    field_create_field($fieldtocreate);
    // assingning the fields to the content types
    $instancetocreate = array(
      'field_name' => $field,
      'entity_type' => 'node',
      'label' => st($fieldslabels[$key]),
      'bundle' => 'tour',
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
    field_create_instance($instancetocreate);
  }
