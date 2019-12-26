<?php
require_once "vues/IhmClient.php";
require_once 'modele/Boitier.php';
require_once 'modele/Traitement.php';
require_once 'modele/ProductionPersonnaliser.php';
require_once 'class/BddSupervision.php';
require_once 'controleur/OrganiserActiviteClient.php';

$ihm = new IhmClient();
$bdd = new BddSupervision();

$organisationClient = new OrganiserActiviteClient();
$organisationClient->setIHM($ihm);
$organisationClient->setBDD($bdd);

session_start();
if (isset($_SESSION['user_id']) && isset($_SESSION['logged_in']))
{
	if ($_SESSION['logged_in'] - time() < 60)
		$organisationClient->setIdClientConnecte($_SESSION['user_id']);
	else
	{
		header("Location: Login.php?expire=1");
		die();
	}
}

else
	$organisationClient->setIdClientConnecte(0);

$ihm->start();

$ihm->stop();
$organisationClient=null;
$bdd=null;
$ihm=null;


?>