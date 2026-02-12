<?php

/**
 * Method for getting next events
 * @param int|null $limit - number of events to get
 * @return WP_Query
 */
function get_next_events(?int $limit = null): WP_Query
{
  $query =  new WP_Query(array(
    'post_status' => 'publish',
    'post_type' => 'event',
    'orderby' => 'meta_value',
    'meta_key' => 'datetime',
    'order' => 'ASC',
    'posts_per_page' => $limit ?? -1,
    'meta_query' => [
      [
        'key' => 'datetime',
        'value' => current_time('Y-m-d H:i:s'),
        'compare' => '>=',
        'type' => 'DATETIME'
      ]
    ]
  ));
  return $query;
}




/**
 * Method for getting other events
 * @param ?int $limit - limit of events to get
 * @return WP_Query
 */
function get_other_events(?int $limit = null): WP_Query
{
  $query =  new WP_Query(array(
    'post_type' => 'event',
    'posts_per_page' => -1,
    'orderby' => 'date',
    'order' => 'DESC',
    'limit' => $limit ?? -1,
    'post__not_in' => [get_the_id()],
    'orderby' => 'meta_value',
    'meta_key' => 'datetime',
    'order' => 'ASC',
    'posts_per_page' => $limit ?? -1,
    'meta_query' => [
      [
        'key' => 'datetime',
        'value' => current_time('Y-m-d H:i:s'),
        'compare' => '>=',
        'type' => 'DATETIME'
      ]
    ]
  ));
  return $query;
}


/**
 * Method for getting event picture based on event type
 * @param string $eventType - type of the event
 * @return string - URL of the picture
 */
function get_event_picture(string $eventType)
{
  switch ($eventType) {
    case 'tournament':
      return '/wp-content/themes/pokeclublorientais/assets/images/trade.jpg';
    case 'init':
      return 'https://gamewave.fr/static/images/medias/upload/Vanden/Pok%C3%A9mon/Acad%C3%A9mie%20de%20combat/DSC02540.webp';
    case 'trade':
      return 'https://pokuniverse.com/wp-content/uploads/2021/05/Pokemon-Trading-Cards-Guide.png';
    case 'league':
      return 'https://www.chez-donovan.com/web/image/10038-665cf2bc/chez-donovan-pokemon-ligue-de-cocagne-tarn-lavaur-defi-de-ligue-league-challenge.jpg';
    case 'cup':
      return 'https://events.goodgames.com.au/wp-content/uploads/2023/09/Corporate-Site-Event-Banner-Pokemon-League-Cup.jpg';
    default:
      return 'https://www.pokemon.com/static-assets/content-assets/cms2/img/pokedex/full/150.png';
  }
}
