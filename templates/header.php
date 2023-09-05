<?php
$mainMmenu = [
    'index.php'      => ['menu_title' => 'Accueil', 'head_title' => 'Accueil TechTrendz', 'meta_description' => 'TechTrendz, l\'actu tech !'],
    'a_propos.php'   => ['menu_title' => 'A propos', 'head_title' => 'A propos de TechTrendz', 'meta_description' => 'L\'histoire du site TeckTrendz'],
    'actualites.php' => ['menu_title' => 'Actualités Tech !', 'head_title' => 'Actualités TechTrendz', 'meta_description' => 'Découvrez toutes nos actualitech !']
];

$currentPage = basename($_SERVER['SCRIPT_NAME']);
//echo $currentPage;

?>

<!DOCTYPE html>
<html lang="fr-FR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= $mainMmenu[$currentPage]['meta_description'] ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous" defer></script>
    <link rel="stylesheet" href="./assets/css/override-bootstrap.css">
    <title><?= $mainMmenu[$currentPage]['head_title'] ?></title>
</head>

<body>
    <div class="container">
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
            <div class="col-md-3 mb-2 mb-md-0">
                <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none">
                    <img src="./assets/images/logo-tech-trendz.png" alt="Logo TechTrendz" width="150">
                </a>
            </div>

            <ul class="nav nav-pills col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                <?php foreach ($mainMmenu as $key => $menuItem) { ?>
                    <li class="nav-item"><a href="../<?= $key ?>" class="nav-link <?= $key === $currentPage ? 'active' : '' ?> px-2"><?= $menuItem['menu_title'] ?></a></li>
                <?php } ?>
            </ul>

            <div class="col-md-3 text-end">
                <button type="button" class="btn btn-outline-primary me-2">Login</button>
                <button type="button" class="btn btn-primary">Sign-up</button>
            </div>
        </header>
    </div>

    <main>