<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cvtech
 */

get_header();
?>
    <!-- SECTION 1-->
    <div class="section-white">
        <div class="intro-box-container">

            <div class="box-intro">
                <div class="box-bg box1">
                    <div class="box-image1 bi1"><img src="<?php echo get_template_directory_uri() . '/asset/img/box-bg1.svg'; ?>" alt=""></div>
                    <div class="box-image2 bi1"><img src="<?php echo get_template_directory_uri() . '/asset/img/box-bg2.svg'; ?>" alt=""></div>
                    <div class="icon-box"><i class="fas fa-address-card"></i></div>
                </div>
                <div class="box-text">
                    <h3>1. Choisissez l'un de nos modèles de CV</h3>
                    <p>Approuvés par nos experts en recrutement.</p>
                </div>
            </div>

            <div class="box-intro">
                <div class="box-bg box2">
                    <div class="box-image1 bi2"><img src="<?php echo get_template_directory_uri() . '/asset/img/box-bg1.svg'; ?>" alt=""></div>
                    <div class="box-image2 bi2"><img src="<?php echo get_template_directory_uri() . '/asset/img/box-bg2.svg'; ?>" alt=""></div>
                    <div class="icon-box"><i class="fas fa-pencil-alt"></i></i></div>
                </div>
                <div class="box-text">
                    <h3>2. Créez et personnalisez votre CV</h3>
                    <p>Modifiez votre CV à votre guise: chnagez la couleur, la typographie, l'ordre des rubriques et bien plus !</p>
                </div>
            </div>

            <div class="box-intro">
                <div class="box-bg box3">
                    <div class="box-image1 bi3"><img src="<?php echo get_template_directory_uri() . '/asset/img/box-bg1.svg'; ?>" alt=""></div>
                    <div class="box-image2 bi3"><img src="<?php echo get_template_directory_uri() . '/asset/img/box-bg2.svg'; ?>" alt=""></div>
                    <div class="icon-box"><i class="fab fa-telegram-plane"></i></div>
                </div>
                <div class="box-text">
                    <h3>3. Téléchargez votre CV et partagez-le</h3>
                    <p>Envoyez votre CV aux entreprises au format que vous souhaitez, ou à l'aide d'un lien personnalisé.</p>
                </div>
            </div>

        </div>
    </div>

<!-- SECTION 2-->
    <div class="section-grey">

        <div class="container-grey">
            <div class="left-container">

                <img src="<?php echo get_template_directory_uri() . '/asset/img/eclipse.png'; ?>" alt="">
                <h2>Télécharger votre CV en ligne en quelques clics</h2>
                <p>Envoyer sa candidature n'a jamaiss été aussi facile grâce à notre créateur de CV en ligne. Suivez ces 3 étapes et augmentez vos chances de trouver un emploi.</p>
                <div class="img-3cv">
                    <img src="<?php echo get_template_directory_uri() . '/asset/img/cv-download.png'; ?>" alt="">
                    <div class="link-seemore"><a href=""><p>En savoir plus</p><i class="fas fa-arrow-right"></i></a></div>
                </div>

            </div>

            <div class="right-container">

                <img src="<?php echo get_template_directory_uri() . '/asset/img/media-home.png'; ?>" alt="">

            </div>
        </div>
    </div>


























	













<?php
get_footer();
