<?php
define  ('INCLUDE_CHECK',true);
require 'funciones/connect.php';
session_name('tzLogin');

session_set_cookie_params(2*7*24*60*60);

if(isset($_GET['logoff']))
{
 
	$_SESSION = array();
 	session_destroy();
       	header("Location: panel.php");
	exit;
}
?>
