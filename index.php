<?php
 ob_start();
?> 
<html>
        

    <head>
      
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>EL androide black | Inicio</title>
        <link rel="stylesheet" type="text/css" href="css/dsddfgfindexggfc.css" media="screen" />
         <link rel="stylesheet" type="text/css" href="css/post23424.css" media="screen" />
        <style>
        
        .i{
            background: #3B9ADB;
        }
        </style>
    </head>
    <body>
         <div style="width: 100%" >
            <?php
          require 'slider/index.php'; 
            ?>
         </div>
        <div style="   position: relative" >
        <?php
        require 'conten.php';
        ?>
        </div>
          
  </body>
  
  
</html> 
    
<?php
  //Assign all Page Specific variables
  $pagemaincontent = ob_get_contents();
  ob_end_clean();
  $pagetitle = "EL androide black | Inicio";
  //Apply the template
include("content.php");
?>