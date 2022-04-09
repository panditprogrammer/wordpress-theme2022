<?php
/* for admin panel */

// create navbar 
register_nav_menus(
    array("primary_menu" => "Header Menu")
);


// feature images 
add_theme_support("post-thumbnails");

// create header for logo
add_theme_support("custom-header");


/*
    * Enable support for Post Thumbnails on posts and pages.
    *
    * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
    */
add_theme_support('post-thumbnails');
// set the post image size 
set_post_thumbnail_size(500, 360);
