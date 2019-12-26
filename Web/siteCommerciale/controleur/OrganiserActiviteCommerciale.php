<?php

class OrganiserActiviteCommerciale {
	
	private $catalogueBoitier=NULL;
	private $catalogueTraitement=NULL;
	private $nombreBoitiers;
	private $listeTraitement=NULL;
	private $catalogueProductionsPersonnalisees=NULL;
	private $bdd=NULL;
	private $ihm=NULL;

	
	/*constructeur*/
	public function __construct()
	{
		$this->nombreBoitiers = 0;
	}
	
	public function setIHM($ihm)
	{
		$this->ihm=$ihm;
	}
	
	public function setBDD($bdd)
	{
		$this->bdd=$bdd;
	}
	
/************méthode permettant d'ajouter un boitier à  notre catalogueBoiter******************/
	
	public function creerNouveauBoitier($boitier)
	{
		$this->bdd->setBoitier($boitier);
	}
	
	public function obtenirCatalogueBoitier()
	{
		$this->catalogueBoitier=$this->bdd->getBoitiers();
		return $this->catalogueBoitier;
	}
	
//ajouter un boitier	
	public function afficherAjouterBoitier($idBoitier)
	{
		$catalogueBoitier = $this->bdd->getBoitiers();
		$this->ihm->afficherFormulaireBoitier($catalogueBoitier, "ajout");
		if($idBoitier!=NULL)
			$b = $this->bdd->getBoitierById($idBoitier);
		else
			$b=NULL;
		$this->ihm->afficherBoitier($b);
	}
	
	public function ajouterBoitier($boitier)
	{
		$this->bdd->ajouterBoitier($boitier);
		$this->afficherAjouterBoitier(NULL);
	}
	
//modifier un boitier
	public function afficherModifierBoitier($idBoitier)
	{

		$catalogueBoitier = $this->bdd->getBoitiers();
		$this->ihm->afficherFormulaireBoitier($catalogueBoitier, "modif");
		if($idBoitier!=NULL)
			$b = $this->bdd->getBoitierById($idBoitier);
		else
			$b=NULL;
		$this->ihm->afficherModifierBoitier($b);
	}
	
	public function modifierBoitier($boitier)
	{
		$this->bdd->modifierBoitier($boitier);
		$this->afficherModifierBoitier(NULL);
	}
	
//supprimer un boitier	
	public function afficherSupprimerBoitier($idBoitier)
	{
		$catalogueBoitier = $this->bdd->getBoitiers();
		$this->ihm->afficherFormulaireBoitier($catalogueBoitier, "suppr");
		if($idBoitier!=NULL)
			$b = $this->bdd->getBoitierById($idBoitier);
		else
			$b=NULL;
		$this->ihm->afficherSupprimerBoitier($b);
	}
	function supprimerBoitier($boitier)
	{
		$this->bdd->supprimerBoitier($boitier);
		$this->afficherSupprimerBoitier(NULL);
	}
	
/*************méthode permettant d'ajouter un traitement à  notre catalogueTraitement***************/
	
	public function creerNouveauTraitement($traitement)
	{
		$this->bdd->setTraitement($traitement);
	}
	
	public function obtenirCatalogueTraitement()
	{
		$this->catalogueTraitement=$this->bdd->getTraitements();
		return $this->catalogueTraitement;
	}
	
//ajouter un traitement	
	public function afficherAjouterTraitement($idTraitement)
	{
		$catalogueTraitement = $this->bdd->getTraitements();
		$this->ihm->afficherFormulaireTraitement($catalogueTraitement, "ajout");
		if($idTraitement!=NULL)
			$t = $this->bdd->getTraitementById($idTraitement);
		else
			$t=NULL;
		$this->ihm->afficherTraitement($t);
	}
	
	public function ajouterTraitement($traitement)
	{
		$this->bdd->ajouterTraitement($traitement);
		$this->afficherAjouterTraitement(NULL);
	}
//modifier un traitement	
	public function afficherModifierTraitement($idTraitement)
	{
		$catalogueTraitement = $this->bdd->getTraitements();
		$this->ihm->afficherFormulaireTraitement($catalogueTraitement, "modif");
		if($idTraitement!=NULL)
			$t = $this->bdd->getTraitementById($idTraitement);
		else
			$t=NULL;
		$this->ihm->afficherModifierTraitement($t);
	}
	
		public function modifierTraitement($traitement)
	{
		$this->bdd->modifierTraitement($traitement);
		$this->afficherModifierTraitement(NULL);
	}
//supprimer un traitement		
	public function afficherSupprimerTraitement($idTraitement)
	{
		$catalogueTraitement = $this->bdd->getTraitements();
		$this->ihm->afficherFormulaireTraitement($catalogueTraitement, "suppr");
		if($idTraitement!=NULL)
			$t = $this->bdd->getTraitementById($idTraitement);
		else
			$t=NULL;
		$this->ihm->afficherSupprimerTraitement($t);
	}
	
	public function supprimerTraitement($traitement)
	{
		$this->bdd->supprimerTraitement($traitement);
		$this->afficherSupprimerTraitement(NULL);
	}

/***************méthode permettant d'ajouter une PP à  notre cataloguePP***************************/
	
	public function creerNouvelleProductionPersonnaliser($productionPersonnaliser)
	{
		$this->bdd->setProductionPersonnaliser($productionPersonnaliser);
	}
	
	public function obtenirCatalogueProductionsPersonnalisees()
	{
		$this->catalogueProductionPersonnaliser=$this->bdd->getProductionPersonnaliser();
		return $this->catalogueProductionPersonnaliser;
	}
//ajouter une PP	
	public function afficherAjouterProductionPersonnalisee($idpp)
	{
		$catalogueProductionsPersonnalisees = $this->bdd->getProductionsPersonnalisees();
		$this->ihm->afficherFormulaireProductionsPersonnalisees($catalogueProductionsPersonnalisees, "ajout");
		if($idpp!=NULL)
			$pp = $this->bdd->getProductionPersonnaliseeById($idpp);
		else
			$pp=NULL;
		$this->ihm->afficherAjouterProductionPersonnalisee($pp);
	}
	
	public function ajouterProductionPersonnalisee($pp)
	{
		$this->bdd->ajouterProductionPersonnalisee($pp);
		$this->afficherAjouterProductionPersonnalisee(NULL);
	}
	
//modifier une PP	
	public function afficherModifierProductionPersonnalisee($idpp)
	{
		$catalogueProductionsPersonnalisees = $this->bdd->getProductionsPersonnalisees();
		$this->ihm->afficherFormulaireProductionsPersonnalisees($catalogueProductionsPersonnalisees, "ajout");
		if($idpp!=NULL)
			$pp = $this->bdd->getProductionPersonnaliseeById($idpp);
		else
			$pp=NULL;
		$this->ihm->afficherModifierProductionPersonnalisee($pp);
	}
	
	public function modifierProductionPersonnalisee($pp)
	{
		$this->bdd->modifierProductionPersonnalisee($pp);
		$this->afficherModifierProductionPersonnalisee(NULL);
	}

//supprimer une PP	
	public function afficherSupprimerProductionPersonnalisee($idpp)
	{
		$catalogueProductionsPersonnalisees = $this->bdd->getProductionsPersonnalisees();
		$this->ihm->afficherFormulaireProductionsPersonnalisees($catalogueProductionsPersonnalisees, "ajout");
		if($idpp!=NULL)
			$pp = $this->bdd->getProductionPersonnaliseeById($idpp);
		else
			$pp=NULL;
		$this->ihm->afficherSupprimerProductionPersonnalisee($pp);
	}
	
	public function supprimerProductionPersonnalisee($pp)
	{
		$this->bdd->supprimerProductionPersonnalisee($pp);
		$this->afficherSupprimerProductionPersonnalisee(NULL);
	}


/***************méthode permettant d'ajouter une client***************************/




}