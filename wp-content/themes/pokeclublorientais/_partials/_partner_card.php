<?php
$image_id = get_field('logo')['ID'];
var_dump(wp_get_attachment_image($image_id, "small"));
var_dump(wp_get_attachment_image($image_id, "medium"));
var_dump(wp_get_attachment_image($image_id, "large"));
var_dump(wp_get_attachment_image($image_id, "thumbnail")); ?>

<a class="article-card partner"
  href="<?= esc_url(get_permalink()) ?>">
  <img
    src="<?= get_field('logo')['url'] ?>"
    alt="<?= esc_html(get_field('logo')['alt']) ?>"
    title="<?= esc_html(get_field('logo')['caption']) ?>">
  <h3 class="article-card-title">
    <?= esc_html(get_field('name')); ?> <br>
  </h3>
</a>