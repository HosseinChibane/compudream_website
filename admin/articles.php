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
					$compteur = getDbConnection()->query("select count(*) as NBArticle from article");
					// Récupération et affichage des données
					$ligne=$compteur->fetch();
					print "Total d'article : ".$ligne['NBArticle']."</h3>"."<table border='1'><p align='left'><a href='../compudream.php' title='Modifier a partir du site'>Retour a la page d'accueil</a></p><p align='right'><a href='../forms/ajouterarticle.php'>Ajouter un article</a></p><tr><th>Titre</th><th>Article</th><th>Location</th><th>Modifier</th><th>Supprimer</th><th>Mettre en avant</th></tr>";
					$requetearticle = getDbConnection()->query("SELECT id, titre, contenu, temps, page FROM article ORDER BY temps DESC");
					$ligne = $requetearticle->fetch();
					// Récupération et affichage des données
					while($ligne)
					{
						print('<td>'.stripslashes ($ligne['titre']).'</td><td>'.stripslashes ($ligne['contenu']).'</td><td>'.stripslashes ($ligne['page']).'</td><td><a href="../forms/modifierarticle.php?id='.$ligne['id'].'">Modifier</a></td><td><a href="../actions/supprimerarticle.php?id='.$ligne['id'].'">Supprimer</a></td><td><a href="../actions/majarticle.php?id='.$ligne['id'].'">Mettre en avant</a></td></tr>');
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