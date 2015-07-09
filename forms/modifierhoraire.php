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
<h2>Modification de l'horaire</h2>
	<?php
	require_once('../include/function.php');
	$contenuarticle = getDbConnection()->query("select titre,lundi,mardi,mercredi,jeudi,vendredi,samedi,dimanche from horaire");
	$contenu = $contenuarticle->fetch();
	?>
	<form action="../actions/modifierhoraire.php" method="get">
		<fieldset>
				<legend><i>Les champs signalés par * sont obligatoires</i></legend>
					* <span>Titre : </span>
					<input type="text" name="titre" id="titre" value="<?php echo $contenu['titre'];?>"/></br>
					* <span>Lundi : </span>
					<input type="text" name="lundi" id="lundi" value="<?php echo $contenu['lundi'];?>"/></br>
					* <span>Mardi : </span>
					<input type="text" name="mardi" id="mardi" value="<?php echo $contenu['mardi'];?>"/></br>
					* <span>Mercredi : </span>
					<input type="text" name="mercredi" id="mercredi" value="<?php echo $contenu['mercredi'];?>"/></br>
					* <span>Jeudi : </span>
					<input type="text" name="jeudi" id="jeudi" value="<?php echo $contenu['jeudi'];?>"/></br>
					* <span>Vendredi : </span>
					<input type="text" name="vendredi" id="vendredi" value="<?php echo $contenu['vendredi'];?>"/></br>
					* <span>Samedi : </span>
					<input type="text" name="samedi" id="samedi" value="<?php echo $contenu['samedi'];?>"/></br>
					* <span>Dimanche : </span>
					<input type="text" name="dimanche" id="dimanche" value="<?php echo $contenu['dimanche'];?>"/></br>
					
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
				print "Votre IP a été enregistré, tentative de Hack détecté.";
				}
			}
			else
			{
				print "Impossible d'acédez a la page directement!!";
			}
		?>