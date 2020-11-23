<?php get_header(); ?>
<div class="py-0 bg-dark">
    <div class="container">
      <div class="row" style="margin-left:-175px !important; margin-right:-175px !important;">
        <div class="col-md-12">
          <div class="carousel slide bg-dark" data-ride="carousel" id="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active"> <img class="d-block img-fluid w-100 bg-dark" src="<?php bloginfo('template_url') ?>/assets/books-1163695_1280.jpg" style="max-height:550px;overflow:hidden;width:auto;">
                <div class="carousel-caption">
                  <h5 class="m-0">Carousel</h5>
                  <p>with controls</p>
                </div>
              </div>
              <div class="carousel-item"> <img class="d-block img-fluid w-100" src="<?php bloginfo('template_url') ?>/assets/library-1147815_1280.jpg" style="max-height:550px;overflow:hidden;width:auto;">
                <div class="carousel-caption">
                  <h5 class="m-0">Carousel</h5>
                  <p>with controls</p>
                </div>
              </div>
              <div class="carousel-item"> <img class="d-block img-fluid w-100" src="<?php bloginfo('template_url') ?>/assets/library-488690_1280.jpg" style="max-height:550px;overflow:hidden;width:auto;">
                <div class="carousel-caption">
                  <h5 class="m-0">Carousel</h5>
                  <p>with controls</p>
                </div>
              </div>
            </div> <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev"> <span class="carousel-control-prev-icon"></span> <span class="sr-only">Previous</span> </a> <a class="carousel-control-next" href="#carousel" role="button" data-slide="next"> <span class="carousel-control-next-icon"></span> <span class="sr-only">Next</span> </a>
          </div>
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
         <img src=<?php the_post_thumbnail(); ?>>
         <?php the_content();
   endwhile;
  endif; ?>
   <a href="javascript:history.go(-1)">Return to previous page.</a>
  </div>
  </div>
  <?php wp_footer(); ?>
<?php get_footer() ?>