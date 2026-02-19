</main>

<?php
wp_footer();
$company = get_company_datas();
?>
<footer>
  <div class="container">
    <div class="flex">
      <div class="footer-subsection">
        <h4 class="section-title">
          Nous contacter
        </h4>
        <ul>
          <?php if ($company["email"] !== "") { ?>
            <li>
              📧 : <a class="link" href="mailto:<?= esc_html($company["email"]); ?>"><?= esc_html($company["email"]); ?></a>
            </li>
          <?php } ?>
          <?php if ($company["phone"] !== "") { ?>
            <li>
              📞 : <a class="link" href="tel:<?= esc_html($company["phone"]); ?>"><?= esc_html($company["phone"]); ?></a>
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