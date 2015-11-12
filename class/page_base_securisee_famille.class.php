<?php
class page_base_securisee_famille extends page_base {

	public function __construct($p) {
		parent::__construct($p);
	}
	public function affiche() {
		
		parent::affiche();
		
	}
	public function affiche_menu() {

		parent::affiche_menu();
		?>

			<li><a href="">Gestion des enfants </a>
				<ul>
							<li><a href="ajout_enfant_famille.php">Inscrire un enfant</a></li>
							<li><a href="modif_enfant.php">Modifier un enfant</a></li>
							<li><a href="supp_enfant.php">Supprimer un enfant</a></li>
				</ul>
			</li>
	
		<?php 

	}
}
