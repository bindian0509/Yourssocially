<?php

////////////////////////////////////////////////////////////////////////////////
// Configure the default time zone
////////////////////////////////////////////////////////////////////////////////
date_default_timezone_set('MST');

////////////////////////////////////////////////////////////////////////////////
// Configure the default currency
////////////////////////////////////////////////////////////////////////////////
setlocale(LC_MONETARY, 'en_US');

////////////////////////////////////////////////////////////////////////////////
// Define constants for database connectivty
////////////////////////////////////////////////////////////////////////////////
defined('DATABASE_HOST') ? null : define('DATABASE_HOST', 'localhost');
defined('DATABASE_NAME') ? null : define('DATABASE_NAME', 'blog');
defined('DATABASE_USER') ? null : define('DATABASE_USER', 'bharat');
defined('DATABASE_PASSWORD') ? null : define('DATABASE_PASSWORD', 'oracle');

////////////////////////////////////////////////////////////////////////////////
// Define absolute application paths
////////////////////////////////////////////////////////////////////////////////

// Use PHP's directory separator for windows/unix compatibility
defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);

// Define absolute path to server root
defined('SITE_ROOT') ? null : define('SITE_ROOT', dirname(dirname(__FILE__)).DS);

// Check if we are on openshift and set DATA_DIR
$OPENSHIFT_DATA_DIR = getenv ("OPENSHIFT_DATA_DIR");
$OPENSHIFT_DATA_DIR = $OPENSHIFT_DATA_DIR ? $OPENSHIFT_DATA_DIR : SITE_ROOT."templatestrings";
defined('DATA_DIR') ? null : define('DATA_DIR', $OPENSHIFT_DATA_DIR);

// Define absolute path to includes
defined('INCLUDE_PATH') ? null : define('INCLUDE_PATH', SITE_ROOT.'includes'.DS);
defined('FUNCTION_PATH') ? null : define('FUNCTION_PATH', INCLUDE_PATH.'functions'.DS);
defined('LIB_PATH') ? null : define('LIB_PATH', INCLUDE_PATH.'libraries'.DS);
defined('SMARTY_PATH') ? null : define('SMARTY_PATH', INCLUDE_PATH.'smarty'.DS);
defined('MODEL_PATH') ? null : define('MODEL_PATH', INCLUDE_PATH.'models'.DS);
defined('VIEW_PATH') ? null : define('VIEW_PATH', INCLUDE_PATH.'views'.DS);

////////////////////////////////////////////////////////////////////////////////
// Include library, helpers, functions
////////////////////////////////////////////////////////////////////////////////
include(FUNCTION_PATH.'functions.inc.php');
include(FUNCTION_PATH.'sitetext.inc.php');
include(LIB_PATH.'database.class.php');
include(MODEL_PATH.'post.model.php');
include(SMARTY_PATH.'libs'.DS.'Smarty.class.php');

////////////////////////////////////////////////////////////////////////////////
// Instantiate and configure smarty
////////////////////////////////////////////////////////////////////////////////
$smarty = new Smarty();
$smarty->registerPlugin ("modifier", "valueof", "getkey");
$smarty->setTemplateDir(VIEW_PATH);
$smarty->setCompileDir(SMARTY_PATH.'templates_c');
$smarty->setCacheDir(SMARTY_PATH.'cache');
$smarty->setConfigDir(SMARTY_PATH.'configs');

