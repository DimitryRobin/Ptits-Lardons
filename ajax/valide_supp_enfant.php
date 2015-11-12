<?php

session_start();

include_once('../class/autoload.php');

$errors         = array();
$data 			= array();
$data['success']=false;




 $tab=array();
$mypdo=new mypdo();


$tab['idenfant']=$_POST['idenfant'];

$data=$mypdo-> supp_enfant_famille($tab);

echo json_encode($data);
?>