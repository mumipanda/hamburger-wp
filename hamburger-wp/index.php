<?php
/*
Template Name: トップページ
*/
?>

<?php get_header(); ?>
<main>
  <div class="p-main__img">
    <h1 class="p-index__title"><?php bloginfo( 'description' ); ?></h1>
  </div><!--p-main__img-->
  <div class="l-main__content">
    <section  class="p-main__content">
      <a href="http://hamburger.local/tag/take_out/">
        <h4>Take OUT</h4>
        <?php
          $args = [
            'post_type' => 'take_out', 
            'posts_per_page' => 2, // 表示する数
          ];
          $my_query = new WP_Query($args)
        ; ?>
      <div class="p-main__wrapper">       
        <?php if ($my_query->have_posts()): ?>
        <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>

          <div class="p-main__content-item">
            <h5><?php the_title() ;?></h5>
            <p><?php the_content();?></p>
          </div><!--p-main__content-item-->
          <?php endwhile; ?>
          <?php else: // 投稿がない場合?>
          <div class="p-main__content-item">
            <p>Custom Post Type UIプラグインを有効にして本文を投稿してください</p>
          </div><!--p-main__content-item-->
          <?php endif; wp_reset_postdata(); ?>
        </div><!--p-main__wrapper-->
       </a>
    </section> 
    <section class="p-main__content --eatin">
      <a href="http://hamburger.local/tag/eat_in/">
        <h4>Eat In</h4>
        <div class="p-main__wrapper">
          <?php
          $args = [
            'post_type' => 'eat_in', 
            'posts_per_page' => 2, // 表示する数
          ];
          $my_query = new WP_Query($args)
          ; ?>        
          <?php if ($my_query->have_posts()): ?>
          <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
          <div class="p-main__content-item">
            <h5><?php the_title() ;?></h5>
            <p><?php the_content();?></p>
          </div><!--p-main__content-item-->
          <?php endwhile; ?>
          <?php else: // 投稿がない場合?>
          <div class="p-main__content-item">
            <p>Custom Post Type UIプラグインを有効にして本文を投稿してください</p>
          </div><!--p-main__content-item-->
          <?php endif; wp_reset_postdata(); ?>
        </div><!--p-main__wrapper-->
      </a>
    </section>
  </div><!--l-main__content-->
  <aside class="p-main__aside">
    <div class="c-bg__black"></div>
    <?php
  $page_id = get_page_by_path('toppage'); 
  $page = get_post( $page_id );
    echo $page -> post_content; 
?>
  </aside>
</main>
</div><!--f-base__main-->
<?php get_sidebar(); ?>
</div><!--f-base-->
<?php get_footer(); ?> 