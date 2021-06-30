<?php 
session_start();
if ($_SESSION['verif'] == false) {
		header('Location:./MonCompte.php');
	}
include("connexionBase.php");

$selection = $bdd->query('SELECT inclinaison,orientation FROM parametrage_panneau_photovoltaique AS pp
  INNER JOIN choisir ON pp.id_parametrage_panneau=choisir.id_parametrage_panneau
  INNER JOIN client on choisir.id_client=client.id_client
  WHERE identifiant="'.$_SESSION['id'].'"');
$data = $selection->fetch();
?>



<!DOCTYPE html>
<html>
<head>
  <title>Parametrage panneau</title>
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
      <br><br><br><br>
        <?php
        if(isset($data['inclinaison'])&& isset($data['orientation'])) {
        echo '<form method="post" action ="changerParamPanneau.php">';
        echo '<fieldset id = "GestionVoletfieldset">';
        echo '<br><br><br><br><br><br><br><br>';
        echo '<p> <b> Vos panneaux ont une inclinaison de : '.$data['inclinaison'].' degré et une orientation dans la direction suivante:'.$data['orientation'].' </b></p>';
        echo '<p> <input type="submit" value="Changer"/> </p>';
        echo '</fieldset>';
        echo '</form>';
        echo '<br><br><br><br><br><br><br><br><br><br><br><br>';
      } else {
                ?>
               
        <form method="post" action ="ConfigPanneau.php">
                    
                    <fieldset id = "GestionVoletfieldset" class="positionFormulaire">
                    
                    <legend> Paramètrage du panneau </legend>
   
                    <p class="TextFormulaire2">Choissisez votre réglage:</p>
                    <p class="TextFormulaire2">
                    <p> <label for="Nom" class="TextFormulaire2"> Inclinaison (en degré) </label> <input type="number" name="inclinaison" id="Nom"  class="request3" min="0" max="360" required/> </p>
                     <p> <label for="Nom" class="TextFormulaire2"> Orientation </label> 
                      <select name="orientationPanneau" class="request3" required="">
                        <option value="Nord">Nord</option>
                        <option value="Sud">Sud</option>
                        <option value="Est">Est</option>
                        <option value="Ouest">Ouest</option>
                      </select></p>

                    <br><input type="submit" value="Valider la configuration"/> 
          </form>
   
                <?php
    }
                ?>

            
    </main>
    <!-- Et voici notre pied de page utilisé sur toutes les pages du site -->
    <?php include("footer.php") ;
    $selection->closeCursor();
    ?>
  </body>
</html>