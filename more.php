<?php
define  ('INCLUDE_CHECK',true);
require 'funciones/connect.php';
include("funciones/funciones.php");
?>

  
   
              <?php
               if(isSet($_POST['id']))
               {
                 $id_mas=  ($_POST['id']);
               $Resultado=mysql_query("SELECT * FROM post where id>$id_mas ORDER BY  id limit 28");    
               }else{
                    $Resultado=mysql_query("SELECT * FROM post ORDER BY  id limit 28");
                }

while($apli=mysql_fetch_array($Resultado)){
      $iduse=$apli['iduser'];
            $result_mie= mysql_query("SELECT * FROM tbl_user where user_id=$iduse");
            $usr =mysql_result($result_mie, 0, "user_name");
            $idpost=$apli['id'];
            $result_mie= mysql_query("SELECT * FROM publicaciones where id_post=$idpost");
            $numerocoment =mysql_num_rows($result_mie);
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
<p class="asde" >Comentarios: '.$numerocoment.'</p>
<div id="bgt"><div class="btn_desc">Descargar</div></div>               
</div>    

</div>
 
</div> </div>      </div> 
</a>
    ';
}
echo '
 <div class="more" style="position: relative;overflow: hidden;width: 100%;text-align: center;cursor: pointer;
         background: whiteSmoke;;margin-bottom: 10px;padding: 10px;" onclick="mas('.$id_mas.')">
        <span>Ver mas</span>
    </div>    
';
             ?> 
