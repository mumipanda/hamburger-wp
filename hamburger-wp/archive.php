<?php get_header(); ?>
  <main>
   <div class="p-main__img --archive">
      <h1 class="p-archive__title">Menu:</h1>
      <p> <?php single_term_title();?></p>
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
