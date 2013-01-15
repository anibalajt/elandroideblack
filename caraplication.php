<?php
define  ('INCLUDE_CHECK',true);
require 'funciones/connect.php';
include("funciones/funciones.php");
?>
<link rel="stylesheet" type="text/css" href="css/style_vent_post.css" media="screen" />
  
   
              <?php
               if(isSet($_POST['id']))
               {
                 $id_mas=  ($_POST['id']);
               $Resultado=mysql_query("SELECT * FROM post where id<$id_mas and tipo='Aplicaciones' ORDER BY  fecha desc limit 28");    
               }

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
echo '
 <div class="more" style="position: relative;overflow: hidden;width: 100%;text-align: center;cursor: pointer;
         background: whiteSmoke;;margin-bottom: 10px;padding: 10px;" onclick="mas_apli('.$id_mas.')">
        <span>Ver mas</span>
    </div>    
';
             ?> 
