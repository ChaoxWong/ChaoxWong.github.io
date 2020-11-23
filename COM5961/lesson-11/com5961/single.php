<?php get_header(); ?>
<?php if (have_posts()) :
 while (have_posts()) :
        the_post(); 
        $featured_img_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
        <div style="background-image:url('<?php echo $featured_img_url; ?>');  background-position: top left;	background-size: 100%;	background-repeat: repeat-y" >
   <?php endwhile;
  endif; ?>
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
         <h1><?php the_title(); ?></h1>
         <img src="<?php the_post_thumbnail(); ?>">;
         <?php the_content();
   endwhile;
  endif; ?>
  <a href="javascript:history.go(-1)">lReturn to previous page.</a>
  </div>
  </div>
  <?php wp_footer(); ?>
<?php get_footer() ?>