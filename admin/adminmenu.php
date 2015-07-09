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
<nav id="navigationadmin">  
	<ul>  
		<li>
			<a href="./admin.php">Accueil</a>
		</li>  
		<li id="Art">
			<a href="?id=articles">Articles</a>  
		</li>
		<li id="Hor">
			<a href="?id=horaires">Horaires</a>
		</li>  
		<li id="Con">
				<a href="?id=contacts">Contacts</a>  
		</li><li id="Im">
				<a href="?id=images">Images</a>  
		</li>
		<li id="Dec">
				<a href="./sedeconnecter.php">Déconnexion</a>  
		</li>  
	</ul>
</nav>
<script>
	(function($)
	{
	var nav = $("#navigationadmin");
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
