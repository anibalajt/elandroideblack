<?php
session_start();
define  ('INCLUDE_CHECK',true);
require 'funciones/connect.php';
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=7" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>

<?php


if($_POST['submit']=='Actualizar')
{
   $ida=($_SESSION['user_id']);
$Nombre=htmlspecialchars($_POST['titulo']);
$descripcion= ($_POST['comment']);

$url=htmlspecialchars($_POST['url']);
$tipo=htmlspecialchars($_POST['tipooo']);
$masurl=htmlspecialchars($_POST['masurl']);
$masurl2 =htmlspecialchars($_POST['masurl2']);

$masurl3=htmlspecialchars($_POST['masurl3']);

$masurl4 = htmlspecialchars($_POST['masurl4']);
$video = htmlspecialchars($_POST['video']);
$nota = ($_POST['nota']);
$url_market = htmlspecialchars($_POST['url_market']);
$url_archivo = htmlspecialchars($_POST['url_arc']);
$asdasd = htmlspecialchars($_POST['asdasd']);
$fecha=date('Y-m-d H:i:s', time());
$iduser= $ida;
$C="UPDATE post SET  titilo='$Nombre',descripccion='$descripcion',tipo='$tipo',imagen='$url'
,masimagen1='$masurl',masimagen2='$masurl2',masimagen3='$masurl3',masimagen4='$masurl4'
,video='$video',nota='$nota',url_archivo='$url_archivo',url_market='$url_market',iduser='$iduser',fecha='$fecha' WHERE id=$asdasd ";
                       mysql_query($C) or die (mysql_error());

          

  require 'adm.php';
}
//////////////////////////////////////////////////////////////////////

?>
