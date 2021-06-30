<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title> Interface de l'utilisateur </title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Sonsie+One" rel="stylesheet" type="text/css">
    <link rel="icon" type="img/logo.png" href="img/logo.png" />
    <script src="https://kit.fontawesome.com/165aaddbe5.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">

  </head>
<body>
<?php include("header.php") ?>

  <main>

 
      <img src="img/volets.jpg" alt="PhotoProduit" id="photoPanneau">
      <!-- <a href="#"><img src="img/bou.png" id="add"></a> -->

        <h1 class="textPanneau" id="titrePanneau">Volets automatisés</h1>
        <h3 class="textPanneau" id="titreproduit">Description</h3>

          <p class="textPanneau">Ce pack volet roulant  connecté DiO vous simplifie la vie : plus besoin de courir de fenêtre en fenêtre pour ouvrir et fermer vos volets matin et soir. Centralisez tous les volets roulants de la maison avec votre smartphone.</p>

          <p class="textPanneau">Relié à la HomeBox DiO, ce pack vous permet de piloter vos volets roulants de manière individuelle, centralisée ou automatique grâce à un scénario de vie personnalisé depuis votre smartphone.</p>

          <p class="textPanneau">Grâce à notre boitier connecté, vous pilotez vos stores et volets roulants motorisés où que vous soyez depuis le téléphone et aussi depuis les enceintes vocales Alexa et Google Home et même l'IFTTT! Créez des scénarios pour gagner en temps et en confort et automatisez leur lancements pour rendre totalement autonome votre maison, simuler une présence, optimiser la consommation énergétique.</p>

            <p class="textPanneau">Relié à la HomeBox DiO, ce pack vous permet de piloter vos volets roulants de manière individuelle, centralisée ou automatique grâce à un scénario de vie personnalisé depuis votre smartphone.</p>

          <p class="textPanneau">Vous pouvez également créer des scénario basés sur la luminosité ou la chaleur exterieur grâce à nos capteurs de luminosités fournis avec.</p>
        <h3 class="textPanneau" id="titreproduit">Caractéristiques</h3>
         <table id="caracteristiquesPanneau">
           <tr>
             <th class ="casesPanneau">classe</th>
             <td class ="casesPanneau"> A </td>
           </tr>
           <tr>
             <th class ="casesPanneau"> Garantie</th>
             <td class ="casesPanneau"> 20 ans</td>
           </tr>
           <tr>
             <th class ="casesPanneau"> Puissance électrique</td>
             <td class ="casesPanneau"> 24V</td>
           </tr>
            <tr>
             <th class ="casesPanneau"> Connecteurs</td>
             <td class ="casesPanneau"> MC4 </td>
           </tr>
           
         </table> 



  </main>
<?php include("footer.php") ?>

</body>
</html>