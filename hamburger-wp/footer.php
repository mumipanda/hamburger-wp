		<footer>
			<div class="l-footer">
				<?php
								$args = array(
								'menu_class' => 'footer_nav',
								'container' => 'l-footer',
								);
							wp_nav_menu( array('theme_location' =>'footer_nav'));
				?>
				</div>
					<p class="l-footer__copylight">Copyright: RaiseTech</p>
		</footer>
		<?php wp_footer(); ?>
	</body>
</html>