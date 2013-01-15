<?php
//session_start();
//define  ('INCLUDE_CHECK',true);
//require '../class/connect.php';

//$option=  is_numeric($_POST['Option']);
//switch ($option) { 
//case 1: //publicaiones
$messge=htmlspecialchars($_POST['message'],ENT_QUOTES);
$iduser=$_SESSION['id_a_user'];
mysql_query("INSERT INTO public SET iduser='".$iduser."', public='". $messge."'"); 
//
//break; 
//case 2: 
//echo "esta activada la opcion 2"; 
//break; 
//case 3: 
//echo "esta activada la opcion 3"; 
//break; 
//case 4: 
//echo "esta activada la opcion 4"; 
//break; 
//} 
//header ("Location: google.com"); 

?> 