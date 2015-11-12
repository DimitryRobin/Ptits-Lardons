<?php

session_start();

include_once('../class/autoload.php');

$errors         = array();
$data 			= array();
$data['success']=false;




 $tab=array();
$mypdo=new mypdo();


$tab['identifiant']=$_POST['identifiant'];

$data=$mypdo-> supp_famille_admin($tab);

echo json_encode($data);
?>