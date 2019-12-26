<?php
require_once "vues/IhmClient.php";
require_once 'modele/ProductionPersonnaliser.php';
require_once 'class/BddSupervision.php';
require_once 'controleur/OrganiserActiviteClient.php';

$ihm = new IhmClient();
$bdd = new BddSupervision();

$organisationClient = new OrganiserActiviteClient();
$organisationClient->setIHM($ihm);
$organisationClient->setBDD($bdd);

session_start();


$ihm->start();
if(isset($_POST['login'])){
    
    $username = !empty($_POST['username']) ? trim($_POST['username']) : null;
    $passwordAttempt = !empty($_POST['password']) ? trim($_POST['password']) : null;
    
    $user=$bdd->getUserByName($username);
	
	print_r($user);
    
    if($user == NULL){
        die('Login inconnu !');
    } else{

        $validPassword = ($passwordAttempt == $user->password);
		
        if($validPassword){

            $_SESSION['user_id'] = $user->id;
            $_SESSION['logged_in'] = time();

            header('Location: NouvelleCommande.php ');
            exit;
            
        } else{
            //$validPassword was FALSE. Passwords do not match.
            die('erreur de mot de  passe !');
        }
    }
    
}
?>

<center>
<h1>Login</h1>
<?php 
if ((isset($_GET['expire'])) && ($_GET['expire']==1))
	echo "<h2 style='background-color : red'>Votre session a expiré veuillez vous reconnecter</h2>";
?>
<form action="login.php" method="post">
	<br>
	<label for="username">Username</label>
	<input type="text" id="username" name="username">
	<br><br>
	<label for="password">Password</label>
	<input type="password" id="password" name="password">
	<br><br>
	<input type="submit" name="login" value="Login">
</form>
</center>
<?php
$ihm->stop();
$organisationClient=null;
$bdd=null;
$ihm=null;
?>
