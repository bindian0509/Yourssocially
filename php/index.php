	<?php 
/**
* Filename    : contact_us.php
* Included    : config.inc.php
* Date        : 5-Feb-2013
* Author 	  : BHARAT VERMA (bindian0509@gmail.com)
* Description : This PHP script displays the index page. (Home Page)
**/
ini_set('display_errors', 'On');

/**
* Included    : config.inc.php
* Description : This include file contains all the neccessary methods and configurations for the site running.
**/
include('includes/config.inc.php');

// displaying the associated template file
$smarty->display('index.tpl');

?>
