<?php 
session_start();
if ($_SESSION['verif'] == false) {
		header('Location:./MonCompte.php');
	}

include("connexionBase.php");
$selection = $bdd->query('SELECT heure_ouverture,heure_fermeture FROM gestion_manuelle_volet WHERE  id_GestionM IN ( SELECT id_GestionM FROM parametragevolet WHERE id_client IN ( SELECT id_client FROM client WHERE identifiant="'.$_SESSION['id'].'"))');
$data = $selection->fetch();
$ho=$data['heure_ouverture'];
$hf=$data['heure_fermeture'];
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Parametrage Volet Automatisé</title>
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
                  <br><br><br><br><br><br><br>

                <form method="post" action ="ConfigVolet.php">

                    <fieldset id = "GestionVoletfieldset">

                        <legend> Paramètrage du volet </legend>
                        <p class="TextFormulaire2">Choissisez votre réglage:</p>
                        <p class="TextFormulaire2">
                            <input type="radio" name="mode_volet" value="manuel" required> Manuel 
                            <input type="radio" name="mode_volet" value="auto" required> Automatique </p>
                        <p> <label for="Nom" class="TextFormulaire2"> Heure d'ouverture (gestion manuelle) </label> <input type="time" name="heureOuverture" id="Nom"  class="request3"  required=""/> </p>
                        <p> <label for="Nom" class="TextFormulaire2"> Heure fermeture(gestion manuelle) </label> <input type="time" name="heureFermeture" id="Nom"  class="request3"  required=""/> </p>

                        <p> <label class="TextFormulaire2"> Valeur pivot de luminosité en lumens (gestion automatique) </label> <input type="number" value="30" min="15" max="100" name="valeur-pivot"  class="request3" required/> </p>
                        <p> <input type="submit" value="Valider la configuration"/> </p>
                    </fieldset>
                </form>
            </main>

            <!-- Et voici notre pied de page utilisé sur toutes les pages du site -->
            <?php include("footer.php") ?>

        </body>
        </html>