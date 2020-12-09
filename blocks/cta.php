<?php

/*
    Title: Call to Action
    Description: Call to action element.
    Category: design
    Icon: lightbulb
    Mode: preview
    SupportsAlign: false
    SupportsMode: false
*/


// Register the fields
$fields = array(
    array(
        'key'   => 'cta_title_key',
        'label' => 'Title',
        'name'  => 'cta_title',
        'type'  => 'text',
    ),
    array(
        'key'   => 'cta_text_key',
        'label' => 'Text',
        'name'  => 'cta_text',
        'type'  => 'textarea',
    ),
);

?>

<h1><?php echo get_field( 'cta_title' ) ?: 'Title'; ?></h1>
<p><?php echo get_field( 'cta_text' ) ?: 'Text'; ?></p>