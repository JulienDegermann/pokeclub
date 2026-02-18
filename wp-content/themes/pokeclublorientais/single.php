<?php get_header(); ?>
<section>
    <div class="container">
        <h2 class="section-title"><?= the_title(); ?></h2>
        <p>
            <?= the_content(); ?>
        </p>

    </div>
</section>
<?php get_footer(); ?>