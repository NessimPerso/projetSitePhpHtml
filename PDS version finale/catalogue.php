<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title> Catalogue </title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Sonsie+One" rel="stylesheet" type="text/css">
    <link rel="icon" type="img/logo.png" href="img/logo.png" />
    <script src="https://kit.fontawesome.com/165aaddbe5.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">

  </head>
<body>
<?php include("header.php") ?>

  <main>
    <table id="TableauProduit">
      <tr>
        <a href="panneau.php"><td><center><img src="img/vo.jpg" id="i"></center></td></a>
        <td><center><img src="img/volets.jpg" id="i"></center></td>
        <td><center><img src="img/eo.jpg" id="i"></center></td>
      </tr>
    </table>
      <div id="LienCatalogue">
        <a href="panneau.php" title="Panneau"><p>Panneau Photovoltaique</p></a>
        <a href="volet.php" title="Panneau"><p>Volets automatisés</p></a>
        <a href="eolienne.php"><p>Eolienne</p></a>
      </div>
     <div id="TableauProduit2">
        <img src="img/bou.png">
  		  <img src="img/bou.png">
  		  <img src="img/bou.png">
      </div>
  </main>
</div>
<?php include("footer.php") ?>
</body>
</html>