<?php

session_start();

include_once('../class/autoload.php');

$errors         = array();
$data 			= array();



$data['success']=false;




 $tab=array();
$mypdo=new mypdo();


$tab['commentaire']=$_POST['commentaire'];
$tab['id_enfant']=$_POST['id_enfant'];

$data=$mypdo-> insert_commentaire($tab);



echo json_encode($data);
?>