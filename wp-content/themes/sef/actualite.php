<?php

/*
  Template name: Actualités
 */

$photo_intro_actu = get_field('img-intro-actu');
$picture_actu = $photo_intro_actu['sizes']['medium'];
$alt_actu = $photo_intro_actu['alt'];

$photo_activite = get_field('img-actu-1');
$picture_activite = $photo_activite['sizes']['medium'];
$alt_activite = $photo_activite['alt'];

$photo_activite_2 = get_field('img-actu-2');
$picture_activite_2 = $photo_activite_2['sizes']['medium'];
$alt_activite_2 = $photo_activite_2['alt'];

$photo_activite_3 = get_field('img-actu-3');
$picture_activite_3 = $photo_activite_3['sizes']['medium'];
$alt_activite_3 = $photo_activite_3['alt'];

get_header()
?>

    <main>
        <section class="intro-actu wrapper">
            <div>
                <h1>Quoi de <span class="mot-orange">neuf</span> au SEF&nbsp;?</h1>
                <p>
                    <?= get_field("intro-actu", 90) ?>
                </p>
            </div>

            <div class="img-actu-container">
                <img src="<?= $picture_actu ?>"
                     srcset="<?= $picture_actu ?>, <?= $photo_intro_actu['sizes']['large'] ?> 2x"
                     alt="<?= $alt_actu ?>" class="img-actu-container__contenu-actu">
                <img src="http://sef-aout.test/wp-content/uploads/2024/08/img-actu-fond-2.svg"
                     alt="fond de couleur orange"
                     class="img-actu-container__fond">
                <img src="http://sef-aout.test/wp-content/uploads/2024/08/img-actu-fond.svg"
                     alt="fond de couleur orange"
                     class="img-actu-container__fond">
            </div>
        </section>
        <section class="actu-container wrapper">
            <h1>
                <span class="mot-orange">Activités</span> de l&lsquo;année
            </h1>
            <div class="actu-container__activites">
                <div>
                    <img src="<?= $picture_activite ?>"
                         srcset="<?= $picture_activite ?>, <?= $photo_activite['sizes']['large'] ?> 2x"
                         alt="<?= $alt_activite ?>" class="actu-container__activites__img">
                </div>
                <article class="actu-container__activites__texte">
                    <h2>
                        <?= get_field('titre-activite-1', 90); ?>
                    </h2>
                    <p>
                        <?= get_field("texte-activite-1", 90) ?>
                    </p>
                </article>
            </div>
            <div class="actu-container__activites">
                <article class="actu-container__activites__texte">
                    <h2>
                        <?= get_field('titre-activite-2', 90); ?>
                    </h2>
                    <p>
                        <?= get_field("texte-activite-2", 90) ?>
                    </p>
                </article>
                <div>
                    <img src="<?= $picture_activite_2 ?>"
                         srcset="<?= $picture_activite_2 ?>, <?= $photo_activite_2['sizes']['large'] ?> 2x"
                         alt="<?= $alt_activite_2 ?>" class="actu-container__activites__img">
                </div>

            </div>
            <div class="actu-container__activites">
                <div>
                    <img src="<?= $picture_activite_3 ?>"
                         srcset="<?= $picture_activite_3 ?>, <?= $photo_activite_3['sizes']['large'] ?> 2x"
                         alt="<?= $alt_activite_3 ?>" class="actu-container__activites__img">
                </div>

                <article class="actu-container__activites__texte">
                    <h2>
                        <?= get_field('titre-activite-3', 90); ?>
                    </h2>
                    <p>
                        <?= get_field("texte-activite-3", 90) ?>
                    </p>
                </article>
            </div>
        </section>
        <section class="benevolat wrapper">
            <h1>
                Envie de devenir <span class="mot-orange">b&eacute;n&eacute;vole</span>&nbsp;?
            </h1>
            <a href="http://sef-aout.test/contact/">Contactez&nbsp;-&nbsp;nous</a>
        </section>
    </main>

<?php get_footer() ?>