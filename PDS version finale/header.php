<head>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Sonsie+One" rel="stylesheet" type="text/css">
    <link rel="icon" type="img/logo.png" href="img/logo.png" />
    <script src="https://kit.fontawesome.com/165aaddbe5.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">

</head>
<header>
    <nav>
        <li> <a href="index.php" title="Accueil"> <img id="logo" src="img/logo.png"> </a></li>    
        <li> <a href="catalogue.php" title="catalogue"><p> Catalogue </p></a> </li>
        <li> <a href="MonCompte.php" title="Compte"><p>Mon Compte </p> </a></li>
        <li> <a href="Entreprise.php" title="Entreprise"><p> Entreprise </p></a> </li>
        <li> <a href="FAQ.php" title="Faq"><p> FAQ </p></a> </li>
        <li> <a href="contact.php" title="contact"><p> Contact </p></a> </li>
        <?php 
        if(isset($_SESSION['verif']) && $_SESSION['verif'] == true) 
        { echo '<li> <a href="deconnexion.php" title="déconnexion"> <p> Déconnexion </p></a> </li>';
        }
        ?>
    </nav>

</header>
