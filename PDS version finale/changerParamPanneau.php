<?php 
session_start();

if ($_SESSION['verif'] == false) {
    header('Location:./MonCompte.php');
}

include("connexionBase.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title> Notre entreprise </title>
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
                <br><br>
                <br><br><br><br>

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
            </main>


            <?php include("footer.php") ?>
        </body>
        </html>