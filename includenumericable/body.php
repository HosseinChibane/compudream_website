<DIV id="main">
	<div id="gauche">
	<p>
	<?php 		$contenuarticle = getDbConnection()->query("select id, titre,contenu,page from article WHERE page = 'Accueil' ORDER BY temps DESC");
	if ($contenuarticle) {	//Connexion à la bdd
	$contenu = $contenuarticle->fetch();
	($_SESSION['bienconnecte'] == 1) ?
	$linkedit = '<a href="forms/modifierarticle.php?id='.$contenu['id'].'">Modifier</a>
	<a href="actions/supprimerarticle.php?id='.$contenu['id'].'">Supprimer</a>
	<a href="actions/majarticle.php?id='.$contenu['id'].'">Mettre en avant</a>' :
	$linkedit = NULL;
	print	"<h1>"	. $contenu["titre"]		. "</h1>"
	.	"</br>"	. $contenu["contenu"]	. "</br>"
	.	"</br>" . $linkedit;
	$contenu = $contenuarticle->fetch();
	} else {	//No bdd Test
	($_SESSION['bienconnecte'] == 1) ?
	$linkedit = '<a href="#">Modifier (test)</a>
	<a href="#">Supprimer (test)</a>' :
	$linkedit = NULL;
	print	"<h1>"	. "Un titre"		. "</h1>"
	.	"</br>"	. "Un Contenu"	. "</br>"
	.	"</br>" . $linkedit;
	};?>
	</p>
	</div>
	<div id="equilibrage">
	</div>
	<div id="droite">
	<?php horaire();?>
	</div>
	<div id="bas">
	</div>
	<div id="gauche">
	<p>
	<?php
	if ($contenuarticle) {	//Connexion à la bdd
	($_SESSION['bienconnecte'] == 1) ?
	$linkedit = '<a href="forms/modifierarticle.php?id='.$contenu['id'].'">Modifier</a>
	<a href="actions/supprimerarticle.php?id='.$contenu['id'].'">Supprimer</a>
	<a href="actions/majarticle.php?id='.$contenu['id'].'">Mettre en avant</a>' :
	$linkedit = NULL;
	print	"<h1>"	. $contenu["titre"]		. "</h1>"
	.	"</br>"	. $contenu["contenu"]	. "</br>"
	.	"</br>" . $linkedit;
	$contenu = $contenuarticle->fetch();
	} else {	//No bdd Test
	($_SESSION['bienconnecte'] == 1) ?
	$linkedit = '<a href="#">Modifier (test)</a>
	<a href="#">Supprimer (test)</a>' :
	$linkedit = NULL;
	print	"<h1>"	. "Un titre"		. "</h1>"
	.	"</br>"	. "Un Contenu"	. "</br>"
	.	"</br>" . $linkedit;
	};?>
	</p>
	</div>
	<div id="equilibrage">
	</div>
	<div id="droite">
	<?php contact();?>
	</div>
	<div id="bas">
	</div>
	<?php
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
	<div id="bas">
	</div>
</DIV>

<?php
	function contact() {
		$compte = getDbConnection()->query("select con_id, adresse1, adresse2, cp, ville, tel,email,facebook from contact");
		$cont = $compte->fetch();
		($_SESSION['bienconnecte'] == 1) ? $linkedit = '</br><a href="forms/modifiercontact.php?id='.$cont["con_id"].'">Modifier</a>' : $linkedit = NULL;
			
		if ($compte) {
			print	"<h1>Contact</h1></br>"
			.	"Une question ? Une réservation ?</br>"
			.	"Pour nous joindre:</br></br>"
			.	"<small>- Par e-mail : " . $cont["email"] . "</br>"
			.	"- Par téléphone : " . $cont["tel"] . "</br>"
			.	"- Sur <a href='" . $cont["facebook"] . "'>Facebook</a></br>"
			.	"- Notre adresse : " . $cont["adresse1"] . " " . $cont["adresse2"] . " " . $cont["cp"] . " " . $cont["ville"] . "  </br>"
			.	'<iframe width="212" height="175" scrolling="no" src="http://maps.google.fr/maps?f=q&amp;source=embed&amp;hl=fr&amp;geocode=&amp;q=CompuDream,+Rue+de+la+R%C3%A9publique,+Rouen&amp;aq=0&amp;sll=46.75984,1.738281&amp;sspn=7.286722,19.753418&amp;ie=UTF8&amp;hq=CompuDream,&amp;hnear=Rue+de+la+R%C3%A9publique,+76000+Rouen,+Seine-Maritime,+Haute-Normandie&amp;t=m&amp;z=13&amp;iwloc=A&amp;cid=9320224071632483710&amp;ll=49.44025,1.097595&amp;output=embed"></iframe><br/><a href="http://maps.google.fr/maps?f=q&amp;source=embed&amp;hl=fr&amp;geocode=&amp;q=CompuDream,+Rue+de+la+R%C3%A9publique,+Rouen&amp;aq=0&amp;sll=46.75984,1.738281&amp;sspn=7.286722,19.753418&amp;ie=UTF8&amp;hq=CompuDream,&amp;hnear=Rue+de+la+R%C3%A9publique,+76000+Rouen,+Seine-Maritime,+Haute-Normandie&amp;t=m&amp;z=13&amp;iwloc=A&amp;cid=9320224071632483710&amp;ll=49.44025,1.097595" style="color:#0000FF">Agrandir le plan</a></small>'
			.	$linkedit;
		} else {
			print	"<h1>Contact</h1></br>"
			.	"Une question ? Une réservation ?</br>"
			.	"Pour nous joindre:</br></br>"
			.	"<small>- Par e-mail : (ERREUR.)</br>"
			.	"- Par téléphone : (ERREUR.)</br>"
			.	"- Sur <a href='#'>Facebook</a></br>"
			.	"- Notre adresse : 37 Rue de la république 76000 Rouen</br>"
			.	'<iframe width="212" height="175" scrolling="no" src="http://maps.google.fr/maps?f=q&amp;source=embed&amp;hl=fr&amp;geocode=&amp;q=CompuDream,+Rue+de+la+R%C3%A9publique,+Rouen&amp;aq=0&amp;sll=46.75984,1.738281&amp;sspn=7.286722,19.753418&amp;ie=UTF8&amp;hq=CompuDream,&amp;hnear=Rue+de+la+R%C3%A9publique,+76000+Rouen,+Seine-Maritime,+Haute-Normandie&amp;t=m&amp;z=13&amp;iwloc=A&amp;cid=9320224071632483710&amp;ll=49.44025,1.097595&amp;output=embed"></iframe><br/><a href="http://maps.google.fr/maps?f=q&amp;source=embed&amp;hl=fr&amp;geocode=&amp;q=CompuDream,+Rue+de+la+R%C3%A9publique,+Rouen&amp;aq=0&amp;sll=46.75984,1.738281&amp;sspn=7.286722,19.753418&amp;ie=UTF8&amp;hq=CompuDream,&amp;hnear=Rue+de+la+R%C3%A9publique,+76000+Rouen,+Seine-Maritime,+Haute-Normandie&amp;t=m&amp;z=13&amp;iwloc=A&amp;cid=9320224071632483710&amp;ll=49.44025,1.097595" style="color:#0000FF">Agrandir le plan</a></small>'
			.	$linkedit;
		}
	}
	
	function horaire() {
		$contenuhoraire = getDbConnection()->query("select titre,lundi,mardi,mercredi,jeudi,vendredi,samedi,dimanche from horaire");
		($_SESSION['bienconnecte'] == 1) ? $linkedit = '<a href="forms/modifierhoraire.php">Modifier</a>' : $linkedit = NULL;
			
		if ($contenuhoraire) {	//Connexion à la bdd
			$contenuh = $contenuhoraire->fetch();
		
			print 	"<h1>"			. $contenuh["titre"]	. "</h1></br>"
			.	"Lundi : "		. $contenuh["lundi"]	. "</br>"
			.	"Mardi : "		. $contenuh["mardi"]	. "</br>"
			.	"Mercredi : "	. $contenuh["mercredi"]	. "</br>"
			.	"Jeudi : "		. $contenuh["jeudi"]	. "</br>"
			.	"Vendredi : "	. $contenuh["vendredi"]	. "</br>"
			.	"Samedi : "		. $contenuh["samedi"]	. "</br>"
			.	"Dimanche : "	. $contenuh["dimanche"]	. "</br>"
			.	$linkedit		. "</br>";
		} else {	//No bdd Test
			print 	"<h1>"		. "Horaires"	. "</h1></br>
			Lundi : ERREUR</br>
			Mardi : ERREUR</br>
			Mercredi : ERREUR</br>
			Jeudi : ERREUR</br>
			Vendredi : ERREUR</br>
			Samedi : ERREUR</br>
			Dimanche : ERREUR</br>"
			.	$linkedit		. "</br>";
		}
	}
?>