{{-- resources/views/partials/form-fields-particulier.blade.php --}}

{{-- Champ caché pour indiquer le type de formulaire --}}
<input type="hidden" id="form_type" name="form_type" value="particulier">

<!-- Informations personnelles -->
<div class="mb-3">
    <label for="particulier_full_name" class="form-label">Nom Complet</label>
    <input type="text" class="form-control" id="particulier_full_name" name="full_name"
           oninput="updatePreview('full_name', this.value)" required>
</div>

<div class="mb-3">
    <label for="particulier_job_title" class="form-label">Titre Professionnel</label>
    <input type="text" class="form-control" id="particulier_job_title" name="job_title"
           oninput="updatePreview('job_title', this.value)" required>
</div>

<div class="mb-3">
    <label for="particulier_email" class="form-label">Email</label>
    <input type="email" class="form-control" id="particulier_email" name="email"
           oninput="updatePreview('email', this.value)" required>
</div>

<div class="mb-3">
    <label for="particulier_phone" class="form-label">Numéro de Téléphone</label>
    <input type="tel" class="form-control" id="particulier_phone" name="phone"
           oninput="updatePreview('phone', this.value)" required>
</div>

<div class="mb-3">
    <label for="particulier_date_of_birth" class="form-label">Date de Naissance</label>
    <input type="date" class="form-control" id="particulier_date_of_birth" name="date_of_birth"
           oninput="updatePreview('date_of_birth', this.value)">
</div>

<div class="mb-3">
    <label for="particulier_gender" class="form-label">Sexe</label>
    <select class="form-control" id="particulier_gender" name="gender"
            onchange="updatePreview('gender', this.value)">
        <option value="">-- Sélectionnez --</option>
        <option value="male">Masculin</option>
        <option value="female">Féminin</option>
        <option value="other">Autre</option>
    </select>
</div>

<div class="mb-3">
    <label for="particulier_whatsapp_number" class="form-label">Numéro WhatsApp</label>
    <input type="text" class="form-control" id="particulier_whatsapp_number" name="whatsapp_number"
           oninput="updatePreview('whatsapp_number', this.value)">
</div>

<div class="mb-3">
    <label for="particulier_personal_message" class="form-label">Message Personnalisé</label>
    <textarea class="form-control" id="particulier_personal_message" name="personal_message" rows="3"
              oninput="updatePreview('personal_message', this.value)"></textarea>
</div>
