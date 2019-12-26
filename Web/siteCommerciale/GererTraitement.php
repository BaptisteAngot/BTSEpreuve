<?php
require_once "vues/IhmCommerciale.php";
require_once 'modele/ProductionPersonnaliser.php';
require_once 'class/BddSupervision.php';
require_once 'controleur/OrganiserActiviteCommerciale.php';


$ihm = new IhmCommerciale();
$bdd = new BddSupervision();

$organisationCommerciale = new OrganiserActiviteCommerciale();
$organisationCommerciale->setIHM($ihm);
$organisationCommerciale->setBDD($bdd);

if(isset($_GET['action'])){
	switch($_GET['action']){
		
		case "modifier" :
			if(isset($_GET['id']))
				$organisationCommerciale->afficherModifierTraitement($_GET['id']);
			else
				$organisationCommerciale->afficherModifierTraitement(NULL);
			break;
		
		case "ajouter" :
			if(isset($_GET['id']))
				$organisationCommerciale->afficherAjouterTraitement($_GET['id']);
			else
				$organisationCommerciale->afficherAjouterTraitement(NULL);
			break;
		
		case "supprimer" :
			if(isset($_GET['id']))
				$organisationCommerciale->afficherSupprimerTraitement($_GET['id']);
			else
				$organisationCommerciale->afficherSupprimerTraitement(NULL);
			break;
		
		default :
			echo "<h3>Erreur la page n'existe pas</h3>";
	}
}

elseif(isset($_POST['action']))
{
	switch($_POST['action']){
		
		case "modifier" :
			$organisationCommerciale->modifierTraitement($_POST);
			break;
		
		case "ajouter" :
			$organisationCommerciale->ajouterTraitement($_POST);
			break;
		
		case "supprimer" :
			$organisationCommerciale->supprimerTraitement($_POST);
			break;
		
		default :
			echo "<h3>Erreur la page n'existe pas</h3>";
	}
}
else
{
	echo "<h3>Else</h3>";
}

$organisationCommerciale=null;
$bdd=null;
$ihm=null;
?>