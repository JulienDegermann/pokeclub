<?php

/**
 * Template Name: Contact
 */
?>
<?php get_header(); ?>
<section id="contact">
    <div class="container">
        <h2 class="section-title">Nous contacter</h2>

        <div class="flex">
            <div class="">

                <h3 class="section-title">Où nous trouver ?</h3>
                <p>L'association est basée à Lorient (Morbihan, 56). <br>
                    Les memnbres s'éparpillent sur tout le département : Lorient, Vannes, Pontivy, …). <br>
                    Ils se retrouvent régulièrement aux tournois et autres rencontres, principalement à Lorient et Vannes</p>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d21461.229553831872!2d-3.400490741648436!3d47.749373599307326!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48105e56aa6609ed%3A0xa93367770ccde4ea!2s56100%20Lorient!5e0!3m2!1sfr!2sfr!4v1769520106707!5m2!1sfr!2sfr"
                    width="600"
                    height="450"
                    style="border:0;"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>

            </div>


            <?php include_once __DIR__ . '/_partials/_contact_form.php'; ?>
            <?php include_once __DIR__ . '/_partials/_acf_form.php'; ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>