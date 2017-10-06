  <?php get_header(); ?>

<main class="small-container">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <h1><?php the_title() ?></h1>
  <div class="identities">
    <div id="ssh"><code><pre><?php the_content(); ?></pre></code></div>
    <div class="actions">
      <div class="copy" id="copy">
        <i class="fa fa-clone" aria-hidden="true"></i>
      </div>
      <a class="save" href="id_rsa.pub">
        <i class="fa fa-download" aria-hidden="true"></i>
      </a>
    </div>
  </div>
  <div class="isa_success">
     <i class="fa fa-check"></i>
     SSH key copied to clipboard.
    </div>
<?php endwhile; else : ?>
  <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
</main>

<?php get_footer(); ?>


