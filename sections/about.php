<!-- SECTION 1 -->
<?php require_once 'admin/models/getSite.model.php' ?>
<section id="en-savoir-plus" class="container-fluid">
        <h2 class="text-center py-4">En savoir plus</h2>
        <div class="row">
            <div class="col-lg-6 px-3 px-lg-5  py-3 py-lg-5">
                <h2><?= $section1['titre']?></h2>
                <p><?= $section1['sous_titre']?></p>
                <p><?= $section1['contenu']?></p>
            </div>
            
            <div class="col-lg-6  px-3 px-lg-5  py-3 py-lg-5 m-auto d-flex justify-content-center">
                <div class="photo">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6  px-5 py-5 m-auto d-flex justify-content-center order-1 order-lg-0">
                <iframe class="w-100" src="https://www.youtube.com/embed/wrdGQmvKSAs" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            
            <div class="col-lg-6 px-3 px-lg-5  py-3 py-lg-5 order-0 order-lg-1">
                <h2><?= $section2['titre']?></h2>
                <p><?= $section2['sous_titre']?></p>
                <p><?= $section2['contenu']?></p>
            </div>
        </div>
    </section>