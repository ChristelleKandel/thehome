<?php 
session_start();
if (isset($_SESSION['nom'])){
session_destroy();
header("location:../admin");
}
else{
    session_destroy();
header("location:../admin");
}