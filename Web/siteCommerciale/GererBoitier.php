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
				$organisationCommerciale->afficherModifierBoitier($_GET['id']);
			else
				$organisationCommerciale->afficherModifierBoitier(NULL);
			break;
		case "ajouter" :
			if(isset($_GET['id']))
				$organisationCommerciale->afficherAjouterBoitier($_GET['id']);
			else
				$organisationCommerciale->afficherAjouterBoitier(NULL);
			break;
		case "supprimer" :
			if(isset($_GET['id']))
				$organisationCommerciale->afficherSupprimerBoitier($_GET['id']);	
			else
				$organisationCommerciale->afficherSupprimerBoitier(NULL);
			
				break;
		default :
			echo "<h3>Erreur la page n'existe pas</h3>";
	}
}

elseif(isset($_POST['action']))
{
	switch($_POST['action']){
		case "modifier" :
			$organisationCommerciale->modifierBoitier($_POST);
			break;
		case "ajouter" :
			$organisationCommerciale->ajouterBoitier($_POST);
			break;
		case "supprimer" :
			$organisationCommerciale->supprimerBoitier($_POST);
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