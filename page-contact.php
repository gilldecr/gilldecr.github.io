<?php get_header(); ?>

<!-- GREEN BANNER -->

    <div class="banner-container">
            <div class="color-banner">
                <div class="container" id="header-text">
                    <div class="row">
                        <h1 id="title-tekst"><?php the_title(); ?></h1>
                    </div>
                </div>
            </div>
    </div>

<!-- CONTENT -->

    <!-- FORM -->
    <div class="container" id="text-box-container">
        <div class="row" id="text-box-row">
                <div class="col">
                <h1>Vragen? Laat iets weten!</h1>
                    <?php echo do_shortcode('[contact-form-7 id="126" title="Groovebox contact"]'); ?>
                </div>
        </div>
    </div>


    <!-- SOCIAL MEDIA LINKS -->
    <div class="container" id="social_media_line">
        <div class="row">
            <div class="col">
                <img id="line" src="<?php echo get_template_directory_uri(); ?>/assets/line.png">
            </div>
            <div class="col-3" id="pen-icon-col" align="center">
                <a href="#"><img id="icons_contact" src="<?php echo get_template_directory_uri(); ?>/assets/instagram-icon.png"></a>
                <a href="#"><img id="icons_contact" src="<?php echo get_template_directory_uri(); ?>/assets/snapchat-icon.png"></a>
                <a href="#"><img id="icons_contact" src="<?php echo get_template_directory_uri(); ?>/assets/twitter-icon.png"></a>
                <a href="#"><img id="icons_contact" src="<?php echo get_template_directory_uri(); ?>/assets/pinterest-icon.png"></a>
                <a href="#"><img id="icons_contact" src="<?php echo get_template_directory_uri(); ?>/assets/facebook-icon.png"></a>
            </div>
            <div class="col">
                <img id="line" src="<?php echo get_template_directory_uri(); ?>/assets/line.png">
            </div>
        </div>
    </div>

    <!-- LOCATION LINE -->
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="location_line" align="center">
                    Sint-Baafsplein 9000 Gent, België
                </div>
            </div>
        </div>
    </div>

    <!-- GOOGLE MAPS -->
    <div class="container" id="bottom-banner">
        <?php echo do_shortcode("[wpgmza id='1']"); ?>
    </div>

<?php get_footer(); ?>