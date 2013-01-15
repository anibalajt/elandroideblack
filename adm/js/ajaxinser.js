function objetoAjax(){
	var xmlhttp=false;
	try {
		xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
	} catch (e) {
		try {
		   xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		} catch (E) {
			xmlhttp = false;
  		}
	}

	if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
		xmlhttp = new XMLHttpRequest();
	}
	return xmlhttp;
}

function enviarDatos(){
	//donde se mostrar� lo resultados
	divResultado = document.getElementById('resultado');
	divFormulario = document.getElementById('formulario');
	//valores de los inputs
	dep=document.frm.comment.value;
        sda=document.frm.hiden.value;
	//instanciamos el objetoAjax
	ajax=objetoAjax();
	//usando del medoto POST
	//archivo que realizar� la operacion
	//actualizacion.php
        
	ajax.open("POST", "inserPubli.php",true);
	ajax.onreadystatechange=function() {
		if (ajax.readyState==4) {
			//mostrar los nuevos registros en esta capa
			divResultado.innerHTML = ajax.responseText
			//mostrar un mensaje de actualizacion correcta
			divFormulario.innerHTML = "<p style=\"border:1px solid red; width:400px;\">La actualizaci&oacute;n se realiz&oacute; correctamente</p>";
		}
	}
	//muy importante este encabezado ya que hacemos uso de un formulario
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	//enviando los valores
        $('#comment').val('');
       
				recount();
	ajax.send("&comment="+dep+"&hiden="+sda)
    
}

