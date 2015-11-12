<?php
class page_base_securisee_admin extends page_base {

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
							<li><a href="ajout_enfant_admin.php">Inscrire un enfant</a></li>
							<li><a href="modif_enfant_admin.php">Modifier un enfant</a></li>
							<li><a href="supp_enfant_admin.php">Supprimer un enfant</a></li>
						</ul>
					</li>
					<li><a href="">Gestion des Familles </a>
						<ul>
							<li><a href="ajout_famille.php">Inscrire une famille</a></li>
							<li><a href="modif_famille.php">Modifier une famille</a></li>
							<li><a href="supp_famille.php">Supprimer une famille</a></li>
						</ul>
					</li>
					
	
		<?php 

	}
}
