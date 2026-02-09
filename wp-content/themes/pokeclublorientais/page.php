<?php
/*
Template Name: Liste Produits WooCommerce
*/
get_header(); ?>
<section>
    <div class="container">
        <h2 class="section-title">Page Template : <?php the_title(); ?> </h2>


        <?php while (have_posts()) : the_post();

            the_title();
        endwhile; ?>

        <h1>Nos produits</h1>

        <?php
        echo do_shortcode('[products limit="12" columns="4"]');
        ?>

    </div>
</section>
<?php get_footer(); ?>