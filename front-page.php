<?php

get_header();
?>

<main id="primary" class="site-main">
    <section class="banner">
        <video id="background-video" poster=<?php echo get_template_directory_uri() . '/assets/images/banner.png'; ?> " autoplay loop muted>
            <source src=" wp-content/themes/foce-child/assets/video/Studio-koukaki-video.mp4"> 
        </video> 
        <div class="logo-container">
            <img id="logo" src="<?php echo get_template_directory_uri() . '/assets/images/logo.png'; ?> "
                alt="logo Fleurs d'oranger & chats errants">
        </div>
    </section>
    <section id="#story" class="story">
        <h2>L'histoire</h2>
        <article class="story__article">
            <p><?php echo get_theme_mod('story'); ?></p>
        </article>
        <article id="characters">
            <h3>Les personnages</h3>

             <!-- SLIDER PERSONNAGE - TEMPLATE PART -->
            <?php get_template_part('template-parts/swiper'); ?>

        </article>
        <article id="place">
            <div>
                <h3>Le Lieu</h3>
                <p><?php echo get_theme_mod('place'); ?></p>
            </div>

        </article>
    </section>


    <section id="studio">
        <h2>Studio Koukaki</h2>
        <div>
            <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue
                des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections
                en activité : le long métrage et le court métrage. Nous développons des films fantastiques,
                principalement autour de la culture de notre pays natal, le Japon.</p>
            <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et
                commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable
                dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise
                sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats
                errants”.
            </p>
        </div>

        <!-- SECTION OSCARS - TEMPLATE PART -->
        <?php get_template_part('template-parts/oscars'); ?>

    </section>

</main><!-- #main -->

<?php
get_footer();