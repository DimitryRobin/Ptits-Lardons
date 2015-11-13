<?php

session_start();

include_once('../class/autoload.php');

$errors         = array();
$data 			= array();



$data['success']=false;




 $tab=array();
$mypdo=new mypdo();


$tab['commentaire']=$_POST['commentaire'];
//$tab['idenfant']=$_POST['idenfant'];

$data=$mypdo-> insert_commentaire($tab);



echo json_encode($data);
?>