<?php
$events = get_next_events();
get_header(); ?>
<section id="events">
  <div class="container">
    <h2 class="section-title">Nos évènements</h2>
    <div class="cards-wrapper">

      <?php
      if ($events->have_posts()) {
        while ($events->have_posts()) {
          $events->the_post();
          include('_partials/_event_card.php');
        }
      }
      ?>
    </div>

  </div>
</section>
<?php get_footer(); ?>