<?php 
session_start();
if(isset($_SESSION['name_a_user'])){
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="viewport" content="initial-scale=1,maximum-scale=1,user-scalable=no">
        <noscript>&lt;meta http-equiv="X-Frame-Options" content="deny" /&gt;</noscript>
        <script>window.localStorage&&window.localStorage.clear();</script>
        <title></title>
         <?php 
            $iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
            $android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");
            $palmpre = strpos($_SERVER['HTTP_USER_AGENT'],"webOS");
            $berry = strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry");
            $ipod = strpos($_SERVER['HTTP_USER_AGENT'],"iPod");

            if ($iphone || $android || $palmpre || $ipod || $berry == true)
            {
            echo '<link rel="stylesheet" type="text/css" href="css/style_mobile.css" media="all" />
                <link rel="stylesheet" type="text/css" href="css/pub_mobile.css" media="all" />';
            }else
            echo '<link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />';
        ?>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
        
       <script>
       $(document).ready(function() {
           
            $('.nav').click(function(){
//                    $('.main').css('left','260');
                    $('.menu').css('display','block');
                    $('body').css('overflow','hidden');
                    
            });            
             $('.a6').click(function(){
                    $('.cont_menu').css('display','none');
                    $('.cont_busq').css('display','block');
            }); 
            
             $('.menu_clod').click(function(){
                    $('.menu').css('display','none');
                    $('body').css('overflow','auto');
            }); 
             $('.navpub').click(function(){
                    $('.page_pub').css('display','block');
                    $('.top').css('display','none');
                    $('.content').css('display','none');
                    $('.navpub').css('display','none');
                    $('.top_pub').css('display','block');
                    
            }); 
            
             $('.can_pub').click(function(){
                    $('.page_pub').css('display','none');
                    $('.top').css('display','block');
                    $('.content').css('display','block');
                    $('.top_pub').css('display','none');
                    $('.navpub').css('display','block');
            }); 
            


         });           
       
        </script>
    </head>
    <body>
        <aside class="menu">
                <?php
                        include 'include/menu_mobil.php';
                ?>
        </aside>
        
        <div class="main">
            
            <header class="header">
                <a href="include/publicar.php"> <div class="  navpub">
                        
                </div></a>
                <div class="top">
                    <div class="nav">
                        
                    </div>
                    
                    <div class="na_pa">
                        xxxxxx         
                    </div>
                    
                </div>
                <div class="top_pub" style="display: none">
                      <div class="aweq can_pub" style="float: left">
                        cancelar        
                    </div>
<!--                    <div class="aweq" style="float: right">
                        publicar        
                    </div>     -->
                </div>
            </header>
            <div class="page_pub">
                <?php
                        include 'include/publicar.php';
                ?>
            </div>
            <div class="content">
                       <?php
//                            include('include/left.php');
                       ?>
                        <?php
                           echo $pagemaincontent;
                        ?> 
           </div>
        </div>
    </body>
</html>
<?php
}else{
header ("Location: login/"); 
exit;
}
 
?>