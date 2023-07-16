<div class="c-sidebar">
  <nav class="l-sidebar">
		<h2>Menu</h2>
    <button class="c-CloseButton">閉じるボタン</button>
    <?php
		  $args = array(
			'menu_class' => 'menu',
			'container' => 'l-sidebar',
		   );
      wp_nav_menu( array('theme_location' =>'category_nav'));
		?>
	</nav>        
</div><!--c-sidebar-->