<?php

session_start();

include_once('../class/autoload.php');

$errors         = array();
$data 			= array();
$data['success']=false;




 $tab=array();
$mypdo=new mypdo();


$tab['nom']=$_POST['nom'];
$tab['prenom']=$_POST['prenom'];
$tab['specificite']=$_POST['specificite'];
$tab['id_enfant']=$_POST['id_enfant'];


$data=$mypdo-> supp_enfant_famille($tab);

echo json_encode($data);
?>