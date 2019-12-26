<?php
require_once "vues/IhmClient.php";
require_once 'modele/ProductionPersonnaliser.php';
require_once 'class/BddSupervision.php';
require_once 'controleur/OrganiserActiviteClient.php';

$ihm = new IhmClient();
$bdd = new BddSupervision();

$organisationClient = new OrganiserActiviteClient();
$organisationClient->setIHM($ihm);
$organisationClient->setBDD($bdd);
session_start();

unset($_SESSION['user_id']);
unset($_SESSION['logged_in']);

header('Location: Login.php');
    
?>
