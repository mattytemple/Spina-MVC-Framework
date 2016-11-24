<?php require_once('includes/load.php'); ?>
<?php 
	$view = new view;
	$view->get_header('Dashbord');
	$view->get_primary_nav(1);
	$view->get_secondary_nav('dashboard', 1);
?>    
    <section id="maincontainer">
      <div id="main" class="container_12">
      
        <!-- Main Area Here -->
      
      </div>
<?php
	$view->get_footer();
?>