<?php 
	require_once(THEME_DIR_PHP . '/header.php'); 
	require_once(THEME_DIR_PHP . '/functions.php');
?>

<?php // if a template exists for a page, load it 
	
	// route to page content based on url
	// defined in php/functions.php
	route($Url->whereAmI());

?>

<?php require_once(THEME_DIR_PHP . '/footer.php'); ?>