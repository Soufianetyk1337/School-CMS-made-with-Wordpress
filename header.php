<!DOCTYPE HTML>
<html lang="en">
<head>
        <title>Wordpress Restaurant Theme</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">

        <!-- Font -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
        <!-- Stylesheets -->
        <?php wp_head();?>
        <link href="<?php bloginfo('stylesheet_url')?>" rel="stylesheet">

</head>
<body>

<header>
        <div class="container">
                <a class="logo" href="#"><img src="<?php bloginfo('template_directory');?>/images/logo.png" alt="Logo"></a>

                <div class="right-area">
                        <h6><a class="plr-20 color-white btn-fill-primary" href="#">ORDER: +212 6 10 20 30 40</a></h6>
                </div><!-- right-area -->

                <a class="menu-nav-icon" data-menu="#main-menu" href="#"><i class="ion-navicon"></i></a>

                <?php 
                wp_nav_menu(
                        array(
                        'theme_location' => 'top-menu',
                        'menu_id' =>  'main-menu',
                        'container' => 'ul',
                        'menu_class' => 'main-menu font-mountainsre'
                        )

                );
                ?>


                <div class="clearfix"></div>
        </div><!-- container -->
</header>
