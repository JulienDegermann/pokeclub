<?php

/**
 * Method for getting posts
 * @param int|null $limit - number of posts to get
 * @return WP_Query
 */
function get_last_posts(?int $limit = null): WP_Query
{
  $query =  new WP_Query(array(
    'post_status' => 'publish',
    'post_type' => 'post',
    'posts_per_page' => -1,
    'orderby' => 'date',
    'order' => 'DESC',
    'limit' => $limit ?? -1,
  ));
  return $query;
}
