<?php

$photo_intro = get_field('photo');
$picture = $photo_intro['sizes']['medium'];
$alt = $photo_intro['alt'];

$photo_services = get_field('photo-2');
$picture2 = $photo_services['sizes']['medium'];
$alt_2 = $photo_services['alt'];


get_header();
?>

<main>
    <section class="intro wrapper">
        <div>
            <h1 data-animation="show">Service d'<span class="mot-orange">Entraide</span> Familiale</h1>
            <p data-animation="show2">
                <?= get_field("intro", 12) ?>
            </p>
            <a href="http://sef-aout.test/actualites/" class="btn-bleu" data-animation="show3">Nous d&eacute;couvrir</a>
            <a href="http://sef-aout.test/contact/" class="btn-orange" data-animation="show3">Contacter</a>

        </div>

        <div class="img-container" data-animation="show2">
            <img src="<?= $picture ?>" srcset="<?= $picture ?>, <?= $photo_intro['sizes']['large'] ?> 2x"
                 alt="<?= $alt ?>" class="img-container__contenu">
            <img src="http://sef-aout.test/wp-content/uploads/2024/08/forme-img-1_1-1.svg" alt="fond de couleur bleue"
                 class="img-container__fond">
            <img src="http://sef-aout.test/wp-content/uploads/2024/08/forme-img-2.svg" alt="fond de couleur bleue"
                 class="img-container__fond">
        </div>

    </section>
    <section class="services wrapper">
        <h1 data-animation="show">Nos <span class="mot-orange">Services</span></h1>
        <div class="services__flex">
            <div class="img-service" data-animation="show3">
                <img src="<?= $picture2 ?>" srcset="<?= $picture2 ?>, <?= $photo_services['sizes']['large'] ?> 2x"
                     alt="<?= $alt_2 ?>" class="img-service__contenu">

                <img src="http://sef-aout.test/wp-content/uploads/2024/08/forme-img-orange-2.svg"
                     alt="fond de couleur orange" class="img-service__fond">

                <img src="http://sef-aout.test/wp-content/uploads/2024/08/forme-img-orange-1.svg"
                     alt="fond de couleur orange" class="img-service__fond">
            </div>
            <div class="text-container">
                <article class="text-container__services__text" data-animation="show">
                    <h2>
                        <?= get_field("service-1", 12) ?>
                    </h2>
                    <p>
                        <?= get_field("texte-service-1", 12) ?>
                    </p>
                    <a href="<?= get_field("lien-service-1", 12) ?>#maisons" title="Aller sur la page a propos">En savoir plus
                        sur les maisons</a>
                </article>
                <article class="text-container__services__text" data-animation="show2">
                    <h2>
                        <?= get_field("service-2", 12) ?>
                    </h2>
                    <p>
                        <?= get_field("texte-service-2", 12) ?>
                    </p>
                    <a href="<?= get_field("lien-service-2",12)?>#magasins" title="Aller sur la page des magasins">Où sont les magasins ?</a>
                </article>
            </div>
        </div>
    </section>
    <section class="news wrapper">
        <h1 data-animation="show">
            Les <span class="mot-orange">news</span> les plus <span class="mot-orange">récentes</span>
        </h1>
        <div class="cartes-container">
            <article class="cartes-container__carte carte1" data-animation="show">
                <h2>
                    <?= get_field("carte-titre", 12) ?>
                </h2>
                <p>
                    <?= get_field("date", 12) ?>
                </p>
                <p>
                    <?= get_field("carte-texte", 12) ?>
                </p>
            </article>

            <article class="cartes-container__carte carte2" data-animation="show2">
                <h2>
                    <?= get_field("carte-titre-2", 12) ?>
                </h2>
                <p>
                    <?= get_field("date-2", 12) ?>
                </p>
                <p>
                    <?= get_field("carte-texte-2", 12) ?>
                </p>
            </article>
            <article class="cartes-container__carte carte3" data-animation="show3">
                <h2>
                    <?= get_field("carte-titre-3", 12) ?>
                </h2>
                <p>
                    <?= get_field("date-3", 12) ?>
                </p>
                <p>
                    <?= get_field("carte-texte-3", 12) ?>
                </p>
            </article>
            <article class="cartes-container__carte carte4" data-animation="show4">
                <h2>
                    <?= get_field("carte-titre-4", 12) ?>
                </h2>
                <p>
                    <?= get_field("date-4", 12) ?>
                </p>
                <p>
                    <?= get_field("carte-texte-4", 12) ?>
                </p>
            </article>
            <aside class="cartes-container__don" data-animation="slide">
                <img src="http://sef-aout.test/wp-content/uploads/2024/08/carte-don.svg"
                     alt="image d'un point d'interrogation entouré d'un cercle">
                <h2>
                    Soutenez&nbsp;-&nbsp;nous d&lsquo;une autre mani&egrave;re
                </h2>
                <a href="http://sef-aout.test/a-propos/#dons" class="btn-orange">Faire un don</a>
            </aside>
        </div>
    </section>
    <section class="benevolat wrapper">
        <h1 data-animation="show">
            Envie de devenir <span class="mot-orange">b&eacute;n&eacute;vole</span>&nbsp;?
        </h1>
        <a href="http://sef-aout.test/contact/" data-animation="show">Contactez&nbsp;-&nbsp;nous</a>
    </section>
</main>

<?php get_footer() ?>
