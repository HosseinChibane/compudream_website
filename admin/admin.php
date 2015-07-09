<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr" xml:lang="fr" dir="ltr" >
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=latin1" />
		<link rel="shortcut icon" href="../include/design/favicon.ico" type="image/x-icon" />
		<link rel="stylesheet" href="../include/design/style.css">
		<script src="../include/js/jquery.js"></script>
		<script src="../include/js/modernizr.js"></script>
		<title>CompuDream - Administration</title>
	</head>
	<body> 
		<?php
		require_once('../include/function.php');	
		session_start();
		if( isset($_SESSION['id']))
		{
			if( isset($_SESSION['util']) && isset($_SESSION['clegen']))
			{
				if ($_SESSION['id'] == $_SESSION['util'].$_SESSION['clegen'])
				{
					$_SESSION['bienconnecte'] = 1;
					if ($_SESSION['bienconnecte'] == 1)
					{
						require_once('../include/adminbandeau.php');
						require_once('../admin/adminmenu.php');
						if(!isset($_GET["id"]))
							print "<h3 align='center'>Bienvenue Administrateur,<br/> Que puis-je faire pour vous ?</h3>";
						else
						{
							switch ($_GET["id"])
							{    
								case "articles":  
								require_once('./articles.php');    
								break;    
								case "horaires":   
								require_once('./horaires.php');
								break;    
								case "contacts":  
								require_once('contacts.php');    
								break;    
								case "images":  
								require_once('./images.php');
								break;
							}
						}
					}
				}
			}
			else
			{
				print "Votre IP a été enregistré, tentative de Hack détecté.";
			}
		}
		else
		{
			print "Impossible d'acédez a la page directement!!";
		}
		require_once('../include/pied.php'); 
		?>
	</body>
</html>