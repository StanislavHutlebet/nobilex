<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link    https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 */
?>
<!DOCTYPE html>
<html lang="ua">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>



<body <?php body_class(); ?> id="body">
    <header class="header">
        <div class="pre-header">
            <?php
            wp_nav_menu( array(
                'theme_location' => 'pre_header',
                'menu_class'     => 'manu-list',
                'container'      => false,
            ));
            ?>
        </div>
        <div class="header" id="hd">
            <div class="header__container _container">
                <div class="header-body">
                    <div class="column-info">
                        <div class="phone">

                        </div>
                        <div class="logo"
                            <a href="/" class="header-logo">
                                <?php
                                the_custom_logo();
                                ?>
                            </a>
                        </div>
                        <div class="cart">

                        </div>
                    </div>
                    <div class="column-menu">
                        <div class="menu">
                            <div class="header-menu">
                                <?php
                                wp_nav_menu( array(
                                    'theme_location' => 'header',
                                    'menu_class'     => 'manu-list',
                                    'container'      => false,
                                ));
                                ?>
                            </div>
                        </div>
                        <div class="search">

                        </div>
                    </div>
                    <div class="header__burger">
                        <span></span>
                    </div>
                </div>
            </div>
        </div><!-- #masthead -->
    </header>

    <div id="content" class="site-content">