<?php 
try
{
 $bdd = new PDO('mysql:host=localhost;dbname=sbs;charset=utf8;port=3308', 'root', '');
}
catch(Exception $e)
{
 die('Erreur : '.$e->getMessage());
}
?>