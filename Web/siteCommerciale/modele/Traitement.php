<?php

class Traitement {
	
	public $id;
	public $nom;
	
	public function __construct()
	{
		$this->nom = "";
	}
	
	public function hydrateur($traitement)
	{
		$this->nom = $traitement->nom;
	}
}