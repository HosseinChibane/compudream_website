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
<h2>Ajout d'une image</h2>


<form action="../actions/ajouterimage.php" method="post" enctype="multipart/form-data">
 
<fieldset>
<legend><i>Les champs signal�s par * sont obligatoires<i></legend>


* <span class="obligatoire">Titre : </span>

<input type="text" name="titre" id="titre"/>

* <span class="obligatoire">Lien vers la page : </span></br>
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
</select>

<br/><br/>

* <span class="obligatoire">Choisissez une photo avec une taille inf�rieure � 2 Mo au format paysage : </span>

<input type="hidden" name="MAX_FILE_SIZE" value="2097152" />
<input type="file" name="photo"  />

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
				print "Votre IP a �t� enregistr�, tentative de Hack d�tect�.";
				}
			}
			else
			{
				print "Impossible d'ac�dez a la page directement!!";
			}
		?>