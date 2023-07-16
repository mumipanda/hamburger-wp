<?php get_header(); ?>
  <main>
    <div class="p-main__img --archive">
      <h1 class="p-archive__title">Menu:</h1>
      <?php if( is_category() ) : ?>
      <p><?php the_category();?></p>
      <?php elseif(is_tag('take_out')) :?>
        <a><?php echo 'take out' ;?></a>
        <?php elseif(is_tag('eat_in')) :?>
          <a><?php echo 'eat in' ;?></a> 
      <?php else: ?>

      <?php endif; ?>
    </div><!--p-main__img-->
    <div>
      <h2 class="p-archive">小見出しが入ります</h2>
      <p class="p-archive__text">
          テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
      </p>
    </div>
    <?php get_template_part('template-parts/menu-introduction'); ?>
    <?php get_template_part('template-parts/pagenavi'); ?>
  </main>
  </div><!--f-base__main-->
  <?php get_sidebar(); ?>
</div><!--f-base-->

<?php get_footer(); ?> 
