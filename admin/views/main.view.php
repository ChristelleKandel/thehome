<?php 
require 'models/authorize.php';
include_once 'models/connexion.php';
include_once '../sections/head.php' ?>
<link rel="stylesheet" href="css/admin.css">
<!-- DEBUT DE L'AFFICHAGE -->
<body class="bg-b">
<div class="container">
    <div class="row align-items-center my-2">
        <img class="col-2 w-50"src="../css/img/logo_TheHome.png">
        <p class="h4 text-center pl-4 col-8">Bienvenue <i><?= $_SESSION['nom']?></i></p>
        <a href="models/destroy.php"><button type="button" class="btn btn-danger text-light btn-sm">Se deconnecter</button></a>
    </div>
    <hr>
    <a href="../admin/ajouter_article"><button  type="button" class="btn btn-primary text-light"><i class="fas fa-plus text-center text-light"></i> Ajouter un article</button></a>
    <a href="../admin/modifier_site"><button  type="button" class="btn btn-primary text-light"><i class="fas fa-edit text-center text-light"></i> Modifier le site</button></a>
    <hr>

    <!-- Tableau des articles -->
    <h5>Articles en lignes</h5>
    <h6>Burgers</h6>
    <table class="table table-dark">
    <thead>
        <tr>
            <th scope="col">Nom</th>
            <th scope="col">Description</th>
            <th scope="col">prix</th>
            <th scope="col"></th>
            <th scope="col"></th>
        </tr>
     </thead>
    <tbody>
        <?php require_once 'views/burgers.view.php' ?>
    </tbody>
</table>
<hr>


<h6>Bagels</h6>
    <table class="table table-dark">
    <thead>
        <tr>
            <th scope="col">Nom</th>
            <th scope="col">Description</th>
            <th scope="col">prix</th>
            <th scope="col"></th>
            <th scope="col"></th>
        </tr>
     </thead>
    <tbody>
    <?php require_once 'views/bagels.view.php' ?>
    </tbody>
</table>
<hr>


<h6>Desserts</h6>
    <table class="table table-dark">
    <thead>
        <tr>
            <th scope="col">Nom</th>
            <th scope="col">Description</th>
            <th scope="col">prix</th>
            <th scope="col"></th>
            <th scope="col"></th>
        </tr>
     </thead>
    <tbody>
    <?php require_once 'views/desserts.view.php' ?>
    </tbody>
</table>
<hr>


<h6>Boissons</h6>
    <table class="table table-dark">
    <thead>
        <tr>
            <th scope="col">Nom</th>
            <th scope="col"></th>
            <th scope="col">Prix</th>
            <th scope="col"></th>
            <th scope="col"></th>
        </tr>
     </thead>
    <tbody>
    <?php require_once 'views/boissons.view.php' ?>
</table>
</div>


<!-- script CDN -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>