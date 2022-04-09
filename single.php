<!-- this file is for blog post reading page for every post  -->
<?php
$root = get_template_directory_uri();

get_header();
the_post();
?>


<link rel="stylesheet" href="<?php echo $root; ?>/blog.css">
<div class="blogs">
    <h1><?php the_title(); ?></h1>

    <?php the_content(); ?>
    <p> <?php the_date(); ?> </p>
    <p> <?php the_author(); ?> </p>

    <?php
    //  comment_form(); 
    comments_template();
     ?>
</div>



<?php get_footer(); ?>