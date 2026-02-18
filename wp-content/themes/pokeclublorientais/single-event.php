<?php
get_header();
$events = get_other_events(4);
$google_link = get_google_maps_link(get_field('place'), get_field('city'));
$img = get_event_picture(get_field('type'));
$partners = get_partners();
?>
<section id="event">
  <div class="container">
    <h2 class="section-title"><?= the_title() ?></h2>

    <div class="flex">

      <img
        src="<?= esc_url($img) ?>"
        alt="image <?= the_title(); ?>"
        title="<?= the_title(); ?>">
      <div class="content">
        <h3 class="article-title">Informations utiles</h3>
        <p>
          <span class="date">📆 : <?= date_i18n('d F Y, H:i', strtotime(get_field('datetime')));  ?></span> <br>
          <?= get_field('place') && get_field('place') !== "" ? "📍 : " .  esc_html(get_field('place')) : 'address'; ?> <br>
          <a
            target="_blank"
            class="link"
            href="<?= $google_link ?>">Obtenir l'itinéraire</a>
        </p>
        <?php
        if (get_field('description') && get_field('description') !== "") { ?>
          <h4 class="article-title">Détails</h4>
          <p>
            <?= get_field('description'); ?>
          </p>
        <?php } ?>
      </div>


    </div>
  </div>
</section>

<section>
  <div class="container">
    <?php include_once __DIR__ . "/_partials/_more_events.php"; ?>
  </div>
</section>
<section>
  <div class="container">
    <?php include_once __DIR__ . "/_partials/_more_partners.php"; ?>
  </div>
</section>






<?php get_footer(); ?>