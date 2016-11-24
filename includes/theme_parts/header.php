<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <meta name="viewport" content="width=1024px, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    
    <title><?php echo $title; ?></title>
    
    <!-- Stylesheets -->
    <link rel="stylesheet" href="<?php echo BASE_URL.'css/reset.css'; ?>" />
    <link rel="stylesheet" href="<?php echo BASE_URL.'css/icons.css'; ?>" />
    <link rel="stylesheet" href="<?php echo BASE_URL.'css/formalize.css'; ?>" />
    <link rel="stylesheet" href="<?php echo BASE_URL.'css/checkboxes.css'; ?>" />
    <link rel="stylesheet" href="<?php echo BASE_URL.'css/sourcerer.css'; ?>" />
    <link rel="stylesheet" href="<?php echo BASE_URL.'css/jqueryui.css'; ?>"  />
    <link rel="stylesheet" href="<?php echo BASE_URL.'css/tipsy.css'; ?>"  />
    <link rel="stylesheet" href="<?php echo BASE_URL.'css/calendar.css'; ?>"  />
    <link rel="stylesheet" href="<?php echo BASE_URL.'css/tags.css'; ?>"  />
    <link rel="stylesheet" href="<?php echo BASE_URL.'css/selectboxes.css'; ?>"  />
    <link rel="stylesheet" href="<?php echo BASE_URL.'css/960.css'; ?>"  />
    <link rel="stylesheet" href="<?php echo BASE_URL.'css/main.css'; ?>"  />
    <link rel="stylesheet" media="all and (orientation:portrait)" href="<?php echo BASE_URL.'css/portrait.css'; ?>"  />
    <link rel="apple-touch-icon" href="<?php echo BASE_URL.'apple-touch-icon-precomposed.png'; ?>"  />
    <link rel="shortcut icon" href="<?php echo BASE_URL.'favicon.ico'; ?>"  type="image/x-icon />
    
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="../../js/excanvas.js"></script>
    <![endif]-->
    
    <!-- JavaScript -->
    <script src="<?php echo BASE_URL.'js/jquery.min.js'; ?>"></script>
    <script src="<?php echo BASE_URL.'js/jqueryui.min.js'; ?>"></script>
    <script src="<?php echo BASE_URL.'js/jquery.cookies.js'; ?>"></script>
    <script src="<?php echo BASE_URL.'js/jquery.pjax.js'; ?>"></script>
    <script src="<?php echo BASE_URL.'js/formalize.min.js'; ?>"></script>
    <script src="<?php echo BASE_URL.'js/jquery.metadata.js'; ?>"></script>
    <script src="<?php echo BASE_URL.'js/jquery.validate.js'; ?>"></script>
    <script src="<?php echo BASE_URL.'js/jquery.checkboxes.js'; ?>"></script>
    <script src="<?php echo BASE_URL.'js/jquery.chosen.js'; ?>"></script>
    <script src="<?php echo BASE_URL.'js/jquery.fileinput.js'; ?>"></script>
    <script src="<?php echo BASE_URL.'js/jquery.datatables.js'; ?>"></script>
    <script src="<?php echo BASE_URL.'js/jquery.sourcerer.js'; ?>"></script>
    <script src="<?php echo BASE_URL.'js/jquery.tipsy.js'; ?>"></script>
    <script src="<?php echo BASE_URL.'js/jquery.calendar.js'; ?>"></script>
    <script src="<?php echo BASE_URL.'js/jquery.inputtags.min.js'; ?>"></script>
    <script src="<?php echo BASE_URL.'js/jquery.wymeditor.js'; ?>"></script>
    <script src="<?php echo BASE_URL.'js/jquery.livequery.js'; ?>"></script>
    <script src="<?php echo BASE_URL.'js/jquery.flot.min.js'; ?>"></script>
    <script src="<?php echo BASE_URL.'js/application.js'; ?>"></script>
  </head>
  
  <body <?php if($login == 1) { echo 'id="login"'; } ?>>