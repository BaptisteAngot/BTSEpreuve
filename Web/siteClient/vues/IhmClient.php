<?php
class IhmClient {
	
	private $mode = NULL;
	private $organisationClient = NULL;
	
    function __construct() {
    }
	
    function __destruct() {
    }	
	
	public function start()
	
	{
		//entête
		$clientConnecte = $this->organisationClient->getIdClientConnecte();
		include 'vues/header.php';		
	}

	public function stop()
	{
		//footer
		include 'vues/footer.php';		
	}
	
	public function setOrganisationClient($organisationClient)
	{
		$this->organisationClient=$organisationClient;
	}

/********----------------------------------------Boitier-----------------------------------*********/
	
	function afficherCommande($c)
	{
	echo '<form action=\'NouvelleCommande.php\' method=\'POST\'>';
	echo '<input type=\'hidden\' name=\'action\' value=\'ajouter\'>';
	
	echo '</form>';
	}
}

?>