<?php
require_once __DIR__ . ('/lib/menu.php');
require_once __DIR__ . ('/templates/header.php');
include __DIR__ . ('/lib/article.php');

?>

<h1>Actualités</h1>

<div class="container">
    <div class="row text-center">
        <!-- On boucle ci-dessous pour afficher les "cards" des articles -->
        <?php foreach ($articles as $key => $article) {
            require __DIR__ . ('/templates/part_article.php');
        } ?>
    </div>
</div>

<?php require_once __DIR__ . ('/templates/footer.php');
