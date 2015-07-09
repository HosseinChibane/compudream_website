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
<h2>Modification du contact</h2>
	<?php
	require_once('../include/function.php');
	$id=$_GET['id'];
	$contenuarticle = getDbConnection()->query("select con_id, libelle, adresse1, adresse2, tel, email,facebook from contact where con_id =".$id);
	$contenu = $contenuarticle->fetch();
	?>
	<form action="../actions/modifiercontact.php" method="post">
		<p><input type="hidden" name="id" value="<?php echo $id?>" /></p>
		<fieldset>
				<legend><i>Les champs signalés par * sont obligatoires</i></legend>
					* <span> Nom : </span>
					<input type="text" name="libelle" id="libelle" value="<?php echo $contenu['libelle'];?>"/>
					* <span> Adresse  : </span>
					<input type="text" name="adresse1" id="adresse1" value="<?php echo $contenu['adresse1'];?>"/>
					* <span> Nom de rue : </span>
					<input type="text" name="adresse2" id="adresse2" value="<?php echo $contenu['adresse2'];?>"/>
					* <span> Téléphone : </span>
					<input type="text" name="tel" id="tel" value="<?php echo $contenu['tel'];?>"/><br/><br/>
					* <span> E-mail : </span>
					<input type="text" name="email" id="email" value="<?php echo $contenu['email'];?>"/>
					
					* <span> Facebook : </span>
					<textarea type="text" name="facebook" id="facebook" cols='40%' rows='10%'><?php echo $contenu['facebook'];?></textarea>
		</fieldset>
		<p><p><input type="submit"  value="Modifier" /><input type=button name="Retour" value="Retour" onclick="history.go(-1)"> </p></p>
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