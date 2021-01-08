<?php require_once 'connexion.php';
$id = $url['4'];
$id = urldecode($id);
$sql = "SELECT * FROM `articles` WHERE `nom_article` = '$id' ";
$stmt = $bdd->query($sql);
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$row){
    header("location:../");
}
?>