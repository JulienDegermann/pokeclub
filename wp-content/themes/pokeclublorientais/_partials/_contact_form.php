<form method="post" id="contact_form">
  <h3 class="section-title">Formulaire de contact</h3>

  <div class="form-item">
    <label for="contact_first_name">
      Prénom
    </label>
    <input
      type="text"
      name="contact_first_name"
      id="contact_first_name"
      placeholder="ex : John"
      required>
  </div>
  <div class="form-item">
    <label for="contact_last_name">
      Nom
    </label>
    <input
      type="text"
      name="contact_last_name"
      id="contact_last_name"
      placeholder="ex : Doe"
      required>
  </div>
  <div class="form-item">
    <label for="contact_first_name">
      E-mail
    </label>
    <input
      type="email"
      name="contact_email"
      id="contact_email"
      placeholder="johndoe@example.com"
      required>
  </div>
  <div class="form-item">
    <label for="contact_object">
      Objet
    </label>
    <select
      type="select"
      name="contact_email"
      id="contact_email"
      placeholder="johndoe@example.com"
      required>
      <option value="Devis">Devis</option>
      <option value="Information">Information</option>
      <option value="Recrutement">Recrutement</option>
    </select>
  </div>

  <input
    type="submit"
    value="Envoyer"
    name="contact_submit"
    class="button">
</form>