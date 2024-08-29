<?php

/*
Template Name: mentions
*/


get_header()
?>

<main>
    <div class="wrapper mentions-container">
        <section class="intro-mentions">
            <h1 class="landing-titre">
                Mentions <span class="mot-orange">l&eacute;gales</span>
            </h1>
        </section>

        <section class="mention">
            <h1 class="coordonnees__titre ">
                Coordonnées
            </h1>
            <p class="coordonnees__texte">
                <span> Tel&nbsp;:</span> +32 (0) 85 21 57 52
            </p>
            <p class="coordonnees__texte">
                <span>E-mail&nbsp;:</span> contact@sefasbl.com
            </p>

            <p class="coordonnees__texte">
                <span>Responsable de la publication&nbsp;:</span> Benjamin Marissiaux
            </p>

        </section>
        <section class="mention">
            <h1>
                <?= get_field('titre-mention-1',237) ?>
            </h1>
            <p>
                <?= get_field('texte-mention-1',237) ?>
            </p>
        </section>
        <section class="mention">

            <h1>
                <?= get_field('titre-mention-2',237) ?>
            </h1>
            <p>
                <?= get_field('texte-mention-2',237) ?>
            </p>
        </section>
        <section class="mention">
            <h1>
                <?= get_field('titre-mention-3',237) ?>
            </h1>
            <p>
                <?= get_field('texte-mention-3',237) ?>
            </p>
        </section>
        <section class="mention">
            <h1>
                <?= get_field('titre-mention-4',237) ?>
            </h1>
            <p>
                <?= get_field('texte-mention-4',237) ?>

            </p>
        </section>
        <section class="mention">
            <h1>
                <?= get_field('titre-mention-5',237) ?>
            </h1>
            <p>
                <?= get_field('texte-mention-5',237) ?>
            </p>
        </section>
    </div>
</main>

<?php get_footer() ?>
