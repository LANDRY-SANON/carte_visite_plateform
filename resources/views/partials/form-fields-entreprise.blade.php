{{-- resources/views/partials/form-fields-entreprise.blade.php --}}

{{-- Champ caché pour indiquer le type de formulaire --}}
<input type="hidden" id="form_type" name="form_type" value="entreprise">

<!-- Informations sur l'entreprise -->
<div class="mb-3">
    <label for="entreprise_name" class="form-label">Nom de l'Entreprise</label>
    <input type="text" class="form-control" id="entreprise_name" name="company_name"
           oninput="updatePreview('company_name', this.value)" required>
</div>

<div class="mb-3">
    <label for="entreprise_registration_number" class="form-label">Numéro d’Enregistrement</label>
    <input type="text" class="form-control" id="entreprise_registration_number" name="registration_number"
           oninput="updatePreview('registration_number', this.value)">
</div>

<div class="mb-3">
    <label for="entreprise_tax_id" class="form-label">Numéro Fiscal</label>
    <input type="text" class="form-control" id="entreprise_tax_id" name="tax_id"
           oninput="updatePreview('tax_id', this.value)">
</div>

<div class="mb-3">
    <label for="entreprise_industry" class="form-label">Secteur d’Activité</label>
    <input type="text" class="form-control" id="entreprise_industry" name="industry"
           oninput="updatePreview('industry', this.value)">
</div>

<div class="mb-3">
    <label for="entreprise_company_size" class="form-label">Taille de l’Entreprise</label>
    <input type="text" class="form-control" id="entreprise_company_size" name="company_size"
           oninput="updatePreview('company_size', this.value)">
</div>

<div class="mb-3">
    <label for="entreprise_contact_person" class="form-label">Contact au sein de l’Entreprise</label>
    <input type="text" class="form-control" id="entreprise_contact_person" name="contact_person"
           oninput="updatePreview('contact_person', this.value)">
</div>

<div class="mb-3">
    <label for="entreprise_position_contact_person" class="form-label">Poste du Contact</label>
    <input type="text" class="form-control" id="entreprise_position_contact_person" name="position_contact_person"
           oninput="updatePreview('position_contact_person', this.value)">
</div>

<div class="mb-3">
    <label for="entreprise_additional_services" class="form-label">Services/Produits Additionnels</label>
    <textarea class="form-control" id="entreprise_additional_services" name="additional_services" rows="3"
              oninput="updatePreview('additional_services', this.value)"></textarea>
</div>

<div class="mb-3">
    <label for="entreprise_whatsapp_number" class="form-label">Numéro WhatsApp</label>
    <input type="text" class="form-control" id="entreprise_whatsapp_number" name="whatsapp_number"
           oninput="updatePreview('whatsapp_number', this.value)">
</div>
