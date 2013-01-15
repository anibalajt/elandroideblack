<?php session_start();
define  ('INCLUDE_CHECK',true);
require 'connect.php';
//select the database | Change the name of database from here
 

//get the posted values 
$email=htmlspecialchars($_POST['email'],ENT_QUOTES);
$pass=  htmlspecialchars(md5($_POST['pass']));


$sql = sprintf("SELECT d.*,u.pass FROM user u,datospersonales d WHERE u.email ='%s' and u.id=d.id_user",
            mysql_real_escape_string($email));
//validando user y pass
$result=mysql_query($sql);
$row=mysql_fetch_array($result);

//if username exists
if(mysql_num_rows($result)>0)
{
	//compare the password
	if(strcmp($row['pass'],$pass)==0)
	{
		echo "yes";
		$_SESSION['name_a_user']=$row['nombre']; 
		$_SESSION['id_a_user']=$row['id_user']; 
		$_SESSION['email_a_user']=$email; 
		$_SESSION['apellido_a_user']=$row['apellido']; 
         
	}
	else
		echo "no"; 
}
else
	echo 'no'; //Invalid Login


?>
