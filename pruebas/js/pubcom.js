
$(document).ready(function(){
    $("#form-pub").submit(function()
    {
        frm = document.getElementById('form-pub');
          msg= frm.textarea.value;
          alert(msg)
      var data = "&message="+msg;
            alert('hola mundo')
            $.ajax({
			url: '../include/case.php',
			type: "post",
                        data:data,
			success: function(html){
                           
                            $('#resultado').html(html);
                            
                            /*Listo*/}
		});


    })      
})
