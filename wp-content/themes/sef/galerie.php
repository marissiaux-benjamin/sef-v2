<?php
/*
Template Name: Galerie
*/

$photo1 = get_field('galerie-1');
$picture1 = $photo1['sizes']['medium'];
$alt1 = $photo1['alt'];

$photo2 = get_field('galerie-2');
$picture2 = $photo2['sizes']['medium'];
$alt2 = $photo2['alt'];

$photo3 = get_field('galerie-3');
$picture3 = $photo3['sizes']['medium'];
$alt3 = $photo3['alt'];

$photo4 = get_field('galerie-4');
$picture4 = $photo4['sizes']['medium'];
$alt4 = $photo4['alt'];

$photo5 = get_field('galerie-5');
$picture5 = $photo5['sizes']['medium'];
$alt5 = $photo5['alt'];

$photo6 = get_field('galerie-6');
$picture6 = $photo6['sizes']['medium'];
$alt6 = $photo6['alt'];

$photo7 = get_field('galerie-7');
$picture7 = $photo7['sizes']['medium'];
$alt7 = $photo7['alt'];

$photo8 = get_field('galerie-8');
$picture8 = $photo8['sizes']['medium'];
$alt8 = $photo8['alt'];

$photo9 = get_field('galerie-9');
$picture9 = $photo9['sizes']['medium'];
$alt9 = $photo9['alt'];

get_header()
?>

<main>
    <section class="intro-galerie wrapper">
        <h1 data-animation="show">
            Notre <span class="mot-orange">galerie</span> de photos
        </h1>
    </section>
    <section class="galerie wrapper">
        <h1 class="hidden-title">
            grille de photos
        </h1>
        <div data-animation="show">
            <img src="<?= $picture1 ?>"
                 srcset="<?= $picture1 ?>, <?= $photo1['sizes']['large'] ?> 2x"
                 alt="<?= $alt1 ?>">
        </div>
        <div data-animation="show">
            <img src="<?= $picture2 ?>"
                 srcset="<?= $picture2 ?>, <?= $photo2['sizes']['large'] ?> 2x"
                 alt="<?= $alt2 ?>">
        </div>
        <div data-animation="show">
            <img src="<?= $picture3 ?>"
                 srcset="<?= $picture3 ?>, <?= $photo3['sizes']['large'] ?> 2x"
                 alt="<?= $alt3 ?>">
        </div>
        <div data-animation="show2">
            <img src="<?= $picture4 ?>"
                 srcset="<?= $picture4 ?>, <?= $photo4['sizes']['large'] ?> 2x"
                 alt="<?= $alt4 ?>">
        </div>
        <div data-animation="show2">
            <img src="<?= $picture5 ?>"
                 srcset="<?= $picture5 ?>, <?= $photo5['sizes']['large'] ?> 2x"
                 alt="<?= $alt5 ?>">
        </div>
        <div data-animation="show2">
            <img src="<?= $picture6 ?>"
                 srcset="<?= $picture6 ?>, <?= $photo6['sizes']['large'] ?> 2x"
                 alt="<?= $alt6 ?>">
        </div>
        <div data-animation="show3">
            <img src="<?= $picture7 ?>"
                 srcset="<?= $picture7 ?>, <?= $photo7['sizes']['large'] ?> 2x"
                 alt="<?= $alt7 ?>">
        </div>
        <div data-animation="show3">
            <img src="<?= $picture8 ?>"
                 srcset="<?= $picture8 ?>, <?= $photo8['sizes']['large'] ?> 2x"
                 alt="<?= $alt8 ?>">
        </div>
        <div data-animation="show3">
            <img src="<?= $picture9 ?>"
                 srcset="<?= $picture9 ?>, <?= $photo9['sizes']['large'] ?> 2x"
                 alt="<?= $alt9 ?>">
        </div>
    </section>
    <section class="benevolat wrapper">
        <h1 data-animation="show4">
            Envie de devenir <span class="mot-orange">b&eacute;n&eacute;vole</span>&nbsp;?
        </h1>
        <a href="<?= get_permalink(213) ?>" data-animation="show4">Contactez&nbsp;-&nbsp;nous</a>
    </section>
</main>

<?php get_footer() ?>
