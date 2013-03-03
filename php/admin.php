<?php 
/**
* Filename    : adming.php
* Included    : admin.inc.php
* Date        : 5-Feb-2013
* Author 	  : BHARAT VERMA (bindian0509@gmail.com)
* Description : This PHP script displays the admin page. (Home Page)
**/
ini_set('display_errors', 'On');

/**
* Included    : config.inc.php
* Description : This include file contains all the neccessary methods and configurations for the site running.
**/
include('includes/config.inc.php');

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // displaying the associated template file
    $smarty->display('admin.tpl');
    return;
}

/* Its a POST */
$key = $_POST['key'] ? $_POST['key'] : "";
$value = $_POST['value'] ? $_POST['value'] : "";

if ($key == "" || $value == "") {
    header ("302: Moved Away");
    header ("Location: /admin.php?error=fieldsrequired");
    return;
}

if (! is_dir (DATA_DIR . "/" . "keyvals")) {
    mkdir (DATA_DIR . "/" . "keyvals");
}
file_put_contents (DATA_DIR . "/" . "keyvals/" . $key, $value);
header ("302: Moved Away");
header ("Location: /admin.php?msg=success");

