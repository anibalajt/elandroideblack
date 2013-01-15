<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="css/main.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="css/dsddfgfinicioggfc.css" media="screen" />
        <title></title>
        
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript">

$(document).ready(function(){

//        $(".search").click(function(evento){
//		$(".search").css("background", "#fff");
//	});
$(".search").keyup(function()
{
    

var searchbox = $(this).val();
var dataString = 'searchword='+ searchbox;

if(searchbox.length == 0) {
			// Hide the suggestion box.
$('#display').hide();
}
else
{

$.ajax({
type: "POST",
url: "search.php",
data: dataString,
cache: false,
success: function(html)
{
  
$("#display").html(html).show();


	}
});
}return false;
});
});

function fill(thisValue) {

		setTimeout("$('#display').hide();", 200);
	}

</script>
<script type="text/javascript" src="js/placeholder.js"></script>
    </head>
    <body>
        <div class="main">
            <div class="content">
                <div class="m_c">
                    <div class="head">
                        <div class="titulo">
                            <span>
                                El androide black
                            </span>
                        </div>
                        <div class="bus">
                            <input type="text" class="search" id="searchbox" placeholder="Buscar..."
                            autocomplete="off" onkeyup="lookup(this.value);" onblur="fill();">
                        <div id="display" style="display: none;   position: absolute;  ">
                        </div>
                        </div>
                        
                    </div>
                    <div class="left">
                        <div class="stil_menu i">
                           <a class="first sel" href="/"> <span>
                               Inicio
                            </span></a>
                        </div>
                        <div class="stil_menu j">
                           <a href="juegos.php" class="juesels"> <span>
                               Juegos
                            </span></a>
                        </div>
                        <div class="stil_menu a">
                            <a href="aplicaciones.php" class="aplisel"><span>
                               Aplicaciones
                            </span></a>
                        </div>
                    </div>
                    
                  
                </div>
                <div style="margin-top: 63px;">
                    <div class="m_c_p" style="z-index: 0;position: relative">
                        <?php
                        echo $pagemaincontent;
                        ?>
                    </div>
                </div>
            </div>
        </div>
            
    </body>
</html>
