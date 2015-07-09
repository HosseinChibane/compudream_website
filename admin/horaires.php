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
							$contenuarticle = getDbConnection()->query("select titre,lundi,mardi,mercredi,jeudi,vendredi,samedi,dimanche from horaire");
	$contenu = $contenuarticle->fetch();
							print "<a href='../compudream.php'> Retour à la d'accueil</a> 
							<form action='../actions/modifierhoraire.php' method='get'>
		<fieldset>
				<legend><i>Les champs signalés par * sont obligatoires</i></legend>
					* <span>Titre : </span>
					<input type='text' name='titre' id='titre' value='". $contenu['titre']."'/></br>
					* <span>Lundi : </span>
					<input type='text' name='lundi' id='lundi' value='". $contenu['lundi']."'/></br>
					* <span>Mardi : </span>
					<input type='text' name='mardi' id='mardi' value='". $contenu['mardi']."'/></br>
					* <span>Mercredi : </span>
					<input type='text' name='mercredi' id='mercredi' value='". $contenu['mercredi']."'/></br>
					* <span>Jeudi : </span>
					<input type='text' name='jeudi' id='jeudi' value='". $contenu['jeudi']."'/></br>
					* <span>Vendredi : </span>
					<input type='text' name='vendredi' id='vendredi' value='". $contenu['vendredi']."'/></br>
					* <span>Samedi : </span>
					<input type='text' name='samedi' id='samedi' value='". $contenu['samedi']."'/></br>
					* <span>Dimanche : </span>
					<input type='text' name='dimanche' id='dimanche' value='". $contenu['dimanche']."'/></br>
					
		</fieldset>
		<p><input type='submit'  value='Modifier' /></p>
	</form>
</div>'";
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