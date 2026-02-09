<?php
get_header();
$google_link = get_google_maps_link(get_field('address'), get_field('city'));
$other_partners = get_other_partners();
?>
  <section id="partner">
    <div class="container">
      <h2 class="section-title"><?= the_field('name'); ?></h2>

      <div class="flex">

        <div>
          <h3 class="article-title">Informations utiles</h3>

          <p><?= get_field('address') && get_field('address') !== "" ? "Adresse : " .  esc_html(get_field('address')) : 'address'; ?></p>

          <p><?= get_field('city') && get_field('city') !== "" ? "Ville : " . esc_html(get_field('city')) : 'city'; ?></p>

          <? if (get_field('email') !== "") { ?>
            ✉️ : <a href="mailto:<?= get_field('email') ?>"><?= get_field('email') ?></a> <br>
          <?php } ?>

          <? if (get_field('phone') !== "") { ?>
            📞 : <a href="tel:<?= get_field('phone') ?>"><?= get_field('phone') ?></a> <br>
          <?php } ?>

          <a
            target="_blank"
            class="link"
            href="<?= $google_link ?>">Obtenir l'itinéraire</a>
        </div>


        <?php if (get_field('logo')) { ?>
          <img
            src="<?= esc_url(get_field('logo')['url']) ?>"
            alt="<?= esc_html(get_field('logo')['alt']) ?>"
            title="<?= esc_html(get_field('logo')['caption']) ?>">
        <?php } ?>
      </div>
    </div>
  </section>
  <section>
    <div class="container">
      <div class="flex">
        <?php
        while ($other_partners->have_posts()): $other_partners->the_post();
          include __DIR__ . '/_partials/_patner_card.php';
        endwhile;
        wp_reset_postdata();
        ?>
      </div>
    </div>
  </section>
<?php get_footer(); ?>