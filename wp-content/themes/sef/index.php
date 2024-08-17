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
            <h1>Service d'<span class="mot-orange">Entraide</span> Familiale</h1>
            <p>
                <?= get_field("intro", 12) ?>
            </p>
            <a href="#" class="btn-bleu">Nous d&eacute;couvrir</a>
            <a href="#" class="btn-orange">Contacter</a>

        </div>

        <div class="img-container">
            <img src="<?= $picture ?>" srcset="<?= $picture ?>, <?= $photo_intro['sizes']['large'] ?> 2x"
                 alt="<?= $alt ?>" class="img-container__contenu">
            <img src="http://sef-aout.test/wp-content/uploads/2024/08/forme-img-1_1-1.svg" alt="fond de couleur bleue"
                 class="img-container__fond">
            <img src="http://sef-aout.test/wp-content/uploads/2024/08/forme-img-2.svg" alt="fond de couleur bleue"
                 class="img-container__fond">
        </div>

    </section>
    <section class="services wrapper">
        <h1>Nos <span class="mot-orange">Services</span></h1>
        <div class="services__flex">
            <div class="img-service">
                <img src="<?= $picture2 ?>" srcset="<?= $picture2 ?>, <?= $photo_services['sizes']['large'] ?> 2x"
                     alt="<?= $alt_2 ?>" class="img-service__contenu">

                <img src="http://sef-aout.test/wp-content/uploads/2024/08/forme-img-orange-2.svg"
                     alt="fond de couleur orange" class="img-service__fond">

                <img src="http://sef-aout.test/wp-content/uploads/2024/08/forme-img-orange-1.svg"
                     alt="fond de couleur orange" class="img-service__fond">
            </div>
            <article class="services__text">
                <h2>
                    <?= get_field("service-1", 12) ?>
                </h2>
                <p>
                    <?= get_field("texte-service-1", 12) ?>
                </p>
            </article>
        </div>
    </section>
</main>
