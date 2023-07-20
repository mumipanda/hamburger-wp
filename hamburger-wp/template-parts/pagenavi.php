<div class="c-arrow__contain">
      <div class="p-PageNav">

      <?php include_once(ABSPATH . 'wp-admin/includes/plugin.php');
          if(is_plugin_active( 'wp-pagenavi/wp-pagenavi.php' )) {
          wp_pagenavi();
            } else {
              echo 'WP-PageNaviプラグインを有効化してください';
            } ?>
        <!--<?php wp_link_pages( $args ); ?>-->
      </div>  
    </div>