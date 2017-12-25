<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">    
    <link href="https://fonts.googleapis.com/css?family=Hind:300,400,700|Palanquin:100,400,700" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GROOVEBOX Home</title>
    <?php wp_head(); ?>
</head>
<body>
    <div class="background-wrapper">
        <div class="header-wrapper">
            <div class="logo-header">
                <img id="logo-header-image" src="<?php echo get_template_directory_uri(); ?>/assets/logo.png">
            </div>
            <div class="menu-main-menu-container">
                <ul id="menu-main-menu">
                <?php wp_nav_menu(array('theme_location'=>'primaryHome')); ?>
                    <!-- <li><a href="#">Blog</a></li>
                    <li><a href="#">Gallerij</a></li>
                    <li><a href="other-pages.html">Over ons</a></li>
                    <li><a href="#">Contact</a></li> -->
                </ul>
            </div>
        </div>
        <img id="header-background-image-G" src="<?php echo get_template_directory_uri(); ?>/assets/header_background.png">
        <img id="header-background-image" src="<?php echo get_template_directory_uri(); ?>/assets/header_background.jpg">
    </div>
    <div class="container">
        <div class="row" id="top-row">
            <div class="col-8" id="col-left">
                <h1>Recente blogposts</h1>

                <!-- POSTS LOOP -->

                <?php  
                    $the_query = new WP_Query( array(

                    'posts_per_page' => 3,

                    ));

                    if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>  
                        <p id="blog_title"><?php the_title(); ?></p>
                        <p><?php the_content(); ?></p><br><br>
                    <?php endwhile;
                    else: ?>

                <!-- NO POSTS MESSAGE -->

                    <p><?php _e("Sorry, hier is niks te bekijken"); ?></p>

                <?php endif; ?>
                <?php wp_reset_postdata(); //Restore the original postdata for this page, if needed later ?>
            </div>
            <div class="col" id="col-right">
                <h1>Quick links</h1>
                    <div class="menu-main-menu-container">
                        <ul id="menu-main-menu-1">
                            <?php wp_nav_menu(array('theme_location'=>'secondaryHome')); ?>
                                <!-- <li><a href="#">Blog</a></li>
                                <li><a href="#">Gallerij</a></li>
                                <li><a href="other-pages.html">Over ons</a></li>
                                <li><a href="#">Contact</a></li> -->
                        </ul>
                    </div>
                <h1>Social media</h1>
                    <div class="social-media-links">
                        <div class="icons">
                            <a href="#"><img id="icons" src="<?php echo get_template_directory_uri(); ?>/assets/instagram-icon.png"></a>       
                        </div>
                        <div class="icons">
                            <a href="#"><img id="icons" src="<?php echo get_template_directory_uri(); ?>/assets/snapchat-icon.png"></a>       
                        </div>
                        <div class="icons">
                            <a href="#"><img id="icons" src="<?php echo get_template_directory_uri(); ?>/assets/twitter-icon.png"></a>       
                        </div>
                        <div class="icons">
                            <a href="#"><img id="icons" src="<?php echo get_template_directory_uri(); ?>/assets/pinterest-icon.png"></a>       
                        </div>
                        <div class="icons">
                            <a href="#"><img id="icons" src="<?php echo get_template_directory_uri(); ?>/assets/facebook-icon.png"></a>       
                        </div>
                    </div>
                </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <?php get_footer(); ?>
</body>
</html>