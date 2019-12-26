<?php

if($t!=NULL)
		{
			$nom =$t->nom;
			$id = $t->id;
		}
		else
		{
			$nom="";
			$id="";
			
		}
	
	echo '<input type=\'hidden\' name=\'id\' value="'.$id.'">';
	echo'
	<div class="form-group row">
	<label for="example-text-input" class="col-2 col-form-label">Nom </label>
	<div class="col-10">
    <input class="form-control" type="text" name=\'nom\' value="'.$nom.'" id="example-text-input">
	</div>
	</div>';
			