<?php
// load view elements into your pages from the theme
class view { 
	// load the header from theme_parts/header.php
	function get_header($title, $login = 0) {
		require_once('theme_parts/header.php');
	}
	// load the header from theme_parts/footer.php
	function get_footer() {
		require_once('theme_parts/footer.php');
	}
	// load the header from theme_parts/primary_nav.php
	function get_primary_nav($active) {
		require_once('theme_parts/primary_nav.php');
	}
	// load the header from theme_parts/secondary_nav/example.php
	function get_secondary_nav($nav, $active) {
		require_once('theme_parts/secondary_nav/'.$nav.'.php');
	}
}
// if your script runs into an error you can call bug, pass it a message and it will end the current proccess diplaying a message to the user
class bug {
	function __construct($message = null, $data = null){
		if($message != null){ // if a message has been added as a arguement display
			echo $message."<br>";
		}
		if($data != null){ // if data has been sent also
			echo "Debug Data:<br>"; // formating
			echo "======================<br>";
			if(is_array($data)){ // if array as <pre> tags for formatting
				echo "<pre>";
				print_r($data);
				echo "</pre>";	
			}else { // else add line breaks
				echo "<br>";
				echo $data;
				echo "<br>";	
			}
		}
		exit(); // stop script
	}	
}
// Route provides a safe way to redirect users round your site with 301 redirects.
class Route{
	function __construct($destination = null, $para = null){
		$destination = strtolower($destination);
		if (!headers_sent()) { 
			// if headers haven't been sent find and direct user to correct location
			$url = BASE_URL;
				switch($destination){
					case 'login':
						$url .= "index.php";
						break;
					case 'logged-out':
						$url .= "index.php?loggedout";
						break;
					case '404':
						$url .= "404.php";
						break;
					case 'dashboard':
						$url .= "dashboard.php";
						break;	
					default:
						$url .= "dashboard.php";
						break;
				}
				if($para != null){
					if(strpos($url, '?')) {
						$url .= '?'.$para;	
					} else {
						$url .= '&'.$para;	
					}
				}
				header("Location: $url");
		} else {
		new bug('Headers already sent, unable to route to location'); // else create bug to halt the script
		}
	}
}
?>