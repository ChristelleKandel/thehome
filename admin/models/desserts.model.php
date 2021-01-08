<?php 
//connexion à la base de données
require_once 'connexion.php';
//requete
$sql = "SELECT * FROM `articles` WHERE `type_article` = 'Dessert' ORDER BY `articles`.`prix_article` ASC";
$stmt = $bdd->query($sql);
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
