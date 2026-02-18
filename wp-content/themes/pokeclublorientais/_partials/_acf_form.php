<div>
  <h3 class="section-title hndle ui-sortable-handle">Formulaire de contact</h2>
    <div>

      <?php
      acf_form([
        'post_id' => 'new_post',
        'new_post' => [
          'post_type' => 'message',
          'post_status' => 'private',
        ],
        'submit_value' => 'Envoyer',
        'form_attributes' => [
          'class' => 'form-item'
        ]
      ]);

      ?>

    </div>

</div>