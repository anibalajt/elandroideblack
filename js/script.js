function flost(val){
    $("body").append('<div id="main_list" class="main_list" style="opacity: 0.6;width: 100%;height: 100%"></div>');
    $("body").append('<div id="m_l_c" >\
<div class="container_list">\
<div class="cerr" onclick="cerrar()">X</div>\
<div class="panel_list">\
            <div class="m_c_p_l">\
                <div class="m_c_p_l_1">\
                </div>\
        </div>\
    </div>\
  </div>\
  </div>');
    
    ver(val);
        
    return true;    
    
}
function ver(val)
{		   
    
$(function() {
$.ajax({
type: "POST",
url: "file.php",
data: {"val":val},

cache: false,

success: function(html){
$(".m_c_p_l_1").append(html);
}
});
});
}
function mas(val)
{		   
    $('.more').remove();
$(function() {
$.ajax({
type: "POST",
url: "more.php",
data: {"id":val},

cache: false,

success: function(html){
$(".display").append(html);
}
});
});
}
function mas_jg(val)
{		   
    $('.more').remove();
$(function() {
$.ajax({
type: "POST",
url: "carjuegoa.php",
data: {"id":val},

cache: false,

success: function(html){
$(".display").append(html);
}
});
});
}
function mas_apli(val)
{		   
    $('.more').remove();
$(function() {
$.ajax({
type: "POST",
url: "caraplication.php",
data: {"id":val},

cache: false,

success: function(html){
$(".display").append(html);
}
});
});
}
