//variables globales
var fun = $(".text");
var search = $("#searchbox");
var defaultText = "Buscar...";

//efectos en el evento focus (foto) para ambas cajas de busqueda
fun.focus(function(){
	$(this).addClass("active");
});
fun.blur(function(){
	$(this).removeClass("active");  
});

//Activamos y auto activamos el foco en la primera caja de busqueda #search1, cuando el documento esta listo


//Mostramos / ocultamos el texto por defecto si es necesario
search.focus(function(){
	if($(this).attr("value") == defaultText) $(this).attr("value", "");
});
search.blur(function(){
	if($(this).attr("value") == "") $(this).attr("value", defaultText);
});