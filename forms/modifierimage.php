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
<h2>Modification d'une image</h2>
	<?php
	require_once('../include/function.php');
	$id=$_GET['id'];
	$contenuarticle = getDbConnection()->query("select id, titre, date,commentaire,photo from contenu where id =".$id);
	$contenu = $contenuarticle->fetch();
	?>
	<form action="../actions/modifierimage.php" method="post" enctype="multipart/form-data">
		<p><input type="hidden" name="id" value="<?php echo $contenu['id']?>" /></p>
		<fieldset>
				<legend><i>Les champs signal�s par * sont obligatoires</i></legend>
					* <span>Titre : </span>
					<input type="text" name="titre" id="titre" value="<?php echo $contenu['titre'];?>"/></br>
					* <span>Lien vers la page : </span>
					<select name="commentaire" id="commentaire" size="11">
<option selected value="Accueil">Accueil</option>
<option value="site_internet">Cr�ation site internet - Professionnels</option>
<option value="maintenance_professionnels">Maintenance - Professionnels</option>
<option value="maintenance_particuliers">Maintenance - Particuliers</option>
<option value="the-target">target</option>
<option value="cyberespace">Cyber-espace</option>
<option value="bureautique">Bureautique & Editions</option>
<option value="vente">Vente de produit</option>
<option value="initiation">Initiation a l'informatique</option>
<option value="antivirus">Antivirus - Dr Web Security Space</option>
</select><br/><br/>
					
					* <span>Choisissez une photo avec une taille inf�rieure � 2 Mo au format paysage : </span>
					<input type="hidden" name="MAX_FILE_SIZE" value="2097152" />
					<input type="file" name="photo" />
		</fieldset>
		<p><input type="submit"  value="Modifier" /><input type=button name="Retour" value="Retour" onclick="history.go(-1)"> </p>
	</form>
</div>
<?php
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