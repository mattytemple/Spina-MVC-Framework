<?php
require_once('config.php');
// connec to databae
if(USE_DB === true) { // if USE_DB is set to true in config.php connect to the database
	$db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
	if($db->connect_errno) { // if error connecting to database die
		die('<h1>Error connecting to database</h1>');	
	} else { // if connected to database load system
		session_start();
		require_once('common.class.php');
		
		// auto load additioanl classes defined in config.php
		if(!empty($auto_load_classes)) {
			foreach($auto_load_classes as $class) {
				require_once($class.'.class.php');	
			}
		}
	}
} else { // if USE_DB is false in config.php start session and load classes
	session_start();
	require_once('common.class.php');
	
	// auto load additioanl classes defined in config.php
	if(!empty($auto_load_classes)) {
		foreach($auto_load_classes as $class) {
			require_once($class.'.class.php');	
		}
	}	
}
?>