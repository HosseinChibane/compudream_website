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
						{?>
<?php

$id=$_GET['id'];
$requete = getDbConnection()->query("DELETE FROM contenu WHERE id=".$id);
header("Location: ../admin/admin.php?id=images");
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