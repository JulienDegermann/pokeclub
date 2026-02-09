<?php
get_header(); ?>
  <section id="partners">
    <div class="container">
      <h2 class="section-title">Nos partenaires</h2>
      <div class="flex">


        <?php
        if (have_posts()) {
          while (have_posts()) {
            the_post();
            include('_partials/_patner_card.php');
          }
        }
        ?>
      </div>
    </div>
  </section>
<?php get_footer(); ?>