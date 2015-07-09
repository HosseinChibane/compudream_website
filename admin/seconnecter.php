<?php
session_start();
require_once('../include/function.php');
if( isset($_POST['user']) && isset($_POST['mdp']) )
{
	if (getDbConnection())
	{
		$pw = md5($_POST["mdp"]);
		if (getDbConnection()->query('SELECT login,pass_md5 from membre where login=  "'.$_POST["user"].'" and pass_md5 = "'.$pw.'"')->rowcount())
		{
			$_SESSION['clegen'] = md5(rand());
			$_SESSION['util'] = crypt($_POST["user"], '$5$');
			$_SESSION['id']=$_SESSION['util'].$_SESSION['clegen'];
			header('Location: ../admincompudream.php ');
		}
		else
		{
			$_SESSION['id'] = "erreur";
			header('Location: ../admincompudream.php');
		}
	}
	else
	{
		$_SESSION['id'] = "connexion";
		header('Location: ../admincompudream.php');
	}
}
else
	header('Location: ../compudream.php');
?>