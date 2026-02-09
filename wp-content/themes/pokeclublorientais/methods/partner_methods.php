<?php

/**
 * Method for getting all partners
 * @param int|null $limit - number of partners to get
 * @return WP_Query
 */
function get_partners(?int $limit = null): WP_Query
{
    $query =  new WP_Query(array(
        'post_type' => 'partner',
        'posts_per_page' => -1,
        'orderby' => 'date',
        'order' => 'DESC',
        'limit' => $limit ?? -1
    ));
    return $query;
}



/**
 * Method for getting all partners
 * @return WP_Query
 */
function get_other_partners(): WP_Query
{
    $query =  new WP_Query(array(
        'post_type' => 'partner',
        'posts_per_page' => -1,
        'orderby' => 'date',
        'order' => 'DESC',
        'limit' => $limit ?? -1,
        'post__not_in' => [get_the_id()]
    ));
    return $query;
}




/**
 * Method for getting Google Maps link from partner's address and city
 * @param string $address - partner's address and city
 * @return string - Google Maps link
 */
function get_google_maps_link(string $address, ?string $city = ""): string
{
    $formatted_address = str_replace(' ', '+', $address . ($city ? ' ' . $city : ''));
    return "https://google.com/maps/place/" . $formatted_address;
}
