 <?php 
//affiche dans le tableau tout des Traitements
if (isset($_GET['action']))
	$action = $_GET['action'];
if(isset($_POST['action']))
	$action = $_POST['action'];

 echo '

		<select class="form-control"  id=select_id size=10 onchange="window.location=\'GererLot.php?action='.$action.'&id=\'+document.getElementById(\'select_id\').value"> ';
	foreach ($listeTraitement as $t)
	{
		echo '<option  value="'. $t->id .'">'.$t->nom.'</option>';
	}

	echo '
		</select>

  ';
  
