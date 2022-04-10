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
    // echo "<pre>";
    // print_r($Categories);
    // echo "</pre>";
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


    <!-- 
    <div class="col">
        <h3>ICON 1<h3>
                <h2>Soft Development</h2>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatem asperiores quidem eius,
                    beatae sequi error modi, eligendi temporibus, sint distinctio quae adipisci?
                </p>
                <a href="#">Know more</a>
    </div>

    <div class="col right">
        <h3>ICON 1<h3>
                <h2>App Development</h2>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatem asperiores quidem eius,beatae sequi error modi, eligendi temporibus, sint distinctio quae adipisci?
                </p>
                <a href="#">Know more</a>
    </div> -->
</section>


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