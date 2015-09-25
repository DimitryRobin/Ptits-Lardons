<?php
session_start();
include_once('class/autoload.php');
	
	$site = new page_base('Accueil');
	
	if(isset($_SESSION['id']) && isset($_SESSION['type'])){
		if ($_SESSION['type']=='famille'){
			$site = new page_base_securisee_famille('Accueil');
		}
		if ($_SESSION['type']=='admin'){
			$site = new page_base_securisee_admin('Accueil');
		}
	}
		
	$site->js='jssor.core';
	$site->js='jssor.utils';
	$site->js='jssor.slider';
	$site->js='jssor.pbdc';

	$controleur=new controleur();
	$site-> right_sidebar=$site->rempli_right_sidebar();
	$site-> left_sidebar=$controleur->retourne_carroussel();
	$site-> left_sidebar=$controleur->retourne_article_accueil();
	
	$site->affiche();
?>