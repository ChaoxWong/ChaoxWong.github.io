<?php get_header(); ?>
<div class="py-5 text-white" style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, .75), rgba(0, 0, 0, .75)), url(https://static.pingendo.com/cover-bubble-dark.svg);  background-position: center center, center center;  background-size: cover, cover;  background-repeat: repeat, repeat;">
<div class="container">
<div class="row">
<?php if (have_posts()) :
 while (have_posts()) :
        the_post(); ?>
        <div class="col-lg-5 p-0">
        <img src=<?php the_post_thumbnail(); ?>>
        </div>
        <div class="p-5 col-lg-7 d-flex flex-column justify-content-center">
          <h2>The lovely valley</h2>
          <p>Teems with vapour around me, and the meridian sun strikes the upper surface of the impenetrable foliage of my trees, and but a few stray gleams steal into the inner sanctuary, I throw myself down among the tall grass by the trickling stream; and, as I lie close to the earth.</p>
        </div>
   <?php endwhile;
  endif; ?>
</div>
</div>
</div>

<div class="py-5">
  <div class="container">
  <?php
  if (have_posts()) :
   while (have_posts()) :
      the_post(); ?> 
         <h1><?php the_title(); ?></h1>
         <img src=<?php the_post_thumbnail(); ?>>
         <?php the_content();
   endwhile;
  endif; ?>
  </div>
  </div>
  <?php wp_footer(); ?>
<?php get_footer() ?>