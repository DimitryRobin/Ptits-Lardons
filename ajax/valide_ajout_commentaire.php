<?php

session_start();

include_once('../class/autoload.php');

$errors         = array();
$data 			= array();



$data['success']=false;




 $tab=array();
$mypdo=new mypdo();


$tab['idenfant']=$_POST['idenfant'];
$tab['commentaire']=$_POST['commentaire'];

$data=$mypdo-> insert_commentaire($tab);



echo json_encode($data);
?>