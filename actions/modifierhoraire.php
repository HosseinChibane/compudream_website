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
						$titre=addslashes($_GET['titre']);
						$lundi=addslashes($_GET['lundi']);
						$mardi=addslashes($_GET['mardi']);
						$mercredi=addslashes($_GET['mercredi']);
						$jeudi=addslashes($_GET['jeudi']);
						$vendredi=addslashes($_GET['vendredi']);
						$samedi=addslashes($_GET['samedi']);
						$dimanche=addslashes($_GET['dimanche']);
						$requete = getDbConnection()->query("UPDATE horaire SET titre ='".$titre."', lundi = '".$lundi."', mardi = '".$mardi."', mercredi = '".$mercredi."', jeudi = '".$jeudi."', vendredi = '".$vendredi."', samedi = '".$samedi."', dimanche = '".$dimanche."'");
						header("Location: ../admin/admin.php?id=horaires");
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