<?php
function getDbConnection() {
try
{
	$sql_host		= 'bases.sql';
	$sql_user		= 'manuella-cantais';
	$sql_password	= 'Aa120391';
	$sql_db		= 'manuella-cantais-compudream';
	$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
	$bdd = new PDO('mysql:host=' . $sql_host . ';dbname=' . $sql_db . '', $sql_user, $sql_password, $pdo_options);
}
catch (PDOException $e)
{
	echo "Connexion à la base de données impossible.";
}
	return $bdd;
}

?>