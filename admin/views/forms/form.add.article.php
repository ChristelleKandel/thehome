<?php 
require 'models/authorize.php';
include_once '../sections/head.php' ?>
<link rel="stylesheet" href="css/admin.css">
<!-- DEBUT DE L'AFFICHAGE -->
<body class="bg-b">
<div class ="container pt-4">
<h3> Ajouter un article </h3>
<hr>

<form action="models/add.model.php" method="post">
<div class="form-group">
    <label for="type_article">Selection type d'article</label>
    <div id="alert-type" class="alert alert-danger d-none" role="alert">
        Veuillez selectionner un type d'article.
    </div>
    <select class="form-control" name="type_article">
        <option>--ARTICLE--</option>
        <option>Burger</option>
        <option>Bagels</option>
        <option>Dessert</option>
        <option>Boisson</option>
        <option>Autre</option>
    </select>
  <div class="form-group">
    <label for="nom_article">Nom du plat</label>
    <div id="alert-nom" class="alert alert-danger d-none" role="alert">
        Veuillez définir un nom.
    </div>
    <input type="text" class="form-control" id="nom_article" name="nom_article" placeholder="Nom du article">
  </div>
  <div class="form-group">
    <label for="prix_article">Prix</label>
    <div id="alert-prix" class="alert alert-danger d-none" role="alert">
        Veuillez définir un prix.
    </div>
    <input type="text" class="form-control" id="prix_article" name="prix_article" placeholder="10.00">
  </div>

  <div class="form-group">
    <label for="Description">Description</label>
    <div id="alert-description" class="alert alert-danger d-none" role="alert">
        Veuillez indiquer la description du produit .
    </div>
    <textarea class="form-control" name="description_article" rows="3" placeholder="Viande de Boeuf, Mesclun, Tomate, oignons rouges, Véritable Cheddar, Cornichons, Sauce Maison à la ciboulette."></textarea>
  </div>
  <button type="submit" class="btn btn-success text-light">Valider</button>
</form>
</div>
    <!-- script CDN -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- script perso -->
    <script src="js/navbar.js"></script>
    <script src="js/carte.js"></script>
    <script src="js/main.js"></script>
</body>

</html>