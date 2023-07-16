<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hamburger</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+1:wght@400;700&family=Roboto:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css" />
    <link href="<?php echo esc_url( get_template_directory_uri()); ?>/style.css" rel="stylesheet">
    <?php if ( is_singular() ) wp_enqueue_script( "comment-reply" ); ?>
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
    <div class="f-base">
      <div class="f-base__main">
        <div class="c-bg"></div>
        <header>
          <nav >
            <button class="c-MenuButton">
               Menu 
            </button>
          </nav>
          <div class="l-header">
            <h1><a href="<?php echo esc_url( home_url() ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
            <?php get_search_form(); ?> 
          </div><!--l-header-->
        </header>