<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="css/asjda454kd.css" media="screen" />
        <script type="text/javascript" src="js/jquery.js"></script>
        <title></title>
        <script>
    $(document).ready(function(){
       $('.tag_gal').click(function(event) {
            $(".tag_galeria").css("display", "block");
            $(".tag_descrrip").css("display", "none");
            $(".tag_video").css("display", "none");
        });
       $('.tag_desc').click(function(event) {
            $(".tag_galeria").css("display", "none");
            $(".tag_descrrip").css("display", "block");
            $(".tag_video").css("display", "none");
        });
       $('.tag_vid').click(function(event) {
            $(".tag_galeria").css("display", "none");
            $(".tag_descrrip").css("display", "none");
            $(".tag_video").css("display", "block");
        });
    
       
    });    
    </script>
    </head>
    <body>        
       <?php
       if(isSet($_POST['val']))
          {
           $id=($_POST['val']);
		$visita1="1";
            define  ('INCLUDE_CHECK',true);
            require 'funciones/connect.php';
            include("funciones/funciones.php");
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
            $nota =mysql_result($result, 0, "nota");
            $post_id =mysql_result($result, 0, "id");
	
	$visita1=$visita+$visita1;
 	$C="UPDATE post SET  visita=$visita1  WHERE id=$id";
	 mysql_query($C) or die (mysql_error());            

	}
          
       echo '
        <div style="top: -18px;position: relative;">
            <div class="titul">
                
                <div class="d" style="top: 4px;"> '.$titilo.'</div>';
                if ($url_archivo!=""){
                echo '
                <div class="d"><a  target="_blank" class="submit" href="'.$url_archivo.'">Descargar</a></div>';
                   }
           echo' </div>
            <div class="detall">
                <div class="menu_tag">
                    <div class="tag_gal a">
                        Galeria
                    </div>
                    <div class="tag_desc a">
                        <span>Descripcion</span>
                    </div>
                    <div class="tag_vid a">
                        <span>Video</span>
                    </div>                        
';
           
               echo' </div>
                <div class="tag_galeria">
                    <div style="overflow: hidden;float: left;">
                        <div class="">';
                        if($masimagen1!=""){
                           echo' <div style="float: left;position: relative;">
                                <img src="'.$masimagen1.'" class="img">
                            </div>';}
                            if($masimagen2!=""){
                           echo' <div style="float: left;position: relative;">
                                <img src="'.$masimagen2.'" class="img">
                            </div>';}
                            if($masimagen3!=""){
                          echo'  <div style="float: left;position: relative;">
                                <img src="'.$masimagen3.'" class="img">
                            </div>';
                          
                            }
                            if($masimagen4!=""){
                           echo' <div style="float: left;position: relative;">
                                <img src="'.$masimagen4.'" class="img">
                            </div>';
                           
                            }
                            
                           
                echo'        </div>
                    </div>
                </div> 
                <div class="tag_descrrip" style="display: none">
                    <div style="float:right;height: 476px;overflow: overlay;padding: 9px;padding-right: 24px;" >
                        <div style="color: #7B9726;font-size: 25px;padding: 0 10px 14px 0;"> 
                            <span>Descripcion</span>
                        </div>
                        <div style="line-height: 18px;">
                            '.nl2br($descripccion).'
                        </div>';
                      if($nota!=""){  
                        echo'<div style="color: #7B9726;font-size: 25px;padding: 13px  10px 14px 0;"> 
                            <span>Nota</span>
                        </div>
                        <div style="line-height: 18px;">
                            '.nl2br($nota).'
                        </div>
                    </div>
                </div>';}
                if($videp!=""){
                echo '<div class="tag_video" style="display: none">
                    <div style="float:right;height: 476px;overflow: overlay;" >
                       
                        <div style="line-height: 18px;">
                            <div class="masiia">

                                <div class="doc-video-section">
                                    <object width="420" height="336" class="doc-video">
                                        <param name="movie" value="https://www.youtube.com/v/'.$videp.'?fs=1&amp;rel=0&amp;version=3">
                                        <param name="allowFullScreen" value="true">
                                        <param name="allowscriptaccess" value="always">
                                        <param name="wmode" value="opaque">
                                        <embed src="https://www.youtube.com/v/'.$videp.'?fs=1&amp;rel=0&amp;version=3" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" wmode="opaque" width="800" height="384">
                                    </object>
                                </div>
                           </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
  ';}
    }
    ?>
    </body>
    
</html>

