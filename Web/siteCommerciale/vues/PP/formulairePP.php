<?php 

if($pp!=NULL)
		{
			$reference =$pp->reference;
			$idBoitiers = $pp->idBoitiers;
			$idTraitements=$pp->idTraitements;
			$id = $pp->id;
		}
		else
		{
			$reference="";
			$idBoitiers = "";
			$idTraitements="";
			$id="";
			
		}

	echo '<input type=\'hidden\' name=\'id\' value="'.$id.'">';
	echo'
	<div class="form-group row">
	<label for="example-text-input" class="col-2 col-form-label">Réference</label>
	<div class="col-10">
    <input class="form-control" type="text" name=\'reference\' value="'.$reference.'" id="example-text-input">
	</div>

	</div>';