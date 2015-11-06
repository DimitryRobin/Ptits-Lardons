<?php
session_start();
include_once('class/autoload.php');


$site = new page_base_securisee_personnel('Consultation Enfant');
$site->js='jquery.validate.min';
$site->js='messages_fr';
$site->js='jquery.tooltipster.min';
$site->style='tooltipster';
$site->style='perso';


$controleur=new controleur();
$site-> right_sidebar=$site-> rempli_right_sidebar();
$site-> left_sidebar=$controleur->affiche_consultation_enfant('Consult');
if (isset($_POST["nom_checkbox"])){
foreach ($_POST["nom_checkbox"] as $index => $value){
	$site-> left_sidebar=$controleur->retourne_formulaire_enfant_commentaire('Consult',$value);
	$_SESSION['id_enfant']=$value;
	break;
}
}

$site->affiche();

?>
