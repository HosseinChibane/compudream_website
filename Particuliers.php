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


<title>CompuDream</title>
</head>
<body class="fond">
<?php
session_start();
if (!isset($_SESSION['bienconnecte']))
{
	$_SESSION['bienconnecte'] = 0;
}
require_once('./include/function.php');
require_once('./include/bandeau.php');
require_once('./include/menu.php');
if(!isset($_GET["id"])) // Verifie si clic de meu fait. si pas fait recherche le body.
{
require_once('./include/body.php'); // Page accueil
}
else
{
				switch ($_GET["id"])
					{    
						case "site_internet":  
						require_once('./include/pages/site_internet.php');    
						break;    
						case "maintenance_professionnels":   
						require_once('./include/pages/maintenancepro.php');
						break;    
						case "maintenance_particuliers":  
						require_once('./include/pages/maintenancepar.php');    
						break;    
						case "the-target":  
						require_once('./include/pages/target.php');
						break;
						case "cyberespace":  
						require_once('./include/pages/cyberespace.php');   
						break;    
						case "bureautique":   
						require_once('./include/pages/bureautique.php');
						break;    
						case "vente":  
						require_once('./include/pages/vente.php');    
						break;    
						case "initiation":  
						require_once('./include/pages/initiation.php');
						break;   
						case "antivirus":  
						require_once('./include/pages/antivirus.php');
						break;
						case "mentions-legales":  
						require_once('./include/pages/mentions.php');
						break;
						case "contact":  
						require_once('./include/pages/contact.php');
						break;
						case "qui-sommes-nous":  
						require_once('./include/pages/nous.php');
						break;
					}
}
require_once('./include/pied.php');
?>
</body>
</html>