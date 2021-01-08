



<?php include_once '../sections/head.php' ?>
<link rel="stylesheet" href="css/login.css">
<!-- DEBUT DE L'AFFICHAGE -->
<body class="container">
    <div class="row pt-5">
        <img id="logo" class="img-fluid hidden" src="../css/img/logo_TheHome.png" alt="THE HOME - Restaurant" >
        <div class="login-page">
            <div class="form pt-3">
                <form class="login-form" action="models/userCheck.model.php" method="post">
                    <p class="text-center">Connexion</p>
                    <input type="text" name="user" placeholder="identifiant"/>
                    <input type="password" name="mdp" placeholder="Mot de passe"/>
                    <button type="submit">connexion</button>
                </form>
                
            </div>
            <a class="text-center text-light m-auto" href="../"><i class="far fa-arrow-alt-circle-left"></i> <u>Retour au site</u> </a>
        </div>
    </div>
    <!-- script CDN -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- script perso -->
</body>

</html>