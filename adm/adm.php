<?php
session_start();
?>

<?php
 ob_start();
 
 require 'user.php';
 if(isset($_SESSION['user_id'])){
     $ida=$_SESSION["user_id"];
     if (isset($_GET['id'])){
     $id=(int)($_GET['id']);
     
$result= mysql_query("SELECT * FROM post where id=$id");
$result_num= mysql_num_rows($result);
if ($result_num!="0"){
$titilo =mysql_result($result, 0, "titilo");
$descripccion =mysql_result($result, 0, "descripccion");
$imagen =mysql_result($result, 0, "imagen");
$masimagen1 =mysql_result($result, 0, "masimagen1");
$masimagen2 =mysql_result($result, 0, "masimagen2");
$masimagen3 =mysql_result($result, 0, "masimagen3");
$masimagen4 =mysql_result($result, 0, "masimagen4");
$videp =mysql_result($result, 0, "video");
$url_market=mysql_result($result, 0, "url_market");
$url_archivo =mysql_result($result, 0, "url_archivo");
$fecha =mysql_result($result, 0, "fecha");
$visita =mysql_result($result, 0, "visita"); 
$tipo =mysql_result($result, 0, "tipo");
$nota =mysql_result($result, 0, "nota");
 ?>
 <head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<script type="text/javascript" src="js/jquerytxttarea.js"></script>
<script type="text/javascript" src="js/scripttxttarea.js"></script>
</head>

<form action="actualizarrmodinformacion.php" method="post">
   
<p>Titulo:</p>
<input class="name" name="titulo" maxlength="24" type="text" value="<?php echo $titilo ?>" >
<p>Descripcion:</p>
<textarea  cols="" rows="2" id="comment"  name="comment"  class="text-field" ><?php echo $descripccion ?></textarea>
<p>imagen:</p>
<p><input type="text" name="url" class="url name" value="<?php echo $imagen ?>" ></p>

<p><a id="image" >
</a></p>
<p>Mas imagenes:</p>
<p><input type="text" name="masurl" class="maaurl url name" onchange="" value="<?php echo $masimagen1 ?>" ></p>
<p><input type="text" name="masurl2" class="maaurl url name" onchange="" value="<?php echo $masimagen2 ?>"></p>
<p><input type="text" name="masurl3" class="maaurl url name" onchange="" value="<?php echo $masimagen3 ?>"></p>
<p><input type="text" name="masurl4" class="maaurl url name" onchange="" value="<?php echo $masimagen4 ?>"></p>
<p><a id="masimage"  >
</a></p>
<p>Video:</p>
<input type="hidden" name="asdasd" value="<?php echo $id ?>">
<input type="hidden" name="asdwwwwwwwwqasdasdasdad" value="<?php echo $ida ?>">
<p><input type="text" name="video" class="maaurl url name" onchange="" value="<?php echo $videp ?>"></p>
<p>Notas:</p>
<p><textarea style="width: 600px;"  rows="2" id="comment"  name="nota"  class="" ><?php echo  $nota ?></textarea></p>
<p>URL del market:</p>
<p><input type="text" name="url_market" class="maaurl url name" value="<?php echo $url_market ?>" ></p>
<p>URL del archivo:</p>
<p><input type="text" name="url_arc" class="maaurl url name" value="<?php echo $url_archivo ?>"></p>
<p>Categoria:</p>
<select name="tipooo" class="categ">
<option value="Categoria"<?php  if ($tipo=="Categoria") echo "selected" ?> >Categoria</option>
<option value="Juegos" <?php  if ($tipo=="Juegos") echo "selected" ?> title="">Juegos</option>
<option value="Aplicaciones" <?php  if ($tipo=="Aplicaciones") echo "selected" ?> title="">Aplicaciones</option>
</select>


<p><input type="submit" class="submit" name="submit" id="guardar" value="Actualizar"></p>
</form>


<?php
 }
  }
 else{
?>
 <head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<script type="text/javascript" src="js/jquerytxttarea.js"></script>
<script type="text/javascript" src="js/scripttxttarea.js"></script>
</head>

<form action="guardarmodinformacion.php" method="post">
   
<p>Titulo:</p>
<input class="name" name="titulo" type="text" >
<p>Descripcion:</p>
<textarea  cols="" rows="2" id="comment"  name="comment"  class="text-field" ></textarea>
<p>imagen:</p>
<p><input type="text" name="url" class="url name" onchange="image(this.value)" ></p>

<p><a id="image" >
</a></p>
<p>Mas imagenes:</p>
<p><input type="text" name="masurl" class="maaurl url name" onchange="" ></p>
<p><input type="text" name="masurl2" class="maaurl url name" onchange="" ></p>
<p><input type="text" name="masurl3" class="maaurl url name" onchange="" ></p>
<p><input type="text" name="masurl4" class="maaurl url name" onchange="" ></p>
<p><a id="masimage"  >
</a></p>
<p>Video:</p>
<p><input type="text" name="video" class="maaurl url name" onchange="" ></p>
<p>Notas:</p>
<p><textarea style="width: 600px;"  rows="2" id="comment"  name="nota"  class="nota" ></textarea>
</p>
<p>URL del market:</p>
<p><input type="text" name="url_market" class="maaurl url name" ></p>
<p>URL del archivo:</p>
<p><input type="text" name="url_arc" class="maaurl url name" ></p>
<p>Categoria:</p>
<select name="tipooo" class="categ">
<option value="Categoria" >Categoria</option>
<option value="Juegos" title="">Juegos</option>
<option value="Aplicaciones" title="">Aplicaciones</option>
</select>

<p><input type="submit" class="submit" name="submit" id="guardar" value="Guardar"></p>
</form>
<?php
 }
?>


<style type="text/css">
    .categ{
        width: 200px;
            height: 28px;
    }
    .name{
        width: 400px;
        height: 30px;
        padding: 8px;
    }
    .text-field{
        width: 600px;
height: 32px;
    }
    input{
height: 30px;
width: 80px;
font-size: 13px;
    }
   .submit {
       border: 1px solid #2F5BB7;
color: white;
text-shadow: 0 1px rgba(0, 0, 0, 0.3);
background-color: #357AE8;
background-image: -webkit-gradient(linear,left top,left bottom,from(#4d90fe),to(#357ae8));
background-image: -webkit-linear-gradient(top,#4d90fe,#357ae8);
background-image: -moz-linear-gradient(top,#4d90fe,#357ae8);
background-image: -ms-linear-gradient(top,#4d90fe,#357ae8);
background-image: -o-linear-gradient(top,#4d90fe,#357ae8);
background-image: linear-gradient(top,#4d90fe,#357ae8);
border-image: initial;}
   .submit:hover {
border: 1px solid #4d90fe;
color: #fff;
text-decoration: none;

background-color: #4d90fe;
background-image: -webkit-gradient(linear,left top,left bottom,from(#4d90fe),to(#357ae8));
background-image: -webkit-linear-gradient(top,#4d90fe,#357ae8);
background-image: -moz-linear-gradient(top,#4d90fe,#357ae8);
background-image: -ms-linear-gradient(top,#4d90fe,#357ae8);
background-image: -o-linear-gradient(top,#4d90fe,#357ae8);
background-image: linear-gradient(top,#4d90fe,#357ae8);
border-image: initial;
}
</style>

  <?php
  //Assign all Page Specific variables
  $pagemaincontent = ob_get_contents();
  ob_end_clean();
  $pagetitle = "muro";
  //Apply the template
include("cuerpo_1.php");
?>
<?php
 }  else{
 ?>

<script>
 document.location='index.php';
</script>
 <?php 

 }
 ?>