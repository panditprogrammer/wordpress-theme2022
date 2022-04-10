<?php
$root = get_template_directory_uri();

// Template Name: Home 
get_header();
?>


<div class="mainbanner">
    <img src="<?php echo $root; ?>/images/fingerprint-2904774_1920.jpg" alt="mainbanner">
</div>
<section class="services">
    <h1>Blogs </h1>

    <?php

    $Categories = get_categories(array("taxonomy" => "category"));

    foreach ($Categories as $cate_value) {
    ?>

        <div class="col">
            <h3>ICON 1<h3>
                    <h2><?php echo $cate_value->name; ?></h2>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatem asperiores quidem eius,
                        beatae sequi error modi, eligendi temporibus, sint distinctio quae adipisci?
                    </p>
                    <?php echo '<a href="' . get_category_link($cate_value->term_id) . '">' . $cate_value->name . '</a>'; ?>
        </div>

    <?php
    }
    ?>
</section>
<link rel="stylesheet" href="<?php echo $root; ?>/custom-post.css">
<!-- get all custom programming post type  -->
<div class="programming">
    <?php
    $args = array(
        'post_type' => 'programming',
        'post_status' => 'publish'
    );
    $loop = new WP_Query($args);

    while ($loop->have_posts()) {
        $loop->the_post();
    ?>
        <div class="post">
            <h1><?php the_title(); ?></h1>
            <?php the_post_thumbnail(); ?>
            <p><?php the_excerpt(); ?></p>
            <p><?php the_date(); ?></p>
            <a href="<?php the_permalink(); ?>" class="readmore">Read More</a>
        </div>
    <?php
    } ?>
</div>

<div class="cussection">
    <div class="customeritems">
        <h1>our customers</h1>
        <img src="<?php echo $root; ?>/images/customers.jpeg" alt="customerimgages">
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Autem atque sequi iure ad doloremque minus vel
            officia quibusdam veniam voluptatum, corrupti nemo asperiores, hic, commodi quam incidunt quisquam
            cupiditate corporis.
        </p>
        <a href="#">Explore more</a>
    </div>
</div>



<?php
get_footer();
?>