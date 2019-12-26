<?php

class Boitier {
	
	public $id;
	public $nom;
	public $matiere;
	public $hauteur;

	
	public function __construct()
	{
		$this->nom = "";
		$this->matiere = "";
		$this->hauteur = "";
	}
	
	public function hydrateur($boitier)
	{
		$this->nom = $boitier->nom;
		$this->matiere = $boitier->matiere;
		$this->hauteur = $boitier->hauteur;
	}
}