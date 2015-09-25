<?php

session_start();

include_once('../class/autoload.php');

$errors         = array();
$data 			= array();
$data['success']=false;




 $tab=array();
$mypdo=new mypdo();


$tab['identifiant']=$_POST['identifiant'];
$tab['mp']=$_POST['mp'];
$tab['nom1']=$_POST['nom1'];
$tab['prenom1']=$_POST['prenom1'];
$tab['adresse11']=$_POST['adresse11'];
$tab['adresse12']=$_POST['adresse12'];
$tab['cp1']=$_POST['cp1'];
$tab['ville1']=$_POST['ville1'];
$tab['mail1']=$_POST['mail1'];
$tab['tel11']=$_POST['tel11'];
$tab['tel12']=$_POST['tel12'];
$tab['tel13']=$_POST['tel13'];
$tab['fonction1']=$_POST['fonction1'];
$tab['nom2']=$_POST['nom2'];
$tab['prenom2']=$_POST['prenom2'];
$tab['adresse21']=$_POST['adresse21'];
$tab['adresse22']=$_POST['adresse22'];
$tab['cp2']=$_POST['cp2'];
$tab['ville2']=$_POST['ville2'];
$tab['mail2']=$_POST['mail2'];
$tab['tel21']=$_POST['tel21'];
$tab['tel22']=$_POST['tel22'];
$tab['tel23']=$_POST['tel23'];
$tab['fonction2']=$_POST['fonction2'];

$data=$mypdo-> modif_famille_admin($tab);



echo json_encode($data);
?>