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

$id=$_POST['id'];
$titre=addslashes($_POST['titre']);
$commentaire=addslashes($_POST['commentaire']);
		if ($_FILES['photo']['error'])
			{
				switch ($_FILES['photo']['error'])
					{    
						case 1: // UPLOAD_ERR_INI_SIZE    
						echo	"Le fichier d�passe la limite autoris�e par le serveur (fichier php.ini) !";    
						break;    
						case 2: // UPLOAD_ERR_FORM_SIZE    
						echo "Le fichier d�passe la limite autoris�e dans le formulaire HTML !";
						break;    
						case 3: // UPLOAD_ERR_PARTIAL    
						echo "L'envoi du fichier a �t� interrompu pendant le transfert !";    
						break;    
						case 4: // UPLOAD_ERR_NO_FILE    
						echo "Le fichier que vous avez envoy� a une taille nulle !";
						break;
					}
			}
		else
		{
			move_uploaded_file($_FILES['photo']['tmp_name'], "../include/design/photos/".$_FILES['photo']['name']);
			$requete = getDbConnection()->query("UPDATE contenu SET titre ='".$titre."', commentaire = '".$commentaire."', date = now(), photo ='".$_FILES['photo']['name']."' WHERE id=".$id);
			header("Location: ../admin/admin.php?id=images");
		}
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