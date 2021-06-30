<?php 
session_start();
include("connexionBase.php");
$selection = $bdd->query('SELECT id_client FROM client WHERE identifiant="'.$_SESSION['id'].'"');
$data = $selection->fetch();



$selection2= $bdd->query('SELECT id_client FROM choisir WHERE id_client IN (SELECT id_client FROM client where identifiant="'.$_SESSION['id'].'")');
$data2 = $selection2->fetch();
if (isset($data2['id_client'])) {
    $insertion = $bdd->prepare('UPDATE parametrage_panneau_photovoltaique SET inclinaison=:inclinaison, orientation=:orientation WHERE id_parametrage_panneau IN (SELECT id_parametrage_panneau FROM choisir WHERE id_client="'.$data['id_client'].'"');
    $insertion->execute(array('inclinaison' => htmlspecialchars($_POST['inclinaison']), 
                          'orientation' => htmlspecialchars($_POST['orientationPanneau'])));
    header('Location:./ParametreP.php');
    die();
} else {
    $insertion = $bdd->prepare('INSERT INTO parametrage_panneau_photovoltaique (inclinaison,orientation) VALUES (:inclinaison, :orientation)');
    $insertion->execute(array('inclinaison' => htmlspecialchars($_POST['inclinaison']), 
                          'orientation' => htmlspecialchars($_POST['orientationPanneau'])));
     $insertion2 = $bdd->prepare('INSERT INTO choisir (id_client,id_parametrage_panneau) VALUES (:id_client, :id_parametrage_panneau)');
    header('Location:./ParametreP.php');
    die();
}

$selection->closeCursor();
$selection2->closeCursor();
?>

<!-- $selection1 = $bdd->query('SELECT id_parametrage_panneau FROM parametrage_panneau_photovoltaique AS pp
//   INNER JOIN choisir ON pp.id_parametrage_panneau=choisir.id_parametrage_panneau
//   INNER JOIN client on choisir.id_client=client.id_client
//   WHERE identifiant="'.$_SESSION['id'].'"'); 
// $data1 = $selection->fetch();
 --><!-- <!DOCTYPE html>
<html>
    <head>
        <title> Envoi contact </title>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Sonsie+One" rel="stylesheet" type="text/css">
        <link rel="icon" type="img/logo.png" href="img/logo.png" />
        <script src="https://kit.fontawesome.com/165aaddbe5.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="style.css">

    </head>
    <body class="fondDegradeBleu">
        <-?php include("header.php") ?>
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
        <-?php include("footer.php") ?>

    </body>
</html> -->