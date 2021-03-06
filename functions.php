<?php
/*
Author: Ole Fredrik Lie
URL: http://olefredrik.com
*/


// Various clean up functions
require_once('library/cleanup.php');

// Required for Foundation to work properly
require_once('library/foundation.php');

// Register all navigation menus
require_once('library/navigation.php');

// Add menu walkers
require_once('library/menu-walker.php');
require_once('library/offcanvas-walker.php');

// Create widget areas in sidebar and footer
require_once('library/widget-areas.php');

// Return entry meta information for posts
require_once('library/entry-meta.php');

// Enqueue scripts
require_once('library/enqueue-scripts.php');

// Add theme support
require_once('library/theme-support.php');

// Add Header image
require_once('library/custom-header.php');


// DEFINE
define('CAT_NEXT_EVENT', 26); 	//238
	$exclure_cat_next_event = '-'.CAT_NEXT_EVENT;

define('WELCOME_PAGE', 2);	//143



//
add_image_size('event-thumb', auto, 170, true);
add_image_size('loop-thumb', 800, 250, array('center', 'center'));