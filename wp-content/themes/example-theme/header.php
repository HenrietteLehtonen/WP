<!DOCTYPE html>
<html
    <?php
    language_attributes();
    bloginfo( 'charset' );
    ?>>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--   3. <title>Example WordPress Theme</title>-->
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri();?>">
    <?php wp_head(); ?>
</head>

<body>
    <div class="container">
        <header class="page-header">
            <div class="header-top-left">
                <?php the_custom_logo();?>
            </div>
            <div class="header-top-right">
<!--                <nav>-->
<!--                    <ul>-->
<!--                        <li><a href="#">Home</a></li>-->
<!--                        <li><a href="#">Products</a></li>-->
<!--                        <li><a href="#">About us</a></li>-->
<!--                    </ul>-->
<!--                </nav>-->
                <?php wp_nav_menu(["theme_location"=>"main-menu"]); ?>
            </div>
        </header>
