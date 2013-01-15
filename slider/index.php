
<?php
define  ('INCLUDE_CHECK',true);
require 'funciones/connect.php';
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link href='http://fonts.googleapis.com/css?family=Rokkitt:700' rel='stylesheet' type='text/css'>
<link href="slider/styles/style.css" type="text/css" rel="stylesheet"/>
<script type="text/javascript" src="js/script.js"></script> 
  
<link href="slider/styles/jflow.style.css" type="text/css" rel="stylesheet"/>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script src="slider/scripts/jflow.plus.min.js" type="text/javascript"></script>
<script type="text/javascript">

	$(document).ready(function(){

	    $("#myController").jFlow({

			controller: ".jFlowControl", // must be class, use . sign

			slideWrapper : "#jFlowSlider", // must be id, use # sign

			slides: "#mySlides",  // the div where all your sliding divs are nested in

			selectedWrapper: "jFlowSelected",  // just pure text, no sign
			
			effect: "flow", //this is the slide effect (rewind or flow)

			width: "941px",  // this is the width for the content-slider

			height: "299px",  // this is the height for the content-slider

			duration: 400,  // time in milliseconds to transition one slide
			
			pause: 5000, //time between transitions

			prev: ".jFlowPrev", // must be class, use . sign

			next: ".jFlowNext", // must be class, use . sign

			auto: true	

    });

});

</script>
</head>

<body>
<div id="container">
  <div id="header">
   
  </div>

  <div id="sliderContainer">
    <div id="mySlides">
                           <?php
$Resultado=mysql_query("SELECT * FROM post ORDER BY fecha desc LIMIT 8");
$val = 0;
while($apli=mysql_fetch_array($Resultado)){
    $val++;  
    $iduse=$apli['iduser'];
            $result_mie= mysql_query("SELECT * FROM miembros where id=$iduse");
            $usr =mysql_result($result_mie, 0, "usuario");
            $idpost=$apli['id'];
         
      echo'
	
	<div id="slide'.$val.'" class="slide" style="cursor:pointer" onclick="flost('.$apli['id'].')"> 
        <img src="'.$apli['imagen'].'" alt="Slide '.$val.' jFlow Plus" />
        </div>

        

    ';
}
?>
        

    </div>
    <div id="myController"> 
        <span class="jFlowControl"></span> 
        <span class="jFlowControl"></span> 
        <span class="jFlowControl"></span> 
        <span class="jFlowControl"></span> 
        <span class="jFlowControl"></span> 
        <span class="jFlowControl"></span> 
        <span class="jFlowControl"></span> 
        <span class="jFlowControl"></span> 
    </div>
    <div class="jFlowPrev"></div>
    <div class="jFlowNext"></div>
  </div>

</div>

</body>
</html>
