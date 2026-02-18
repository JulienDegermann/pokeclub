</main>
<?php wp_footer(); ?>
<footer>
  <div class="container">
    <div class="flex">
      <div class="footer-subsection">
        <h4 class="section-title">
          Nous contacter
        </h4>
        <ul>
          <?php if (get_field('company_email', 112) !== "") { ?>
            <li>
              📧 : <a class="link" href="mailto:<?= esc_html(get_field('company_email', 112)); ?>"><?= esc_html(get_field('company_email', 112)); ?></a>
            </li>
          <?php } ?>
          <?php if (get_field('company_phone', 112) !== "") { ?>
            <li>
              📞 : <a class="link" href="tel:<?= esc_html(get_field('company_phone'), 112); ?>"><?= esc_html(get_field('company_phone', 112)); ?></a>
            </li>
          <?php } ?>
          <li>
            <a class="link" href="/nous-contacter">Forumulaire de contact</a>
          </li>
        </ul>
      </div>

    </div>
  </divƒ>

</footer>
</body>