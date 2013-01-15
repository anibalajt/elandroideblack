<?php
define  ('INCLUDE_CHECK',true);
require 'funciones/connect.php';
include("funciones/funciones.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <script type="text/javascript" src="js/script.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style_vent_post.css" media="screen" />
  <script>
function cerrar(){

var el = document.getElementById("main_list");
var padre = el.parentNode;
padre.removeChild(el);
var el = document.getElementById("m_l_c");
var padre = el.parentNode;
padre.removeChild(el);
}

  </script>
</head>
<body>
  
    <div style="position: relative;width: 100%;overflow: hidden;height: auto;background: white;">
              <?php
               if(isSet($_POST['id']))
               {
                 $id_mas=  ($_POST['id']);
               $Resultado=mysql_query("SELECT * FROM post where id>$id_mas ORDER BY  id limit 28");    
               }else{
                    $Resultado=mysql_query("SELECT * FROM post ORDER BY  id limit 28");
                }
echo '<div class="display">
            <div style="background: white;
position: relative;
width: 191px;
height: 100%;
float: right;"></div>';
while($apli=mysql_fetch_array($Resultado)){
      $iduse=$apli['iduser'];
            $result_mie= mysql_query("SELECT * FROM tbl_user where user_id=$iduse");
            $usr =mysql_result($result_mie, 0, "user_name");
           
        echo'
 <a class=""  onclick="flost('.$apli['id'].')">
     
<div class="apli">

 <div class="imaggsd">
 
      <img class="tileimage" alt="" src=" '.$apli['imagen'].'" style="width: 190px;height: 118px;">
          <p class="nom_apli">'.$apli['titilo'].'</p>

';
  $id_mas=$apli['id'];      
        echo'</div>
          <div class="parent1">
    
                <div class="parent2">
      
                    <div class="parent3">  
             
 <div class="descr">
<p class="nombreapli">'.$apli['titilo'].'</p>
<p class="asde" >Publicado por:'.$usr.' </p>
 <p class="asde" >Creado el: '.tiempo_fecha($apli['fecha']).'</p>
<p class="asde" >Visto: '.$apli['visita'].'</p>

</div>    

</div>
 
</div> </div>      </div> 
</a>

    ';
}
echo '</div>
 <div class="more" style="position: relative;overflow: hidden;width: 100%;text-align: center;cursor: pointer;
         background: whiteSmoke;;margin-bottom: 10px;padding: 10px;" onclick="mas('.$id_mas.')">
        <span>Ver mas</span>
    </div>    
';
             ?> 

   </div> 
<!--    xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx-->
    




<!--    xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx-->
    
    
    
</body>
</html>