<?php

/*
    Title: Flex
    Description: Flex content block.
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
    )
);

// Include the templates
include BLOCKSTUDIO_DIR . '/library/components/content.php';

?>
