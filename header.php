<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'foce' ); ?></a>

        <header class="header_container">
            <section class="header">
                <h1 class="site-title">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?>
                    </a>
                </h1>
                <div class="menu-burger">
                    <div class="bar"></div>
                    <div class="bar"></div>
                    <div class="bar"></div>
                </div>
            </section>

            <nav>
                <div class="menu-decorations">
                    <img class="decoration rotation"  src="wp-content/themes/foce-child/assets/images/orchid.png" alt="orchidée">
                    <img class="decoration rotation" src="wp-content/themes/foce-child/assets/images/Sunflower.png" alt="marguerite">
                    <img class="decoration rotation" src="wp-content/themes/foce-child/assets/images/hibiscus_footer.png" alt="hibiscus">
                    <img class="decoration rotation" src="wp-content/themes/foce-child/assets/images/nav/flower.png" alt="fleur">
                    <img class="decoration float" src="wp-content/themes/foce-child/assets/images/nav/cat_1.png" alt="tête de chat jaune">
                    <img class="decoration float" src="wp-content/themes/foce-child/assets/images/nav/cat_2.png" alt="tête de chat noir">
                    <img class="decoration float" src="wp-content/themes/foce-child/assets/images/nav/cat.png" alt="tête de chat violette">
                    <img class="decoration rotation" src="wp-content/themes/foce-child/assets/images/nav/random_flower.png" alt="fleur violette">

                    <ul class="menu">
                        <li><img src="wp-content/themes/foce-child/assets/images/nav/logo_nav.png" alt="logo"></li>
                        <li><a href="#story">Histoire</a></li>
                        <li><a href="#characters">Personnages</a></li>
                        <li><a href="#place">Lieu</a></li>
                        <li><a href="#studio">Studio Koukaki</a></li>
                        <li>studio koukaki</li>
                    </ul>

                </div>
            </nav>
    </div>

    </header>