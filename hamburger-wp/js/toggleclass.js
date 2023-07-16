'use strict'

jQuery(".c-MenuButton").click(function ($) {
  jQuery(this).toggleClass('is-active');
  jQuery(".c-sidebar").toggleClass('is-active');
  jQuery(".l-sidebar").toggleClass('is-active');
  jQuery(".c-bg").toggleClass('is-active');
  jQuery("body").toggleClass('is-active');
});

jQuery(".c-CloseButton").click(function ($) {
  jQuery(".c-MenuButton").removeClass('is-active');
  jQuery(".c-sidebar").removeClass('is-active');
  jQuery(".l-sidebar").removeClass('is-active');
  jQuery(".c-bg").removeClass('is-active');
  jQuery("body").removeClass('is-active');
});