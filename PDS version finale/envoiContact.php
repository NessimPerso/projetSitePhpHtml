<?php include("connexionBase.php");

$insertion = $bdd->prepare('INSERT INTO contact (mail,nom,numero,message) VALUES (:mail,:nom,:numero,:message)');

$insertion->execute(array('mail' => htmlspecialchars($_POST['mail']),
	'nom' => htmlspecialchars($_POST['nom']),
	'numero' => htmlspecialchars($_POST['num']),
	'message' => htmlspecialchars($_POST['message'])
));
?>

<!DOCTYPE html>
<html>
<head>
	<title> Envoi contact </title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Sonsie+One" rel="stylesheet" type="text/css">
	<link rel="icon" type="img/logo.png" href="img/logo.png" />
	<script src="https://kit.fontawesome.com/165aaddbe5.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="style.css">

</head>
<body>
	<?php include("header.php") ?>
	<h1 style="margin-top: 15%;margin-left:40%;"> Votre message a bien été envoyé.</h1>
	<div style="margin-top: 15%;"> </div>
	<?php include("footer.php") ?>
</body>
</html>