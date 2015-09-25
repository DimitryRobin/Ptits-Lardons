<?php
session_start();
include_once('class/autoload.php');
	
	$site = new page_base('Règlement');
	if(isset($_SESSION['id']) && isset($_SESSION['type'])){
		if ($_SESSION['type']=='famille'){
			$site = new page_base_securisee_famille('Accueil');
		}
		if ($_SESSION['type']=='admin'){
			$site = new page_base_securisee_admin('Accueil');
		}
	}

	$controleur=new controleur();
	$site-> right_sidebar=$site->rempli_right_sidebar();
	$site-> left_sidebar=$controleur->retourne_reglement();

	
	$site->affiche();
?>