<script> 
function verificar(o){ 
    var s=o.value.split('\n').length;
    o.rows=(o.value.length/o.cols)+s;
} 
//$(window).one("load", function(){
onload=function(){
    setInterval(function(){verificar(document.getElementById('textarea'));},30);
}
</script>
<style>

</style>
<div id="lateral">
    <div class="lateral">
        <div class="llt">
            <header>
                    
                <h1 style=" margin: auto;text-align: center;">
                	<a id="logo" href="">
                		<!--<img src="http://localhost/novo/img/andres.jpg" alt="" width="110px">-->
                        <span>
                            
                            <?php 
                                $str = ucwords($_SESSION['name_a_user']);
                                echo '
                                '.current(explode(' ',$str)). '    
                                '.current(explode(' ',$_SESSION['apellido_a_user'])).'';
                            ?>
                            
                        </span>
                	</a>
                </h1>
                
                
                <div id="cita">
                    <div class="c_pub" title="novedades"> </div>
                    <div class="c_img" title="fotos"></div>
                    <div class="c_aud" title="audio"></div>
                    <div class="c_amt" title="amigos"></div>
                </div>  

            </header>  
            <aside>
               
                <textarea  name="textarea" cols="20" rows="5" id="textarea" class="control" placeholder="Comparte"></textarea> 
                
            </aside>
      </div>      
    </div>
</div>