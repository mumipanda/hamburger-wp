<?php
  if(have_posts()) :
    while(have_posts()) :
      the_post(); 
?>
<a href="<?php the_permalink(); ?>">
    <div class="p-arcive__flex" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <?php the_post_thumbnail( 'large',['class' => 'p-arcive__img'] ); ?>
      <div class="p-arcive__content">
        <h3 class="p-arcive__main"><?php the_title(); ?></h3>
        <h4>
        <?php include_once(ABSPATH . 'wp-admin/includes/plugin.php');
          if(is_plugin_active( 'advanced-custom-fields/acf.php' )) {
               the_field('title');
            } else {
              echo 'acfプラグインを有効化してください';
            } ?>
        </h4>
        <p class="p-arcive__p">
        <?php include_once(ABSPATH . 'wp-admin/includes/plugin.php');
          if(is_plugin_active( 'advanced-custom-fields/acf.php' )) {
          the_field('text');
        } else {
          echo 'acfプラグインを有効化してください';
        } ?>
        </p>
        <p class="c-DetailButton">詳しく見る</p>
      </div><!--p-arcive__content-->      
    </div> <!--p-arcive__flex-->
  </a>      
  <?php endwhile; ?>
       <?php else: ?>
        <p class="p-archive__text">表示する記事がありません</p>
        <?php endif; 
      ?>