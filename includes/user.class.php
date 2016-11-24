<?php
// the user class contains basic methods for authenticatiing, login and logout

class user {
	function auth($level) {
		if(isset($_SESSION['user_level'])) {
			if($_SESSION['user_level'] != $level) {
				new Route('login', 'error=access');
			}
		} else {
			new Route('login', 'error=access');
		}
	}
	
	function do_login() {
		global $db;
		$username = $_POST['username'];
		$password = $_POST['password'];
		$password = md5($password);
		$time = strtotime("now");
		
		$query = $db->query("SELECT * FROM users WHERE username = '$username' AND password = '$password'");
		$num_rows = $query->num_rows();
		if($num_rows > 0) {
			// if row is returned get data and start session
			$data = $query->fetch_array();
			$_SESSION['user_id'] = $data['user_id'];
			$_SESSION['user_username'] = $data['username'];
			$_SESSION['user_level'] = $data['user_level'];
			
			// update time last logged in
			$user_id = $data['user_id'];
			$db->query("UDPATE users SET last_login = '$time' WHERE id = '$user_id'");
			new Route('dashboard');	
		} else {
			new Route('login', 'error');
		}
	}
	
	function do_logout() {
		session_destroy();
		new Route('loggedout');	
	}
}
?>