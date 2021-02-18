<?php
/*
Template Name: About
*/
get_header(); ?>
<!-- BLOBS START -->
<img src="<?php echo get_template_directory_uri() . '/asset/img/union-about.svg'; ?>" alt="" class="union">
<!-- BLOBS END -->

<!-- SECTION ABOUT START -->
<section class="banner-about">
    <div class="info-about">
        
        <div class="text-info-about">
            
            <h1><span>Cv & toi</span> est une cv thèque utile pour recruteur et candidat</h1>
            <p>Notre pateforme vous permets d'éditer un cv et de<br> l'envoyer sur notre pateforme d'hébergement afin de pouvoir<br> être visible pour les recruteurs.<br> Ensuite le recruteur peut accéder au différents cv et prendre contact avec les personne qui l'intéréssent.</p>
        </div>
        <div class="img-info-about"><img src="<?php echo get_template_directory_uri() . '/asset/img/at_work.svg'; ?>" alt=""></div>
    </div>
    <img src="<?php echo get_template_directory_uri() . '/asset/img/intersect.svg'; ?>" alt="" class="intersect">
</section>

<section class="section1-about">
    <img src="<?php echo get_template_directory_uri() . '/asset/img/img-banner-1.svg'; ?>" alt="" class="about-img one">
    <img src="<?php echo get_template_directory_uri() . '/asset/img/img-banner-2.svg'; ?>" alt="" class="about-img two">
    <img src="<?php echo get_template_directory_uri() . '/asset/img/select.svg'; ?>" alt="" class="about-img three">
    <div class="section1-box">
        <div class="section1-title">
            <h3>Sollicitez avec succès</h3>
            <p>Grâce à Cv & toi, vous aurez un CV professionnel prêt à être envoyé à tout instant. Vous pouvez le rédigez aisément vous-même et le partager dans notre bibliothèque pour le rendre visible auprès des recruteurs: votre Cv attirera l’attention !</p>
        </div>
        <div class="section1-content">
            <h4>Rédiger un CV professionnel soi-même</h4>
            <p><i class="far fa-check-square"></i> La rédaction d’un CV professionnel est une tâche facile grâce à notre outil truffé de conseils et d’astuces.</p>
            <p><i class="far fa-check-square"></i> En 15 minutes seulement, rédigez vous-même un CV professionnel qui attire l’attention du recruteur</p>
            <p><i class="far fa-check-square"></i> Les Cv que vous avez rédigés sont sauvegardés dans votre environnement personnel. Ainsi, vous pourrez les modifier et les télécharger en tout lieu et à tout instant</p>
            <p><i class="far fa-check-square"></i> Accédez à la fonction de rédaction de lettres de solicitation convaincantes et faites les correspondre avec votre CV</p>
            <p><i class="far fa-check-square"></i> Accès à toutes les confctionnalités </p>
        </div>
    </div>
</section>

<section class="section2-about">
    <img src="<?php echo get_template_directory_uri() . '/asset/img/menu-img-banner.svg'; ?>" alt="" class="about-img four">
    <img src="<?php echo get_template_directory_uri() . '/asset/img/img-banner-5.svg'; ?>" alt="" class="about-img five">
    <img src="<?php echo get_template_directory_uri() . '/asset/img/img-banner-3.svg'; ?>" alt="" class="about-img six">
    <div class="section2-box">
        <div class="section2-title">
            <h3>Plus de 110.920 utilisateurs ont déjà rédigé un CV</h3>
            <p>Avec notre outil de rédaction Cv & toi, vous serez en mesure de pouvoir rédiger, aisément et de manière rapide, un CV pertinent professionnel et convaincant, en 15 minutes seulement.</p>
        </div>
        <div class="section2-content">
            <a href="<?php echo esc_url(home_url('candidat')); ?>" class="btn-banner">Créer un CV</a>
            <p>Et offrez-vous 65% de chance supplémentaire d’être vue par un recruteur et de décrocher un emploi.</p>
        </div>
    </div>
</section>

<!-- SECTION ABOUT END -->

<?php get_footer();
