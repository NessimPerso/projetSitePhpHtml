<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>confirmation suppression</title>
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
            <br><br>
            <br><br>
            <br>
            <br>
            <br>

                <form method="post" action ="suppressionFinale.php">
                    <fieldset id="GestionSuppression"> 
                    <legend>Confirmer l'adresse mail</legend>
                     <br><br>
                     <input type="email" name="confirmEmail" id="confirmMail"  class="request1" required />
                    <br><br> <br><br>
                     <input type="submit" value="Valider" class="Boutton1" />
                    </fieldset>
                </form>
        </main>
        <!-- Et voici notre pied de page utilisé sur toutes les pages du site -->
        <?php include("footer.php") ?>
    </body>
</html>

   
  