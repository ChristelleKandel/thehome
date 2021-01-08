<?php 
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=thehome;charset=utf8','thehome','kYM2210gD3cZHbJx');
}
catch (Exception $e)
{
die('ERREUR BDD ');
}
?>
