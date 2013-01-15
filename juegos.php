<?php
 ob_start();

define  ('INCLUDE_CHECK',true);
require 'funciones/connect.php';
include("funciones/funciones.php");

 ?> 
 <head>
 <style>
            .m_c_p {

        background: white;
        }
        .j{
            background: #3B9ADB;
        }
        </style>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>EL androide black | juegos</title>
        <link rel="stylesheet" type="text/css" href="css/post23424.css" media="screen" /> 
        <script type="text/javascript" src="js/script.js"></script>
        <script src="js/jquery.js" type="text/javascript"></script>
       
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

    
        <div id="contenido" >
           <?php
               if(isSet($_POST['id']))
               {
                 $id_mas=  ($_POST['id']);
               $Resultado=mysql_query("SELECT * FROM post where id>$id_mas and tipo='Juegos' ORDER BY  id desc limit 28");    
               }else{
                    $Resultado=mysql_query("SELECT * FROM post where tipo='Juegos' ORDER BY fecha desc LIMIT 28");
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
            $idpost=$apli['id'];
            $result_mie= mysql_query("SELECT * FROM publicaciones where id_post=$idpost");
            $numerocoment =mysql_num_rows($result_mie);
        echo'
<a class=""  onclick="flost('.$apli['id'].')" href="#'.$apli['titilo'].'">
     
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
         background: whiteSmoke;;margin-bottom: 10px;padding: 10px;" onclick="mas_jg('.$id_mas.')">
        <span>Ver mas</span>
    </div>    
';
             ?> 
        </div>
    <?php
  //Assign all Page Specific variables
  $pagemaincontent = ob_get_contents();
  ob_end_clean();
  $pagetitle = "EL androide black | juegos";
  //Apply the template
include("content.php");
?>