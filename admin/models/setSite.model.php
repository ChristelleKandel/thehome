<?php 

require_once 'connexion.php';
function secur($string){
    $string=trim($string);
    $string=stripslashes($string);
    $string=htmlspecialchars($string);
    return $string;
}
$section = $_GET['id'];
$titre= secur($_POST["titre"]);
$sous_titre = secur($_POST['sous_titre']);
$contenu = secur($_POST['contenu']);

//requete préparé
//préparation de la requete
$query = "UPDATE sections SET titre=?, sous_titre=?, contenu=? WHERE id = ?";
//association de chaque ? a une valeur
$stmt = $bdd->prepare($query);
$stmt -> bindValue(1, $titre, PDO::PARAM_STR);
$stmt -> bindValue(2, $sous_titre, PDO::PARAM_STR);
$stmt -> bindValue(3, $contenu, PDO::PARAM_STR);
$stmt -> bindValue(4, $section, PDO::PARAM_STR);
//execution
$stmt -> execute();

header('location:../modifier_site');

?>