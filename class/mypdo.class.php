<?php
class mypdo extends PDO{

    private $PARAM_hote='localhost'; // le chemin vers le serveur
    private $PARAM_utilisateur='root'; // nom d'utilisateur pour se connecter
    private $PARAM_mot_passe=''; // mot de passe de l'utilisateur pour se connecter
    private $PARAM_nom_bd='alae';
    
	private $connexion;
    
	public function __construct() {
    	try {
    		
    		$this->connexion = new PDO('mysql:host='.$this->PARAM_hote.';dbname='.$this->PARAM_nom_bd, $this->PARAM_utilisateur, $this->PARAM_mot_passe,array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
    		//echo '<script>alert ("ok connex");</script>)';echo $this->PARAM_nom_bd;
    	}
    	catch (PDOException $e)
    	{
    		echo 'hote: '.$this->PARAM_hote.' '.$_SERVER['DOCUMENT_ROOT'].'<br />';
    		echo 'Erreur : '.$e->getMessage().'<br />';
    		echo 'N° : '.$e->getCode();
    		$this->connexion=false;
    		//echo '<script>alert ("pbs acces bdd");</script>)';
    	}
    }
    public function __get($propriete) {
    	switch ($propriete) {
    		case 'connexion' :
    			{
    				return $this->connexion;
    				break;
    			}
    	}
    }
    
    public function connect($tab)
    {
    if($tab['categ']=='famille'){	
    	$requete='select * from famille where identifiant="'.$tab['id'].'" and mp=MD5("'.$tab['mp'].'");';
    }
	if($tab['categ']=='personnel'){	
    	$requete='select * from personnel where identifiant="'.$tab['id'].'" and mp=MD5("'.$tab['mp'].'");';
    }
    if($tab['categ']=='admin'){
    	$requete='select * from administrateur where identifiant="'.$tab['id'].'" and mp=MD5("'.$tab['mp'].'");';
    }
    	$result=$this->connexion ->query($requete);
    	if ($result)
    
    	{
    		if ($result-> rowCount()==1)
    		{
    			return ($result);
    		}
    	}
    	return null;
    }
	
	public function trouve_enfant($idenfant)
    {
    	$requete='select * from enfant where id_enfant='.$idenfant.';';
    	$result=$this->connexion ->query($requete);
    	if ($result)
    
    	{
    		if ($result-> rowCount()==1)
    		{
    			return ($result->fetch(PDO::FETCH_OBJ));
    		}
    	}
    	return null;
    }
	
    public function trouve_famille($idfamille)
    {
    	$requete='select * from famille where id_famille='.$idfamille.';';
    	$result=$this->connexion ->query($requete);
    	if ($result)
    
    	{
    		if ($result-> rowCount()==1)
    		{
    			return ($result->fetch(PDO::FETCH_OBJ));
    		}
    	}
    	return null;
    }
    
    public function insert_famille_admin($tab)
    {
     	
    	$errors         = array();  	
    	$data 			= array(); 		
    
    	// attention le mot de passe est en clair tant que le mail de confirmation  n'est pas envoyé
    	$requete='INSERT INTO famille (identifiant,mp,nom1,prenom1,adresse11,adresse12,cp1,ville1,mail1,tel11,tel12,tel13,fonction1, nom2,prenom2,adresse21,adresse22,cp2,ville2,mail2,tel21,tel22,tel23,fonction2)
		VALUES ('
    			.$this->connexion ->quote($tab['identifiant']) .','
    			.'MD5('.$this->connexion ->quote($tab['mp']) .'),'
    			.$this->connexion ->quote($tab['nom1']) .','
    			.$this->connexion ->quote($tab['prenom1']) .','
    			.$this->connexion ->quote($tab['adresse11']) .','
    			.$this->connexion ->quote($tab['adresse12']) .','
    			.$this->connexion ->quote($tab['cp1']) .','
    			.$this->connexion ->quote($tab['ville1']) .','
    			.$this->connexion ->quote($tab['mail1']) .','
    			.$this->connexion ->quote($tab['tel11']) .','
    			.$this->connexion ->quote($tab['tel12']) .','
    			.$this->connexion ->quote($tab['tel13']) .','
    			.$this->connexion ->quote($tab['fonction1']) .','
    			.$this->connexion ->quote($tab['nom2']) .','
    			.$this->connexion ->quote($tab['prenom2']) .','
    			.$this->connexion ->quote($tab['adresse21']) .','
    			.$this->connexion ->quote($tab['adresse22']) .','
    			.$this->connexion ->quote($tab['cp2']) .','
    			.$this->connexion ->quote($tab['ville2']) .','
    			.$this->connexion ->quote($tab['mail2']) .','
    			.$this->connexion ->quote($tab['tel21']) .','
    			.$this->connexion ->quote($tab['tel22']) .','
    			.$this->connexion ->quote($tab['tel23']) .','
    			.$this->connexion ->quote($tab['fonction2'])
    		.');';
    
    
    
    	$nblignes=$this->connexion -> exec($requete);
    	if ($nblignes !=1)
    	{
    		$errors['requete']='Pbs insertion famille :'.$requete;
    	}
 
    
    
    	if ( ! empty($errors)) {
    		$data['success'] = false;
    		$data['errors']  = $errors;
    	} else {
    
    		$data['success'] = true;
    		$data['message'] = 'Insertion famille ok!';
    	}
    	return $data;
    }
	
    public function modif_famille_admin($tab)
    {
    
    	 
    	$errors         = array();
    	$data 			= array();
    
    	$requete='update famille '
    	.'set nom1='.$this->connexion ->quote($tab['nom1']) .','
    	.'prenom1='.$this->connexion ->quote($tab['prenom1']) .','
    	.'adresse11='.$this->connexion ->quote($tab['adresse11']) .','
    	.'adresse12='.$this->connexion ->quote($tab['adresse12']) .','
    	.'cp1='.$this->connexion ->quote($tab['cp1']) .','
    	.'ville1='.$this->connexion ->quote($tab['ville1']) .','
    	.'mail1='.$this->connexion ->quote($tab['mail1']) .','
    	.'tel11='.$this->connexion ->quote($tab['tel11']) .','
    	.'tel12='.$this->connexion ->quote($tab['tel12']) .','
    	.'tel13='.$this->connexion ->quote($tab['tel13']) .','
		.'fonction1='.$this->connexion ->quote($tab['fonction1']) .','
		.'nom2='.$this->connexion ->quote($tab['nom2']) .','
    	.'prenom2='.$this->connexion ->quote($tab['prenom2']) .','
    	.'adresse21='.$this->connexion ->quote($tab['adresse21']) .','
    	.'adresse22='.$this->connexion ->quote($tab['adresse22']) .','
    	.'cp2='.$this->connexion ->quote($tab['cp2']) .','
    	.'ville2='.$this->connexion ->quote($tab['ville2']) .','
    	.'mail2='.$this->connexion ->quote($tab['mail2']) .','
    	.'tel21='.$this->connexion ->quote($tab['tel21']) .','
    	.'tel22='.$this->connexion ->quote($tab['tel22']) .','
    	.'tel23='.$this->connexion ->quote($tab['tel23']) .','
		.'fonction2='.$this->connexion ->quote($tab['fonction2']) 
 		.' where identifiant='.$this->connexion ->quote($tab['identifiant']) .';';

     $nblignes=$this->connexion -> exec($requete);
    if ($nblignes !=1)
    {
    	$errors['requete']='Pas de modifications d\'information :'.$requete;
    }
    
    
    
    	if ( ! empty($errors)) {
    		$data['success'] = false;
    		$data['errors']  = $errors;
    	} else {
    
    		$data['success'] = true;
    		$data['message'] = 'Modification famille ok!';
    	}
    	return $data;
    }
    

    
    public function liste_famille()
    {
    	$requete='select * from famille ;';
    	$result=$this->connexion ->query($requete);
    	if ($result)
    	{
    		if ($result-> rowCount()==0)
    		{
    			return false;
    		}
    		return $result;    
    	}
    	return false;
    }
	
	public function liste_enfant()
    {
    	$requete='select id_enfant, nom, prenom, specificite, id_famille from enfant ;';
    	$result=$this->connexion ->query($requete);
    	if ($result)
    	{
    		if ($result-> rowCount()==0)
    		{
    			return false;
    		}
    		return $result;    
    	}
    	return false;
    }
	
public function trouve_commentaire($idenfant)
    {
    	$requete='SELECT c.id_enfant, id_commentaire, libelle_commentaire, date_commentaire FROM commentaire as c inner join enfant as e on c.id_enfant=e.id_enfant where c.id_enfant='.$idenfant.';'; 
    	$result=$this->connexion ->query($requete);
		
    	if ($result)
    
    	{
    		if ($result-> rowCount()!=0) // probleme if ($result-> rowCount()==1)
    		{
				
    			//return ($result->fetch(PDO::FETCH_OBJ));
				return ($result);
				
    		}
    	}
    	return false; //ou false
    }
	
	public function supp_famille_admin($tab)
    {
		$data 			= array();
		
    	$requete='delete from famille where identifiant='.$this->connexion ->quote($tab['identifiant']) .';';
    	$result=$this->connexion ->query($requete);
		
    		$data['success'] = true;
    		$data['message'] = 'Supression famille ok!';
			
    	return $data;
    }
	
	public function insert_enfant_famille($tab)
	{
     	
    	$errors         = array();  	
    	$data 			= array();
			
		// attention le mot de passe est en clair tant que le mail de confirmation  n'est pas envoyé
    	$requete='INSERT INTO enfant (nom,prenom,specificite)
		VALUES ('
    			.$this->connexion ->quote($tab['nom']) .','
    			.$this->connexion ->quote($tab['prenom']) .','
    			.$this->connexion ->quote($tab['specificite']) .','
    			.');';
		
		
	$nblignes=$this->connexion -> exec($requete);
    	if ($nblignes !=1)
    	{
				$errors['requete']='Problemes insertion enfant :'.$requete;
			
			if ( ! empty($errors)) 
			{
				$data['success'] = false;
				$data['errors']  = $errors;
			} 
			else 
			{
		
				$data['success'] = true;
				$data['message'] = 'Insertion enfant ok!';
			}
    	return $data;
		}
	}
	
	
	 public function modif_enfant_famille($tab)
    {
    
    	 
    	$errors         = array();
    	$data 			= array();
    
    	$requete='update enfant '
    	.'set nom='.$this->connexion ->quote($tab['nom']) .','
    	.'prenom='.$this->connexion ->quote($tab['prenom']) .','
    	.'specificite='.$this->connexion ->quote($tab['specificite']) .',';
    	
     $nblignes=$this->connexion -> exec($requete);
	 
    if ($nblignes !=1)
    {
    	$errors['requete']='Pas de modifications d\'information :'.$requete;
    }
    
    
    
    	if ( ! empty($errors)) {
    		$data['success'] = false;
    		$data['errors']  = $errors;
    	} else {
    
    		$data['success'] = true;
    		$data['message'] = 'Modification enfant ok!';
    	}
    	return $data;
    }
	
	public function supp_enfant_famille($tab)
    {
		$data 			= array();
		
    	$requete='delete from enfant where id_enfant='.$this->connexion ->quote($tab['idenfant']) .';';
    	$result=$this->connexion ->query($requete);
		
    		$data['success'] = true;
    		$data['message'] = 'Supression enfant ok!';
			
    	return $data;
    }
	
	public function insert_commentaire($tab)
	{
     	
    	$errors         = array();  	
    	$data 			= array();
			
		// attention le mot de passe est en clair tant que le mail de confirmation  n'est pas envoyé
    	$requete='INSERT INTO commentaire (libelle_commentaire, date_commentaire, id_enfant)
		VALUES ('
    			.$this->connexion ->quote($tab['commentaire']) .','
    			.$this->connexion ->quote(DATE(NOW())) .','
    			.$this->connexion ->quote($tab['idenfant']) .','
    			.') where id_enfant='.$this->connexion ->quote($tab['idenfant']) .';';
		
		
	$nblignes=$this->connexion -> exec($requete);
    	if ($nblignes !=1)
    	{
				$errors['requete']='Problemes insertion commentaire :'.$requete;
			
			if ( ! empty($errors)) 
			{
				$data['success'] = false;
				$data['errors']  = $errors;
			} 
			else 
			{
		
				$data['success'] = true;
				$data['message'] = 'Insertion commentaire ok!';
			}
    	return $data;
		}
	}
	
}
?>
