<?php

/**
 * The main functions file for the learnmultisite.com lander theme.
 *
 * @package WordPress
 * @subpackage LearnMultisiteLander
 * @since 0.1.0
 */

namespace LearnMultisiteLander;

// Load and register our autoloader.
require_once 'lib/autoload.php';

$theme = new \LearnMultisiteLander\ThemeSetup();
$theme->init();
