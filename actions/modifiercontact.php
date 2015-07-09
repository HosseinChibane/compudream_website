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
require_once('../include/function.php');
$id=$_POST['id'];
$tel=addslashes($_POST['tel']);
$email=addslashes($_POST['email']);
$facebook=addslashes($_POST['facebook']);
getDbConnection()->query(
"UPDATE contact SET tel ='"
.$tel."', email = '"
.$email."',facebook = '"
.$facebook."' WHERE con_id="
.$id);
header("Location: ../admin/admin.php?id=contacts");
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