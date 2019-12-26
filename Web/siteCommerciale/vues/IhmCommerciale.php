<?php
class IhmCommerciale {
	
	private $mode = NULL;
	
    function __construct() {
	//entête
	include 'vues/header.php';
    }
	
    function __destruct() {
	include 'vues/footer.php';
    }	
/*************----------------------------------------Traitement-----------------------------------**********/
	
	function afficherFormulaireTraitement($catalogueTraitement, $mode)
	{

		echo '<div id="formTraitement'.$mode.'" class="container text-center col-sm-6">
	<h3>Traitements</h3><br>
	<form >';
		$listeTraitement=$catalogueTraitement;
        include 'vues/Traitement/ListeTraitement.php';
	echo '
	</form>
	</div>';
	}

	function afficherTraitement($t)
	{
	echo '<div class="container text-center col-sm-6">
	<h3>Formulaire Traitement</h3><br>';
	echo '<form action=\'GererTraitement.php\' method=\'POST\'>';
	echo '<input type=\'hidden\' name=\'action\' value=\'ajouter\'>';
	
	require'Traitement/formulaireTraitement.php';
	
	echo '<button type="submit" class="btn btn-success">Ajouter</button>
	</div>';
	echo '</form>';
	}
	
	function afficherModifierTraitement($t)
	{
	echo '<div class="container text-center col-sm-6">
	<h3>Formulaire Traitement</h3><br>';
	echo '<form action=\'GererTraitement.php\' method=\'POST\'>';
	echo '<input type=\'hidden\' name=\'action\' value=\'modifier\'>';
	
	require'Traitement/formulaireTraitement.php';
	
	echo '<button type="submit" class="btn btn-success">Modifier</button>
	</div>';
	echo '</form>';
	}
	
	function afficherSupprimerTraitement($t)
	{
	
	echo '<div class="container text-center col-sm-6">
	<h3>Formulaire Traitement</h3><br>';
	echo '<form action=\'GererTraitement.php\' method=\'POST\'>';
	echo '<input type=\'hidden\' name=\'action\' value=\'supprimer\'>';
	
	require'Traitement/formulaireTraitement.php';
	
	echo '<button type="submit" class="btn btn-success">Supprimer</button>
	</div>';
	echo '</form>';
	}


/*****----------------------------------------ProductionsPersonnalisees-----------------------------------***/
	
	function afficherFormulaireProductionsPersonnalisees($catalogueProductionsPersonnalisees, $mode)
	{
	echo '<div id="formPP'.$mode.'" class="container text-center col-sm-6">
	<h3>Productions Personnalisées</h3><br>
	<form >';
		$listeProductionsPersonnalisees=$catalogueProductionsPersonnalisees;
        include 'vues/PP/ListePP.php';
	echo '
	</form>
	</div>';
	}

	function afficherAjouterProductionPersonnalisee($pp)
	{
	
	echo '<div class="container text-center col-sm-6">
	<h3>Formulaire ProductionPersonnalisee </h3><br>';
	echo '<form action=\'GererPP.php\' method=\'POST\'>';
	echo '<input type=\'hidden\' name=\'action\' value=\'ajouter\'>';

	require'PP/formulairePP.php';
	
	echo '<button type="submit" class="btn btn-success">Ajouter</button>';
	echo '<button type="submit" class="btn btn-success">copier</button>
	</div>	';
	echo '</form>';
	}
	
	function afficherModifierProductionPersonnalisee($pp)
	{
	
	echo '<div class="container text-center col-sm-6">
	<h3>Formulaire ProductionPersonnalisee </h3><br>';
	echo '<form action=\'GererPP.php\' method=\'POST\'>';
	echo '<input type=\'hidden\' name=\'action\' value=\'modifier\'>';

	require'PP/formulairePP.php';
	
	echo '<button type="submit" class="btn btn-success">Modifier</button>
	</div>	';
	echo '</form>';
	}
	
	function afficherSupprimerProductionPersonnalisee($pp)
	{
	
	echo '<div class="container text-center col-sm-6">
	<h3>Formulaire ProductionPersonnalisee </h3><br>';
	echo '<form action=\'GererPP.php\' method=\'POST\'>';
	echo '<input type=\'hidden\' name=\'action\' value=\'supprimer\'>';

	require'PP/formulairePP.php';
	
	echo '<button type="submit" class="btn btn-success">Supprimer</button>
	</div>	';
	echo '</form>';
	}

/********----------------------------------------Boitier-----------------------------------*********/
	function afficherFormulaireBoitier($catalogueBoitier, $mode)
	{
	echo '<div id="formBoitier'.$mode.'" class="container text-center col-sm-6">
	<h3>Boitiers</h3><br>
	<form >';
		$listeBoitier=$catalogueBoitier;
        include 'vues/Boitier/ListeBoitier.php';
	echo '
		
	</form>
	</div>';
	}
	
	function afficherBoitier($b)
	{
		
	echo '<div class="container text-center col-sm-6">
	<h3>Formulaire Boitier</h3><br>';
	echo '<form action=\'GererBoitier.php\' method=\'POST\'>';
	echo '<input type=\'hidden\' name=\'action\' value=\'ajouter\'>';
	
	require'Boitier/formulaireBoitier.php';
	
	echo '<button type="submit" class="btn btn-success">ajouter</button>';
	echo '<button type="submit" class="btn btn-success">copier</button>
	</div>';
	echo '</form>';
	}
	
	
	function afficherModifierBoitier($b)
	{
		
	echo '<div class="container text-center col-sm-6">
	<h3>Formulaire Boitier</h3><br>';
	echo '<form action=\'GererBoitier.php\' method=\'POST\'>';
	echo '<input type=\'hidden\' name=\'action\' value=\'modifier\'>';
	
	require'Boitier/formulaireBoitier.php';
	
	echo '<button type="submit" class="btn btn-success">modifier</button>
	</div>';
	echo '</form>';
	}
	
	
	function afficherSupprimerBoitier($b)
	{
		
	echo '<div class="container text-center col-sm-6">
	<h3>Formulaire Boitier</h3><br>';
	echo '<form action=\'GererBoitier.php\' method=\'POST\'>';
	echo '<input type=\'hidden\' name=\'action\' value=\'supprimer\'>';
	
	require'Boitier/formulaireBoitier.php';
	
	echo '<button type="submit" class="btn btn-success">supprimer</button>
	</div>';
	echo '</form>';
	}
	
/******----------------------------------------Commerciale------------------------------------------********/



	};
?>