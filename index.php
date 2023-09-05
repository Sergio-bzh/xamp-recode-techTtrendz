<?php

require_once __DIR__ . ('/templates/header.php');
include __DIR__ . ('/lib/article.php');



?>

<div class="container col-xxl-12 px-4 py-5">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
        <div class="col-10 col-sm-8 col-lg-6">
            <img src="./assets/images/logo-tech-trendz.png" class="d-block mx-lg-auto img-fluid" alt="Logo TechTrendz" width="700" height="500" loading="lazy">
        </div>
        <div class="col-lg-6">
            <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Responsive left-aligned hero with image</h1>
            <p class="lead">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                <a href="./actualites.php" class="btn btn-primary btn-lg px-4 me-md-2">Voir toutes les actualités</a>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row text-center">
        <!-- On boucle ci-dessous pour afficher les "cards" des articles -->
        <?php foreach ($articles as $key => $article) {
            require __DIR__ . ('/templates/part_article.php');
        } ?>
    </div>
</div>


<!-- explication de la boucle foreach()
    <section class="utilisateurs">
        <?php foreach ($variable as $key => $value) { ?>
            <article class="utilisateur">
                <h2><?= $value[''] . ' ' . $value[' ']; ?> </h2>
                <p>Affiché sur la page HTML : <?= $value[''] ?> de mon site</p>
            </article>
        <?php } ?>
    </section>
-->

<?php require_once __DIR__ . ('/templates/footer.php') ?>