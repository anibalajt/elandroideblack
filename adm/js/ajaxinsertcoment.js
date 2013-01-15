$(document).ready(function(){
// Executed once all the page elements are loaded

	lastVal = totHistory;

	// Create the slider:
	$("#slider").slider({
			value:totHistory,
			min: 1,
			max: totHistory,
			animate: true,
			slide: function(event, ui) {

				if(lastVal>ui.value)
					$(buildQ(lastVal,ui.value)).hide('fast').find('.addComment').remove();
				// Using buildQ to build the jQuery selector
				// If we are moving the slider backward, hide the previous comment


				else if(lastVal<ui.value)
					$(buildQ(lastVal,ui.value)).show('fast');
				// Otherwise show it

				lastVal = ui.value;
			}
		});
});

var totHistory=0;
// Holds the number of comments

var positions = new Array();
var lastVal;

function addHistory(obj)
{
	/* Gets called on page load for each comment, and on comment submit */
	totHistory++;
	positions.push(obj.id);
}

function buildQ(from,to)
{
	/* Building a jQuery selector from the begin
		and end point of the slide */

	if(from>to)
	{
		var tmp=to;
		to=from;
		from=tmp;
	}

	from++;
	to++;

	var query='';
	for(var i=from;i<to;i++)
	{
		if(i!=from) query+=',';
		query+='.com-'+positions[i-1];
	}

	/* Each comment has an unique com-(Comment ID) class
		that we are using to address it */

	return query;
}
//function script(where,parent)
//{
//
//	var $el;
//
//	if($('.Buttoncoment').length) return false;
//	// If there already is a comment submition form
//	// shown on the page, return and exit
//
//	if(!where)
//		$el = $('#commentArea');
//	else
//		$el = $(where).closest('.waveComment');
//
//	if(!parent) parent=0;
//
//	// If we are adding a comment, but there are hidden comments by the slider:
//
//	var comment = '
//';
//
//	$el.append(comment);
//
//	// Append the form
//}
function addComment(where,parent)
{

	var $el;

	if($('.Buttoncoment').length) return false;
	// If there already is a comment submition form
	// shown on the page, return and exit

	if(!where)
		$el = $('#commentArea');
	else
		$el = $(where).closest('.waveComment');

	if(!parent) parent=0;

	// If we are adding a comment, but there are hidden comments by the slider:

	var comment = '<div class="waveComment addComment">\
		<div class="comment">\
			<div class="commentAvatar">\
                        <img src="img/índice.jpg" width="30" height="30">\
			</div>\
			<div class="commentText">\
			\
			<textarea cols="" rows="2" id="comment" style="resize: none; overflow-y: hidden; height: 38px; " name="comment" class="textArea"maxlength="500"></textarea>\
		        <div><input type="button" class="Buttoncoment" value="Comentar" onclick="addSubmit(this,'+parent+')" />  <input type="button" class="Buttoncancelar" value="Cancelar" onclick="cancelAdd(this);return false" /></div>\
			\
			</div>\
		</div>\
	\
	</div>';

	$el.append(comment);

	// Append the form
}

function cancelAdd(el)
{
	$(el).closest('.waveComment').remove();
}

function addSubmit(el,parent)
{
	/* Executed when clicking the submit button */

	var cText = $(el).closest('.commentText');
	var text = cText.find('textarea').val();
       	var wC = $(el).closest('.waveComment');


	if(text.length==0)
	{
            
		return false;
	}

	$(el).parent().html('<img src="img/ajax_load.gif" width="16" height="16" />');
	// Showing the loading gif animation

	// Send an AJAX request:
	$.ajax({
		type: "POST",
		url: "saveComment.php",
		data: "comment="+encodeURIComponent(text)+"&parent="+parent,
		/* Sending both the text and the parent of the comment */
		success: function(msg){

			/* PHP returns the automatically assigned ID of the new comment */
			var ins_id = parseInt(msg);
			if(ins_id)
			{
				wC.addClass('com-'+ins_id);
				addHistory({id:ins_id});
				
				lastVal=totHistory;
			}

			
			// Hiding the form and showing the comment

		}
	     });
transForm(text,cText);
}

function transForm(text,cText)
{
	var tmpStr ='<span class="name">Tú:</span> '+text;
	cText.html(tmpStr);
}
