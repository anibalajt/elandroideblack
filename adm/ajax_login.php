<?php session_start();
define  ('INCLUDE_CHECK',true);
require 'funciones/connect.php';
//select the database | Change the name of database from here
 

//get the posted values
$user_name=htmlspecialchars($_POST['user_name'],ENT_QUOTES);
$pass=md5($_POST['password']);

//Ahora la validación del nombre de usuario y contraseña
$sql="SELECT * FROM tbl_user WHERE email='".$user_name."'";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);
$id=$row['user_id'];
$privilegios=$row['privilegios'];
$user_na=$row['user_name'];
//if username exists
if(mysql_num_rows($result)>0)
{
	//compare the password
	if(strcmp($row['password'],$pass)==0)
	{
                
                 echo "yes";
                //now set the session from here if needed privilegios user_name
		$_SESSION['email']=$user_name; 
                $_SESSION['password']=$pass; 
                $_SESSION['user_id']=$id; 
                 $_SESSION['user_name']=$user_na; 
                $_SESSION['privilegios']=$privilegios; 
           
	}
	else
		echo "no"; 
}
else
	echo "no"; //Invalid Login


?>