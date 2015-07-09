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
							$compteur = getDbConnection()->query("select count(*) as NBImage from contenu");
							// Récupération et affichage des données
							$ligne=$compteur->fetch();
							print "Total d'images : ".$ligne['NBImage']."</h3>"."<table border='1'><p align='left'><a href='../compudream.php' title='Modifier a partir du site'>Retour a la page d'accueil</a></p><p align='right'><a href='../forms/ajouterimage.php'>Ajouter une image</a></p><tr><th>Titre</th><th>Date</th><th>Page associé</th><th>Photo</th><th>Modifier</th><th>Supprimer</th></tr>";
							$requetearticle = getDbConnection()->query("SELECT id, titre,date,commentaire,photo  FROM contenu ORDER BY id");
							$ligne = $requetearticle->fetch();
							// Récupération et affichage des données
							while($ligne)
							{
								print('<td>'.stripslashes ($ligne['titre']).'</td><td>'.stripslashes ($ligne['date']).'</td><td>'.stripslashes ($ligne['commentaire']).'</td><td><img src=../include/design/photos/'.stripslashes($ligne['photo']).' width="230" height="100" />'.'</td><td><a href="../forms/modifierimage.php?id='.$ligne['id'].'">Modifier</a></td><td><a href="../actions/supprimerimage.php?id='.$ligne['id'].'">Supprimer</a></td></tr>');
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