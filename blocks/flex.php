<?php

/*
    Title: Flex
    Description: Flex block.
    Category: design
    Icon: cover-image
    Mode: preview
    SupportsAlign: false
    SupportsMode: false
*/


// Register the fields
$fields = array(
    array(
        'key'     => 'content_field',
        'name'    => 'content',
        'type'    => 'clone',
        'clone'   => array(
            0 => 'blockstudio_component_content',
        ),
        'display' => 'seamless',
    ),
    array(
        'key'     => 'media_field',
        'name'    => 'media',
        'type'    => 'clone',
        'clone'   => array(
            0 => 'blockstudio_component_media',
        ),
        'display' => 'seamless',
    )
);

// Include the templates
include BLOCKSTUDIO_DIR . '/library/components/content.php';
include BLOCKSTUDIO_DIR . '/library/components/media.php';

?>
