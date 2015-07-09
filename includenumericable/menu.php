<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="fr"> <!--<![endif]-->
<script>
	var el = document.getElementsByTagName("body")[0];
	el.className = "";
</script>
<noscript>
	<!--[if IE]>
	<link rel="stylesheet" href="./include/design/ie.css">
	<![endif]-->
</noscript>
<nav id="navigation">  
	<ul>  
		<li>
			<a href="compudream.php">Accueil</a>
		</li>  
		<li id="Pro">
			<a href="Professionnels.php">Professionnels</a>  
			<ul>  
				<li>
					<a href="compudream.php?id=site_internet">Création de Site internet</a>
					</form>
				</li>
				<li>
					<a href="compudream.php?id=maintenance_professionnels">Maintenance</a>
				</li>
			</ul>  
		</li>
		<li id="Par">
				<a href="Particuliers.php">Particuliers</a>  
			<ul>  
			<li>
				<a href="compudream.php?id=maintenance_particuliers">Maintenance</a>
			</li>
			<li>
				<a href="compudream.php?id=the-target">City Game - The target</a>
			</li>
			<li>
				<a href="compudream.php?id=cyberespace">Cyber-espace</a>
			</li>
			<li>
				<a href="compudream.php?id=bureautique">Bureautique & Editions</a>
			</li>
			<li>
				<a href="compudream.php?id=vente">Vente de produits</a>
			</li>
			<li>
				<a href="compudream.php?id=initiation">Initiation a l'informatique</a>
			</li>
			<li>
				<a href="compudream.php?id=antivirus">Antivirus - Dr Web Security Space</a>
			</li>
			</ul>  
			<li>
			</li>
			<li>
				<a href="numericable.php">Numéricable</a>
			</li>
		</li>  
	</ul>
</nav>
<script>
	(function($)
	{
	var nav = $("#navigation");
	nav.find("li").each(function()
	{
		if ($(this).find("ul").length != 0)
		{
			$("").appendTo($(this).children(":first"));
			$(this).mouseenter(function()
			{
				$(this).find("ul").stop(true, true).fadeIn();
			});
			$(this).mouseleave(function()
			{
				$(this).find("ul").stop(true, true).fadeOut();
			});
		}
	});
	})(jQuery);
</script>
<div id="banner">
<ul class="bjqs">
<?php
$photoliste = getDbConnection()->query("select id, titre,date,commentaire,photo from contenu ORDER BY date DESC");
if ($photoliste)
{	//Connexion à la bdd
	$photoaffiche = $photoliste->fetch();
	while ($photoaffiche)
	{
		print	"<li><a href=?id=".$photoaffiche["commentaire"]."><img src='./include/design/photos/".$photoaffiche["photo"]."'width='700' height='300' /></li></a>";
		$photoaffiche = $photoliste->fetch();
	}
}
else
{};
?>
</ul>
</div>
<script>
$(document).ready(function() {
$('#banner').bjqs({
	animation : 'fade',
    animationDuration : 1000,
	automatic: true,
	rotationSpeed: 3000,
	showControls: false,
});
});
</script>