<?php
$root = get_template_directory_uri();

get_header();
?>




<div>

    <link rel="stylesheet" href="<?php echo $root; ?>/style.css">
   

    <div class="feature_image">
    <?php the_post_thumbnail(array(960,400)); ?>
    </div>

    <div class="container content_section">
        <?php the_content(); ?>
    </div>

</div>




<?php
get_footer();

?>