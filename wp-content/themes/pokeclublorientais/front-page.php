<?php
$last_events = get_next_events(3);
$partners = get_partners();

get_header();
?>
<section id="hero_section">
    <div class="container">
        <div class="flex">
            <picture id="hero_image">
                <source srcset="/wp-content/themes/pokeclublorientais/assets/images/home.jpeg" media="(min-width: 1200px)">
                <img src="/wp-content/themes/pokeclublorientais/assets/images/home.jpeg" alt="image JCC Pokémon">
            </picture>
            <div id="presents">
                <h2 class="section-title">Le PokéClub, c'est quoi ?</h2>
                <p>
                    Le PokéClub est une association qui a pour objectif de rassembler les amateurs de TCG Pokémon.
                </p>
                <p>
                    Nous communiquons aussi sur les évènements locaux (tournois, échanges, initiations) : pour promouvoir et faire découvrir le TCG Pokémon au plus grand nombre.
                </p>
            </div>
        </div>
    </div>
</section>

<?php
if ($last_events->have_posts()) { ?>
    <section class="dark" id="events">
        <div class="container">
            <h3 class="section-title">Les prochains évènements</h3>
            <div class="cards-wrapper">
                <?php
                while ($last_events->have_posts()) : $last_events->the_post();
                    include('_partials/_event_card.php');
                endwhile;
                wp_reset_postdata();
                ?>

            </div>
            <a class="link" href="/nos-evenements">Tous les évènements</a>
        </div>
    </section>

<?php wp_reset_postdata();
} ?>

<section id="partners">
    <div class="container">
        <h3 class="section-title">Nos partnenaires</h3>
        <div class="cards-wrapper">
            <?php
            while ($partners->have_posts()) : $partners->the_post();
                include('_partials/_partner_card.php');
            endwhile;
            wp_reset_postdata();

            ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>