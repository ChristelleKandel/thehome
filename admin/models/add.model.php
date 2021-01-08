<?php 

require_once 'connexion.php';
function secur($string){
    $string=trim($string);
    $string=stripslashes($string);
    $string=htmlspecialchars($string);
    return $string;
}
$type= secur($_POST["type_article"]);
$nom = secur($_POST['nom_article']);
$description = secur($_POST['description_article']);
$prix = secur($_POST['prix_article']);

if ( !empty($nom) &&!empty($prix) && $type != "--ARTICLE--"){
    //requete préparé
    //préparation de la requete
    $query = "INSERT INTO articles VALUES(null,?,?,?,?)";
//association de chaque ? a une valeur
$stmt = $bdd->prepare($query);
$stmt -> bindValue(1, $type, PDO::PARAM_STR);
$stmt -> bindValue(2, $nom, PDO::PARAM_STR);
$stmt -> bindValue(3, $description, PDO::PARAM_STR);
$stmt -> bindValue(4, $prix, PDO::PARAM_STR);
//execution
$stmt -> execute();
header('location:../');
}
else{
    header('location:../ajouter_article');
}
?>

