<?php get_header(); ?>
  <div style="background-image: url(<?php bloginfo('template_url') ?>/img/halacious-tZc3vjPCk-Q-unsplash.jpg);	background-position: right bottom;	background-size: cover;	background-repeat: repeat;">
    <div class="container">
      <div class="row">
        <div class="p-4 bg-white ml-auto col-md-5 border" style="margin:40px 0 40px 0;">
          <h1>O my friend</h1>
          <p class="mb-3">Would I could describe these conceptions, could impress upon paper all that is living so full and warm within me, that it might be the mirror of my soul, as my soul is the mirror of the infinite.</p> <a class="btn btn-primary" href="#">Take me there</a>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5">
  <div class="container">
  <?php
  if (have_posts()) :
   while (have_posts()) :
      the_post(); ?>
         <a class="hlink" href="<?php the_permalink(); ?>"><h1><?php the_title(); ?></h1></a>
         <?php the_content();
   endwhile;
  endif; ?>
  </div>
  </div>
  <?php wp_footer(); ?>
<?php get_footer() ?>