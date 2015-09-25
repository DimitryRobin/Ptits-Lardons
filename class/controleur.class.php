<?php
class controleur {

	private $vpdo;
	private $db;
	public function __construct() {
		$this->vpdo = new mypdo ();
		$this->db = $this->vpdo->connexion;
	}
	public function __get($propriete) {
		switch ($propriete) {
			case 'vpdo' :
				{
					return $this->vpdo;
					break;
				}
			case 'db' :
				{
					
					return $this->db;
					break;
				}
		}
	}
	public function retourne_reglement()
	{
		return'
		<article>
<h1>REGLEMENT</h1>

<h3>PREAMBULE :</h3>

<p>Ces accueils sont agr&eacute;&eacute;s par la Direction R&eacute;gionale Jeunesse Sports et Coh&eacute;sion sociale et la Protection Maternelle Infantile. Ils ont une vocation sociale mais aussi &eacute;ducative.</p>

<p>Trait d&rsquo;union entre l&rsquo;&eacute;cole et la famille, cet accueil est destin&eacute; &agrave; l&rsquo;&eacute;veil des enfants, &agrave; leur&nbsp;autonomie, &agrave; leur apprentissage du respect des r&egrave;gles de la vie collective, des personnes&nbsp;et des biens, et de l&rsquo;hygi&egrave;ne.</p>

<p>Ce sont des lieux de d&eacute;tente, de loisirs ou de repos, individuel ou en groupe, dans&nbsp;l&rsquo;attente, soit de l&rsquo;ouverture de la journ&eacute;e scolaire, soit du retour en famille. Les enfants&nbsp;peuvent &eacute;galement s&rsquo;y restaurer.</p>

<p>Des agents qualifi&eacute;s de la Ville relevant du service Education assurent l&rsquo;encadrement des</p>

<p>enfants. La direction de l&rsquo;&eacute;cole et le conseil d&rsquo;&eacute;cole sont associ&eacute;s au fonctionnement de&nbsp;ce service.</p>

<p>Les accueils p&eacute;riscolaires sont ouverts avec avis de la Protection Maternelle et Infantile&nbsp;pour les enfants scolaris&eacute;s de moins de 6 ans et s&rsquo;inscrivent dans le cadre du &laquo; contrat&nbsp;enfance jeunesse &raquo; de la CAF (Caisse d&rsquo;Allocations Familiales).</p>

<p>L&rsquo;accueil p&eacute;riscolaire est un service facultatif qui est propos&eacute; par la ville dans le seul but&nbsp;d&rsquo;offrir un service de qualit&eacute; aux enfants.</p>

<p>Le pr&eacute;sent r&egrave;glement a pour vocation de pr&eacute;ciser les modalit&eacute;s d&rsquo;organisation, les&nbsp;conditions d&rsquo;admission et les obligations de chacun pour garantir le bon fonctionnement&nbsp;de cet accueil p&eacute;riscolaire.</p>

<h3>ARTICLE 1 - LOCAUX AFFECT&Eacute;S A L&rsquo;ACCUEIL PERISCOLAIRE</h3>

<p>L&rsquo;accueil p&eacute;riscolaire se d&eacute;roule dans des locaux situ&eacute;s dans l&rsquo;enceinte de l&rsquo;&eacute;cole,&nbsp;am&eacute;nag&eacute;s afin d&rsquo;accueillir dans de bonnes conditions les enfants.</p>

<h3>ARTICLE 2 - CONDITIONS D&rsquo;ADMISSION :</h3>

<p>L&rsquo;accueil p&eacute;riscolaire est destin&eacute; aux enfant(s) scolaris&eacute;s dont le(s) parent(s) travaille(nt)&nbsp;et/ou suit(vent) un stage ou une formation. Un justificatif devra &ecirc;tre fourni lors de&nbsp;l&rsquo;inscription. 2</p>

<p>Y sont accueillis, dans la limite des places disponibles, les enfants de 3 ans et plus&nbsp;scolaris&eacute;s en maternelle et en &eacute;l&eacute;mentaire jusqu&rsquo;au C.E.2, et &eacute;ventuellement au-del&agrave; du&nbsp;C.E.2 pour toute situation sp&eacute;cifique (fratrie...) et ce, apr&egrave;s accord de l&rsquo;autorit&eacute;&nbsp;municipale.</p>

<h3>ARTICLE 3 &ndash; MODALITES D&rsquo;INSCRIPTION :</h3>

<p>L&rsquo;inscription est nominative pour chaque enfant. Elle doit se faire &agrave; l&rsquo;aide du dossier&nbsp;d&rsquo;inscription scolaire ou de renouvellement d&rsquo;inscription aux activit&eacute;s p&eacute;riscolaires.</p>

<p>Ce dossier vous sera remis au service Education au moment de l&rsquo;inscription de votre&nbsp;enfant &agrave; l&rsquo;&eacute;cole.</p>

<h3>ARTICLE 4 - HORAIRES D&rsquo;OUVERTURE DE L&rsquo;ACCUEIL PERISCOLAIRE</h3>

<p>L&rsquo;accueil p&eacute;riscolaire est assur&eacute; les lundis, mardis, jeudis et vendredis, de 7h30 &agrave; 9h00 et&nbsp;de 16h30 &agrave; 18h00.</p>

<p>Pendant ces p&eacute;riodes, les enfants sont plac&eacute;s sous la responsabilit&eacute; du personnel&nbsp;d&rsquo;animation qui a la charge de faire appliquer le pr&eacute;sent r&egrave;glement.</p>

<p>Il est clairement pr&eacute;conis&eacute; par la CAF que le temps de pr&eacute;sence d&rsquo;un enfant dans le&nbsp;groupe scolaire ne doit pas d&eacute;passer 10 heures par jour (entre l&rsquo;accueil p&eacute;riscolaire, la&nbsp;restauration scolaire et la classe). Pour le bien-&ecirc;tre de l&rsquo;enfant, nous vous conseillons&nbsp;donc de veiller &agrave; respecter cette amplitude horaire.</p>

<p>Tout enfant admis &agrave; l&rsquo;Accueil P&eacute;riscolaire du soir doit &ecirc;tre repris au plus tard &agrave;&nbsp;18h00 par un parent ou une personne adulte munie d&rsquo;une autorisation &eacute;crite&nbsp;d&ucirc;ment sign&eacute;e par les parents ou le tuteur l&eacute;gal.</p>

<p>En cas d&rsquo;utilisation r&eacute;guli&egrave;re du service de l&rsquo;accueil p&eacute;riscolaire, les absences de l&rsquo;enfant&nbsp;doivent &ecirc;tre signal&eacute;es aupr&egrave;s de la personne responsable.</p>

<p>En cas de non reprise de l&rsquo;enfant par sa famille au-del&agrave; de 18h00, l&rsquo;agent affect&eacute; au&nbsp;service d&rsquo;accueil p&eacute;riscolaire tentera de joindre la famille. Si celle-ci arrive en retard, elle&nbsp;devra signer le &laquo; cahier de retard &raquo; en pr&eacute;cisant les raisons de celui-ci.</p>

<p>Si l&rsquo;enfant est toujours pr&eacute;sent &agrave; 18h30, le responsable de l&rsquo;accueil p&eacute;riscolaire informera&nbsp;le service Education qui pr&eacute;viendra la Police Municipale.</p>

<p>En cas de non respect des horaires &agrave; plusieurs reprises, l&rsquo;enfant pourra &ecirc;tre exclu de la&nbsp;l&rsquo;accueil p&eacute;riscolaire.</p>

<h3>Accueil occasionnel :</h3>

<p>Les enfants dont les parents, pour une raison impr&eacute;vue et motiv&eacute;e, solliciteraient&nbsp;l&rsquo;usage de l&rsquo;accueil p&eacute;riscolaire, seront accept&eacute;s exceptionnellement, sous r&eacute;serve de&nbsp;places disponibles et sans pour autant d&eacute;passer la capacit&eacute; d&rsquo;accueil des locaux.</p>

<p>En cas de retard du ou des parent(s) d&rsquo;un enfant non inscrit &agrave; l&rsquo;accueil p&eacute;riscolaire &agrave; la</p>

<p>sortie des classes &agrave; 16h30, les dispositions suivantes seront prises :&nbsp;</p>

<p>- L&rsquo;enfant reste sous la responsabilit&eacute; de l&rsquo;enseignant durant un d&eacute;lai limit&eacute; &agrave; 10&nbsp;minutes</p>

<p>- Puis l&rsquo;enseignant confie l&rsquo;enfant au Responsable de l&rsquo;Accueil P&eacute;riscolaire et lui&nbsp;communique les coordonn&eacute;es t&eacute;l&eacute;phoniques des personnes &agrave; contacter</p>

<p>- Pour toute prise en charge d&ucirc;ment constat&eacute;e d&rsquo;un enfant non inscrit &agrave; l&rsquo;Accueil&nbsp;P&eacute;riscolaire, une facturation forfaitaire d&rsquo;un accueil sera adress&eacute;e aux parents</p>

<p>A NOTER : Nous vous demandons de bien vouloir respecter les horaires&nbsp;d&rsquo;ouverture de l&rsquo;accueil p&eacute;riscolaire pour le bon fonctionnement du service.</p>

<h3>ARTICLE 5 &ndash; FONCTIONNEMENT DE L&rsquo;ACCUEIL PERISCOLAIRE</h3>

<p>Arriv&eacute;e de l&rsquo;enfant &nbsp;:</p>

<p>Le matin : la famille est responsable de la conduite de l&rsquo;enfant jusque dans les locaux de&nbsp;l&rsquo;accueil p&eacute;riscolaire.</p>

<p>Le soir :</p>

<p>- les enfants de l&rsquo;&eacute;cole &eacute;l&eacute;mentaire se rendent seuls &agrave; l&rsquo;accueil p&eacute;riscolaire &agrave; 16h30</p>

<p>- les enfants de l&rsquo;&eacute;cole &eacute;l&eacute;mentaire s&rsquo;y rendent accompagn&eacute;s d&rsquo;un adulte apr&egrave;s une&nbsp;s&eacute;ance d&rsquo;aide personnalis&eacute;e</p>

<p>- Les enfants de l&rsquo;&eacute;cole maternelle sont conduits &agrave; la salle d&rsquo;accueil par un adulte,</p>

<p>quelle que soit l&rsquo;heure de prise en charge, ou ils seront pris en charge par le&nbsp;responsable de l&rsquo;accueil p&eacute;riscolaire.</p>

<p>D&eacute;part de l&rsquo;enfant :</p>

<p>Le matin :</p>

<p>L&rsquo;enfant est confi&eacute; &agrave; 8h35 aux enseignants de l&rsquo;&eacute;cole. Les ATSEM et/ou animateurs&nbsp;assurent la conduite des enfants vers l&rsquo;&eacute;cole maternelle et les enfants scolaris&eacute;s en&nbsp;&eacute;l&eacute;mentaire se rendent seuls jusqu&rsquo;&agrave; leur classe.</p>

<p>Le soir :</p>

<p>- Les familles sont invit&eacute;es &agrave; reprendre leurs enfants dans l&rsquo;enceinte m&ecirc;me de&nbsp;l&rsquo;accueil p&eacute;riscolaire. (Les parents devront signer un registre lorsqu&rsquo;ils r&eacute;cup&egrave;rent&nbsp;leur enfant).</p>

<p>- L&rsquo;enfant de d&rsquo;&eacute;cole maternelle ou de l&rsquo;&eacute;cole &eacute;l&eacute;mentaire pour lequel la famille a&nbsp;d&eacute;sign&eacute; par &eacute;crit un ou des responsables, n&rsquo;est confi&eacute; qu&rsquo;&agrave; l&rsquo;une des personnes&nbsp;d&eacute;sign&eacute;es, sur pr&eacute;sentation d&rsquo;une pi&egrave;ce d&rsquo;identit&eacute; (si celle-ci est inconnue de&nbsp;l&rsquo;accueil p&eacute;riscolaire). La remise d&rsquo;un enfant &agrave; un mineur de moins de 18 ans qui&nbsp;ne serait pas un fr&egrave;re ou une s&oelig;ur ne sera pas accept&eacute;e.</p>

<p>- Les enfants de l&rsquo;&eacute;cole &eacute;l&eacute;mentaire autoris&eacute;s &agrave; rentrer seuls &agrave; leur domicile sont&nbsp;lib&eacute;r&eacute;s &agrave; l&rsquo;heure de fermeture de l&rsquo;accueil p&eacute;riscolaire si la famille a signal&eacute; par&nbsp;&eacute;crit l&rsquo;autorisation de sortie. 4</p>

<h3>ARTICLE 6 : SANTE</h3>

<p>Lors de l&rsquo;inscription, il sera demand&eacute; aux parents ou au responsable l&eacute;gal de l&rsquo;enfant un&nbsp;engagement &eacute;crit autorisant le ou la responsable &agrave; prendre toutes les initiatives&nbsp;n&eacute;cessit&eacute;es par l&rsquo;&eacute;tat de l&rsquo;enfant en cas d&rsquo;accident ou de maladie subite de celui-ci.</p>

<p>Le service n&rsquo;est pas autoris&eacute; &agrave; administrer des m&eacute;dicaments ou des soins particuliers&nbsp;courants, sauf si un Projet d&rsquo;Accueil Individualis&eacute; (PAI) le pr&eacute;voit. Aussi les parents&nbsp;veilleront &agrave; ne pas confier &agrave; l&rsquo;accueil p&eacute;riscolaire un enfant malade.</p>

<p>En cas d&rsquo;incident b&eacute;nin, le responsable d&eacute;sign&eacute; par la famille est pr&eacute;venu par t&eacute;l&eacute;phone&nbsp;et Le directeur de l&rsquo;&eacute;cole est inform&eacute;.</p>

<p>En cas d&rsquo;&eacute;v&egrave;nement grave, accidentel ou non, mettant en p&eacute;ril ou compromettant&nbsp;la sant&eacute; de l&rsquo;enfant, le service confiera l&rsquo;enfant, soit au SAMU pour &ecirc;tre conduit au&nbsp;centre hospitalier le plus proche, soit au m&eacute;decin de famille mentionn&eacute; sur la fiche&nbsp;d&rsquo;inscription ou &agrave; un de ses confr&egrave;res.</p>

<p>Le responsable l&eacute;gal en sera imm&eacute;diatement inform&eacute;. A cet effet, il doit toujours&nbsp;fournir des coordonn&eacute;es t&eacute;l&eacute;phoniques o&ugrave; lui m&ecirc;me ou une personne de la famille&nbsp;pourra &ecirc;tre joignable durant les horaires de l&rsquo;accueil p&eacute;riscolaire.</p>

<p>Le directeur de l&rsquo;&eacute;cole et le service scolaire sont inform&eacute;s sans d&eacute;lai de l&rsquo;hospitalisation&nbsp;de l&rsquo;enfant par le responsable de l&rsquo;accueil p&eacute;riscolaire.</p>

<h3>ARTICLE 7 - PRESENCE DANS LES LOCAUX DE L&rsquo;ACCUEIL PERISCOLAIRE :</h3>

<p>Les seules personnes autoris&eacute;es &agrave; p&eacute;n&eacute;trer dans les locaux de l&rsquo;accueil p&eacute;riscolaire&nbsp;et/ou &agrave; demander quelque renseignement que ce soit au personnel, sont les suivantes :</p>

<p>- Le Maire et les membres du conseil municipal en exercice,</p>

<p>- Le personnel communal,</p>

<p>- Les enfants inscrits et leurs parents,</p>

<p>- Les personnes appel&eacute;es &agrave; des op&eacute;rations d&rsquo;entretien ou de contr&ocirc;le.</p>

<p>En dehors de ces personnes, seul le Maire ou son repr&eacute;sentant peut autoriser l&rsquo;acc&egrave;s&nbsp;aux locaux.</p>

<p>Seuls les enfants formellement inscrits par leurs parents ou confi&eacute;s par un enseignant&nbsp;peuvent &ecirc;tre pr&eacute;sents dans les locaux de l&rsquo;accueil p&eacute;riscolaire.</p>

<h3>ARTICLE 8 &ndash; RESPECT DES REGLES DE VIE COLLECTIVE</h3>

<p>Attitude et obligations des enfants :</p>

<p>L&rsquo;accueil p&eacute;riscolaire est un service rendu. Les enfants qui le fr&eacute;quentent sont tenus de&nbsp;respecter les r&egrave;gles &eacute;l&eacute;mentaires de discipline et de vie en collectivit&eacute;.</p>

<p>Ils doivent s&rsquo;interdire tout geste ou parole qui porterait atteinte aux autres enfants et aux&nbsp;personnes charg&eacute;es de l&rsquo;encadrement. Ils doivent tenir compte des observations qui leur&nbsp;sont faites et faire preuve de citoyennet&eacute; (respect du mat&eacute;riel mis &agrave; disposition) enfin ils&nbsp;ne sont pas autoris&eacute;s &agrave; d&eacute;tenir des objets dangereux. 5</p>

<p>Si le comportement d&rsquo;un enfant perturbe gravement et de fa&ccedil;on durable le&nbsp;fonctionnement de l&rsquo;accueil p&eacute;riscolaire et la vie collective, les parents re&ccedil;oivent un&nbsp;premier avertissement &eacute;crit de la part de la ville.</p>

<p>En cas de r&eacute;cidive, un rendez-vous sera organis&eacute; en Mairie avec les parents afin de&nbsp;rechercher des solutions avant une &eacute;ventuelle exclusion d&rsquo;une semaine.</p>

<p>Pour le cas o&ugrave; le comportement de l&rsquo;enfant ne se serait pas am&eacute;lior&eacute;, et si sa pr&eacute;sence&nbsp;devait &ecirc;tre un risque pour lui-m&ecirc;me ou pour le groupe, une exclusion d&eacute;finitive pourra&nbsp;&ecirc;tre envisag&eacute;e, en fonction de la gravit&eacute; des faits reproch&eacute;s.</p>

<p>Obligation des parents ou assimil&eacute;s :</p>

<p>Les parents, responsables de leur enfant, doivent veiller &agrave; ce que son attitude soit&nbsp;conforme &agrave; la vie en collectivit&eacute;.</p>

<p>Ils supportent les cons&eacute;quences du non-respect des dispositions &eacute;nonc&eacute;es dans cet&nbsp;article : ainsi en cas de bris de mat&eacute;riel ou d&eacute;pr&eacute;dation d&ucirc;ment constat&eacute; par le&nbsp;responsable de l&rsquo;accueil p&eacute;riscolaire, le co&ucirc;t de remplacement ou de remise en &eacute;tat sera&nbsp;&agrave; la charge des parents.</p>

<p>L&rsquo;attention des parents est attir&eacute;e sur le fait que l&rsquo;attitude d&rsquo;un enfant peut entra&icirc;ner des&nbsp;sanctions pouvant aller jusqu&rsquo;&agrave; l&rsquo;exclusion d&eacute;finitive.</p>

<p>Enfin, pour la bonne marche du service et dans le respect des libert&eacute;s de chacun, il est&nbsp;rappel&eacute; aux parents de respecter scrupuleusement les horaires identifi&eacute;s &agrave; l&rsquo;inscription et&nbsp;stipul&eacute;s dans le pr&eacute;sent r&egrave;glement.</p>

<h3>ARTICLE 9 : LE PERSONNEL D&rsquo;ANIMATION</h3>

<p>En lien avec le projet &eacute;ducatif d&rsquo;animation du site, le r&ocirc;le du personnel communal en&nbsp;charge de l&rsquo;accueil p&eacute;riscolaire ne se r&eacute;duit pas &agrave; la simple t&acirc;che de surveillance. Il doit&nbsp;en effet, &ecirc;tre pr&eacute;sent aupr&egrave;s des enfants en mettant &agrave; leur disposition des jeux, des&nbsp;occupations ou simplement &ecirc;tre &agrave; leur &eacute;coute et, si besoin, en cas de probl&egrave;me b&eacute;nin, les&nbsp;r&eacute;conforter.</p>

<p>Les animateurs laisseront &agrave; l&rsquo;enfant le choix de son activit&eacute; (travail scolaire, lecture, jeux,&nbsp;activit&eacute;s manuelles, repos...) en groupe ou individuellement, dans la salle d&rsquo;accueil ou sur&nbsp;la cour selon les conditions m&eacute;t&eacute;orologiques ; les devoirs peuvent &ecirc;tre faits mais ne&nbsp;seront pas contr&ocirc;l&eacute;s par les agents.</p>

<p>Le personnel d&rsquo;animation ne peut quitter le service que lorsque le dernier enfant a &eacute;t&eacute;&nbsp;retir&eacute; par les personnes autoris&eacute;es.</p>

<p>Il tient la comptabilit&eacute; de pr&eacute;sence des enfants sur les diff&eacute;rents cr&eacute;neaux. Un &eacute;tat&nbsp;mensuel est transmis au chef du service &eacute;ducation afin de tenir &agrave; jour les statistiques de&nbsp;fr&eacute;quentation et le suivi de la facturation. 6</p>

<h3>ARTICLE 10 - FACTURATION :</h3>

<p>Les tarifs de la prestation, incluant le go&ucirc;ter, sont d&eacute;termin&eacute;s chaque ann&eacute;e par&nbsp;d&eacute;lib&eacute;ration du Conseil Municipal.</p>

<p>Les sommes dues seront factur&eacute;es aux familles &agrave; terme &eacute;chu. Il existe une possibilit&eacute; de&nbsp;t&eacute;l&eacute;paiement.</p>

<h3>ARTICLE 11 - OBSERVATION DU REGLEMENT</h3>

<p>Le fait d&rsquo;inscrire un enfant &agrave; l&rsquo;accueil p&eacute;riscolaire implique l&rsquo;acceptation pleine et enti&egrave;re&nbsp;du pr&eacute;sent r&egrave;glement.&nbsp;</p>


                </article>';
	}
	public function retourne_article_accueil()
	{
		return'
		<article>
				<br>
					<h2>L\'accueil périscolaire</h2><p>

<br>Une équipe dynamique et qualifiée à votre service !. L’accueil périscolaire fonctionne tous les jours d’école avec un accueil le matin, la pause méridienne et le soir.
<br></p><ul>
<li><b>7H30 à 8H30 :</b> accueil des enfants à partir de 7H30 dans nos locaux, les enfants peuvent participer à des jeux libres: coloriage, jeux de société, lecture, seul ou avec l’animatrice présente. A partir de 8h15, les enfants sont conduits dans leurs écoles respectives.</li>
<li ><b>11H30 à 13H30 :</b> c’est dans une ambiance conviviale et avec des menus de qualité que les enfants prennent le déjeuner dans la salle du centre de loisirs adaptée pour l’accueil des enfants de 3 à 12 ans. Chaque mois la liste des menus est à votre disposition au centre de loisirs ou nous pouvons vous la transmettre par mail. Un vrai moment de détente pour les enfants avec des professionnelles de l’animation ayant des objectifs ludiques et éducatifs.</li>
<li><b>TAP = Temps d’Activités Péri-éducatifs de 15h45 à 16h30 :</b> les activités seront encadrées par du personnel qualifié, l’équipe d’animation du centre de loisirs ainsi que Martine (ATSEM école maternelle).</li>
</ul><p>
<br>Afin de permettre un suivi des activités et la mise en place d’un projet pédagogique cohérent les inscriptions et présence des enfants sont obligatoires pour l’ensemble de la période soit 6 semaines pour cette première période (jusqu’au vendredi 17 octobre).

<br>Les enfants seront pris en charge pour les TAP sous réserve que nous ayons en notre possession un dossier d’inscription complété et signé et cette fiche d’inscription !
<br>
<br>Les enfants qui ne sont pas inscrits au service périscolaire du soir, sont à venir chercher au centre de loisirs directement à 16H30.
<br>
<br><b>16h30 à 17h30 ou 16h30 à 19h00 : </b>
<br>
<br>Nous accueillons les enfants pour un temps de garde et de loisirs. 
<br>Nous organisons une activité encadrée tous les soirs</p> 

                </article>';
	}
	public function retourne_carroussel()
	{
		return '
						<article>

	<div style="font-family:Arial, Verdana;background-color:#fff;display: block; margin: 0 auto 0 auto; padding: 10px 5px 5px 10px; width: 95%; max-width:95%; min-width: 240px;  background-color: #cbd888; box-shadow: 2px 2px 10px 2px #dddddd; -webkit-box-shadow: 0px 0px 5px 0px #dddddd; font-size: .8em; line-height: 1.5em;">
    <!-- Jssor Slider Begin -->
    <!-- You can move inline styles to css file or css block. -->
        <div id="slider1_container" style="position: relative; margin: 0px 5px 5px 0px; float: left; top: 0px; left: 0px; width: 600px;
            height: 300px; overflow: hidden;">
            <!-- Slides Container -->
            <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 600px; height: 300px;
                overflow: hidden;">
				<div><img u="image" src="./image/defil/1.jpg" />
                    <div u="caption" t="ZMF|10" style="position:absolute;left:20px;top:20px;width:350px;height:40px;font-size:36px;color:blue;line-height:40px;">Ptits-Bouts-De-Choux</div>
                    <div u="caption" t="ZMF|10" style="position:absolute;left:380px;top:20px;width:120px;height:40px;font-size:36px;color:blue;line-height:40px;">49</div>

                </div>
                <div><img u="image" src="./image/defil/vig/2.jpg" />
                    <div u="caption" t="CLIP|L" style="position:absolute;left:50px;top:220px;width:250px;height:40px;font-size:36px;color:blue;line-height:40px;">Se découvrir...</div>

                </div>
                <div><img u="image" src="./image/defil/vig/3.jpg" />
                <div u="caption" t="FLTTR|R" style="position:absolute;left:100px;top:80px;width:200px;height:40px;font-size:36px;color:blue;line-height:40px;">Artiste ...</div>    

                </div>

				<div><img u="image" src="./image/defil/vig/4.jpg" />
                    <div u="caption" t="RTT|10" style="position:absolute;left:100px;top:80px;width:250px;height:40px;font-size:36px;color:blue;line-height:40px;">S’émerveiller...</div>
                </div>
				<div><img u="image" src="./image/defil/vig/5.jpg" />
                    <div u="caption" t="RTT|10" style="position:absolute;left:100px;top:120px;width:250px;height:40px;font-size:36px;color:blue;line-height:40px;">Apprendre...</div>
                </div>
				<div><img u="image" src="./image/defil/vig/6.jpg" />
                    <div u="caption" t="RTT|10" style="position:absolute;left:100px;top:180px;width:200px;height:40px;font-size:36px;color:blue;line-height:40px;">Grandir...</div>
                </div>
                <div><img u="image" src="./image/defil/vig/7.jpg" />
                    <div u="caption" t="FLTTR|R" style="position:absolute;left:100px;top:80px;width:230px;height:40px;font-size:36px;color:blue;line-height:40px;">Partager...</div>

                </div>

				 <div><img u="image" src="./image/defil/vig/8.jpg" />
                   
                </div>
                <div><img u="image" src="./image/defil/vig/9.jpg" />


                </div>
                <div><img u="image" src="./image/defil/vig/10.jpg" />
 
                </div>
                <div><img u="image" src="./image/defil/vig/11.jpg" />
    
                </div>
				 <div><img u="image" src="./image/defil/vig/12.jpg" />
 
                </div>
               

            </div>
 
        </div>
 
    </div>



									</article>';
	}
	public function retourne_formulaire_login() {
		return '
			<article >
				<h3>Formulaire de connexion</h3>
				<form id="login" method="post" class="login">
					<input type="text" name="id" id="id" placeholder="Identifiant" required/>
					<input type="password" name="mp" id="mp" placeholder="Mot de passe" required/></br>
					<input type="radio" name="rblogin" id="rbf"  value="rbf" required/>Famille
					<input type="radio" name="rblogin" id="rba" value="rba" required/>Administrateur</br></br>
					<input type="submit" name="send" class="button" value="Envoi login" />
				</form>
				<script>function hd(){ $("#modal").hide();}</script>
				<div  id="modal" >
										<h1>Informations !</h1>
										<div id="dialog1" ></div>
										<a class="no" onclick="hd();">OK</a>
				</div>
			<article >
	<script>
	$("#modal").hide();
	//Initialize the tooltips
	$("#login :input").tooltipster({
				         trigger: "custom",
				         onlyOne: false,
				         position: "bottom",
				         multiple:true,
				         autoClose:false});
		jQuery.validator.addMethod(
			  "regex",
			   function(value, element, regexp) {
			       if (regexp.constructor != RegExp)
			          regexp = new RegExp(regexp);
			       else if (regexp.global)
			          regexp.lastIndex = 0;
			          return this.optional(element) || regexp.test(value);
			   },"erreur champs non valide"
			);	
	$("#login").submit(function( e ){
        e.preventDefault();
		$("#modal").hide();
						
		var $url="ajax/valide_connect.php";
		if($("#login").valid())
		{
			$categ="famille";		
			if($("input[type=radio][name=rblogin]:checked").attr("value")=="rbf"){$categ="famille";}
			if($("input[type=radio][name=rblogin]:checked").attr("value")=="rba"){$categ="admin";}
			var formData = {
			"id" 					: $("#id").val().toUpperCase(),
   			"mp"					: $("#mp").val(),
   			"categ"					: $categ												   		
			};	
							
			var filterDataRequest = $.ajax(
    		{
												
        		type: "POST", 
        		url: $url,
        		dataType: "json",
				encode          : true,
        		data: formData,	

			});
			filterDataRequest.done(function(data)
			{
				if ( ! data.success)
				{		
						var $msg="erreur-></br><ul style=\"list-style-type :decimal;padding:0 5%;\">";
						if (data.errors.message) {
							$x=data.errors.message;
							$msg+="<li>";
							$msg+=$x;
							$msg+="</li>";
							}
						if (data.errors.requete) {
							$x=data.errors.requete;
							$msg+="<li>";
							$msg+=$x;
							$msg+="</li>";
							}
						
						$msg+="</ul>";
				}
				else
				{
						$msg="";
						if(data.message){$msg+="</br>";$x=data.message;$msg+=$x;}
				}
				
					$("#dialog1").html($msg);$("#modal").show();

				});
			filterDataRequest.fail(function(jqXHR, textStatus)
			{
				
     			if (jqXHR.status === 0){alert("Not connect.n Verify Network.");}
    			else if (jqXHR.status == 404){alert("Requested page not found. [404]");}
				else if (jqXHR.status == 500){alert("Internal Server Error [500].");}
				else if (textStatus === "parsererror"){alert("Requested JSON parse failed.");}
				else if (textStatus === "timeout"){alert("Time out error.");}
				else if (textStatus === "abort"){alert("Ajax request aborted.");}
				else{alert("Uncaught Error.n" + jqXHR.responseText);}
			});
		}
	});
   
	$("#login").validate({
		rules:
		{
													
			"id": {required: true},
			"mp": {required: true},
			"rblogin": {required: true}
		},
		messages:
		{
        	"id":
          	{
            	required: "Vous devez saisir un identifiant valide"
          	},
			"mp":
          	{
            	required: "Vous devez saisir un mot de passe valide"
          	},			
			"rblogin":
			{
            	required: "Vous devez choisir famille ou administrateur"
          	}
		},
		errorPlacement: function (error, element) {
			$(element).tooltipster("update", $(error).text());
			$(element).tooltipster("show");
		},
		success: function (label, element)
		{
			$(element).tooltipster("hide");
		}
   	});
	</script>					
		
		';
	
	}
	
	public function genererMDP ($longueur = 8){
		// initialiser la variable $mdp
		$mdp = "";
	
		// Définir tout les caractères possibles dans le mot de passe,
		// Il est possible de rajouter des voyelles ou bien des caractères spéciaux
		$possible = "2346789bcdfghjkmnpqrtvwxyzBCDFGHJKLMNPQRTVWXYZ&#@$*!";
	
		// obtenir le nombre de caractères dans la chaîne précédente
		// cette valeur sera utilisé plus tard
		$longueurMax = strlen($possible);
	
		if ($longueur > $longueurMax) {
			$longueur = $longueurMax;
		}
	
		// initialiser le compteur
		$i = 0;
	
		// ajouter un caractère aléatoire à $mdp jusqu'à ce que $longueur soit atteint
		while ($i < $longueur) {
			// prendre un caractère aléatoire
			$caractere = substr($possible, mt_rand(0, $longueurMax-1), 1);
	
			// vérifier si le caractère est déjà utilisé dans $mdp
			if (!strstr($mdp, $caractere)) {
				// Si non, ajouter le caractère à $mdp et augmenter le compteur
				$mdp .= $caractere;
				$i++;
			}
		}
	
		// retourner le résultat final
		return $mdp;
	}
	
	
	public function retourne_formulaire_famille($type,$idfamille="") {
		$form = '';
		$identifiant='';
		$nom1 = '';
		$prenom1 = '';
		$adresse11 = '';
		$adresse12 = '';
		$cp1 = '';
		$ville1 = '';
		$mail1 = '';
		$tel11 = '';$tel12 = '';$tel13 = '';
		$checkpere1 = '';$checkmere1 = '';$checkautre1 = '';$autre1='';
		$nom2 = '';
		$prenom2 = '';
		$adresse21 = '';
		$adresse22 = '';
		$cp2 = '';
		$ville2 = '';
		$mail2 = '';
		$tel21 = '';$tel22 = '';$tel23 = '';
		$checkpere2 = '';$checkmere2 = '';$checkautre2 = '';$autre2='';

		if ($type == 'Ajout') {
			$titreform = 'Formulaire ajout famille';
			$libelbutton = 'Ajouter';
		}
		if ($type == 'Supp') {
			$titreform = 'Formulaire Suppression inscription famille';
			$libelbutton = 'Supprimer';
		}
		if ($type == 'Modif') {
			$titreform = 'Formulaire Modification famille';
			$libelbutton = 'Modifier';
		}
		if ($type == 'Supp' || $type == 'Modif') {
			$row = $this->vpdo->trouve_famille ( $idfamille );
			if ($row != null) {
				$identifiant=$row->identifiant;
				$nom1 = $row->nom1;
				$prenom1 = $row->prenom1;
				$adresse11 = $row->adresse11;
				if (isset ( $row->adresse12 )) {
					$adresse12 = $row->adresse12;
				}
				$cp1 = $row->cp1;
				$ville1 = $row->ville1;
				if (isset ( $row->mail1 )) {
					$mail1 = $row->mail1;
				}
				$tel11= $row->tel11;
				if (isset ( $row->tel12 )) {
					$tel12= $row->tel12;
				}
				if (isset ( $row->tel13 )) {
					$tel13= $row->tel13;
				}
				if($row->fonction1=='pere')
				{
					$checkpere1= 'checked';
				}
				if($row->fonction1=='mere')
				{
					$checkmere1= 'checked';
				}
				if($row->fonction1!='pere' && $row->fonction1!='mere')
				{
					$checkautre1= 'checked';
					$autre1=$row->fonction1;
				}
				if (isset ( $row->nom2 )) {
					$nom2 = $row->nom2;
				}
				if (isset ( $row->prenom2 )) {
					$prenom2 = $row->prenom2;
				}
				if (isset ( $row->adresse21 )) {
					$adresse21 = $row->adresse21;
				}
				if (isset ( $row->adresse22 )) {
					$adresse22 = $row->adresse22;
				}
				if (isset ( $row->cp2 )) {
					$cp2 = $row->cp2;
				}
				if (isset ( $row->ville2 )) {
					$ville2 = $row->ville2;
				}
				if (isset ( $row->mail2 )) {
					$mail2 = $row->mail2;
				}
				if (isset ( $row->tel21 )) {
					$tel21= $row->tel21;
				}
				if (isset ( $row->tel22 )) {
					$tel22= $row->tel22;
				}
				if (isset ( $row->tel23 )) {
					$tel23= $row->tel23;
				}
				if (isset ( $row->fonction2 )) {
					if($row->fonction2=='pere')
					{
						$checkpere2= 'checked';
					}
					if($row->fonction2=='mere')
					{
						$checkmere2= 'checked';
					}
					if($row->fonction2!='pere' && $row->fonction2!='mere')
					{
						$checkautre2= 'checked';
						$autre2=$row->fonction2;
					}
				}
			}
		}
			
		$form = '
			<article >
				<h3>' . $titreform . '</h3>
				<form id="formfamille" method="post" >';
		if ($type == 'Ajout') {
			$vmp=$this->genererMDP();
			$form = $form . '
					<div >
					Identifiant : <input type="text" name="identifiant" id="identifiant" placeholder="Identifiant famille" value="' . $identifiant . '" required/></br>
					Mot de passe : <input type="text" readonly name="mp" id="mp" value="' . $vmp . '"></br>
					</div>
					
			';		
		}
		else {
			$form = $form . '
			<div style="visibility: hidden;">
					Identifiant : <input type="text" name="identifiant" id="identifiant" placeholder="Identifiant famille" value="' . $identifiant . '" required/></br>
					Mot de passe : <input type="text"  name="mp" id="mp" value=""></br>
					</div>
							';
		}
		$form = $form . ' 
					</br>Représentant légal 1</br></br>
					<input type="text" name="nom1" id="nom1" placeholder="Nom representant legal 1" value="' . $nom1 . '" required/>
					<input type="text" name="prenom1" id="prenom1" placeholder="Prenom representant legal 1" value="' . $prenom1 . '" required/></br>
					<input type="text" name="adresse11" id="adresse11" placeholder="Adresse" value="' . $adresse11 . '" required/>
					<input type="text" name="adresse12" id="adresse12" placeholder="Complément Adresse" value="' . $adresse12 . '" /></br>
					<input type="text" name="cp1" id="cp1" placeholder="Code Postal" value="' . $cp1 . '" required/>
					<input type="text" name="ville1" id="ville1" placeholder="Ville" value="' . $ville1 . '" required/></br>
					<input type="text" name="mail1" id="mail1" placeholder="mail" value="' . $mail1 . '" required/></br>
					<input type="text" name="tel11" id="tel11" placeholder="Tel fixe" value="' . $tel11 . '" required/>
					<input type="text" name="tel12" id="tel12" placeholder="Tel portable" value="' . $tel12 . '" />
					<input type="text" name="tel13" id="tel13" placeholder="Tel travail" value="' . $tel13 . '" /></br>
					
					<input type="radio" name="rbfonction1" id="rbp"  value="rbp" ' . $checkpere1 . ' required/>Père
					<input type="radio" name="rbfonction1" id="rbm"  value="rbm" ' . $checkmere1 . 'required/>Mere
					<input type="radio" name="rbfonction1" id="rba"  value="rba" ' . $checkautre1 . 'required/>Autre
					<input type="text" name="fonction1" id="fonction1" placeholder="Fonction representant legal 1" value="' . $autre1 . '" /></br></br>

					Représentant légal 2</br></br>
					<input type="text" name="nom2" id="nom2" placeholder="Nom representant legal 2" value="' . $nom2 . '" />
					<input type="text" name="prenom2" id="prenom2" placeholder="Prenom representant legal 2" value="' . $prenom2 . '" /></br>
					<input type="text" name="adresse21" id="adresse21" placeholder="Adresse" value="' . $adresse21 . '" />
					<input type="text" name="adresse22" id="adresse22" placeholder="Complément Adresse" value="' . $adresse22 . '" /></br>
					<input type="text" name="cp2" id="cp2" placeholder="Code Postal" value="' . $cp2 . '" />
					<input type="text" name="ville2" id="ville2" placeholder="Ville" value="' . $ville2 . '" /></br>
					<input type="text" name="mail2" id="mail2" placeholder="mail" value="' . $mail2 . '" /></br>
					<input type="text" name="tel21" id="tel21" placeholder="Tel fixe" value="' . $tel21 . '" />
					<input type="text" name="tel22" id="tel22" placeholder="Tel portable" value="' . $tel22 . '" />
					<input type="text" name="tel23" id="tel23" placeholder="Tel travail" value="' . $tel23 . '" /></br>
					
					<input type="radio" name="rbfonction2" id="rbp"  value="rbp" ' . $checkpere2 . ' />Père
					<input type="radio" name="rbfonction2" id="rbm"  value="rbm" ' . $checkmere2 . '/>Mere
					<input type="radio" name="rbfonction2" id="rba"  value="rba" ' . $checkautre2 . '/>Autre
					<input type="text" name="fonction2" id="fonction2" placeholder="Fonction representant legal 2" value="' . $autre2 . '" /></br></br>
					<input id="submit" type="submit" name="send" class="button" value="' . $libelbutton . '" />
				</form>
				<script>function hd(){ $(\'#modal\').hide();}</script>
				<div  id="modal" >
										<h1>Informations !</h1>
										<div id="dialog1" ></div>
										<a class="no" onclick="hd();">OK</a>
				</div>
			<article >
	<script>
	$("#modal").hide();
	//Initialize the tooltips
	$("#formfamille :input").tooltipster({
				         trigger: "custom",
				         onlyOne: false,
				         position: "bottom",
				         multiple:true,
				         autoClose:false});
		jQuery.validator.addMethod(
			  "regex",
			   function(value, element, regexp) {
			       if (regexp.constructor != RegExp)
			          regexp = new RegExp(regexp);
			       else if (regexp.global)
			          regexp.lastIndex = 0;
			          return this.optional(element) || regexp.test(value);
			   },"erreur champs non valide"
			);
	$("#formfamille").submit(function( e ){
        e.preventDefault();
		$("#modal").hide();
	
		var $url="ajax/valide_ajout_famille.php";
		if($("#submit").prop("value")=="Modifier"){$url="ajax/valide_modif_famille.php";}
		if($("#submit").prop("value")=="Supprimer"){$url="ajax/valide_supp_famille.php";}
		if($("#formfamille").valid())
		{
			$fonction1="pere";
			if($("input[type=radio][name=rbfonction1]:checked").attr("value")=="rbp"){$fonction1="pere";}
			if($("input[type=radio][name=rbfonction1]:checked").attr("value")=="rbm"){$fonction1="mere";}
			if($("input[type=radio][name=rbfonction1]:checked").attr("value")=="rba"){$fonction1=$("#fonction1").val();}
			$fonction2="";
			if($("input[type=radio][name=rbfonction2]:checked").attr("value")=="rbp"){$fonction2="pere";}
			if($("input[type=radio][name=rbfonction2]:checked").attr("value")=="rbm"){$fonction2="mere";}
			if($("input[type=radio][name=rbfonction2]:checked").attr("value")=="rba"){$fonction2=$("#fonction2").val();}
			var formData = {
			"identifiant"			: $("#identifiant").val(),
			"mp"					: $("#mp").val(),
			"nom1" 					: $("#nom1").val().toUpperCase(),
   			"prenom1"				: $("#prenom1").val(),
			"adresse11"				: $("#adresse11").val(),
			"adresse12"				: $("#adresse12").val(),
			"cp1"					: $("#cp1").val(),
			"ville1"				: $("#ville1").val(),
			"mail1"					: $("#mail1").val(),
			"tel11"					: $("#tel11").val(),
			"tel12"					: $("#tel12").val(),
			"tel13"					: $("#tel13").val(),
   			"fonction1"				: $fonction1,
			"nom2" 					: $("#nom2").val().toUpperCase(),
   			"prenom2"				: $("#prenom2").val(),
			"adresse21"				: $("#adresse21").val(),
			"adresse22"				: $("#adresse22").val(),
			"cp2"					: $("#cp2").val(),
			"ville2"				: $("#ville2").val(),
			"mail2"					: $("#mail2").val(),
			"tel21"					: $("#tel21").val(),
			"tel22"					: $("#tel22").val(),
			"tel23"					: $("#tel23").val(),
   			"fonction2"				: $fonction2
			};
				
			var filterDataRequest = $.ajax(
    		{
	
        		type: "POST",
        		url: $url,
        		dataType: "json",
				encode          : true,
        		data: formData,
	
			});
			filterDataRequest.done(function(data)
			{
				if ( ! data.success)
				{
						var $msg="erreur-></br><ul style=\"list-style-type :decimal;padding:0 5%;\">";
						if (data.errors.message) {
							$x=data.errors.message;
							$msg+="<li>";
							$msg+=$x;
							$msg+="</li>";
							}
						if (data.errors.requete) {
							$x=data.errors.requete;
							$msg+="<li>";
							$msg+=$x;
							$msg+="</li>";
							}
	
						$msg+="</ul>";
				}
				else
				{
						$msg="";
						if(data.message){$msg+="</br>";$x=data.message;$msg+=$x;}
				}
	
					$("#dialog1").html($msg);$("#modal").show();
	
				});
			filterDataRequest.fail(function(jqXHR, textStatus)
			{
	
     			if (jqXHR.status === 0){alert("Not connect.n Verify Network.");}
    			else if (jqXHR.status == 404){alert("Requested page not found. [404]");}
				else if (jqXHR.status == 500){alert("Internal Server Error [500].");}
				else if (textStatus === "parsererror"){alert("Requested JSON parse failed.");}
				else if (textStatus === "timeout"){alert("Time out error.");}
				else if (textStatus === "abort"){alert("Ajax request aborted.");}
				else{alert("Uncaught Error.n" + jqXHR.responseText);}
			});
		}
	});
  
	$("#formfamille").validate({
		rules:
		{
							
			"nom1": {required: true},
			"prenom1": {required: true},
			"adresse1": {required: true},
			"tel11": {required: true,regex: /^(\+33|0033|0)[0-9]{9}$/},
			"tel12": {regex: /^(\+33|0033|0)[0-9]{9}$/},
			"tel13": {regex: /^(\+33|0033|0)[0-9]{9}$/},
			"tel21": {regex: /^(\+33|0033|0)[0-9]{9}$/},
			"tel22": {regex: /^(\+33|0033|0)[0-9]{9}$/},
			"tel23": {regex: /^(\+33|0033|0)[0-9]{9}$/},
			"cp1":{required: true,regex:/^\d{5}$/},
			"ville1": {required: true},
			"mail1": {required: true,regex: /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/},
			"cp2":{regex:/^\d{5}$/},
			"mail2": {regex: /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/}
		},
		messages:
		{
        	"nom1":
          	{
            	required: "Vous devez saisir un nom valide"
          	},
			"prenom1":
          	{
            	required: "Vous devez saisir un prenom valide"
          	},
			"adresse1":
			{
            	required: "Vous devez saisir une adresse valide"
          	}
		},
		errorPlacement: function (error, element) {
			$(element).tooltipster("update", $(error).text());
			$(element).tooltipster("show");
		},
		success: function (label, element)
		{
			$(element).tooltipster("hide");
		}
   	});
	</script>
	
		';
		return $form;
	}

	public function affiche_liste_famille($type) {
		if ($type == 'Supp') {
			$titreform = 'Suppression famille';
		}
		if ($type == 'Modif') {
			$titreform = 'Modification famille';

		}
		$retour = '
				<style type="text/css">
    			table {border-collapse: collapse;}
				tr:nth-of-type(odd) {background: #eee;}
				tr:nth-of-type(even) {background: #eff;}
				tr{color: black;}
				th {background: #333;color: white;}
				td, th {padding: 6px;border: 1px solid #ccc;}
				</style>
				<article >
				<h3>' . $titreform . '</h3><form method="post">
    	<table>
    		<thead>
        		<tr>
            		<th >Identifiant Famille</th>
            		<th >Nom RP1</th>
            		<th >Prénom RP1</th>
    				<th ></th>
        		</tr>
    		</thead>
    		<tbody >';
			$result = $this->vpdo->liste_famille ();
			if ($result != false) {
			while ( $row = $result->fetch ( PDO::FETCH_OBJ ) )
			// parcourir chaque ligne sélectionnée
			{
				
				$retour = $retour . '<tr>
    			<td>' . $row->identifiant  . '</td>
    			<td>' . $row->nom1 . '</td>
    			<td>' . $row->prenom1 . '</td>
    			
    			<td Align=center><input onClick="this.form.submit();" type="checkbox" name="nom_checkbox[]" value="' . $row->id_famille . '" /></td>
    			</tr>';
			}
		}
		$retour = $retour . '</tbody></table></form></article>';
		return $retour;
	}
}

?>
