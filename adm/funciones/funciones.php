
﻿<?php 

function tiempo_fecha($t,$precision=2)
{
    date_default_timezone_set("America/Bogota");
        $t = strtotime($t);

	if(date('d')==date('d',$t)&&(date('m')==date('m',$t))){
                $hora= date('h:i A',$t);
            return  $hora="Hoy a las $hora";
        }else{
                                   $dia=date('j',$t);
                                   $mes=date('m',$t);
                                   $año=date('Y',$t);

                                   if($mes=="01"){$mes= "enero";}
                                   if($mes=="02"){$mes= "febrero";}
                                   if($mes=="03"){$mes= "marzo";}
                                   if($mes=="04"){$mes= "abril";}
                                   if($mes=="05"){$mes= "mayo";}
                                   if($mes=="06"){$mes= "junio";}
                                   if($mes=="07"){$mes= "julio";}
                                   if($mes=="08"){$mes= "agosto";}
                                   if($mes=="09"){$mes= "septiembre";}
                                   if($mes=="10"){$mes= "octubre";}
                                   if($mes=="11"){$mes= "noviembre";}
                                   if($mes=="12"){$mes= "diciembre";}
                                   $todo = "$dia $mes $año";
                                      $hora=date('h:i a',$t);
                                   return $s="$todo, a las $hora ";

        }

   
}
function comprobar_email($email){
    $mail_correcto = 0;
    //compruebo unas cosas primeras
    if ((strlen($email) >= 6) && (substr_count($email,"@") == 1) && (substr($email,0,1) != "@") && (substr($email,strlen($email)-1,1) != "@")){
       if ((!strstr($email,"'")) && (!strstr($email,"\"")) && (!strstr($email,"\\")) && (!strstr($email,"\$")) && (!strstr($email," "))) {
          //miro si tiene caracter .
          if (substr_count($email,".")>= 1){
             //obtengo la terminacion del dominio
             $term_dom = substr(strrchr ($email, '.'),1);
             //compruebo que la terminación del dominio sea correcta
             if (strlen($term_dom)>1 && strlen($term_dom)<5 && (!strstr($term_dom,"@")) ){
                //compruebo que lo de antes del dominio sea correcto
                $antes_dom = substr($email,0,strlen($email) - strlen($term_dom) - 1);
                $caracter_ult = substr($antes_dom,strlen($antes_dom)-1,1);
                if ($caracter_ult != "@" && $caracter_ult != "."){
                   $mail_correcto = 1;
                }
             }
          }
       }
    }
    if ($mail_correcto)
       return 1;
    else
       return 0;
} 
?>