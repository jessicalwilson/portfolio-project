<!doctype html>
<html <?php language_attributes(); ?>>
<head>

    <meta charset="<?php echo get_bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="title" content="<?php wp_title( '|', true, 'right' ); ?>">

    <link rel="pingback" href="<?php echo get_bloginfo( 'pingback_url' ); ?>">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!-- bof wp_head -->
    <?php wp_head(); ?>
    <!-- eof wp_head -->

</head>
<body class="<?php echo implode(' ', get_body_class()); ?>">

    <div id="top"><!-- Closes in footer.php -->

        <section class="header">
            <header class="header__header">
                <h1 class="header__heading">
                    <?php if (is_front_page()) : ?>
                        <?php bloginfo('name'); ?>
                    <?php else : ?>
                        <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                            <?php bloginfo('name'); ?>
                        </a>
                    <?php endif; ?>
                </h1>

                <?php if (get_bloginfo('description')) : ?>
                    <h2 class="header__description"><?php bloginfo('description'); ?></h2>
                <?php endif; ?>

                <?php
                if (has_nav_menu('header')) :
                    wp_nav_menu(array(
                        'container'       => 'nav',
                        'theme_location'  => 'header',
                        'container_id'    => 'header-menu',
                        'menu_id'         => 'header-menu-list',
                        'container_class' => 'menu horizontal',
                        'menu_class'      => 'contain',
                    ));
                else :
                    wp_page_menu(array(
                        'menu_class' => 'menu horizontal',
                        'show_home'  => true,
                        'depth'      => 0,
                    ));
                endif;
                ?>
            </header>
        </section>
