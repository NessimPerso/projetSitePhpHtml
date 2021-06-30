<?php 
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
  <title> Notre entreprise </title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Sonsie+One" rel="stylesheet" type="text/css">
    <link rel="icon" type="img/logo.png" href="img/logo.png" />
    <script src="https://kit.fontawesome.com/165aaddbe5.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">

  </head>
  <body>
<?php include("header.php") ?>
       
<body class="fondDegradeBleu">
	<main>
     <div class="backgroundFAQ">
  <div class="containerFAQ">
			<h1 id ="GrandTitreEntreprise" class="TextePageEntreprise">L’ENTREPRISE</h1>
			<h3 class="TextePageEntrepriseh3">Le contexte</h3>
				<p class="TextePageEntreprise"> Notre monde évolue et avec lui les technologies aussi. L’aménagement des villes fait partie des défis importants d’un monde de plus en plus connecté. Et c’est pourquoi le concept de smart city est au cœur de l’aménagement urbain. Une smart city correspond à la transformation d’une ville en utilisant des technologies améliorant les infrastructures actuelles et en créant de nouvelles pour rendre la ville intelligente afin de servir ses habitants.</p>
			<img id ="PhotoContexte"src="img/EntrepriseContexte.jpg"/>

			<h3 class="TextePageEntrepriseh3">Notre activité</h3>

				<p class="TextePageEntreprise">Chez SmartBuildings Services , nous travaillons sur cette transition des villes vers les SmartCity au niveau de la gestion énergétique. Notre activité s’appuie sur le principe du SmartGrid .Ce sont des réseaux d’électricité intelligents qui, grâce à des technologies informatiques, ajustent les flux d’électricité entre fournisseurs et consommateurs. Pour cela, nous disposons des capteurs énergétiques dans chaque bâtiment afin de contrôler et d'optimiser leur consommation.</p>

			<img id ="EntrepriseMaisonPositive"src="img/EntrepriseMaisonPositive.jpg"/>
			<h3 class="TextePageEntrepriseh3">Nos objectifs</h3>
				<p class="TextePageEntreprise">En collectant des informations sur l’état du réseau, les smart grids contribuent à une adéquation entre production, distribution et consommation.  Mais au-delà de la gestion des ressources, SmartBuildings Services vise en rendre développer les batiments à énergie positive (qui produit plus qu’il ne consomme). </p>
			</div>
    </div>
	</main>
  

	<?php include("footer.php") ?>
</body>
</html>