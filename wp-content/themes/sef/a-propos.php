<?php

/*
Template Name: A propos
*/

$photo_a_propos = get_field('img-about-1');
$picture_a_propos = $photo_a_propos['sizes']['medium'];
$alt_a_propos = $photo_a_propos['alt'];

$photo_maison_1 = get_field('img-maison-1');
$picture_maison_1 = $photo_maison_1['sizes']['medium'];
$alt_maison_1 = $photo_maison_1['alt'];

$photo_maison_2 = get_field('img-maison-2');
$picture_maison_2 = $photo_maison_2['sizes']['medium'];
$alt_maison_2 = $photo_maison_2['alt'];

$photo_histoire = get_field('img-maison-2');
$picture_histoire = $photo_histoire['sizes']['medium'];
$alt_histoire = $photo_histoire['alt'];

get_header()
?>

<main>
    <section class="intro wrapper">
        <div class="img-about-container">
            <img src="<?= $picture_a_propos ?>"
                 srcset="<?= $picture_a_propos ?>, <?= $photo_a_propos['sizes']['large'] ?> 2x"
                 alt="<?= $alt_a_propos ?>" class="img-about-container__contenu-about">
            <img src="http://sef-aout.test/wp-content/uploads/2024/08/font-a-propos.svg" alt="fond de couleur orange"
                 class="img-about-container__fond">
            <img src="http://sef-aout.test/wp-content/uploads/2024/08/fond-a-propos-2.svg" alt="fond de couleur orange"
                 class="img-about-container__fond">
        </div>
        <div>
            <h1>Quoi de <span class="mot-orange">neuf</span> au SEF&nbsp;?</h1>
            <p class="but-premier">
                <?= get_field("intro-p-1", 50) ?>
            </p>
            <p>
                <?= get_field("intro-p-2", 50) ?>
            </p>
        </div>
    </section>
    <section class="residences wrapper">
        <h1>
            Nos <span class="mot-orange">maisons</span>
        </h1>
        <div class="maisons-container">
            <article class="maisons-container__maison">
                <img src="<?= $picture_maison_1 ?>"
                     srcset="<?= $picture_maison_1 ?>, <?= $photo_maison_1['sizes']['large'] ?> 2x"
                     alt="<?= $alt_maison_1 ?>">
                <h2>
                    Premi&egrave;re maison
                </h2>
                <ul>
                    <li>
                        <?= get_field("maison-li-1", 50) ?>
                    </li>
                    <li>
                        <?= get_field("maison-li-2", 50) ?>
                    </li>
                </ul>
            </article>
            <div class="maisons-container__ligne-verticale"></div>
            <article class="maisons-container__maison">
                <img src="<?= $picture_maison_2 ?>"
                     srcset="<?= $picture_maison_2 ?>, <?= $photo_maison_2['sizes']['large'] ?> 2x"
                     alt="<?= $alt_maison_2 ?>">
                <h2>
                    Deuxi&egrave;me maison
                </h2>
                <ul>
                    <li>
                        <?= get_field("maison-li-1-ul2", 50) ?>
                    </li>
                    <li>
                        <?= get_field("maison-li-2-ul2", 50) ?>
                    </li>
                </ul>
            </article>
        </div>
    </section>
    <section class="histoire wrapper">
        <h1>
            Un peu d&lsquo;<span class="mot-orange">Histoire</span>
        </h1>
        <div class="histoire__contenu">
            <div class="histoire__contenu__texte">
                <p>
                    <?= get_field("texte-histoire-1", 50) ?>
                </p>
                <p>
                    <?= get_field("texte-histoire-2", 50) ?>
                </p>
            </div>
            <div class="img-histoire-container">
                <img src="http://sef-aout.test/wp-content/uploads/2024/08/fond-histoire-2.svg"
                     alt="fond de couleur orange"
                     class="img-histoire-container__fond">
                <img src="http://sef-aout.test/wp-content/uploads/2024/08/fond-histoire-1.svg"
                     alt="fond de couleur orange"
                     class="img-histoire-container__fond">
                <img src="<?= $picture_histoire ?>"
                     srcset="<?= $picture_histoire ?>, <?= $photo_histoire['sizes']['large'] ?> 2x"
                     alt="<?= $alt_histoire ?>" class="img-histoire-container__photo-famille">
            </div>
        </div>
    </section>
    <section class="dons wrapper">
        <h1>
            A propos des <span class="mot-orange">dons</span>
        </h1>
        <div class="cartes-dons">
            <article class="cartes-dons__materiel">
                <h2>
                    Dons matériels
                </h2>
                <p>
                    Nous ne prenons pas que les dons financiers, vous avez aussi l’opportunité de venir déposer vos
                    meubles au dépôt, vêtements à la friperie ou encore vos livres dans notre bouquinerie.
                    Vous pouvez donc vous rendre à ces endroits pour faire vos dons.
                </p>
                <a href="" class="btn-orange">Voir les magasins</a>
            </article>
            <article class="cartes-dons__financier">
                <h2>
                    Dons financiers
                </h2>
                <p>
                    Vous pouvez faire des dons financiers pour nous soutenir. Pour cela, vous pourrez utiliser le numéro
                    de compte suivant :
                </p>
                <p>
                    <strong>BE43 2400 2934 2201</strong>
                </p>
                <p>
                    Les dons à partir de <span class="mot-orange">40&nbsp;€</span> par an sont <span class="mot-orange">exonérés fiscalement</span>.
                </p>
                <p>
                    Votre soutien sert à encourager différentes les activités et services proposés par le SEF aux
                    personnes qui en ont besoin.
                </p>
            </article>
        </div>
    </section>
    <section class="benevolat wrapper">
        <h1>
            Envie de devenir <span class="mot-orange">b&eacute;n&eacute;vole</span>&nbsp;?
        </h1>
        <a href="#">Contactez&nbsp;-&nbsp;nous</a>
    </section>
</main>

<?php get_footer() ?>
