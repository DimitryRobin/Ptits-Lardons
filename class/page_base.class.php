<?php

class page_base {

	protected $titre;
	protected $style=array('base', 'modele');
	protected $js=array('jquery.min','perso');
	protected $menu;
	protected $metadescription="Bienvenue à  l'accueil périscolaire de l'école les Ptits-Bouts-De-Choux";
	protected $metakeyword=array('crèche','Accueil périscolaire','Petits Bouts De Choux' );
	protected $right_sidebar;
	protected $left_sidebar;
	
	public function __construct($p) {
				$this->titre = $p;
	}

	public function __set($propriete, $valeur) {
		switch ($propriete) {
			case 'style' : {
				$this->style[count($this->style)+1] = $valeur;
				break;
			}
			case 'js' : {
				$this->js[count($this->js)+1] = $valeur;
				break;
			}
			case 'metakeyword' : {
				$this->metakeyword[count($this->metakeyword)+1] = $valeur;
				break;
			}
			case 'titre' : {
				$this->titre = $valeur;
				break;
			}
			case 'menu' : {
				$this->menu = $valeur;
				break;
			}
			case 'metadescription' : {
				$this->metadescription = $valeur;
				break;
			}
			case 'right_sidebar' : {
				$this->right_sidebar = $this->right_sidebar.$valeur;
				break;
			}
			case 'left_sidebar' : {
				$this->left_sidebar = $this->left_sidebar.$valeur;
				break;
			}

		}
	}
	/******************************Gestion des styles **********************************************/
	/* Insertion des feuilles de style */
	private function affiche_style() {
		foreach ($this->style as $s) {
			echo "<link rel='stylesheet'  href='css/".$s.".css' />\n";
		}

	}
	/******************************Gestion du javascript **********************************************/
	/* Insertion des feuilles de style */
	private function affiche_javascript() {
		foreach ($this->js as $s) {
			echo "<script src='js/".$s.".js'></script>\n";
		}
	}
	/******************************affichage metakeyword **********************************************/
	/* Insertion des feuilles de style */
	private function affiche_keyword() {
		echo '<meta name="keywords" content="';
		foreach ($this->metakeyword as $s) {
			echo utf8_encode($s).',';
		}
		echo '" />';
	}	
	/****************************** Affichage de la partie entÃªte ***************************************/	
	protected function affiche_entete() {
		echo'
           <header>
				<img src="./image/prodG9.png"" class="logo" alt="logo"/>
				<h1>
					<span>Ptits-Lardons</span>
				</h1>
				<p class="sous-titre">
				<strong>Bienvenue</strong>
				à l\'accueil périscolaire de l\'école les Ptits-Lardons
				</p>
            </header>
		';
	}
	/****************************** Affichage du menu ***************************************/	
	
	protected function affiche_menu() {
		echo '
				<li><a   href="index.php" >Accueil </a></li>
				<li><a   href="reglement.php" >Le règlement</a></li>';
		if(!(isset($_SESSION['id']) && isset($_SESSION['type'])))
		{	
			echo '
				<li><a  class="bouton_droite" href="connect.php">Connexion</a></li>';
		} 
		else
		{
			echo '
				<li><a  class="bouton_droite" href="deconnect.php">Déconnexion</a></li>';
		}
	}
	public function affiche_entete_menu() {
		echo '
						<div id="menu_horizontal">
							<nav>
								<ul>';
	}
	public function affiche_footer_menu(){
		echo '
								</ul>
							</nav>
						</div>';

	}

		/****************************************** remplissage affichage colonne ***************************/
	public function rempli_right_sidebar() {
		return'
			
				<article>
					<h3>Ptits-Lardons</h3>
										<p>12 rue des gones</br>
										49000 ANGERS</br>
										Tel : 02.41.27.11.71</br>
										Mail : pbdc49@gmai.com</p>
										
											<a  href="contact.php" class="button">Contact</a>
                </article>
				';
							
	}
	
	/****************************************** Affichage du pied de la page ***************************/
	private function affiche_footer() {
		echo '
		<!-- Footer -->
			<footer>
				<p>Site de la crèche des Ptits-Lardons -  ANGERS </p>
				<p id="copyright">
				créé par Pierre HERMANGE, Jordan JAMAIN & Dimitry ROBIN.
				SSII 1FO@SIO - technologies mises en oeuvre PHP objet - jquery - Ajax
				<a href="http://chevrollier.e-lyco.fr/">Chevrollier</a> 
				</p>
            </footer>
		';
	}

	
	/********************************************* Fonction permettant l'affichage de la page ****************/

	public function affiche() {
		
		
		?>
			<!DOCCTYPE html>
			<html lang='fr'>
				<head>
					<title><?php echo $this->titre; ?></title>
					<meta http-equiv="content-type" content="text/html; charset=utf-8" />
					<meta name="description" content="<?php echo $this->metadescription; ?>" />
					<?php $this->affiche_keyword(); ?>
					<?php $this->affiche_javascript(); ?>
					<?php $this->affiche_style(); ?>
				</head>
				<body>
					<div id="global">
						<?php $this->affiche_entete(); ?>
						<?php $this->affiche_entete_menu(); ?>
						<?php $this->affiche_menu(); ?>
						<?php $this->affiche_footer_menu(); ?>
						<div id="conteneur">
							<section class="gauche">
								<?php echo $this->left_sidebar; ?>
							</section>
							<section class="droite">
								<?php echo $this->right_sidebar;?>
							</section>
						</div>
						<?php $this->affiche_footer(); ?>
					</div>
				</body>
			</html>
		<?php
	}

}

?>
