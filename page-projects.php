<?php get_header(); ?>
<?php
$args = array( 
    'post_type' => 'portfolio',
    'post_status' => 'publish',
    'posts_per_page' => -1,
);

$the_query = new WP_Query( $args );
// The Loop
if ( $the_query->have_posts() ) : ?>
<div class="small-container">
    <h2>Latest Projects</h2>
    <div class="portfolio-item">

    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
    <div class="project-holder">
      <div><?php the_title(); ?></div>
        <div>
            <?php the_post_thumbnail(); ?>
            <img src="<?php the_field('mobile_image'); ?>">
        </div>
    </div>
    <?php endwhile; ?>
    </div>
</div>
    <?php endif;
    // Reset Post Data
    wp_reset_postdata();
    ?>
<?php get_footer(); ?>