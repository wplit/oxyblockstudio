<?php
/*
Plugin Name:	OxyBlockStudio Starter
Plugin URI:		https://wpdevdesign.com
Description:	Starter plugin for building ACF blocks with Blockstudio for Oxygen sites.
Version:		1.0.0
Author:			David Browne
License:		GPL-2.0+
License URI:	http://www.gnu.org/licenses/gpl-2.0.txt

This plugin is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.

This plugin is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with This plugin. If not, see {URI to Plugin License}.
*/

if ( ! defined( 'WPINC' ) ) {
	die;
}

define( 'BLOCKSTUDIO_LIBRARY', TRUE );

// Change path to plugin 'blocks' directory
add_filter( 'blockstudio/path' , function () {
    return plugin_dir_path( __FILE__ ) . 'blocks';
} );





// Add our prefix
add_filter( 'blockstudio/prefix', function () {
    return 'oxy';
} );


// Limit blocks to specific post type
add_filter( 'blockstudio/defaults', function () {
    return array(
        'post_types' => array( 'post' ),
    );
} );






