jQuery(window).resize(function($) {
  if(window.matchMedia('(min-width: 1250px)').matches) {
    jQuery('.c-MenuButton').removeClass('is-active');
    jQuery('.c-sidebar').removeClass('is-active');
    jQuery('.l-sidebar').removeClass('is-active');
    jQuery('.c-bg').removeClass('is-active');
  }else {
  };
  });