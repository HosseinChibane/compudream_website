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
						require_once('../include/function.php');
						$titre=$_GET['titre'];
						$contenu=$_GET['contenu'];
						$page=$_GET['page'];
						$temps=time();
						$requete = getDbConnection()->query("INSERT INTO article (titre,contenu,temps,page) VALUES('".$titre."','".$contenu."','".$temps."','".$page."')");
						header("Location: ../admin/admin.php?id=articles");
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
		?>