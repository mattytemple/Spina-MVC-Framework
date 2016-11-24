<?php require_once('includes/load.php'); ?>
<?php 
	$view = new view;
	$view->get_header('Login', 1);
?>
<div id="login_container">
      <div id="login_form">
      <?php
	 	if(isset($_GET['error'])) {
			echo "<span class=\"login-error\">The username and password you entered do not match our records</span>";
		}
		if(isset($_GET['loggedout'])) {
			echo "<span class=\"login-sucess\">You have been logged out sucessfully</span>";
		}
	  ?>
        <form action="login.php?do_login" method="post">
          <p>
            <input type="text" id="username" name="username" placeholder="Username" class="{validate: {required: true}}" />
          </p>
          <p>
            <input type="password" id="password" name="password" placeholder="Password" class="{validate: {required: true}}" />
          </p>
          <button type="submit" class="button blue">Login</button>
        </form>
      </div>
    </div>
<?php
	$view->get_footer();
?>