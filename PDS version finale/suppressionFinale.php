<?php 
session_start();
include("connexionBase.php");
if(isset($_POST['confirmEmail'])){

    $req = $bdd->query('SELECT identifiant FROM client where mail ="'.$_POST['confirmEmail'].'"');
    $data = $req->fetch();
    echo $_SESSION['id'];
    if ($data['identifiant'] == $_SESSION['id'] ) {
        $bdd->exec('DELETE FROM choisir WHERE id_client in (SELECT id_client FROM client WHERE identifiant="'.$_SESSION['id'].'")');
        $bdd->exec('DELETE FROM parametragevolet WHERE id_client in (SELECT id_client FROM client WHERE identifiant="'.$_SESSION['id'].'")');
        $bdd->exec('DELETE FROM dependre WHERE id_capteur in (SELECT id_capteur FROM capteur_eolienne WHERE id_parametrage_eolienne in (SELECT id_parametrage_eolienne FROM parametrage_eolienne WHERE id_client in (SELECT id_client FROM client WHERE identifiant="'.$_SESSION['id'].'")');
        $bdd->exec('DELETE FROM capteur_eolienne WHERE id_parametrage_eolienne in (SELECT id_parametrage_eolienne FROM parametrage_eolienne WHERE id_client in (SELECT id_client FROM client WHERE identifiant="'.$_SESSION['id'].'")');
        $bdd->exec('DELETE FROM parametrage_eolienne WHERE id_client in (SELECT id_client FROM client WHERE identifiant="'.$_SESSION['id'].'")');
        $bdd->exec('DELETE FROM client WHERE identifiant="'.$_SESSION['id'].'"');
    }
    $req->closeCursor();
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Compte supprimé </title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Sonsie+One" rel="stylesheet" type="text/css">
    <link rel="icon" type="img/logo.png" href="img/logo.png" />
    <script src="https://kit.fontawesome.com/165aaddbe5.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <?php include("header.php");
    ?>

    <body class="fondDegradeBleu">
        <main>
            <br><br><br><br><br><br><br><br><br><br><br>
            <pre>                                                                                                                                                        <b>Votre compte a bien été supprimé</b>
                                         <a href="index.php" title="page accueil">                                                                                                                   <b>RETOUR A L'ACCUEIL</b></a></pre>
            <br>
            

            <br><br><br>
        </main>
        <!-- Et voici notre pied de page utilisé sur toutes les pages du site -->
        <?php 
        session_destroy();
        include("footer.php") ?>
    </body>
    </html>


