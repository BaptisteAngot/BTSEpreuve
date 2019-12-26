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

if(isset($_POST['action']))
	{	
		switch($_POST['action']){
			case "ajouter" :
			$organisationClient->ajouterCommande($_POST);
			//print_r($commande);
	}	
	}
$lpp=$bdd->getProductionsPersonnaliseesAvecFiltres(NULL, NULL);

$ihm->start();
	
//echo "<p>Listes des traitements des boitiers id=: </br>";
echo '<h3>production personnalisee</h3><br>';
echo "\n";
echo '<div id="listepp">';
$index=0;
foreach ($lpp as $pp)
{
//print_r($pp);
//	echo $pp->getTraitement()->nom;
//	echo "</br>";
//	echo $pp->getBoitier()->matiere;
//	echo "</br>";
	
	echo'

<div class="card">
<div class="checkbox">
</div><div class="card-header" id="heading'.$index.'">
			<h5 class="mb-1">
				<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse'.$index.'" aria-expanded="true" aria-controls="collapse'.$index.'">
				' . $pp->getReference() .'
				</button>
			</h5>
		</div>
		<div id="collapse'.$index.'" class="collapse" aria-labelledby="heading'.$index.'" data-parent="#listepp">
			<div class="bg-success card-body">
				<div id="formPP" class="container text-center col-sm-12">
					<div id="formBoitier" class="container">
						<label class="mb-1">Boitier</label>
						<p class="text-muted">Nom : '.$pp->getBoitier()->nom .'</p>
						<p class="text-muted">Hauteur : '.$pp->getBoitier()->hauteur .'</p>
						<p class="text-muted">Matiere : '.$pp->getBoitier()->matiere .'</p>
						
					</div>
					<div id="formTraitement" class="container">
						<label class="mb-1">Traitement</label>
						<p class="text-muted">Nom : '.$pp->getTraitement()->nom .'</p>
						  
						  
						  <div class="form-group row">
	<label for="example-number-input" class="col-6 col-form-label">quantité</label>';
	echo '    <input class="form-control" type="number"   id="example-number-input">
	</div>
						  <label><input type="checkbox" value="">Valider</label>
						  
					</div>
				
				</div>
			</div> 
	</div>
  </div>

  
<br/>

';
	$index++;
}

echo '<br><br><br>';
echo'<p style="text-align: center;"><input type="submit" value="Passer Commande"></p>';

$ihm->stop();
$organisationClient=null;
$bdd=null;
$ihm=null;


?>