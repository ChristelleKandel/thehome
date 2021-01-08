<!-- SECTION 3 -->
<section id="carte" class="container p-0">
            <h2 id="carte" class="text-center  py-4">La carte</h2>
            <div class="container p-0 ">
                <div class="border-none  justify-content-center nav nav-tabs">
                    <a href="#burgers" class="col-3 menu gold-border active" data-toggle ="tab">
                        <i class="fas fa-hamburger h3 w-100 text-center pt-2"></i>
                        <p class="h4 text-center">Burgers</p>
                    </a>
                    <a href="#bagels" class="col-3 menu gold-border" data-toggle ="tab">
                        <i class="fas fa-dot-circle h3 w-100 text-center pt-2"></i>
                        <p class="h4 text-center">Bagels</p>
                    </a>
                    <a href="#desserts" class="col-3 menu gold-border" data-toggle ="tab">
                        <i class="fas fa-ice-cream h3 w-100 text-center pt-2"></i>
                        <p class="h4 text-center">Desserts</p>
                    </a>
                    <a href="#boissons" class="col-3 menu gold-border" data-toggle ="tab">
                        <i class="fas fa-glass-whiskey h3 w-100 text-center pt-2"></i>
                        <p class="h4 text-center">Boissons</p>
                    </a>
                </div>
            <!-- AFFICHAGE DU MENU -->
            <div id="carte-bloc"class="tab-content container">
                <div class="tab-pane active" id="burgers">
                    <?php include 'views/burger.mainView.php' ?>
                </div>
                <div class="tab-pane" id="bagels">
                    <?php include 'views/bagels.mainView.php' ?>
                </div>
                <div class="tab-pane" id="desserts">
                    <?php include 'views/dessert.mainView.php' ?>
                </div>
                <div class="tab-pane" id="boissons">
                    <?php include 'views/boisson.mainView.php' ?>
                </div>
            </div>
        </div>

    </section>