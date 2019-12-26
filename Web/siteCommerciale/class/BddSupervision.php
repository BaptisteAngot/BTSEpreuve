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
		$stmt = $this->conn->query($sql);
		$res = $stmt->fetchAll(PDO::FETCH_CLASS);
		return $res;
	}
	
	function getBoitierById($id)//obtenir tous les boitiers par id
	{
		$sql =  'SELECT * FROM boitiers where id='. $id;
		$stmt = $this->conn->query($sql);
		$res = $stmt->fetchAll(PDO::FETCH_CLASS);
		return $res[0];
	}

	function ajouterBoitier($boitier)//ajouter un boitier au catalogue
	{
	$sql='INSERT INTO boitiers(
	nom,hauteur,matiere
	) 
	VALUES (
	\''.$boitier['nom'].'\',\''.$boitier['hauteur'].'\',\''.$boitier['matiere'].'\'
	);
	';
	$this->conn->exec($sql);
	}
	
	function modifierBoitier($boitier)//modifier un boitier au catalogue
	{
	//print_r($boitier);
	
	$sql='UPDATE boitiers SET nom= "'.$boitier['nom'].'", hauteur="'.$boitier['hauteur'].'", matiere="'.$boitier['matiere'].'" WHERE id="'.$boitier['id'].'"';
	$this->conn->exec($sql);
	}

	function supprimerBoitier($boitier)//supprimer un boitier au catalogue
	{
	$idBoitier = $boitier['id'];
	$sql='DELETE FROM boitiers WHERE  id='.$idBoitier;
	$this->conn->exec($sql);
	}

	/*----------------------------------------traitement------------------------------------------*/

	function getTraitements()//obtenir tous les Traitement
	{
		$sql =  'SELECT * FROM traitements';
		$stmt = $this->conn->query($sql);
		$res = $stmt->fetchAll(PDO::FETCH_CLASS);
		return $res;
	}
	
	function getTraitementById($id)//obtenir tous les Traitement
	{
		$sql =  'SELECT * FROM traitements where id='. $id;
		$stmt = $this->conn->query($sql);
		$res = $stmt->fetchAll(PDO::FETCH_CLASS);
		return $res[0];
	}
	
	function ajouterTraitement($traitement)//ajouter un traitement au catalogue
	{
	//print_r($traitement);
	$sql='INSERT INTO traitements(
	nom
	) 
	VALUES (
	\''.$traitement['nom'].'\'
	);
	';
	//echo $sql;
	$this->conn->exec($sql);
	}
	
	function modifierTraitement($traitement)//modifier un boitier au catalogue
	{
	$sql='UPDATE traitements SET nom= "'.$traitement['nom'].'"WHERE id="'.$traitement['id'].'"';
	$this->conn->exec($sql);
	}

	function supprimerTraitement($traitement)//supprimer un boitier au catalogue
	{
	$idTraitement = $traitement['id'];
	$sql='DELETE FROM traitements WHERE  id='.$idTraitement;
	$this->conn->exec($sql);
	}
	
/*---------------------------------------ProductionsPersonnalisees------------------------------------------*/
	
	function getProductionsPersonnalisees()//obtenir tous les pp
	{
		$sql =  'SELECT * FROM productionpersonnalisee';
		$stmt = $this->conn->query($sql);
		$res = $stmt->fetchAll(PDO::FETCH_CLASS);
		return $res;
	}
	
	function getProductionPersonnaliseeById($id)//obtenir tous les pp 
	{
		$sql =  'SELECT * FROM productionpersonnalisee where id='. $id;
		$stmt = $this->conn->query($sql);
		$res = $stmt->fetchAll(PDO::FETCH_CLASS);
		return $res[0];
	}

	function ajouterProductionPersonnalisee($pp)//ajouter une pp au catalogue
	{
	$sql='INSERT INTO productionpersonnalisee(
	reference
	) 
	VALUES (
	\''.$pp['reference'].'\'
	);
	';
	//echo $sql;
	
	$this->conn->exec($sql);
	
	}
	
	function modifierProductionPersonnalisee($pp)//modifier une pp au catalogue
	{
	$sql='UPDATE productionpersonnalisee SET reference= "'.$pp['reference'].'" WHERE id="'.$pp['id'].'"';
	$this->conn->exec($sql);
	}
	
	function supprimerProductionPersonnalisee($pp)//supprimer une PP au catalogue
	{
	$idpp= $pp['id'];
	$sql='DELETE FROM productionpersonnalisee WHERE  id='.$idpp;
	$this->conn->exec($sql);
	}
/*----------------------------------------Compte client------------------------------------------*/	

	/*function getCompteClient()
	{
		$sql =  "SELECT count(*) as nb FROM membres WHERE pseudo = '".$nom."'";
		$stmt = $this->conn->query($sql);
		$res = $stmt->fetchAll(PDO::FETCH_COLUMN);
		return $res;
	
	}*/
}
?>