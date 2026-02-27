<?php
$image_id = get_field('logo')['ID'];
// use wp_get_attachment_image($image_id, "small")) in srcset for better performance;
?>

<a class="article-card partner"
  href="<?= esc_url(get_permalink()) ?>">
  <?= wp_get_attachment_image($image_id); ?>
  <h3 class="article-card-title">
    <?= esc_html(get_field('name')); ?> <br>
  </h3>
</a>