<?php
require("dbc.php");
// On vérifie que les champs sont utilisés
	if(isset($_POST['pseudo']) AND isset($_POST['message']))
	{
		// On vérifie que les champs ne sont pas vides
		if($_POST['pseudo'] != NULL AND $_POST['message'] != NULL)
		{
		// On choisit le dernier message de la base de données
		$retour = mysql_query("SELECT message FROM minichat ORDER BY id DESC LIMIT 0,1") or die (mysql_error());
		$donnees = mysql_fetch_array($retour);
			// On compare le dernier message de la BDD et celui obtenu via le formulaire
			if($donnees['message'] != $_POST['message'])
			{
			
			$pseudo = mysql_real_escape_string($_POST['pseudo']);
			$message = mysql_real_escape_string($_POST['message']);
			// S'ils sont bien différents l'un de l'autre, on l'ajoute à la BDD
			mysql_query("INSERT INTO minichat VALUES('','$pseudo','$message')") or die(mysql_error());
			}
			// S'ils sont identiques, on envoie un petit message d'erreur
			else
			{
			echo "Merci d'éviter les doublons";
			}
		}
	}
	header('Location: index.php');
?>

