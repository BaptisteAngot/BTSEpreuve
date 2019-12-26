<?php

class Traitement {
	
	public $id;
	public $nom;
	
	public function __construct($id)
	{
		$this->id = $id;
		$this->nom = "";
	}

}