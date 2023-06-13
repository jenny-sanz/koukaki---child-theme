

<!-- Slider main container -->

<!-- <div class="swiper mySwiper">

    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <img src="wp-content/themes/foce-child/assets/images/Tenshi.png" />
        </div>
        <div class="swiper-slide">
            <img src="wp-content/themes/foce-child/assets/images/Jaakuna.png" />
        </div>
        <div class="swiper-slide">
            <img src="wp-content/themes/foce-child/assets/images/Kawaneko.png"/>
        </div>
        <div class="swiper-slide">
            <img src="wp-content/themes/foce-child/assets/images/Orenjiiro.png" />
        </div>
        <div class="swiper-slide">
            <img src="wp-content/themes/foce-child/assets/images/Pinku.png"  />
        </div>
    </div>
</div> -->




<!-- slider swiper js avec intégration des images php avec la fonction get_posts -->

<?php
$characters = get_posts(array(
    'post_type' => 'characters',
    'posts_per_page' => -1,
));

foreach ($characters as $character) {
    $character_name = $character->post_title; // Récupérer le nom du personnage
    $character_image = get_the_post_thumbnail_url($character->ID); // Récupérer l'URL de l'image du personnage

    // Vérifier si l'image est vide et assigner une image par défaut si nécessaire
    if (empty($character_image)) {
        $character_image = 'wp-content/themes/foce-child/assets/images/Kawaneko.png';
    }
    
    $characters_data[] = array(
        'name' => $character_name,
        'image' => $character_image,
    );
}
?>

<!-- Affichage des données dans le slider -->
<div class="swiper mySwiper">
    <div class="swiper-wrapper">
        <?php foreach ($characters_data as $character) : ?>
            <div class="swiper-slide">
                <img src="<?php echo $character['image']; ?>" alt="" />
                <figcaption> <?php echo $character['name']; ?></figcaption>
            </div>
        <?php endforeach; ?>
    </div>
</div>




