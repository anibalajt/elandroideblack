$(document).ready(function(){
						   
	$('#comment').bind("blur focus keydown keypress keyup", function(){recount();});
	$('#file').bind("onChange", function(){activar();});
	$('input.submitButton').attr('disabled','disabled');
	
	
	
});

function activar()
{
		$('input.submitButton').removeAttr('disabled').removeClass('inact');

	
}
function recount()
{
//    if ($('#file').val('')!="")
	var maxlen=1000;
	var current = maxlen-$('#comment').val().length;
	$('.counter').html(current);
	
		
	if(current<0 || current==maxlen)
	{

		$('.counter').css('color','#D40D12');
		$('input.submitButton').attr('disabled','disabled').addClass('inact');

	}
	else
		$('input.submitButton').removeAttr('disabled').removeClass('inact');

	
	if(current<10)
		$('.counter').css('color','#D40D12');
	
	else if(current<20)
		$('.counter').css('color','#5C0002');

	else
		$('.counter').css('color','#cccccc');
	
}

