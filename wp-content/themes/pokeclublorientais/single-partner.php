<?php
get_header();
$google_link = get_google_maps_link(get_field('address'), get_field('city'));
$partners = get_other_partners();
$events = get_next_events(3);
?>
<section id="partner">
  <div class="container">
    <h2 class="section-title"><?= the_field('name'); ?></h2>

    <div class="flex">
      <?php if (get_field('logo')) { ?>
        <img
          src="<?= esc_url(get_field('logo')['url']) ?>"
          alt="<?= esc_html(get_field('logo')['alt']) ?>"
          title="<?= esc_html(get_field('logo')['caption']) ?>">
      <?php } ?>
      <div>
        <h3 class="article-title">Informations utiles</h3>
        <? if (get_field('email') !== "") { ?>
          <p>

            ✉️ : <a href="mailto:<?= get_field('email') ?>"><?= get_field('email') ?></a> <br>
          </p>
        <?php } ?>
        <? if (get_field('website') !== "") { ?>
          <p>

            🌐 : <a target="_blank" href="<?= get_field('website') ?>">Site web</a> <br>
          </p>
        <?php } ?>

        <? if (get_field('phone') !== "") { ?>
          <p>

            📞 : <a href="tel:<?= get_field('phone') ?>"><?= get_field('phone') ?></a> <br>
          </p>
        <?php } ?>

        <?php
        if (get_field('address') && get_field('address') !== "") { ?>
          <p>
            <?= get_field('address') && get_field('address') !== "" ? "Adresse : " .  esc_html(get_field('address')) : ''; ?>
            <br>
            <a
              target="_blank"
              class="link"
              href="<?= $google_link ?>">Obtenir l'itinéraire</a>
          </p>
        <?php  } ?>

      </div>
    </div>
  </div>
</section>

<section>
  <div class="container">
    <?php include_once __DIR__ . "/_partials/_more_partners.php"; ?>
  </div>
</section>

<section class="more-datas">
  <div class="container">

    <?php include_once __DIR__ . "/_partials/_more_events.php"; ?>

</section>
<?php get_footer(); ?>