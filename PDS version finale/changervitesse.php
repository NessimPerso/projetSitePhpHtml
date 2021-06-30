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
                <form method="post" action ="ConfigEolienne.php">

                    <fieldset id = "GestionVoletfieldset">

                        <legend> Paramètrage de l'éolienne </legend>
                        <p class="TextFormulaire2">Choissisez votre vitesse:</p>
                        <p class="TextFormulaire2">
                        <p> <label for="Nom" class="TextFormulaire2"> Vitesse maximale </label> <input type="number" name="vitesse" id="Nom"  class="request3" required/> </p>
                        <p> <input type="submit" value="Valider la vitesse"/> </p>
                    </fieldset>
                </form>  
            </main>


            <?php include("footer.php") ?>
        </body>
        </html>