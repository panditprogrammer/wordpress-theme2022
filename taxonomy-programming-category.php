<!-- this page will show programming category post  -->
<?php
$root = get_template_directory_uri();

get_header();
$singleCategory = get_queried_object(); //get all category details when click on
?>

<!-- get all the posts related category  -->
<link rel="stylesheet" href="<?php echo $root; ?>/css/custom-post.css">
<!-- get all custom programming post category wise  -->
<div class="programming">
    <h1>Category:<?php echo $singleCategory->name; ?></h1>
    <div class="post_container">
        <?php
        $args = array(
            'post_type' => 'programming',
            'post_status' => 'publish',
            'tax_query' => array(
                array(
                    "taxonomy" => "programming-category",
                    "field" => "term_id",
                    "terms" => $singleCategory->term_id
                ),
            )
        );

        $wp_query_post = new WP_Query($args);

        while ($wp_query_post->have_posts()) {
            $wp_query_post->the_post();
        ?>
            <div class="post">
                <h2><?php the_title(); ?></h2>
                <?php the_post_thumbnail(); ?>
                <p><?php the_excerpt(); ?></p>
                <p><?php the_date(); ?></p>
                <a href="<?php the_permalink(); ?>" class="readmore">Read More</a>
            </div>
        <?php
        } ?>
    </div>
</div>

<?php get_footer(); ?>