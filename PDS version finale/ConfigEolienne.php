<?php
session_start();
include("connexionBase.php");
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
$selection = $bdd->query('SELECT id_client FROM client WHERE identifiant="'.$_SESSION['id'].'"');
$data = $selection->fetch();
$selection2= $bdd->query('SELECT id_client FROM parametrage_eolienne WHERE id_client IN (SELECT id_client FROM client where identifiant="'.$_SESSION['id'].'")');
$data2 = $selection2->fetch();
if (isset($data2['id_client'])) {
	$insertion = $bdd->prepare('UPDATE parametrage_eolienne SET id_client=:id_client, vitesse_maximale=:vitesse_maximale WHERE id_client="'.$data['id_client'].'"');
$insertion->execute(array('id_client' => htmlspecialchars($data['id_client']), 
                          'vitesse_maximale' => htmlspecialchars($_POST['vitesse'])));
header('Location:./ParametreE.php');
die();
} else {
	$insertion = $bdd->prepare('INSERT INTO parametrage_eolienne (id_client,vitesse_maximale) VALUES (:id_client, :vitesse_maximale)');
$insertion->execute(array('id_client' => htmlspecialchars($data['id_client']), 
                          'vitesse_maximale' => htmlspecialchars($_POST['vitesse'])));
header('Location:./ParametreE.php');
die();
}


$selection->closeCursor();
$selection2->closeCursor();

?>