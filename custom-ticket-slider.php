<?php
/*
Plugin Name: Custom Ticket Slider
Description: Adds a price slider for ticket pricing in Mage EventPress.
Version: 1.01
Author: Arnold Adero
Author URI: https://github.com/arnoldadero
*/

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

// Include the slider functionality
require_once plugin_dir_path(__FILE__) . 'includes/slider-functionality.php';
