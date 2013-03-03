<?php 
ini_set('display_errors', 'On');

// Initialize site configuration
include('includes/config.inc.php');

// Get posts from database
//echo "I am in index.php";
// Assign array of data to smarty

// Display page
$smarty->display('photos.tpl');

?>