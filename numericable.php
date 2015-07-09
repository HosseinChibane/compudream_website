<?php
	session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr" xml:lang="fr" dir="ltr" >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=latin1" />
<link rel="shortcut icon" href="./include/design/favicon.ico" type="image/x-icon" />


<link rel="stylesheet" href="./include/design/style.css">
<link rel="stylesheet" href="./include/design/slider.css">
<link rel="stylesheet" href="./include/design/main.css">

<script src="./include/js/jquery.js"></script>
<script src="./include/js/modernizr.js"></script>

<script src="./include/js/libs/jquery-1.6.2.min.js"></script>
<script src="./include/js/basic-jquery-slider.js"></script>


<title>Numericable</title>
</head>
<body class="fond">
<?php
if (!isset($_SESSION['bienconnecte']))
{
	$_SESSION['bienconnecte'] = 0;
}
require_once('./include/function.php');
require_once('./includenumericable/bandeau.php');
require_once('./includenumericable/menu.php');
require_once('./includenumericable/body.php');
require_once('./include/pied.php');
?>
</body>
</html>