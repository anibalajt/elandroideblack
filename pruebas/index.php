<?Php
ob_start();
?>
	<?php
      include('include/section.php');
	?>

<?php
  //Assign all Page Specific variables
  $pagemaincontent = ob_get_contents();
  ob_end_clean();
  $pagetitle = "nombre titulo pagina";
  //Apply the template
	include("master.php");
?>