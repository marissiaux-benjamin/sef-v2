<!DOCTYPE html>
<html lang="fr" class="no-js">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Benjamin Marissiaux">
    <meta name="description" content="Voici le portfolio du designer web Benjamin Marissiaux">
    <meta name="keywords"
          content="web design, Benjamin, Benjamin Marissiaux, Marissiaux, porfolio, portfolio Benjamin Marissiaux">
    <link rel="stylesheet" href="<?= dw_asset('css/reset.css'); ?>">
    <link rel="stylesheet" href="https://use.typekit.net/utx4tkg.css">
    <link rel="stylesheet" href="<?= dw_asset('css/style.css'); ?>">
    <title><?= get_the_title() ?></title>
</head>
<body>
<header class="header wrapper">
    <h1 class="header__icon">
        <a href="<?= get_permalink(12) ?>">
            SEF
        </a>
    </h1>
    <nav class="mobile-menu">
        <h2 class="hidden-title">navigation principale</h2>
        <input type="checkbox" id="checkbox" class="mobile-menu__checkbox">
        <label for="checkbox" class="mobile-menu__btn">
            <span class="mobile-menu__icon"></span>
        </label>
        <div class="mobile-menu__container">
            <ul class="mobile-menu__list">
                <li class="mobile-menu__item">
                    <a href="<?= get_permalink(12) ?>" title="Aller vers la page d'accueil"
                       class="mobile-menu__link">
                        Accueil
                    </a>
                </li>
                <li class="mobile-menu__item">
                    <a href="<?= get_permalink(90) ?>" title="Aller vers la page a propos"
                       class="mobile-menu__link">
                        Actualités
                    </a>
                </li>
                <li class="mobile-menu__item">
                    <a href="<?= get_permalink(50) ?>" title="Aller vers la page projets"
                       class="mobile-menu__link">
                        A propos
                    </a>
                </li>
                <li class="mobile-menu__item">
                    <a href="<?= get_permalink(176) ?>" title="Aller vers la page contact"
                       class="mobile-menu__link">
                        Magasins
                    </a>
                </li>
                <li class="mobile-menu__item">
                    <a href="<?= get_permalink(213) ?>" title="Aller vers la page contact"
                       class="mobile-menu__link">
                        Contact
                    </a>
                </li>
            </ul>
            <a href="<?= get_permalink(50) ?>#dons" title="Aller vers la page contact"
               class="mobile-menu__link nav-btn">
                Donation
            </a>
        </div>
    </nav>
</header>



