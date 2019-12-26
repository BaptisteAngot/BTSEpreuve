<?php 

if($b!=NULL)
		{
			$nom =$b->nom;
			$hauteur = $b->hauteur;
			$matiere=$b->matiere;
			$id = $b->id;
		}
		else
		{
			$nom="";
			$hauteur = "";
			$matiere="";
			$id="";
		}

	echo '<input type=\'hidden\' name=\'id\' value="'.$id.'">';
	echo'
	<div class="form-group row">
	<label for="example-text-input" class="col-2 col-form-label">nom</label>
	<div class="col-10">
    <input class="form-control" type="text" name=\'nom\' value="'.$nom.'" id="example-text-input">
	</div>
	</div>
	<div class="form-group row">
	<label for="example-number-input" class="col-2 col-form-label">Hauteur</label>
	<div class="col-10">';
	echo '    <input class="form-control" type="number" name=\'hauteur\' value="'.$hauteur.'" id="example-number-input">
	</div>
	</div>
	<div class="form-group row">
	<label for="example-search-input" class="col-2 col-form-label">matiere</label>
	<div class="col-10">';
	echo '<input class="form-control" type="search" name=\'matiere\' value="'.$matiere.'" id=""> 
	</div>
	</div>';
	