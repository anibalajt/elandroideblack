<?php
 define  ('INCLUDE_CHECK',true);
            require 'funciones/connect.php';
            include("funciones/funciones.php");
            if($_POST['searchword']!="")
{
$q="";

$q=$_POST['searchword'];

$sql_res=mysql_query("select * from post where titilo like '%$q%'  order by id LIMIT 15");
    while($row=mysql_fetch_array($sql_res))
    {
    $id=$row['id'];
    $nombre=$row['titilo'];

    $re_fname='<b>'.$q.'</b>';
    $re_lname='<b>'.$q.'</b>';

    $final_fname = str_ireplace($q, $re_fname, $nombre);

    echo '<a onclick="flost('.$id.')" "class="estlin">
    <div class="display_box" id="display_box"style=" " align="left">
    '.$final_fname.'&nbsp;<br/>
    <span style="font-size:9px;left="5px"; color:#999999"></span></div>';
    }
}
?>
</a>
