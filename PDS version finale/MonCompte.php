<?php
session_start();
if(isset($_SESSION['verif']) && $_SESSION['verif'] == true) {
    header('Location:./interfaceU.php');
}
?>

<!DOCTYPE html>
<html>
<head>
	<title> Se connecter à mon compte </title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Sonsie+One" rel="stylesheet" type="text/css">
    <link rel="icon" type="img/logo.png" href="img/logo.png" />
    <script src="https://kit.fontawesome.com/165aaddbe5.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">

  </head>
<body>
<?php include("header.php") ?>

<main>
		      
 
				<form method="post" action ="VerificationClient.php">
     				<fieldset id = "Connexion">		
     				<legend>Connexion</legend>
     				<p> <label for="IdU" class="TextFormulaire"> Identifiant : </label> <input type="text" name="IdU" id="IdU" placeholder="Nessim66534" class="request1" required /> </p>
     				<br>
					<p> <label for="password" class="TextFormulaire"> Mot de passe : </label> <input type="password" name="password" id="password" placeholder="*******" class="request1" required/> </p>
					<br>
					<p> <input type="submit" value="Se connecter" class="Boutton1" /></p>
					<br>
					<p id="lienCo"> <label for="LienConnexion"> <a href="CreationCompte.php" id="lien"> Pas encore inscrit ? Créer son compte </a> </label> </p>
     				</fieldset>
     			</form>
</main>


<?php include("footer.php") ?>

</body>
</html>