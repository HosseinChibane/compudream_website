<?php
$contenuarticle = getDbConnection()->query("select titre,contenu from article");
$contenu = $contenuarticle->fetch();
while($contenu)
{
print "<div class='arrondi'><h1>".$contenu["titre"]."</h1></br>";
print $contenu["contenu"]."</br></br></div></br>";
$contenu = $contenuarticle->fetch();
}
?>