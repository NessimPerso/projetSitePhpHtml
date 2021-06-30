<?php include("connexionBase.php");
	
	$insertion = $bdd->prepare('INSERT INTO client (nom,prenom,ville,pays,mail,identifiant,password) VALUES (:nom,:prenom,:ville,:pays,:mail,:identif,:mdp)');
	$insertion->execute(array('nom' => htmlspecialchars($_POST['Nom']),
	'prenom' => htmlspecialchars($_POST['Prenom']), 'ville' => htmlspecialchars($_POST['Ville']), 'pays' => htmlspecialchars($_POST['Pays']), 'mail' => htmlspecialchars($_POST['mail']), 'identif' => htmlspecialchars($_POST['identif']),'mdp' => htmlspecialchars($_POST['mdp'])
));

	header('Location:./MonCompte.php');
?>