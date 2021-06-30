<?php 
session_start();
?><!DOCTYPE html>
<html>
<head>
  <title> Panneau photovoltaïque </title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Sonsie+One" rel="stylesheet" type="text/css">
    <link rel="icon" type="img/logo.png" href="img/logo.png" />
    <script src="https://kit.fontawesome.com/165aaddbe5.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">

  </head>

<?php include("header.php") ?>

  <main>

      <img src="img/panneausolaireV2.jpg" alt="PhotoProduit" id="photoPanneau">
      <!-- <a href="#"><img src="img/bou.png" id="add"></a> -->

        <h1 class="textPanneau" id="titrePanneau">Panneau photovoltaïque</h1>
        <h3 class="textPanneau" id="titreproduit">Description</h3>

          <p class="textPanneau">Ce Panneau Solaire Photovoltaïque Polycristallin 320W BYD est formé de cellules en silicium polycristallin  qui génèrent une puissance électrique élevée de 24V.</p>

          <p class="textPanneau">Ses applications sont comme générateur électrique, fournissant de l'électricité pour l'alimentation de maisons,  villas ou chalets. Le panneau produit un courant électrique continu, pouvant alimenter directement des  ampoules de 24V ou des équipements en courant continu. Habituellement un boîtier fonctionne avec 220V de courant alternatif, raison pour laquelle il sera nécessaire l'installation d'un onduleur ou d'un micro onduleur  pour transformer le courant électrique.</p>

          <p class="textPanneau">C'est l'un des plus puissants de la gamme car il offre un rendement énergétique élevé, même si les conditions  sont à faible coefficient d'irradiation et de température. Le panneau solaire comprend deux câbles de 90 cm  de section 4mm avec deux connecteurs MC4 facilitant ainsi sa connexion.</p>

          <p class="textPanneau">Le Panneau Solaire Photovoltaïque Polycristallin 320W BYD appartient à la Classe A de qualité  des panneaux photovoltaïques. Il a également obtenu au fabricant la certification TIER 1 qui offre une garantie  certifiée de 25 ans, pour son contrôle qualité rigoureux, son département I+D et la stabilité financière du  fabricant qui assure le   maintien de la garantie</p>
        <h3 class="textPanneau" id="titreproduit">Caractéristiques</h3>
         <table id="caracteristiquesPanneau">
           <tr>
             <th class ="casesPanneau">classe</th>
             <td class ="casesPanneau"> A </td>
           </tr>
           <tr>
             <th class ="casesPanneau"> Garantie</th>
             <td class ="casesPanneau"> 25 ans</td>
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