<?php
get_header();
?>
<section id="partners">
  <div class="container">
    <h2 class="section-title">Nos partenaires</h2>
    <div class="cards-wrapper">
      <?php
      if (have_posts()) {
        while (have_posts()) : the_post();
          include('_partials/_partner_card.php');
        endwhile;
      }
      ?>
    </div>
  </div>
</section>
<?php get_footer(); ?>