<!-- this file is for blog post reading page for every post  -->
<?php
$root = get_template_directory_uri();

get_header();
the_post();
?>


<link rel="stylesheet" href="<?php echo $root; ?>/blog.css">
<div class="blogs_single">
    <h1><?php the_title(); ?></h1>

    <?php the_content(); ?>

    <div class="date_author">
        <p> Published on: <span><?php the_date(); ?></span> </p>
        <p>By <span><?php the_author(); ?> </span></p>
    </div>

    <?php
    //  comment_form(); 
    comments_template();
    ?>
</div>



<?php get_footer(); ?>