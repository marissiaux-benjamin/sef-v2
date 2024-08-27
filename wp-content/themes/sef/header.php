<!DOCTYPE html>
<html lang="fr">
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
<header class="header">
    <h1 class="header__icon">
        <a href="http://sef-aout.test/accueil/">
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
                    <a href="http://sef-aout.test/accueil/" title="Aller vers la page d'accueil"
                       class="mobile-menu__link">
                        Accueil
                    </a>
                </li>
                <li class="mobile-menu__item">
                    <a href="http://sef-aout.test/actualites/" title="Aller vers la page a propos"
                       class="mobile-menu__link">
                        Actualités
                    </a>
                </li>
                <li class="mobile-menu__item">
                    <a href="http://sef-aout.test/a-propos/" title="Aller vers la page projets"
                       class="mobile-menu__link">
                        A propos
                    </a>
                </li>
                <li class="mobile-menu__item">
                    <a href="http://sef-aout.test/magasins/" title="Aller vers la page contact"
                       class="mobile-menu__link">
                        Magasins
                    </a>
                </li>
                <li class="mobile-menu__item">
                    <a href="http://sef-aout.test/2024/08/25/contact/" title="Aller vers la page contact"
                       class="mobile-menu__link">
                        Contact
                    </a>
                </li>
            </ul>
            <a href="http://sef-aout.test/a-propos/#dons" title="Aller vers la page contact"
               class="mobile-menu__link nav-btn">
                Donation
            </a>
        </div>
    </nav>
</header>



