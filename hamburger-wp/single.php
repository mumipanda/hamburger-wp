<?php get_header(); ?>
        <main>
          <div class="c-single__MainImg">
          <?php
if( have_posts() ) :
while( have_posts() ) :
the_post(); ?>
            <h1><?php the_title(); ?></h1>
          </div><!--c-single__MainImg"-->

            <?php the_content(); ?>

      <?php endwhile;
    else :
    endif;
    ?>
  </div>   
          <?php get_sidebar(); ?>    
</div><!--f-base-->
      <?php get_footer(); ?> 