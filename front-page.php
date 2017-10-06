<?php get_header(); ?>

<main>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="small-container">
  <article class="home-page">
    <section class="home-page__profile-card">
      <div class="profile-card">
        <div class="profile-card__portrait" title="I'm a web developer, primarily working with WordPress and React, living in St. Louis, MO.">
          <img src="/wp-content/themes/lz/img/lz.jpg" alt="Lauren Zandstra - Web Developer" />
        </div>
        <div class="profile-card__details">
          <h1 class="profile-card__title"><?php the_title(); ?></h1>
          <h2 class="profile-card__subtitle">Web Developer</h2>
        </div>
      </div>

    </section>

    <section class="home-page__about">
     <?php the_content(); ?>
    </section>

    <ul class="icons-list">
  <li class="icons-list__item">
    <a href="mailto:laurenezandstra@gmail.com" rel="nofollow" target="_blank" title="Send me an email">
      <i class="fa fa-envelope" aria-hidden="true"></i>
      Email
    </a>
  </li>
  <li class="icons-list__item">
    <a href="https://github.com/elz1/" rel="nofollow" target="_blank"  title="Look through my Github profile">
      <i class="fa fa-github" aria-hidden="true"></i>
      Github
    </a>
  </li>
  <li class="icons-list__item">
    <a href="https://twitter.com/laurenzandstra/" rel="nofollow" target="_blank" title="Tweet me!">
      <i class="fa fa-twitter" aria-hidden="true"></i>
      Twitter
    </a>
  </li>
  <li class="icons-list__item">
    <a href="https://www.linkedin.com/in/laurenzandstra/" rel="nofollow" target="_blank"  title="See my LinkedIn profile">
      <i class="fa fa-linkedin" aria-hidden="true"></i>
      LinkedIn
    </a>
  </li>
  <li class="icons-list__item">
    <a href="https://bitbucket.org/laurenzandstra/" rel="nofollow" target="_blank" title="Visit my Bitbucket profile">
      <i class="fa fa-bitbucket" aria-hidden="true"></i>
      BitBucket
    </a>
  </li>
  <li class="icons-list__item">
    <a href="https://codepen.io/elz1/" rel="nofollow" target="_blank" title="Visit my Codepen profile">
      <i class="fa fa-codepen" aria-hidden="true"></i>
      Codepen
    </a>
  </li>
</ul>

  </article>

</div>

<?php endwhile; else : ?>
  <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
</main>
<?php get_footer(); ?>