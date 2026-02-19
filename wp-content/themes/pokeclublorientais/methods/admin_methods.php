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


/**
 * Method for adding title tag
 *  @return void
 */
add_action('after_setup_theme', function () {
  add_theme_support('title-tag');
}, 1);


add_filter('use_block_editor_for_post_type', '__return_false', 10);



/**
 * Method for getting company's datas
 * @return array
 */
function get_company_datas()
{
  $page = get_page_by_path('presentation');

  $company = [
    'name' => get_field('company_name', $page->ID),
    'email' => get_field('company_email', $page->ID),
    'phone' => get_field('company_phone', $page->ID),
  ];

  return $company;
}
