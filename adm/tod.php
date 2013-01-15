<?php
 ob_start();
?>
 <style>
     .selecasde {
         background: #ED2024;
     
     }
     .selecasde:hover {
         background: #ED2024;
     
     }
 </style>
 <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 </head>
 <div>
     
<?php
 session_start();
require 'user.php';
$ida=($_SESSION['user_id']);
$result_apli= mysql_query("SELECT * FROM post where iduser=$ida");

//      $foto_usr =mysql_result($result, 0, "url");

?>

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 
 <?php
        while($apli=mysql_fetch_assoc($result_apli)){
        echo'
            

 <div class="asdasda">
<div class="aseq">
<p class="nombreapli">'.$apli['titilo'].'</p>
<p>Visto: '.$apli['visita'].'</p>
</div>
<div class="asdqweq">
<a class="" href="adm.php?id='.$apli['id'].'">Editar</a>
</div>
</div>
        ';
    
         }
      
         ?>
 

<style type="text/css">
    .aseq{
        display: table-cell
    }
    .asdqweq{
        display: table-cell;
            float: right;
    }
    .asdasda{
        display: table;
        border: 1px solid whitesmoke;
        width: 722px;
    }
     .apli{
         border: 1px solid whitesmoke;
         padding: 10px;
         width: 222px;
         height: 180px;
         float: left;
     }
     a{
         text-decoration: none;
         color: #A1A1A1;
     }
     .nombreapli{
         font-size: 16px;
font-weight: bold;
color: #262626;
     }
     .imaggsd{
          border: 1px solid;
          width: 220px;
height: 140px;
     }
 </style>
 </div>

 
 
 <?php
  //Assign all Page Specific variables
  $pagemaincontent = ob_get_contents();
  ob_end_clean();
  $pagetitle = "muro";
  //Apply the template
include("cuerpo_1.php");
?>
