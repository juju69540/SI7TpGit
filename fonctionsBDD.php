<?php

function connectionBDD(){
	include("BDDparam.php");
	try
	{
		$connexion = new PDO('mysql:host='.$PARAM_hote.';port='.$PARAM_port.';dbname='.$PARAM_nom_bd, $PARAM_utilisateur, $PARAM_mot_passe);
	}
	catch(Exception $e)
	{
		echo 'Une erreur est survenue !';
		die();
	}
	return $connexion;
}

function nbLignesRequete($requete){
	$connexion = connectionBDD();
	$req=$connexion->query($requete); // on va chercher tous les membres de la table qu'on trie par ordre croissant

	return $req->rowcount();
}
function interro($requete)
	{
		try
		{
			$connexion = connectionBDD();
			$req=$connexion->query($requete)

			return $req;
		}
		catch(Exception $e)
		{
			echo 'Une erreur est survenue ! '.$e;
			die();
		}
	}

?>
 
 