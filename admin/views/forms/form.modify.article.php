<?php

require_once 'models/authorize.php';
require_once 'models/getModify.model.php';

include_once '../sections/head.php' ?>
<link rel="stylesheet" href="../css/admin.css">

<!-- DEBUT DE L'AFFICHAGE -->
<body class="bg-b">
<div class ="container pt-4">
<h3> Modifier un article </h3>
<h6><?=$id?></h6>
<hr>

<form action="../models/setModify.model.php" method="post">
<div class="form-group">

  <input type="text" name="id_article" value="<?= $row['id_article']?>" hidden>


    <label for="type_article">Selection type d'article</label>
    <div id="alert-type" class="alert alert-danger d-none" role="alert">
        Veuillez selectionner un type d'article.
    </div>
    <select class="form-control" name="type_article" >
        <option>--ARTICLE--</option>
        <option <?php if( $row["type_article"]=="Burger"){echo "selected";}?> >Burger</option>
        <option <?php if( $row["type_article"]=="Bagels"){echo "selected";}?> >Bagels</option>
        <option <?php if( $row["type_article"]=="Dessert"){echo "selected";}?> >Dessert</option>
        <option <?php if( $row["type_article"]=="Boisson"){echo "selected";}?> >Boisson</option>
        <option <?php if( $row["type_article"]=="Autre"){echo "selected";}?> >Autre</option>
    </select>
  <div class="form-group">
    <label class="pt-3"for="nom_article">Nom du plat</label>
    <div id="alert-nom" class="alert alert-danger d-none" role="alert">
        Veuillez définir un nom.
    </div>
    <input type="text" class="form-control" id="nom_article" name="nom_article" value="<?= $row['nom_article']?>">
  </div>
  <div class="form-group">
    <label for="prix_article">Prix</label>
    <div id="alert-prix" class="alert alert-danger d-none" role="alert">
        Veuillez définir un prix.
    </div>
    <input type="text" class="form-control" id="prix_article" name="prix_article" value="<?= $row['prix_article']  ?>">
  </div>

  <div class="form-group">
    <label for="Description">Description</label>
    <div id="alert-description" class="alert alert-danger d-none" role="alert">
        Veuillez indiquer la description du produit .
    </div>
    <textarea class="form-control" name="description_article" rows="3"><?= $row['description_article'] ?></textarea>
  </div>
  <button type="submit" class="btn btn-success text-light">Valider</button>
</form>
</div>
    <!-- script CDN -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <!-- script perso -->
</body>

</html>