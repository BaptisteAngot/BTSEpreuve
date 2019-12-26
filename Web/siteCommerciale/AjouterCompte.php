<?php
require_once "vues/IhmCommerciale.php";
require_once 'modele/ProductionPersonnaliser.php';
require_once 'class/BddSupervision.php';
require_once 'controleur/OrganiserActiviteCommerciale.php';
//require_once 'vues/formulaireInscription.php';

$ihm = new IhmCommerciale();
$bdd = new BddSupervision();

$organisationCommerciale = new OrganiserActiviteCommerciale();
$organisationCommerciale->setIHM($ihm);
$organisationCommerciale->setBDD($bdd);




$bdd = new BddSupervision();

$organisationCommerciale = new OrganiserActiviteCommerciale();
$organisationCommerciale->setBDD($bdd);



 $organisationClient=null;
$bdd=null;
$ihm=null;



?>
<!DOCTYPE html>

<html>
    <head>
	
        <meta charset="UTF-8">
        <title>Enregistrer un client</title>
    </head>
    <body>
	<center>
        <h1>Enregistrer</h1>
		<br>
        <form action="register.php" method="post">
            <label for="username">Login</label>
            <input type="text" id="username" name="username"><br><br>
            <label for="password">Password</label>
            <input type="text" id="password" name="password"><br><br>
            <input type="submit" name="register" value="enregistrer"></button>
        </form>
		</center>
    </body>
</html>
