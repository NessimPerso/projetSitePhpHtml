<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title> Eolienne </title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Sonsie+One" rel="stylesheet" type="text/css">
    <link rel="icon" type="img/logo.png" href="img/logo.png" />
    <script src="https://kit.fontawesome.com/165aaddbe5.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">

  </head>
<body>

<?php include("header.php") ?>

  <main>

      <img src="img/eo.jpg" alt="PhotoProduit" id="photoPanneau">
      <!-- <a href="#"><img src="img/bou.png" id="add"></a> -->

        <h1 class="textPanneau" id="titrePanneau">Eolienne domestique</h1>
        <h3 class="textPanneau" id="titreproduit">Description</h3>

          <p class="textPanneau"> L'éolienne vous permet d'optimiser votre énergie grâce à son générateur à aimants permanents d'une puissance de 400 Watts.</p>

          <p class="textPanneau"> Son démarrage est facile grâce à une inertie réduite à partir d'une vitesse de vent de 2 m/seconde.</p>

          <p class="textPanneau"> Protection des pâles par cerclage, démarrage à très faible vent, très petite et légère, compacte, très simple à installer</p>

          <p class="textPanneau"> Vous pouvez l'utiliser par vent faible, moyen et fort sans être dérangé par le bruit sonore de cette dernière. </p>

          <p class="textPanneau"> La régulation de puissance et de charge se fait grâce à un régulateur MPPT hybride solaire/éolien externe, avec affichage multifonctions, interrupteur d'arrêt électronique automatique et manuel ainsi qu'une sonde température. </p>

          
          <p class="textPanneau"> La régulation de puissance et de charge se fait grâce à un régulateur MPPT hybride solaire/éolien externe, avec affichage multifonctions, interrupteur d'arrêt électronique automatique et manuel ainsi qu'une sonde température. </p>

          
        <h3 class="textPanneau" id="titreproduit">Caractéristiques</h3>
         <table id="caracteristiquesPanneau">
           <tr>
             <th class ="casesPanneau">Type éolienne</th>
             <td class ="casesPanneau"> Axe vertical</td>
           </tr>
           <tr>
             <th class ="casesPanneau"> Garantie</th>
             <td class ="casesPanneau"> 15 ans</td>
           </tr>
           <tr>
             <th class ="casesPanneau"> Puissance maximale</td>
             <td class ="casesPanneau"> 90W</td>
           </tr>
            <tr>
             <th class ="casesPanneau"> Matière du corps</td>
             <td class ="casesPanneau"> Aluminium, inox et ABS </td>
           </tr>
           
         </table> 


  </main>
<?php include("footer.php") ?>
</body>
</html>