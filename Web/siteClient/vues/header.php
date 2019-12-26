<?php

echo '
<html lang="fr">
<head>
	
	
  <title> Site Client</title>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
   <link rel="stylesheet" href="vues/css/bootstrap.min.css">
  <script src="vues/js/jquery.js"></script>
  <script src="vues/js/bootstrap.min.js"></script>
  <style>

  </style>
</head>
<body>

<div class="jumbotron">
  <div class="container text-center">
    <h1>Chaine de production</h1>      
    <p>Commande Client</p>
  </div>
</div>

<nav class="navbar navbar-inverse">
  
    <div class="navbar-header">
	
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
 
      <a class="navbar-brand" href="#"></a>
    </div>
    
	<div class="collapse navbar-collapse" id="myNavbar">
		<ul class="nav navbar-nav">
		<li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown">
		<li><a href="NouvelleCommande.php?action=ajouter">Passer une Commande</a></li>
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
         
        </ul>
      </li>

	  <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown">
		<li><a href="SuiviCommande.php?action=selectionCmd">Suivre une Commande</a></li>
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
        </ul>
      </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
';
if ($clientConnecte)
		 echo '<li><a href="deconnecter.php"><span class="glyphicon glyphicon-log-in"></span> Deconnecter</a></li>';
	 else
		 echo '<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> login</a></li>';
echo '</ul>
    </div>
  </div>
</nav>

';
?>