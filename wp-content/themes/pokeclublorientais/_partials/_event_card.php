<?php
$picture = get_event_picture(get_field('type'));
?>

<a class="article-card event <?= esc_html(get_field('type')); ?>"
  href="<?= esc_url(get_permalink()) ?>">
  <img
    src="<?= $picture; ?>"
    alt="<?= esc_html(get_field('article_image')['alt']) ?>"
    title="<?= esc_html(get_field('article_image')['caption']) ?>">
  <h3 class="article-card-title">
    <span class="date">📆 <?= date_i18n('d F Y, H:i', strtotime(get_field('datetime')));  ?></span> <br>
    <?= esc_html(the_title()); ?> <br>

  </h3>
</a>