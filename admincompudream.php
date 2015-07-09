<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php session_start(); ?>
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr" xml:lang="fr" dir="ltr" >
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=latin1" />
		<link rel="shortcut icon" href="./icon/favicon.ico" type="image/x-icon" />
		<link rel="stylesheet" href="./include/design/style.css">
		<title>CompuDream - Administration</title>
	</head>
	<body class="fond">
		<center>
			<div class="choix">
				<?php
					echo 			 '<form action="./admin/seconnecter.php" method="post">';
					echo			 '<br/>Nom d\'utilisateur : ';
					echo			 '<br/><input type = "text" name="user" size="25">';
					echo			 '<br/>Mot de passe : ';
					echo			 '<br/><input type = "password" name="mdp" size="25">';
					echo			 '<p>';
					echo			 '<input type="submit" value="Connexion">';
					echo			 '<input type="reset" value="Annuler">';
					echo			 '</p>';
					echo			 '</form>';
					if( isset($_SESSION['id']))
					{
						if (($_SESSION['id']) == "erreur")
						{
							echo "Nom d'utilisateur ou mot de passe incorrect.";
						}
						if ($_SESSION['id'] == "connexion")
						{
							echo "Connexion échoué, veuillez réessayez";
						}
						else
						{
							if( isset($_SESSION['util']) && isset($_SESSION['clegen']))
							{
								if ($_SESSION['id'] == $_SESSION['util'].$_SESSION['clegen'])
								{
									header('Location: ./admin/admin.php ');
								}
							}
						}
					}
				?>
			</div>
		</center>
	</body>
</html>