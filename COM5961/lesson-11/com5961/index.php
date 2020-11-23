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
  //get the current page
  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

  //pagination fixes prior to loop
  $temp =  $query;
  $query = null;

  //custom loop using WP_Query
  $query = new WP_Query( array( 
    'post_status' => 'publish',
    'orderby' => 'date',
    'order' => 'ASC' 
  ) ); 

 //set our query's pagination to $paged
 $query -> query('post_type=post&posts_per_page=6'.'&paged='.$paged);
 $col_counter = 1;
 if ( $query->have_posts() ) : 
   while ( $query->have_posts() ) : 
      $query->the_post();
      if ($col_counter == 1) { ?>
          <div class="row">
          <div class="col-md-4">
          <div class="thumbnail">
          <li style="list-style-type: none;">
              <?php /* if ( has_post_thumbnail()) : ?>
                <?php  the_post_thumbnail();?>
              <?php  endif; */ ?>
              <div class="pt-5" style="">
              <div class="container">
              <a style="text-decoration:none !important;" href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>   
              <p class="post-meta">Posted by
              <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a> on <?php the_date(); ?>
              <?php the_excerpt();?> <!-- the_content(); -->
              </div><!-- end container -->
              </div><!-- end pt-5 -->  
          </li>
          </div><!--end thumbnail -->
        </div> <!-- end column -->  
      <?php } elseif ($col_counter < 4) { ?>
          <div class="col-md-4">
          <div class="thumbnail">
          <li style="list-style-type: none;">
              <?php /* if ( has_post_thumbnail()) : ?>
                <?php  the_post_thumbnail();?>
              <?php  endif; */ ?>
              <div class="pt-5" style="">
              <div class="container">
              <a style="text-decoration:none !important;" href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>   
              <p class="post-meta">Posted by
              <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a> on <?php the_date(); ?>
              <?php the_excerpt();?> <!-- the_content(); -->
              </div><!-- end container -->
              </div><!-- end pt-5 -->  
          </li>
          </div><!--end thumbnail -->
        </div> <!-- end column -->
      <?php }
      if ($col_counter == 3) { ?>
          </div><!--end row--><?php 
          $col_counter = 1;
       } else {
          $col_counter = $col_counter + 1; 
       }
  endwhile; ?>
  </div><!-- end container -->
  <div class="container">
      <?php //pass in the max_num_pages, which is total pages ?>
      <div class="pagenav">
        <div class="alignleft"><?php previous_posts_link('Previous', $query->max_num_pages) ?></div>
        <div class="alignright"><?php next_posts_link('Next', $query->max_num_pages) ?></div>
        <?php // wp_pagenavi(); ?>
      </div>
  </div><!-- end container -->       
  <br><br>
<?php endif; ?>
<?php /*
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
   */ ?>
  </div>
<?php wp_footer(); ?>
<?php get_footer() ?>
