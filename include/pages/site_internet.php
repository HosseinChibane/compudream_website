<DIV id="main">
	<?php
	$contenuarticle = getDbConnection()->query("select id, titre,contenu,page from article WHERE page = 'Création site internet - Professionnels' ORDER BY temps DESC");
	$contenu = $contenuarticle->fetch();
	if ($contenuarticle) {	//Connexion à la bdd
	while ($contenu)
	{
	($_SESSION['bienconnecte'] == 1) ?
	$linkedit = '<a href="forms/modifierarticle.php?id='.$contenu['id'].'">Modifier</a>
	<a href="actions/supprimerarticle.php?id='.$contenu['id'].'">Supprimer</a>
<a href="actions/majarticle.php?id='.$contenu['id'].'">Mettre en avant</a>'	:
	$linkedit = NULL;
	print	"<div id='milieu'><p><h1>"	. $contenu["titre"]		. "</h1>"
	.	"</br>"	. $contenu["contenu"]	. "</br>"
	.	"</br>" . $linkedit ."</p></div>";
	$contenu = $contenuarticle->fetch();
	}
	} else {	//No bdd Test
	($_SESSION['bienconnecte'] == 1) ?
	$linkedit = '<a href="#">Modifier (test)</a>
	<a href="#">Supprimer (test)</a>' :
	$linkedit = NULL;
	print	"<h1>"	. "Un titre"		. "</h1>"
	.	"</br>"	. "Un Contenu"	. "</br>"
	.	"</br>" . $linkedit;
	};?>
</DIV>
	<div id="bas">
	</div>