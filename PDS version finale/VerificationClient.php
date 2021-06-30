<?php 
session_start();
$_SESSION['verif'] = false;
$_SESSION['id'] = "";

 

 

 

include("connexionBase.php");

 


if(isset($_POST['IdU']) && isset($_POST['password'])) {
    $req = $bdd->query('SELECT identifiant, password FROM client where identifiant ="'.$_POST['IdU'].'"');
    $data = $req->fetch();
    if($_POST['password'] == $data['password']) {
        $_SESSION['verif'] = true;
        $_SESSION['id'] = $data['identifiant'];
    }
}
    
	  $req->closeCursor();

	if ($_SESSION['verif'] == true) {
		header('Location:./interfaceU.php');
	}
	else {
		echo "données de connexion incorrectes";
	}

?>