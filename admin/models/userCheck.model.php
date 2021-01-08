<?php 
session_start();
require_once 'connexion.php';

function secur($string){
    $string=trim($string);
    $string=stripslashes($string);
    $string=htmlspecialchars($string);
    return $string;
}
$user = secur($_POST['user']);
$mdp = secur($_POST['mdp']);
$mdp = hash('sha512', $mdp);

$sql = "SELECT * FROM `utilisateurs` WHERE `identifiant` = ?";
$stmt = $bdd->prepare($sql);
$stmt -> bindValue(1,$user,PDO::PARAM_STR);
$stmt -> execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);
if(isset($row['identifiant'])){
    if (count($row)==2){
        if ($row['identifiant'] == $user && password_verify($mdp, $row['mdp'])){
            
            $_SESSION["log"] = true;
            $_SESSION["nom"] = $user;
            header('location:../');
        }
        else{header("location:destroy.php");}
    }
}
else{
    header("location:destroy.php");
}