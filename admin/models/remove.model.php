<?php 
$article = $_GET['id'];
require_once 'connexion.php';
$query = "DELETE FROM articles WHERE nom_article = ?";
$stmt = $bdd ->prepare($query);
$stmt -> bindValue(1,$article,PDO::PARAM_STR);
$stmt -> execute();
//redirection
header('location: ../');
?>