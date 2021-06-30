<?php 
session_start();
include("connexionBase.php");

$insertion = $bdd->prepare('INSERT INTO gestion_manuelle_volet(heure_ouverture,heure_fermeture) VALUES (:heure_ouverture,:heure_fermeture)');
$insertion->execute(array('heure_ouverture' => htmlspecialchars($_POST['heureOuverture']),
                          'heure_fermeture' => htmlspecialchars($_POST['heureFermeture'])
                         ));


$insertion2 = $bdd->prepare('INSERT INTO gestion_automatique_volet(valeur_pivot) VALUES (:valPiv)');
$insertion2->execute(array('valPiv' => htmlspecialchars($_POST['valeur-pivot'])
                          ));
if ($_POST['mode_volet']=="auto") {
    $am="0";
    $aa="1";
} else {
    $am="1";
    $aa="0";
}
$insertion3=$bdd->prepare('INSERT INTO parametragevolet(activationManuelle,activationAuto) VALUES (:am,:aa)');
$insertion3->execute(array('am' => htmlspecialchars($am),
                          'aa' => htmlspecialchars($aa)
                         ));
?>


<!DOCTYPE html>
<html>
    <head>
        <title> Paramètrage </title>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Sonsie+One" rel="stylesheet" type="text/css">
        <link rel="icon" type="img/logo.png" href="img/logo.png" />
        <script src="https://kit.fontawesome.com/165aaddbe5.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="style.css">

    </head>
    <body class="fondDegradeBleu">
        <?php include("header.php") ?>
        <br>
        <br>
        <br>
        <br><br>
        <br><br>
        <br><br>
        <br> 
        <pre>                                                                                                                                                        <b>Vos paramètres de configuration sont enregistrés</b></pre>

        <br>
        <br><br>
        <br><br>
        <br><br>
        <br><br>
        <br><br>
        <br>
        <?php include("footer.php") ?>

    </body>
</html>