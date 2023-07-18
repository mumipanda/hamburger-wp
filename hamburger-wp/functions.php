<?php
    add_theme_support('post-thumbnails');
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'custom-background' );
    add_theme_support( "wp-block-styles" );
    add_action('after_setup_theme','my_editor_suport');
    function my_editor_suport(){
      add_theme_support( 'editor-styles' );
      add_editor_style('style.css');
    }
    add_theme_support( "html5", array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );
    remove_filter('the_content', 'wpautop');
    register_nav_menus( array(
      'footer_nav' => esc_html__( 'footer navigation', 'menu' ),
      'category_nav' => esc_html__( 'category navigation', 'menu' ),
    ) );
    add_theme_support( 'title-tag' );
    function load_scripts(){ 
      wp_enqueue_script(
      'toggleclass.js', 
      get_theme_file_uri('js/toggleclass.js'), 
      array( 'jquery' ), 
      '',
      true 
    );
    wp_enqueue_script(
    'toggleclass-close.js',
    get_theme_file_uri('js/toggleclass-close.js') ,
    array( 'jquery' ), 
    '',
    true
  );
  }
  add_action( 'init', function()  {
    register_block_pattern(
        'my-plugin/my-awesome-pattern',
        array(
          'title'       => __( 'menu detail', 'my-plugin' ),
          'content'  => "
          <div class=\"c-headline\">
            <h2>見出しh2</h2>
            <p>
              Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。Pタグテキスト。
            </p>
            <h3>見出しh3</h3>
            <h4>見出しh4</h4>
            <h5>見出しh5</h5>
            <h6>見出しh6</h6>
          </div>
          <div class=\"p-blockquote\">
            <blockquote>
              <p>
                Blockquote 引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ
              </p>
            </blockquote>
            <p>出典元： <cite><a>○○○○○○○○○○○○</cite></a></p>
          </div>
          <img class=\"p-single__MainImg\" src=\"/wp-content/themes/hamburger-wp/img/cooked-foods-750073.png\">
          <div class=\"p-single__flex\">
            <img class=\"p-single__img\" src=\"/wp-content/themes/hamburger-wp/img/cooked-foods-750073.png\">
            <p class=\"p-single__notremove\">
            テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります
            </p>
          </div>
          <div class=\"p-single__flex\">
            <p class=\"p-single__notremove\">
              テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります
            </p>
            <img class=\"p-single__img\" src=\"/wp-content/themes/hamburger-wp/img/cooked-foods-750073.png\">
          </div>
          <img class=\"p-ImgList\" src=\"/wp-content/themes/hamburger-wp/img/cooked-foods-750073.png\">
          <div class=\"p-single__grid\">
            <img class=\"p-ImgItem\" src=\"/wp-content/themes/hamburger-wp/img/cooked-foods-750073.png\">
            <img class=\"p-ImgItem\" src=\"/wp-content/themes/hamburger-wp/img/cooked-foods-750073.png\">
            <img class=\"p-ImgItem\" src=\"/wp-content/themes/hamburger-wp/img/cooked-foods-750073.png\">
            <img class=\"p-ImgItem\" src=\"/wp-content/themes/hamburger-wp/img/cooked-foods-750073.png\">
            <img class=\"p-ImgItem\" src=\"/wp-content/themes/hamburger-wp/img/cooked-foods-750073.png\">
            <img class=\"p-ImgItem\" src=\"/wp-content/themes/hamburger-wp/img/cooked-foods-750073.png\">
            <img class=\"p-ImgItem\" src=\"/wp-content/themes/hamburger-wp/img/cooked-foods-750073.png\">
            <img class=\"p-ImgItem\" src=\"/wp-content/themes/hamburger-wp/img/cooked-foods-750073.png\">
            <img class=\"p-ImgItem\" src=\"/wp-content/themes/hamburger-wp/img/cooked-foods-750073.png\">
          </div>
          <ol class=\"p-list\">
            <li>リストリストリスト</li>
            <li>リストリストリスト</li>
          </ol>
          <ol class=\"p-list__item\">
            <li>リスト2リスト2リスト2</li>
            <li>リスト2リスト2リスト2</li>
          </ol>
          <ol class=\"p-list\">
            <li>リストリストリスト</li>
            <li>リストリストリスト</li>
          </ol>
          <div class=\"p-ListStyle\">
            <ul class=\"p-list\">
              <li>リストリストリスト</li>
              <li>リストリストリスト</li>
            </ul>
            <ul class=\"p-list__item\">
              <li>リスト2リスト2リスト2</li>
              <li>リスト2リスト2リスト2</li>
            </ul>
            <ul class=\"p-list\">
              <li>リストリストリスト</li>
              <li>リストリストリスト</li>
            </ul>
          </div>
          <div class=\"p-code\">
            <p>&lt;html&gt;</p>
            <p class=\"p-code__item\">&lt;head&gt;</p>
            <p class=\"p-code__item\">&lt;/head&gt;</p>
            <p class=\"p-code__item\">&lt;body&gt;</p>
            <p class=\"p-code__item\">&lt;/body&gt;</p>
            <p>&lt;/html&gt;</p>
          </div>
          <table  class=\"p-table\" border=\"1\" style=\"border-collapse: collapse\" width=\"90%\">
            <tr>
              <td width=\"40%\">テーブル</td>
              <td width=\"60%\">テーブル</td>
            </tr>
            <tr>
              <td width=\"40%\">テーブル</td>
              <td width=\"60%\">テーブル</td>
            </tr>
            <tr>
              <td width=\"40%\">テーブル</td>
              <td width=\"60%\">テーブル</td>
            </tr>
            <tr>
              <td width=\"40%\">テーブル</td>
              <td width=\"60%\">テーブル</td>
            </tr>
            <tr>
              <td width=\"40%\">テーブル</td>
              <td width=\"60%\">テーブル</td>
            </tr>
          </table>
          <button class=\"c-button p-single__button\">ボタン</button>
          <p class=\"c-bold\"><strong>boldboldboldboldboldboldbold</strong></p>
          ",
'categories' => array( 'my-cat' ), 
      )
  );
});
  add_action( 'wp_enqueue_scripts', 'load_scripts' );
?>