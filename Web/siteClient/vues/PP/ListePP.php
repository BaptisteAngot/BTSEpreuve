 <?php 
//affiche dans le tableau tout des Productions personnalisées

if (isset($_GET['action']))
	$action = $_GET['action'];
if(isset($_POST['action']))
	$action = $_POST['action'];

 echo '

		<select class="form-control"  id=select_id size=10 onchange="window.location=\'GererPP.php?action='.$action.'&id=\'+document.getElementById(\'select_id\').value"> ';
	foreach ($listeProductionsPersonnalisees as $pp)
	{
		echo '<option  value="'. $pp->id .'">'.$pp->reference.'</option>';
	}

	echo '
		</select>

  ';