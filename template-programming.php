<?php
$root = get_template_directory_uri();
// Template Name: Programming
get_header();
?>
<link rel="stylesheet" href="<?php echo $root; ?>/css/t-programming.css">
<div class="section">
    <div class="search">
        <div class="page_title">
            <?php
            $pageNo = get_query_var('paged') ? get_query_var('paged'): 1 ;  // for pagination 
            $searchData = "";
            if (isset($_GET["search"]) && $_GET["search"] != "") {
                $searchData = $_GET["search"];
                echo '<p><strong>Search for : '.$searchData.'</strong></p>';
            } else {
            ?>
                <p><a href="<?php echo site_url(); ?>">Home</a> / <?php the_title(); ?></p>

            <?php } ?>
        </div>
        <form action="" method="get">
            <input type="search" name="search" id="search" placeholder="Search ">
            <input type="submit" value="Search">
        </form>
    </div>

    <div class="posts">
        <?php
        $wp_args = array(
            'post_type' => 'programming',
            'post_status' => 'publish',
            's' => $searchData,
            'posts_per_page'=>1,
            'paged'=>$pageNo
        );

        $wp_query = new WP_Query($wp_args);

        while ($wp_query->have_posts()) {
            $wp_query->the_post();
            echo "<pre>";
            // print_r($wp_query);
            echo "</pre>";

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
        ?>
    </div>

    <div class="pagination">
        <?php 
        wp_pagenavi(array('query'=>$wp_query));
        ?>
    </div>
</div>

<?php
get_footer();
?>