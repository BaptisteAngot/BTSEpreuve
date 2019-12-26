<?php

class Boitier {
	
	public $id;
	public $nom;
	public $hauteur;
	public $matiere;

	
	public function __construct($id)
	{
		$this->id = $id;
		$this->nom = "";
		$this->matiere = "";
		$this->hauteur = "";
	}

}