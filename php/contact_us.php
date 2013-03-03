<?php 
/**
* Filename    : contact_us.php
* Included    : config.inc.php
* Date        : 5-Feb-2013
* Author 	  : BHARAT VERMA (bindian0509@gmail.com)
* Description : This PHP script displays the contact us page that contains a form whose data has to be sent through the emails on the hard coded email IDs.
**/
//ini_set('display_errors', 'On');

/**
* Included    : config.inc.php
* Description : This include file contains all the neccessary methods and configurations for the site running.
**/
include('includes/config.inc.php');

$Submit = $_POST['Submit'];
if ($Submit == "Submit") 
{
	/* Form Input Data */
	$s_name = $_POST['c_name'];
    $s_email = $_POST['c_email'];
    $s_state = $_POST['c_state'];
	$s_msg = $_POST['c_msg'];	

    /* lead redirection email */
    $to = "shimona.mathur@yourssocially.in, bindian0509@gmail.com, me@shamail.in";
    // test account
    //$to = "bindian0509@gmail.com";
    $email_from = 'info@yourssocially.in';
 
    $email_subject = "Leads from yourssocially.in";
 
    $email_body = "Lead details are as follows - .\n".
                  "Name: ".$s_name."\n".
                  "Email ID: ".$s_email."\n".
                  "Phone: ".$s_state."\n".
                  "Message: ".$s_msg."\n".
                  "**** MESSAGE ENDS ****";
 
    $headers = "From: ".$email_from." \r\n";
    $headers .= "Reply-To: ".$c_email." \r\n";
 
    mail($to,$email_subject,$email_body,$headers);
    $success_msg = "Thanks ... we will shortly get in touch with you !";
    
    $smarty->assign("success_msg", $success_msg);    
    // Displaying the contact_us.tpl
	$smarty->display('contact_us.tpl');              
   
}
else 
{
	// Displaying the contact_us.tpl
	$smarty->display('contact_us.tpl');
}

?>