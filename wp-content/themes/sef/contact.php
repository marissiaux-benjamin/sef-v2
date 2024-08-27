<?php

/*
Template Name: contact
*/

$photo_a_propos = get_field('img-contact');
$picture_a_propos = $photo_a_propos['sizes']['medium'];
$alt_a_propos = $photo_a_propos['alt'];

get_header()
?>

<main class="main-contact ">
    <section class="intro-contact wrapper">
        <div class="img-contact-container">
            <img src="<?= $picture_a_propos ?>"
                 srcset="<?= $picture_a_propos ?>, <?= $photo_a_propos['sizes']['large'] ?> 2x"
                 alt="<?= $alt_a_propos ?>" class="img-contact-container__contenu-contact">
            <img src="http://sef-aout.test/wp-content/uploads/2024/08/font-a-propos.svg" alt="fond de couleur orange"
                 class="img-contact-container__fond">
            <img src="http://sef-aout.test/wp-content/uploads/2024/08/fond-a-propos-2.svg" alt="fond de couleur orange"
                 class="img-contact-container__fond">
        </div>
        <h1>
            <span class="mot-orange">Contactez</span> nous&nbsp;!
        </h1>
        <p>
            <?= get_field('text-contact', 213) ?>
        </p>
    </section>
    <section class="formulaire wrapper">
        <form action="#" method="get">
            <div class="prenom-nom">
                <div>
                    <label for="nom" class="label-nom">Pr&eacute;nom</label>
                    <input type="text" id="prenom" placeholder="Charles" required>
                </div>

                <div>
                    <label for="prenom" class="label-prenom">Nom</label>
                    <input type="text" id="nom" placeholder="Levesque" required>
                </div>

            </div>
            <div class="email">
                <label for="email">Email</label>
                <input type="email" id="email" placeholder="charles.l@gmail.com" required>
            </div>
            <div class="message">
                <label for="message">Message</label>
                <textarea name="message" id="message" cols="30" rows="10"
                          placeholder="Bonjour, je vous contact pour devenir bénévol au sein du SEF..." required></textarea>
            </div>
            <div class="form-submit">
                <input type="submit" class="btn-form">
            </div>
        </form>
    </section>
</main>

<?php get_footer() ?>
