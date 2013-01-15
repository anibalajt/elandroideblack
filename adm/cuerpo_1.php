
 <head>
     <link rel="icon" href="img/419137_312867988772440_100001477255723_827944_904208503_n.png"> 
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
          <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=7" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <link rel="stylesheet" type="text/css" href="css/10000.css" media="screen" />
    </head>
    
    
    <div class="many">
    <div class="cabecera">
        <div class="contenedor_cabe">
            <a href="/">
<!--                <img class="wlogo" alt="" src="img/logo.png">-->
            </a>
       <div class="contenedor_acce">
           <a style="color: #A1A1A1;
font-size: 14px;line-height: 28px;text-decoration: none;" href="logout.php">Salir</a>
       
        </div>
        </div>
         
    </div>
         
    <div class="contenedor">
       
        <div class="panel">
                        
            <div class="">
                <div class="izqui">
                    
                  <div class="menu1">
                       
          <div  class="busc" style="">
<!--              <div style=" float:right; " align="right">
        
            <input type="text" class="search" id="searchbox" value="Buscar..."
                   autocomplete="off"onkeyup="lookup(this.value);" onblur="fill();"
                   style=" outline-color: initial;"
                   /><br />
             

            <div id="display" style="display: none;">
            </div>

             </div>-->
        </div>
                      
                      
           <div class="tit "><a class="" href="/">Inicio</a></div>                        
                      <div class="tit "><a class="" href="adm.php">Nuevo</a></div>                        
                      <div class="tit selecasde"><a class="" href="tod.php">Post</a></div>
<!--                      <div class="tit selecsafds"><a class="" href="juegos.php">Juegos</a></div>
                        <div class="tit selescsdfs"><a class="" href="aplic.php">Aplicaciones</a></div>-->
<!--                        <div class="top">Recomendados</div>-->
<!--                    <div class="top">Mas vistos</div>

                    <div class="top">Nuevos</div>-->
        
                  </div>
                   
            
                    
                </div>
                <div class="display" style="">
            </div>
                <div class="dereca">       
                    <?php
echo $pagemaincontent;
?>
               </div>

            
           </div>
       
        </div>
    </div>
</div>
    
    <style>
        .top{
            border-bottom: 1px solid black;
            font-size: 18px;
            float: left;
width: 196px;
min-height: 22px;
padding: 10px 6px 5px 12px;

font-weight: bold;
color: white;
        }
        
        
.search:focus{
border:0px #302B23  solid;
background:#fff;
color:#000000;
 border:0px ;
opacity:1;
}
.search{
padding-left: 5px;
padding-right: 5px;
	border:0px ;
	background:#FAFAFA;opacity:0.5;
        color:#000000;
}
.estlin{
    color: #FFFFFF;
}
#display
{
width: 214px;
height: auto;
float: right;
position: absolute;
border-top: none;
border: 3px solid transparent;
box-shadow: 0 0 18px rgba(0,0,0,0.5);
overflow: hidden;
background: #272727;

z-index: 120;
}
.display_box
{
padding: 6px 6px 7px 7px;
border-top: solid 1px #333;
font-size: 14px;

position: relative;
z-index: 3;

}

.display_box:hover
{
background-color:#302B23;
 opacity:0.4;
color:#FFFFFF;
}
</style>

<script type="text/javascript" src="js/placeholder.js"></script>
   
    









































<?php
//////Buffer larger content areas like the main page content
////  ob_start();
////  require 'user.php';
////
////$ida=$_SESSION['id'];
//////Select all the todos, ordered by position:
////$row = mysql_fetch_assoc(mysql_query("SELECT * FROM miembros WHERE id='$ida'"));
//////usr	pass	email	sexo	nacim	estado	origen	actual	acerca
//////
////                    $usr=$row['usr'];
////
////$result = mysql_query("SELECT * FROM fotoprefil where iduser=$ida");
////      $foto_usr =mysql_result($result, 0, "url");
//?>

<!--

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<script language="JavaScript" type="text/javascript" src="js/ajaxinser.js"></script>
<script type="text/javascript" src="js/jquerytxttarea.js"></script>
                <script type="text/javascript" src="js/scripttxttarea.js"></script>
<link rel="stylesheet" type="text/css" href="css/2000.css" />



</head>
   <div id="contenedor">

       <div id="commentArea"  >
         <span  class="nom" style=""></span>
         
<form name="frm" action="#" target="upload_iframe" method="post" enctype="multipart/form-data"
        onsubmit="enviarDatos(); return false">


    <div class="funnn">
   <textarea  cols="" rows="2" id="comment"  name="comment"  class="text-field" ></textarea>
   
    </div>
    <div class="funnn" id="d545">

   
    </div>
    <div style="height: 29px;" id="funnn">
         <span style="float: right">
         <input class="submitButton" type="submit" name="Submit"  value="Publicar"/>
        </span>
        
    </div>
</form>

   
        </div>

</div>

</body>
 
 <script type="text/javascript" src="js/activarbotoon.js"></script>

-->
<!--</html>-->

//<?php
//  //Assign all Page Specific variables
//  $pagemaincontent = ob_get_contents();
//  ob_end_clean();
//  $pagetitle = "muro";
//  //Apply the template
//include("principal.php");
//?>