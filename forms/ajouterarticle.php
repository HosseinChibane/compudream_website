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
<div id="contenu">
	<script type="text/javascript" src="../ckeditor/ckeditor.js"></script>
	<script src="sample.js" type="text/javascript"></script>
	<link href="sample.css" rel="stylesheet" type="text/css" />

<h2>Ajout d'un article</h2>
  <form action="../actions/ajouterarticle.php?" method="get">
 
<fieldset>
				<legend><i>Les champs signalés par * sont obligatoires<i></legend>
					* <span class="obligatoire">Titre : </span>
					<input type="text" name="titre" id="titre"/>
					<br/><br/>
						* <span class="obligatoire">Contenu : </span>
					<textarea type="text" class="ckeditor" name="contenu" cols='40%' rows='10%' id="contenu"></textarea>
					<br/><br/>
<select name="page" id="page" size="11">
<option selected value="Accueil">Accueil</option>
<option value="Création site internet - Professionnels">Création site internet - Professionnels</option>
<option value="Maintenance - Professionnels">Maintenance - Professionnels</option>
<option value="Maintenance - Particuliers">Maintenance - Particuliers</option>
<option value="City Game - The target">City Game - The target</option>
<option value="Cyber-espace">Cyber-espace</option>
<option value="Bureautique & Editions">Bureautique & Editions</option>
<option value="Vente de produit">Vente de produit</option>
<option value="Initiation a l'informatique">Initiation a l'informatique</option>
<option value="Antivirus - Dr Web Security Space">Antivirus - Dr Web Security Space</option>
</select>
</fieldset>
	<p><input type="submit"  value="Ajouter" /><input type=button name="Retour" value="Retour" onclick="history.go(-1)"> </p>


</form>

</div>
<?php
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