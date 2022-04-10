<?php

$root = get_template_directory_uri();
// $root = bloginfo("template_directory");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php bloginfo('name');  wp_title(); ?>  <?php if(is_front_page()){bloginfo("description");} ?></title>
    <link rel="stylesheet" href="<?php echo $root; ?>/style.css">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); // for background image   ?>> 
    <div class="container">
        <nav>
            <a class="logo" href="<?php echo site_url(); ?>"><img src="<?php echo get_header_image(); ?>" alt=""></a>
            <div class="navbar">
                <?php
                wp_nav_menu(array('theme_location' => 'primary_menu'));
                ?>

            </div>
        </nav>