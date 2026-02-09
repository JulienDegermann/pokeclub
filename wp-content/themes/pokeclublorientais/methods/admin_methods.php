<?php

/**
 * Admin methods - action on admin init
 * @return void
 */
add_action('admin_init', function () {

  $types = ['post', 'partner', 'network'];
  foreach ($types as $type) {
    remove_post_type_support($type, 'editor');
    // remove_post_type_support($type, 'title');
  }
}, 1);

add_action('after_setup_theme', function () {
  add_theme_support('title-tag');
}, 1);


add_filter('use_block_editor_for_post_type', '__return_false', 10);
