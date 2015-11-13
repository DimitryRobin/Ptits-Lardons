<?php
class page_base_securisee_personnel extends page_base {

	public function __construct($p) {
		parent::__construct($p);
	}
	public function affiche() {
		
		parent::affiche();
		
	}
	public function affiche_menu() {

		parent::affiche_menu();
		?>		
					<li><a href="">Gestion enfants </a>
						<ul>
							<li><a href="Modification_enfant.php">Modification</a></li>
							<li><a href="consultation_enfant.php">Consultation</a></li>
						</ul>
					</li>
					
	
		<?php 

	}
}
