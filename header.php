<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">    
    <link href="https://fonts.googleapis.com/css?family=Hind:300,400,700|Palanquin:100,400,700" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GROOVEBOX <?php the_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body>
<div class="menu-wrapper">
        <a href="http://localhost/wordpress/"><img id="logo-header-image" src="<?php echo get_template_directory_uri(); ?>/assets/logozwart.png"></a>
        <div class="menu-list">
            <ul id="menu-list">
                <?php wp_nav_menu(array('theme_location'=>'primaryOther')); ?>
                <!-- <li><a href="#">Blog</a></li>
                <li><a href="#">Gallerij</a></li>
                <li><a href="#">Over ons</a></li>
                <li><a href="#">Contact</a></li> -->
            </ul>
        </div>
    </div>
  
