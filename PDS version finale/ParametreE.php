<?php 
session_start();

if ($_SESSION['verif'] == false) {
    header('Location:./MonCompte.php');
}

include("connexionBase.php");

$selection = $bdd->query('SELECT vitesse_maximale FROM parametrage_eolienne WHERE id_client in (SELECT id_client FROM client WHERE identifiant="'.$_SESSION['id'].'" )');
$data = $selection->fetch();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Parametrage eolienne</title>
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
                <?php

    if(isset($data['vitesse_maximale'])) {
        echo '<form method="post" action ="changervitesse.php">';
        echo '<fieldset id = "GestionVoletfieldset">';
        echo '<br><br><br><br><br><br><br><br>';
        echo '<p> <b> La vitesse maximale de votre éolienne est : '.$data['vitesse_maximale'].' km/H</b> </p>';
        echo '<p> <input type="submit" value="Changer"/> </p>';
        echo '</fieldset>';
        echo '</form>';
        echo '<br><br><br><br><br><br><br><br><br><br><br><br>';
    } else {
                ?>
                <form method="post" action ="ConfigEolienne.php">

                    <fieldset id = "GestionVoletfieldset">

                        <legend> Paramètrage de l'éolienne </legend>
                        <p class="TextFormulaire2">Choissisez votre vitesse:</p>
                        <p class="TextFormulaire2">
                        <p> <label for="Nom" class="TextFormulaire2"> Vitesse maximale </label> <input type="number" name="vitesse" id="Nom"  class="request3" required/> </p>
                        <p> <input type="submit" value="Valider la vitesse"/> </p>
                    </fieldset>
                </form>      
                <?php
    }
                ?>
            </main>
            <!-- Et voici notre pied de page utilisé sur toutes les pages du site -->
            <?php 
            include("footer.php");
            $selection->closeCursor();?>
        </body>
        </html>