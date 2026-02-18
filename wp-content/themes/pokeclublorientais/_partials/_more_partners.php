<h3 class="article-title">Nos partenaires</h3>
<div class="cards-wrapper">
  <?php
  while ($partners->have_posts()): $partners->the_post();
    include __DIR__ . '/_partner_card.php';
  endwhile;
  wp_reset_postdata();
  ?>
</div>