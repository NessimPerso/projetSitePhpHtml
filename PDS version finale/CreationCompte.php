<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title> Créer son compte utilisateur </title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Sonsie+One" rel="stylesheet" type="text/css">
    <link rel="icon" type="img/logo.png" href="img/logo.png" />
    <script src="https://kit.fontawesome.com/165aaddbe5.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">

  </head>
<body>
<?php include("header.php") ?>

  <body class="corpsPagesFormulaire">
<main>

  <table id="tableauFormulaire">
     <tr>
		      <form method="post" action ="nouveauClient.php">
            <td>
      				
              <fieldset id = "Inscription1" class="positionFormulaire">
       				
              <legend>Inscription</legend>

       				<p> <label for="Nom" class="TextFormulaire2"> Votre nom : </label> <input type="text" name="Nom" id="Nom" placeholder="EL-SABBAGH" class="request2" required/> </p>
                
  					   <p> <label for="Prenom" class="TextFormulaire2"> Votre prénom : </label> <input type="text" name="Prenom" id="Prenom" placeholder="Nessim" class="request2" required/> </p>

  					   <p> <label for="Ville" class="TextFormulaire2"> Votre ville : </label> <input type="text" name="Ville" id ="Ville" placeholder="Fontenay-sous-bois" class="request2" required/> </p>

  					   <p> <label for="Pays" class="TextFormulaire2"> Pays : </label> <input type="text" name="Pays" id="Pays" placeholder="FRANCE" class="request2" required /> </p>
     				 </fieldset>
            </td>

            <td>
            <fieldset id = "Inscription2" class="positionFormulaire">
              <br>
              <p> <label for="mail" class="TextFormulaire2"> Adresse e-mail : </label> <input type="email" name="mail" id="mail" placeholder="nessSbgh.gmail@com" class="request2" required/> </p>

               <p> <label for="identifiant" class="TextFormulaire2">  Choisir un identifiant: </label> <input type="text" name="identif" id="identif" placeholder="NessSBG125" class="request2" required/> </p>

               <p> <label for="MotDePasse" class="TextFormulaire2"> Choisir un mot de passe: </label> <input type="password" name="mdp" id ="mdp" placeholder="***********" class="request2" required/> </p>
               <br>

               <p> <input type="submit" value="Créer son compte" class="Boutton1" /></p>
            </fieldset>
          </td> 
        </form>
      </tr>
    </table>

    </main>
<?php include("footer.php") ?>

</body>
</html>