<?php
session_start();
if(isset($_SESSION['user_id'])){  
?>
<script>
 document.location='adm.php';
</script>
<?php
 }else{
?>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script src="js/jquery_lo.js" type="text/javascript" language="javascript"></script>
        <style>
            html,body, div, span, applet, object, iframe, h1, h2, h3, h4, h5, h6, p, blockquote, pre, a, abbr, acronym, address, big, cite, code, del, dfn, em, font, img, ins, kbd, q, s, samp, small, strike, sub, sup, tt, var, dl, dt, dd, ol, ul, li, fieldset, form, label, legend, table, caption, tbody, tfoot, thead, tr, th, td, article, aside, dialog, figure, header, footer, hgroup, menu, nav, section, time, mark, audio, video {
margin: 0;
padding: 0;
border: 0;
outline: 0;
font-weight: inherit;
font-style: inherit;
font-size: 100%;
border-image: initial;
line-height: 13px;
font-family: 'Open Sans',arial,sans-serif;
}
.main{
    width: 100%;
    height: auto;
    position: relative;
    overflow: hidden;
}
.content{
/*    max-width: 1000px;*/
    height: auto;
    overflow: hidden;
    position: relative;
    margin: auto;
    text-align: center;
}
.m_c{
width: 500px;
height: 300px;
overflow: hidden;
z-index: 9;
margin: auto;
text-align: center;
}
.leave{
    padding: 10px;
float: left;
text-align: right;
width: 141px;
}
.nput {
width: 225px;
padding: 5px;
}
        </style>
        <script language="javascript">

$(document).ready(function()
{
	$("#login_form").submit(function()
	{
		//remove all the class add the messagebox classes and start fading
		$("#msgbox").removeClass().addClass('messagebox').text('Validando....').fadeIn(1000);
		//check the username exists or not from ajax
		$.post("ajax_login.php",{ user_name:$('#username').val(),password:$('#password').val(),rand:Math.random() } ,function(data)
        {
		  if(data=='yes') //if correct login detail
		  {
		  	$("#msgbox").fadeTo(200,0.1,function()  //start fading the messagebox
			{ 
			  //add message and change the class of the box and start fading
			  $(this).html('Iniciando.....').addClass('messageboxok').fadeTo(900,1,
              function()
			  { 
			  	 //redirect to secure page
				 document.location='adm.php';
			  });
			  
			});
		  }
		  else 
		  {
		  	$("#msgbox").fadeTo(200,0.1,function() //start fading the messagebox
			{ 
			  //add message and change the class of the box and start fading
			  $(this).html('Usuario o contraseña incorrecta...').addClass('messageboxerror').fadeTo(900,1);
			});		
          }
				
        });
 		return false; //not to post the  form physically
	});
	//now call the ajax also focus move from 
	$("#password").blur(function()
	{
		$("#login_form").trigger('submit');
	});
       
       
       
       $("#regis_form").submit(function()
	{
		//remove all the class add the messagebox classes and start fading
		$("#msgbo").removeClass().addClass('messagebox').text('Validando....').fadeIn(1000);
		//check the username exists or not from ajax
		$.post("registrar.php",{ usuario:$('#usuario').val(),email:$('#email').val(),passwor:$('#passwor').val(),rand:Math.random() } ,function(data)
        {
		  if(data=='yes') //if correct login detail
		  {
		  	$("#msgbox").fadeTo(200,0.1,function()  //start fading the messagebox
			{ 
			  //add message and change the class of the box and start fading
			  $(this).html('Iniciando.....').addClass('messageboxok').fadeTo(900,1,
              function()
			  { 
			  	 //redirect to secure page
				 document.location='index.php';
			  });
			  
			});
		  }
		  else 
		  {
		  	$("#msgbo").fadeTo(200,0.1,function() //start fading the messagebox
			{ 
			  //add message and change the class of the box and start fading
			  $(this).html('El email ya ha sido registrado...').addClass('messageboxerror').fadeTo(900,1);
			});		
          }
				
        });
 		return false; //not to post the  form physically
	});
	//now call the ajax also focus move from 
	$("#password").blur(function()
	{
		$("#login_form").trigger('submit');
	});
});
</script>

    </head>
    <body>
        <div class="main">
            <div class="content">
                <div class="m_c">
                    
                    <div id="block2" style="width: 397px;position: relative;top: 50px">
                    
                        <form method="post" action="" id="login_form">

                        
                            <div class="box username hasome">
                              <div class="leave">
                                <span class="holder">Correo electronico</span>
                              </div> 
                              <div class="frm_txt"> 
                                <input class="nput" name="username" type="text" id="username" title="correo electrónico" autocomplete="on">
                              </div>     
                                
                            </div>
                            
                            <div class="box password">
                                <div class="leave">
                                    <span class="holder">password</span>
                                </div>
                                <div class="frm_txt">    
                                    <input class="nput" name="password" type="password" id="password"  title="Contraseña">
                                </div>
                                
                            </div>
                            
                            <div class="but  Iniciar">
                            
                                <input name="Submit" type="submit" id="submit" class="button" value="Login" />
                                
                                <span id="msgbox" style="display:none"></span>
                                
                            </div>


                        <input type="hidden" name="scribe_log">
                        <input type="hidden" name="redirect_after_login" value="">


                            
                        </form>
                    
                    </div>                                                                                       
                </div>
            </div>
        </div>
    </body>
</html>
 
<?php
 }
?>