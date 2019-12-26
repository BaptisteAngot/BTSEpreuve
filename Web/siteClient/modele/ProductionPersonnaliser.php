<?php

class ProductionPersonnalisee {
	
	private $id;
	private $reference;
	private $boitier;
	private $traitement;

	
	public function __construct($id)
	{
		$this->id=$id;
		$this->reference="";
		$this->boitier = null;
		$this->traitement = null;
	}

	public function setReference($reference)
	{
		$this->reference=$reference;
	}

	public function getReference()
	{
		return $this->reference;
	}
	
	public function setBoitier($boitier)
	{
		$this->boitier=$boitier;
	}

	public function getBoitier()
	{
		return $this->boitier;
	}
	
	public function setTraitement($traitement)
	{
		$this->traitement=$traitement;
	}

	public function getTraitement()
	{
		return $this->traitement;
	}
}
?>