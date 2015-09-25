<?php
session_start();

include_once('../class/autoload.php');

$errors         = array();  	
$data 			= array(); 		
$data['success']=false;




$tab=array();
$mypdo=new mypdo();


$tab['id']=$_POST['id'];
$tab['mp']=$_POST['mp'];
$tab['categ']=$_POST['categ'];


$resultat = $mypdo->connect($tab);
if(isset($resultat))
{
	$_SESSION['id']=$tab['id'];
	$_SESSION['type']=$tab['categ'];
	$data['success']=true;
}
else
{
	$errors['message']='Identifiant,mot de passe,catégorie invalide !';
}



if ( ! empty($errors)) {
	$data['success'] = false;
	$data['errors']  = $errors;
} else {
	if($data['success'])
	{
		$data['message'] = "Vous êtes bien connecté  !";

	}
}
echo json_encode($data);
?>