<?php
error_reporting(E_ALL);
// datebase settings
define('USE_DB', true); // if a databse is used in your application set this to true overwise false
define('DB_HOST', 'localhost'); // the host of the databse you want to use
define('DB_USER', 'web166-spina-mvc'); // the databse username
define('DB_PASS', 'spina-mvc123'); // the password to connect to your databse with
define('DB_NAME', 'web166-spina-mvc'); // the name of the database to select

// other settings
define('BASE_URL', 'http://www.cageymedia-dev.com/spina-test/');

// AUTO LOAD ADDITIONAL CLASSES
// auto loading here only loads the class file,
// includes/example.class.php the class will
// still need constructing as always
$auto_load_classes = array();
?>