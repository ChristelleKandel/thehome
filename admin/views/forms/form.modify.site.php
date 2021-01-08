<?php 
require 'models/authorize.php';
require_once 'models/getSite.model.php';
include_once '../sections/head.php' ?>
<link rel="stylesheet" href="css/admin.css">
<!-- DEBUT DE L'AFFICHAGE -->
<body class="bg-b">
<div class ="container-fluid p-5">
<h3> Modifier le site </h3>
<hr>




<form action="models/setSite.model.php?id=section1" method="post" class=" mx-lg-5 p-lg-5 rounded">
<h4>section 1</h4>
  <div class="form-group">
    <label for="titre">Titre</label>
    <input type="text" class="form-control" id="nom_section" name="titre" value="<?= $section1['titre']?>">
  </div>
  <div class="form-group">
    <label for="s_titre_section">Sous-Titre</label>
    <input type="text" class="form-control" id="s_titre_section" name="sous_titre" value="<?= $section1['sous_titre']?>">
  </div>
  <div class="form-group">
    <label for="content_section">Contenu</label>
    <textarea class="form-control" name="contenu" rows="6"> <?= $section1['contenu']?></textarea>
  </div>

  <div class="form-group">
    <label for="s_titre_section">Photo (non fonctionnel)</label>
    <input type="file" class="form-control" name="image">
  </div> 

  <button type="submit" class="btn btn-success text-light">Valider</button>
</form>

<hr>

<form action="models/setSite.model.php?id=section2" method="post" class="mx-lg-5 p-lg-5 rounded">
<fieldset>
<legend><h4>section 2</h4></legend>

  <div class="form-group">
    <label for="titre">Titre</label>
    <input type="text" class="form-control" id="nom_section" name="titre" value="<?= $section2['titre']?>">
  </div>
  <div class="form-group">
    <label for="s_titre_section">Sous-Titre</label>
    <input type="text" class="form-control" id="s_titre_section" name="sous_titre" value="<?= $section2['sous_titre']?>">
  </div>
  <div class="form-group">
    <label for="content_section">Contenu</label>
    <textarea class="form-control" name="contenu" rows="6"> <?= $section2['contenu']?></textarea>
  </div>

  <div class="form-group">
    <label for="s_titre_section">Photo (non fonctionnel)</label>
    <input type="file" class="form-control" name="image">
  </div> 

  <button type="submit" class="btn btn-success text-light">Valider</button>
  </fieldset>
</form>


<hr>
<form action="models/setSite.model.php?id=section3" method="post" class="mx-lg-5 p-lg-5 rounded">
<h4>section 3</h4>
  <div class="form-group">
    <label for="titre">Titre</label>
    <input type="text" class="form-control" id="nom_section" name="titre" value="<?= $section3['titre']?>">
  </div>
  <div class="form-group">
<!-- NE s'affiche pas sur la page -->
    <input type="text" class="form-control" id="s_titre_section" name="sous_titre" value="<?= $section3['sous_titre']?>" hidden>
  </div>
  <div class="form-group">
    <label for="content_section">Contenu</label>
    <textarea class="form-control" name="contenu" rows="6"> <?= $section3['contenu']?></textarea>
  </div>

  <div class="form-group">
    <label for="s_titre_section">Photo (non fonctionnel)</label>
    <input type="file" class="form-control" name="image">
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