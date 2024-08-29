<?php

/*
Template name: Magasins
*/

$photo_intro_magasins = get_field('magasins-img-1');
$picture_magasins = $photo_intro_magasins['sizes']['medium'];
$alt_magasins = $photo_intro_magasins['alt'];

$photo_1_magasins = get_field('magasins-1');
$picture_1_magasins = $photo_1_magasins['sizes']['medium'];
$alt_1_magasins = $photo_1_magasins['alt'];

$photo_2_magasins = get_field('magasins-2');
$picture_2_magasins = $photo_intro_magasins['sizes']['medium'];
$alt_2_magasins = $photo_intro_magasins['alt'];

$photo_3_magasins = get_field('magasins-3');
$picture_3_magasins = $photo_3_magasins['sizes']['medium'];
$alt_3_magasins = $photo_3_magasins['alt'];

get_header()

?>

<main>
    <section class="intro wrapper">
        <div class="img-magasins-container">
            <img src="<?= $picture_magasins ?>"
                 srcset="<?= $picture_magasins ?>, <?= $photo_intro_magasins['sizes']['large'] ?> 2x"
                 alt="<?= $alt_magasins ?>" class="img-magasins-container__contenu">
            <img src="http://sef-aout.test/wp-content/uploads/2024/08/fond-magasins-1.svg" alt="fond de couleur orange"
                 class="img-magasins-container__fond">
            <img src="http://sef-aout.test/wp-content/uploads/2024/08/fond-magasins-2.svg" alt="fond de couleur orange"
                 class="img-magasins-container__fond">
        </div>
        <div>
            <h1>
                Différents <span class="mot-orange">magasins</span>
            </h1>
            <p>
                <?= get_field('intro-magasins-p', 176) ?>
            </p>
        </div>
    </section>
    <section class="magasins wrapper" id="magasins">
        <h1>
            Nos <span class="mot-orange">commerces</span>
        </h1>
        <div class="magasins__cartes-container">
            <article class="magasins__cartes-container__carte">
                <img src="<?= $picture_1_magasins ?>"
                     srcset="<?= $picture_1_magasins ?>, <?= $photo_1_magasins['sizes']['large'] ?> 2x"
                     alt="<?= $alt_1_magasins ?>">
                <div>

                    <h2>
                        La Bouquinerie
                    </h2>
                    <p>
                        Rue des Augustins, 27 - 4500 Huy
                    </p>
                    <p>
                        <a href="tel:+085211256">085/21.12.56</a>
                    </p>
                    <h3>
                        Horaires
                    </h3>
                    <ul>
                        <li>
                            Lundi : <span class="gras">Fermé</span>
                        </li>
                        <li>
                            Mardi : <span class="gras">12</span> h à <span class="gras">17</span>h
                        </li>
                        <li>
                            Mercredi : <span class="gras">12</span> h à <span class="gras">17</span>h
                        </li>
                        <li>
                            Jeudi : <span class="gras">12</span> h à <span class="gras">17</span>h
                        </li>
                        <li>
                            Vendredi : <span class="gras">12</span> h à <span class="gras">17</span>h
                        </li>
                        <li>
                            <span class="mot-orange">1er Samedi</span> du mois : <span class="gras">10</span> h à <span
                                    class="gras">13</span>h
                        </li>
                        <li>
                            Dimanche : <span class="gras">Fermé</span>
                        </li>

                    </ul>
                </div>
            </article>
            <article class="magasins__cartes-container__carte">
                <img src="<?= $picture_2_magasins ?>"
                     srcset="<?= $picture_2_magasins ?>, <?= $photo_2_magasins['sizes']['large'] ?> 2x"
                     alt="<?= $alt_2_magasins ?>">
                <div>
                    <h2>
                        Le Dépôt
                    </h2>
                    <p>
                        Chée de Waremme, 18 - 4500 Huy
                    </p>
                    <p>
                        <a href="tel:+0496037090">0496/03.70.90</a>
                    </p>
                    <h3>
                        Horaires
                    </h3>
                    <ul>
                        <li>
                            Lundi : <span class="gras">Fermé</span>
                        </li>
                        <li>
                            Mardi : <span class="gras">9</span> h à <span class="gras">17</span>h
                        </li>
                        <li>
                            Mercredi : <span class="gras">9</span> h à <span class="gras">17</span>h
                        </li>
                        <li>
                            Jeudi : <span class="gras">Ferm&eacute;</span>
                        </li>
                        <li>
                            Vendredi : <span class="gras">Ferm&eacute;</span>
                        </li>
                        <li>
                            Samedi : <span class="gras">10</span> h à <span
                                    class="gras">16</span>h
                        </li>
                        <li>
                            Dimanche : <span class="gras">Fermé</span>
                        </li>

                    </ul>
                </div>

            </article>
            <article class="magasins__cartes-container__carte">
                <img src="<?= $picture_3_magasins ?>"
                     srcset="<?= $picture_3_magasins ?>, <?= $photo_3_magasins['sizes']['large'] ?> 2x"
                     alt="<?= $alt_3_magasins ?>">
                <div>
                    <h2>
                        La Friperie
                    </h2>
                    <p>
                        Rue du Marché, 35 - 4500 Huy
                    </p>
                    <p>
                        <a href="tel:+085211256">085/21.12.56</a>
                    </p>
                    <h3>
                        Horaires
                    </h3>
                    <ul>
                        <li>
                            Lundi : <span class="gras">Fermé</span>
                        </li>
                        <li>
                            Mardi : <span class="gras">14</span> h à <span class="gras">17</span>h
                        </li>
                        <li>
                            Mercredi : <span class="gras">9</span> h à <span class="gras">17</span>h
                        </li>
                        <li>
                            Jeudi : <span class="gras">9</span> h à <span class="gras">17</span>h
                        </li>
                        <li>
                            Vendredi : <span class="gras">14</span> h à <span class="gras">17</span>h
                        </li>
                        <li>
                            Samedi : <span class="gras">Fermé</span>
                        </li>
                        <li>
                            Dimanche : <span class="gras">Fermé</span>
                        </li>

                    </ul>
                </div>
            </article>
        </div>
    </section>
    <section class="benevolat wrapper">
        <h1>
            Envie de nous <span class="mot-orange">soutenir</span>&nbsp;?
        </h1>
        <a href="http://sef-aout.test/a-propos/#dons">Faire un don</a>
    </section>
</main>

<?php get_footer() ?>
