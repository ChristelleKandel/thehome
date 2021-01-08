<?php 
session_start();
if(!isset($_SESSION['nom']) || $_SESSION['log'] != true){
    session_unset();
    header("location:./login");
}