<?php include_once 'sections/head.php' ?>

<!-- DEBUT DE L'AFFICHAGE -->
<body>
<?php 
    include_once 'sections/header.php';
    // Section de présentation du restaurant
    include_once 'sections/about.php';
    // bloc de séparation 
    include_once 'sections/separ.php';
    //  CARTE DU RESTAURANT
    include_once 'sections/carte.php';
    //bloc contacts
    include_once 'sections/contacts.php';
    //footer
    include_once 'sections/footer.php' ?>
    <!-- script CDN -->
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
  </body>    <!-- script perso -->    
    <script src="js/main.js"></script>
    <script src="js/navbar.js"></script>
    <script src="js/carte.js"></script>

</body>

</html>