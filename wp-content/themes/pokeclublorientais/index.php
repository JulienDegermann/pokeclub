<?php get_header(); ?>
<section>
    <div class="container">
        <h2 class="section-title">ICI MON TITRE TESTE H2</h2>

        <?php if (have_posts()) : ?>
            <div class="flex">
                <?php while (have_posts()) : the_post(); ?>
                    <article class="post-card">
                        <h3 class="post-title"><?php the_title(); ?></h3>
                        <div class="post-excerpt"><?php the_excerpt(); ?></div>
                        <a href="<?php the_permalink(); ?>" class="read-more">Lire la suite</
                                a>
                    </article>
                <?php endwhile; ?>
            </div>
        <?php else : ?>
            <p>Aucun article trouvé.</p>
        <?php endif; ?>
    </div>
</section>
<?php get_footer(); ?>