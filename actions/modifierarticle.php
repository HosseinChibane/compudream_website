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
						$id=$_GET['id'];
						$titre=addslashes($_GET['titre']);
						$contenu=addslashes($_GET['contenu']);
						$temps=time();
						$page=$_GET['page'];
						$requete = getDbConnection()->query("UPDATE article SET titre ='".$titre."', contenu = '".$contenu."', temps = '".$temps."', page = '".$page."' WHERE id=".$id);
						header("Location: ../admin/admin.php?id=articles");
						}
					}
				}
				else
				{
				print "Votre IP a �t� enregistr�, tentative de Hack d�tect�.";
				}
			}
			else
			{
				print "Impossible d'ac�dez a la page directement!!";
			}
		?>