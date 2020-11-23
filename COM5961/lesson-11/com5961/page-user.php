<?php get_header(); ?>
<?php if (have_posts()) :
    while (have_posts()) :
    the_post(); 
        $featured_img_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
        <div class="py-5 text-white" style="background-image:url('<?php echo $featured_img_url; ?>');  background-position: top left;	background-size: 100%;	background-repeat: repeat-y" >
        <div class="container">
        <div class="row">
            <div class="p-5 col-lg-12 d-flex flex-column justify-content-center">
            <h3 class="display-4 mb-3" style="opacity:0;">The lovely valley</h3>
            <p class="lead mb-0" style="opacity:0;">Teems with vapour around me, and the meridian sun strikes the upper surface of the impenetrable foliage of my trees, and but a few stray gleams steal into the inner sanctuary, I throw myself down among the tall grass by the trickling stream; and, as I lie close to the earth.</p>
            </div>
        </div>
        </div>
        </div>
        <div class="post-preview">
            <div class="pt-5" style="">
            <div class="container">
            <h1 class="post-title"><?php the_title(); ?></h1><br>	    
            <?php the_content(); ?>  
            <p class="post-meta">Posted by
            <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a> on <?php the_date(); ?>					 	</div>
            </div><!-- end container -->
            </div><!-- end pt-5 -->
            <hr>
    <?php endwhile;
endif; ?>
<?php
get_sidebar();
get_footer(); 
?>
