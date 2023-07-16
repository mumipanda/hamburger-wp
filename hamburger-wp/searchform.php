<form class="c-search" method="get" action="<?php echo esc_url( home_url('/') ); ?>">
  <input class="c-search__input"  type="search" name="s" value="<?php the_search_query(); ?>" id="s">
  <button class="c-button">検索</button>
</form>