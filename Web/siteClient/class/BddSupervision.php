<?php

class BddSupervision {
	
	private $conn;
	
    function __construct() {
		$dsn = 'mysql:dbname=gestion_commande;host=127.0.0.1';
		$user = 'root';
		$password = '';

		try {
			$this->conn = new PDO($dsn, $user, $password);
		} catch (PDOException $e) {
			echo 'Connexion échouée : ' . $e->getMessage();
		}
    }
	
	/*----------------------------------------boitier------------------------------------------*/
	
	function getBoitiers()//obtenir tous les boitiers
	{
		$sql =  'SELECT * FROM boitiers';
		//echo $sql;
		$stmt = $this->conn->query($sql);
		$res = $stmt->fetchAll(PDO::FETCH_CLASS);
		return $res;
	}
	
	function getBoitierById($idBoitier)//obtenir tous les boitiers par id
	{
		$sql =  'SELECT * FROM boitiers where id='. $idBoitier;
		echo $sql;
		$stmt = $this->conn->query($sql);
		$res = $stmt->fetchAll(PDO::FETCH_CLASS);
		return $res[0];
	}

	function ajouterBoitier($boitier)//ajouter un boitier au catalogue
	{
	print_r($boitier);
	$sql='INSERT INTO boitiers(
	nom,hauteur,matiere
	) 
	VALUES (
	\''.$boitier['nom'].'\',\''.$boitier['hauteur'].'\',\''.$boitier['matiere'].'\'
	);
	';
	echo $sql;
	$this->conn->exec($sql);
	}
	
	/*----------------------------------------traitement------------------------------------------*/

	function getTraitements()//obtenir tous les Traitement
	{
		$sql =  'SELECT * FROM traitements';
		//echo $sql;
		$stmt = $this->conn->query($sql);
		$res = $stmt->fetchAll(PDO::FETCH_CLASS);
		return $res;
	}
	
	function getTraitementById($id)//obtenir tous les Traitement par id
	{
		$sql =  'SELECT * FROM traitements where id='. $id;
		echo $sql;
		$stmt = $this->conn->query($sql);
		$res = $stmt->fetchAll(PDO::FETCH_CLASS);
		//return $res[0];
	}
	
	function ajouterTraitement($traitement)//ajouter un traitement au catalogue
	{
	print_r($traitement);
	$sql='INSERT INTO traitements(
	nom
	) 
	VALUES (
	\''.$traitement['nom'].'\'
	);
	';
	echo $sql;
	$this->conn->exec($sql);
	}

	function getTraitementsPourBoitier($idBoitier)
	{
		$sql =  'SELECT traitements.* from traitements, productionpersonnalisee WHERE traitements.id=productionpersonnalisee.idTraitements AND productionpersonnalisee.idBoitiers=' . $idBoitier;
		echo $sql;
		$stmt = $this->conn->query($sql);
		$res = $stmt->fetchAll(PDO::FETCH_CLASS);
		return res;
	}
	
/*---------------------------------------ProductionsPersonnalisees------------------------------------------*/
	
	function getProductionsPersonnalisees()//obtenir tous les pp
	{
		$sql =  'SELECT * FROM productionpersonnalisee';
		//echo $sql;
		$stmt = $this->conn->query($sql);
		$res = $stmt->fetchAll(PDO::FETCH_CLASS);
		return $res;
	}
	
	function getProductionsPersonnaliseesAvecFiltres($f_idBoitiers, $f_idTraitements)//obtenir tous les pp avec filtres sur boitiers et/ou traitements
	{
		$sql =  'SELECT productionpersonnalisee.id, productionpersonnalisee.reference, productionpersonnalisee.idBoitiers , productionpersonnalisee.idTraitements , boitiers.nom as nom_boitier, boitiers.hauteur as hauteur_boitier, boitiers.matiere as matiere_boitier, traitements.nom as nom_traitement FROM productionpersonnalisee, boitiers, traitements WHERE productionpersonnalisee.idBoitiers=boitiers.id AND productionpersonnalisee.idTraitements=traitements.id';
		if (($f_idBoitiers == null) && ($f_idTraitements == null))
		{
		}
		else if (($f_idBoitiers != null) && ($f_idTraitements == null))
		{
			$sql =  $sql . ' AND productionpersonnalisee.idBoitiers='. $f_idBoitiers;
		}
		else if (($f_idBoitiers == null) && ($f_idTraitements != null))
		{
			$sql =  $sql . ' AND productionpersonnalisee.idTraitements=' . $f_idTraitements;
		}
		else // if (($f_idBoitiers != null) && ($f_idTraitements != null))
		{
			$sql =  $sql . ' AND productionpersonnalisee.idBoitiers='. $f_idBoitiers . ' AND productionpersonnalisee.idTraitements=' . $f_idTraitements;
		}
//		echo $sql;
//		echo "</br>";
		$stmt = $this->conn->query($sql);
		$res = $stmt->fetchAll(PDO::FETCH_CLASS);
		
//		print_r($res);
//		echo "</br>";

		$lpp=new ArrayObject();
		
		foreach ($res as $respp)
		{
			// creer un objet $boitier
			$boitier=new Boitier($respp->idBoitiers);
			$boitier->nom = $respp->nom_boitier;
			$boitier->hauteur = $respp->hauteur_boitier;
			$boitier->matiere = $respp->matiere_boitier;
			// creer un objet $traitement
			$traitement=new Traitement($respp->idTraitements);
			$traitement->nom = $respp->nom_traitement;
			// créer un objet $pp
			$pp = new ProductionPersonnalisee($respp->id);
			$pp->setReference($respp->reference);
			$pp->setBoitier($boitier);
			$pp->setTraitement($traitement);
			$lpp->append($pp);
		}
		/*echo "</br>";
		print_r($lpp);
		echo "</br>";*/
		return $lpp;
	}
	
	function getProductionPersonnaliseeById($id)//obtenir tous les pp 
	{
		$sql =  'SELECT * FROM productionpersonnalisee where id='. $id;
		//echo $sql;
		$stmt = $this->conn->query($sql);
		$res = $stmt->fetchAll(PDO::FETCH_CLASS);
		return $res[0];
	}

	function ajouterProductionPersonnalisee($pp)//ajouter une pp au catalogue
	{
	print_r($pp);
	$sql='INSERT INTO productionpersonnalisee(
	reference, idBoitiers, idTraitements
	) 
	VALUES (
	\''.$pp['reference'].'\',\''.$pp['idBoitiers'].'\',\''.$pp['idTraitements'].'\'
	);
	';
	echo $sql;
	$this->conn->exec($sql);
	}

/*----------------------------------------Compte client------------------------------------------*/	

	/*function getCompteClient()
	{
		 $sql = "SELECT id, username, password FROM users WHERE username = :username";
		 $res = $stmt->fetchAll(PDO::FETCH_COLUMN);
		 return $res;
	
	}*/

	function getUserByName($username)//obtenir tous les boitiers par id
	{
		$sql =  'SELECT id, username, password FROM users WHERE username ="'. $username . '"';
		$stmt = $this->conn->query($sql);
		$res = $stmt->fetchAll(PDO::FETCH_CLASS);
		if (empty($res))
			return NULL;
		else
			return $res[0];
	}
}

/************************* Ajouter Commande Client*****************************/

function ajouterCommande($commande)//ajouter une commande 
	{
	$sql='INSERT INTO commande(
	idPP,quantite
	) 
	VALUES (
	\''.$commande['idPP'].'\',\''.$commande['quantite'].'\');
	';
	echo $sql;
	$this->conn->exec($sql);
	}

	
function ajouterSuivieCommande($commande)//ajouter une commande 
	{
	$sql='INSERT INTO commande(
	idPP,quantite
	) 
	VALUES (
	\''.$commande['idPP'].'\',\''.$commande['quantite'].'\');
	';
	echo $sql;
	$this->conn->exec($sql);
	}
	
	
?>