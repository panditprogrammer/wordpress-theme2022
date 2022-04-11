<?php
// this file is used for blog menu link
$root = get_template_directory_uri();

get_header(); ?>


<link rel="stylesheet" href="<?php echo $root; ?>/css/blog.css">
<div class="blogs">

    <?php
    // when search something 
    $searchData = "";
    if (isset($_GET["search"]) && $_GET["search"] != "") {
        $searchData = $_GET["search"];
    }

    while (have_posts()) {
        the_post();

        // get post feature  image 
        // $image_ =  wp_get_attachment_image_src(get_post_thumbnail_id(),'large');
    ?>

        <div class="item">
            <h1><?php the_title(); ?></h1>
            <?php the_post_thumbnail(); ?>
            <p><?php the_excerpt(); ?></p>
            <p><?php the_date(); ?></p>
            <a href="<?php the_permalink(); ?>" class="readmore">Read More</a>
        </div>


    <?php
    }
    // page navigation 
    wp_pagenavi();
    ?>

</div>

<!-- sidebar  -->
<?php get_sidebar();  ?>

<?php get_footer(); ?>