<?php

/*
Plugin Name: DispatchWP Test
Plugin URI: http://vsellis.com
Description:
Author: Vsellis
Author URI: http://www.vsellis.com

Version: 1.0.0

Text Domain:
Domain Path: /languages

License: GNU General Public License v2.0 (or later)
License URI: http://www.opensource.org/licenses/gpl-license.php
*/

require 'plugin-update-checker/plugin-update-checker.php';
$myUpdateChecker = PucFactory::buildUpdateChecker(
    'http://example.com/path/to/metadata.json',
    __FILE__
);