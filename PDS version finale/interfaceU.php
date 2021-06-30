<?php 
session_start();
if ($_SESSION['verif'] == false) {
		header('Location:./MonCompte.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title> Interface de l'utilisateur </title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Sonsie+One" rel="stylesheet" type="text/css">
    <link rel="icon" type="img/logo.png" href="img/logo.png" />
    <script src="https://kit.fontawesome.com/165aaddbe5.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">

  </head>
  <body>
  <?php include("header.php") ?>
	<body class="fondDegradeBleu">
        <main>
        	  
<br><br>

        	<table id = "divPresentationAccueil1">
            <thead>
              <tr>
              	<th><a href="ParametreP.php"><img src="img/panneauxDashbordu.jpg" alt="photoAccueilBat" id="photoAccueilBat1"/></a></th>
              	<th><a href="ParametreV.php"><img src="img/VoletsDashbordu.jpg" alt="photoAccueilLogo" id="photoAccueilLogo1"/></a></th>
              	<th><a href="ParametreE.php"><img src="img/eolienneDashbordu.jpg"alt="photoAccueilSM" id="photoAccueilSM1"/></a></th>
              </tr>
            </thead>
          </table>


  <br><br><br><br>
        	<a href= "contact.php" class="bouton5"> Besoin d'assistance ?</a>
<br><br><br>
          <a href= "suppression.php" class="bouton5"> Suppression du compte </a>
          

    </main>

    <!-- Et voici notre pied de page utilisé sur toutes les pages du site -->
<?php include("footer.php") ?>

  </body>
</html>