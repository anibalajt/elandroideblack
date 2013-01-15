$(document).ready(function(){

cargar_chat();

})

function cargar_chat()
{
    
    
           
       
   
    
	$("body").append('<div class="cabe_asdeasdasa"><div class="cabe_col"><div class="cabe_conte"><div class="cabe_left"><div class="cabe_left_titu"></div></div><div class="cabe_center"></div><div class="cabe_right"></div></div></div></div>     ');
$(".cabe_left").append('<form action="enviar_opi.php" method="post"><div id="contenedor_opi"><a href="javascript:void(0);" id="boton_login"><span>Chat</span></a></div></form>');
$("#contenedor_opi").append('<div id="caja_opi"></div>');
	$("#caja_opi").append('<div id="mensaje"></div><br />');
	$("#caja_opi").append('<div id="textarea_insertar_mensaje"> <fieldset class="textbox"><div class="box username hasome"><span class="holder">Nombre de usuario</span><input type="text" name="session[username_or_email]" title="Nombre de usuario o correo electrónico" autocomplete="on"><label class="remember"><input type="checkbox" value="1" name="remember_me"><span>Recuerda mis datos</span></label></div><div class="box password"><span class="holder">Contraseña</span><input type="password" name="session[password]" title="Contraseña"><p><a class="forgot" href="/account/resend_password">¿Recordar?</a></p></div><div class="but Iniciar"><button type="submit" class="submit button">Iniciar sesión</button></div></fieldset></div>');
        
	$(".textearea").focus();
	
	$("#boton_login").click(function(event){
				event.preventDefault();
				$("#caja_opi").slideToggle();
//				$("#mensaje").scrollTop($("#mensaje")[0].scrollHeight)
										   });
	
	$("#caja_opi a").click(function(event){
						event.preventDefault();
						$("#caja_opi").slideUp();
									 });
	
}

//	$("body").append(' <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> <meta http-equiv="X-UA-Compatible" content="IE=7" />                 <form action="enviar_opi.php" method="post"><div id="contenedor_opi"><a href="javascript:void(0);" id="mostrar_opi">               <span>Chat</span>            </a>        </div></form>');
//	$("#contenedor_opi").append('<div id="caja_opi"><a href="javascript:void(0);" id="titulo_opi">Chat</a></div>');
//	$("#caja_opi").append('<div id="mensaje"></div><br />');
//	$("#caja_opi").append('<div id="textarea_insertar_mensaje"> <fieldset class="textbox"><div class="box username hasome"><span class="holder">Nombre de usuario</span><input type="text" name="session[username_or_email]" title="Nombre de usuario o correo electrónico" autocomplete="on"><label class="remember"><input type="checkbox" value="1" name="remember_me"><span>Recuerda mis datos</span></label></div><div class="box password"><span class="holder">Contraseña</span><input type="password" name="session[password]" title="Contraseña"><p><a class="forgot" href="/account/resend_password">¿Recordar?</a></p></div><div class="but Iniciar"><button type="submit" class="submit button">Iniciar sesión</button></div></fieldset></div>');
//        
