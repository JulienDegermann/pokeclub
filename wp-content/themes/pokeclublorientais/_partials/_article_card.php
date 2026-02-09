<a class="article-card"
    href="<?= esc_url(get_permalink()) ?>">lien
    <img
        src="<?= esc_url(get_field('article_image')['url']) ?>"
        alt="<?= esc_html(get_field('article_image')['alt']) ?>"
        title="<?= esc_html(get_field('article_image')['caption']) ?>">
    <h3 class="article-card-title"><?php esc_html(the_title()); ?></h3>
</a>