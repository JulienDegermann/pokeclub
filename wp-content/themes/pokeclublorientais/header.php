<!DOCTYPE html>
<html lang="fr">
<?php
$metadatas = get_metadatas();
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0, user-scalable=no">

    <!-- SEO -->
    <meta name="description" content="<?= $metadatas['description']; ?>">
    <meta name="keywords" content="<?= $metadatas['keywords']; ?>">
    <meta name="author" content="<?= $metadatas['author']; ?>">
    <link rel="canonical" href="<?= $metadatas['url']; ?>">

    <!-- Open Graph -->
    <meta property="og:title" content="<?= $metadatas['title']; ?>">
    <meta property="og:description" content="<?= $metadatas['description']; ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?= $metadatas['url']; ?>">
    <meta property="og:image" content="<?= $metadatas['card_image']; ?>">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?= $metadatas['title']; ?>">
    <meta name="twitter:description" content="<?= $metadatas['description']; ?>">
    <meta name="twitter:image" content="<?= $metadatas['card_image']; ?>">

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:ital,wght@0,100..900;1,100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Orbitron:wght@400..900&display=swap" rel="stylesheet">

    <title><?= $metadatas['title']; ?></title>

    <!-- Favicon -->
    <link rel="icon" href="/wp-content/themes/pokeclublorientais/favicon.ico" type="image/x-icon">

    <?php wp_head(); ?>
</head>

<body>
    <header>
        <div class="container">
            <a
                class="logo"
                href="/">

                <picture>
                    <source
                        srcset="/wp-content/themes/pokeclublorientais/assets/images/logo-64.png"
                        media="(max-width: 579px)">
                    <source
                        srcset="/wp-content/themes/pokeclublorientais/assets/images/logo-128.png"
                        media="(min-width: 680px) and (max-width: 1024px)">
                    <img
                        src="/wp-content/themes/pokeclublorientais/assets/images/logo-256.png"
                        alt="logo du PokéClub Bretagne Sud"
                        title="Retour vers l'accueil">
                </picture>
                <h1 class="section-title">PokéClub <br> Bretagne <br> Sud</h1>
            </a>
            <button
                id="menu-toggler"
                arial-label="menu de navigation"
                role="navigation toggler">

                <?php include_once __DIR__ . "/_partials/_menu_toggler.php"; ?>
            </button>
            <?php include "./wp-content/themes/pokeclublorientais/_partials/_navigation.php"; ?>

        </div>
    </header>
    <main>