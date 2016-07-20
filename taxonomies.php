<?php
  $taxonames = ['Destinos','Duraciones','Experiencias'];
  $taxomachines = ['destinos','duraciones','experiencias'];
  $taxolabels = ['Destinos','Dias','Experiencias'];
  $taxodescriptions = ['Los destinos de los tours.','Las duraciones de los tours.','Las experiencias de los tours.'];

  foreach ($taxonames as $key => $taxo)
    // Creating the vocabularies
    $description = st($taxodescriptions[$key]);
    $vocabulary = (object) array(
      'name' => st($taxo),
      'description' => $description,
      'machine_name' => $taxomachines[$key],
    );
    taxonomy_vocabulary_save($vocabulary);

    // Generating the fields on the content types
    $instance = array(
      'field_name' => 'field_' . $vocabulary->machine_name,
      'entity_type' => 'node',
      'label' => $taxolabels[$key],
      'bundle' => 'tour',
      'description' => st('Ingresar a coma para separar las palabras que describen tu contenido.'),
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

    // Add terms to vocabularies
