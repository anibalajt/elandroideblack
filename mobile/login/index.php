<?php 
session_start();
if(isset($_SESSION['name_a_user'])){
header ("Location: ../index.php"); 
exit;    
}else{
?>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="viewport" content="initial-scale=1,maximum-scale=1,user-scalable=no">
    <noscript>&lt;meta http-equiv="X-Frame-Options" content="deny" /&gt;</noscript>
    <script>window.localStorage&&window.localStorage.clear();</script>
    <?php 
$iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
$android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");
$palmpre = strpos($_SERVER['HTTP_USER_AGENT'],"webOS");
$berry = strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry");
$ipod = strpos($_SERVER['HTTP_USER_AGENT'],"iPod");
 
if ($iphone || $android || $palmpre || $ipod || $berry == true)
{
echo '<link rel="stylesheet" type="text/css" href="style_mobile.css" media="all" />';
}else
   echo '<link rel="stylesheet" type="text/css" href="log.css" media="all" />';
?>
       

    <script src="jquery.js"></script>
    <script language="JavaScript" type="text/javascript" src="login.js"></script>
<script>
//form-register    form-login
$(document).ready(function() {
    $("#register-link").click(function(){
        $('#form-login').css("display","none");
        $('#form_register').css("display","block");    
    })
    $("#login-link").click(function(){
        $('#form_register').css("display","none");
        $('#form-login').css("display","block");
    })
})
</script>
</head>
<body class="body">
    
    <div class="main">

        <div class="top">
            <div class="na_pa">
                <span>Xxxxxxxxxx</span>
            </div>
        </div>
        <div class="left "style=""> 

        </div>

        
        <form  method="post" id="form-login">
            <input type="hidden" name="t" value="">
            <div class="register">
                <a id="register-link">
                    Regístrate
                </a>                
            </div>
            <div class="title-text">
                Iniciar sesión
            </div>
            <div id="login">
                <div id="email-field" class="input">
                   
                    <label id="email-label" for="login-email" style="display: none">
                        Correo electrónico
                    </label>
                    <input id="login-email" type="text" name="login_email" tabindex="1" placeholder="Correo electronico">
                </div>
                <div id="password-field" class="input">
                   
                    <label id="password-label" for="login-password"style="display: none">
                        Contraseña
                    </label>
                    <input type="password" id="login-password" name="login_password" tabindex="2" placeholder="contraseña">
               <input name="login-submit" value="Iniciar sesión" class="submit" type="submit" id="login-submit" tabindex="3">
                </div>
                <div id="login-footer" class="clearfix">
                    <input type="hidden" name="login_submit" value="1">
                    <div id="remember-me">
                        <input type="checkbox" checked="checked" id="remember_me" name="remember_me" tabindex="4" value="Recordarme">
                        <label for="remember_me" style="display: none">
                            Recordarme
                        </label>
                    </div>
                    
                </div>
            </div>
            <a href="/forgot" id="forgot-link" style="float: right;right: 52px;position: relative;">
                ¿Has olvidado tu contraseña?
            </a>
            <div id="rest">
                
            </div>
        </form>
        <form onsubmit="veri();return false" method="post" id="form_register">
            <input type="hidden" name="t" value="">
            <div class="register">
                 <a id="login-link">
                    Iniciar sesión
                </a>
                
            </div>
            <div class="title-text">
                 Regístrate
            </div>
            <div id="register">
                <div id="name-field" class="input">
                   
                    <label id="name-label" for="register-name" style="display: none">
                        Nombre
                    </label>
                    <input id="register_name" type="text" name="register-name" tabindex="1" placeholder="Nombre">
                </div>
                <div id="ltname-field" class="input">
                   
                    <label id="ltname-label" for="register-ltmane" style="display: none">
                        Apellido
                    </label>
                    <input id="register_ltname" type="text" name="register-ltname" tabindex="1" placeholder="Apellido">
                </div>
                <div id="email-field" class="input">
                   
                    <label id="email-label" for="login-email" style="display: none">
                        Correo electrónico
                    </label>
                    <input id="register_email" type="text" name="register-email" tabindex="1" placeholder="Correo electronico">
                </div>
                <div id="password-field" class="input">
                    
                    <label id="password-label" for="login-password"style="display: none">
                        Contraseña
                    </label>
                    <input type="password" id="register_password" name="register-password" tabindex="2" placeholder="contraseña">
               <input name="register-submit" value="Regístrate" class="register-submit" type="submit" id="register-submit" tabindex="3">
                </div>
               
            </div>
          <div id="resultado"></div>  
        </form>
        
    </div>

</body>
<?php
}
?>