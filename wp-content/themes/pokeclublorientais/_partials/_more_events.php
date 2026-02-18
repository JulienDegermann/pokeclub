<h3 class="article-title">Nos évènements</h3>
<div class="cards-wrapper">
  <?php
  while ($events->have_posts()): $events->the_post();
    include __DIR__ . '/_event_card.php';
  endwhile;
  wp_reset_postdata();
  ?>
</div>