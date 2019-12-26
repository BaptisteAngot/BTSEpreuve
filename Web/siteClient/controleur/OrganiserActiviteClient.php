<?php

class OrganiserActiviteClient {
	

	private $catalogueBoitier=NULL;
	private $catalogueTraitement=NULL;
	private $nombreBoitiers;
	private $listeTraitement=NULL;
	private $catalogueProductionsPersonnalisees=NULL;
	private $bdd=NULL;
	private $ihm=NULL;
	private $idClientConnecte=0;
		
	/*constructeur*/
	
	public function __construct()
	{
		$this->nombreBoitiers = 0;
	}
	
	public function setIHM($ihm)
	{
		$this->ihm=$ihm;
		$this->ihm->setOrganisationClient($this);
	}
	
	public function setBDD($bdd)
	{
		$this->bdd=$bdd;
	}
	
/***************méthode permettant de Valider une client***************************/

	public function setIdClientConnecte($idClientConnecte)
	{
		$this->idClientConnecte=$idClientConnecte;
	}

	public function getIdClientConnecte()
	{
		return $this->idClientConnecte;
	}

	


/***************méthode permettant d'ajouter une Commande ***************************/

function ajouterCommande($commande)
	{
		$this->bdd->ajouterCommande($commande);
	}
	
}


