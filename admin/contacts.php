<?php
			if( isset($_SESSION['id']))
			{
				if( isset($_SESSION['util']) && isset($_SESSION['clegen']))
				{
					if ($_SESSION['id'] == $_SESSION['util'].$_SESSION['clegen'])
					{
						$_SESSION['bienconnecte'] = 1;
						if ($_SESSION['bienconnecte'] == 1)
						{
							$compteur = getDbConnection()->query("select * from contact");
							// Récupération et affichage des données
							$ligne=$compteur->fetch();
							print "<table border='1'><p align='left'><a href='../compudream.php' title='Modifier a partir du site'>Retour a la page d'accueil</a></p><tr><th>Libelle</th><th>Adresse</th><th>Téléphone</th><th>E-mail</th><th>Facebook</th><th>Modifier</th></tr>";
							$requetearticle = getDbConnection()->query("SELECT con_id, libelle, adresse1, adresse2, cp, ville, tel,email,facebook FROM contact ORDER BY con_id");
							$ligne = $requetearticle->fetch();
							// Récupération et affichage des données
							while($ligne)
							{
								print('<td>'.stripslashes ($ligne['libelle']).'</td><td>'.stripslashes ($ligne['adresse1']).' '.stripslashes ($ligne['adresse2']).' '.stripslashes ($ligne['cp']).' '.stripslashes ($ligne['ville']).'</td><td>'.stripslashes ($ligne['tel']).'</td><td>'.stripslashes ($ligne['email']).'</td><td>'.stripslashes ($ligne['facebook']).'</td><td><a href="../forms/modifiercontact.php?id='.$ligne['con_id'].'">Modifier</a></td></tr>');
								$ligne =$requetearticle->fetch();
								
								  
							}
							print "</table>";
							
							
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