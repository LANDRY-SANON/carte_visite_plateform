{{-- resources/views/partials/form-fields-communs.blade.php --}}

<!-- Champs communs à tous les types -->
<div class="mb-3">
    <label for="facebook" class="form-label">Liens Réseaux Sociaux</label>
    <div class="mb-2">
        <label for="facebook" class="form-label">Facebook</label>
        <input type="url" class="form-control" id="facebook" name="social_links[facebook]"
               placeholder="Lien Facebook"
               oninput="updatePreview('social_links_facebook', this.value)">
    </div>

    <div class="mb-2">
        <label for="instagram" class="form-label">Instagram</label>
        <input type="url" class="form-control" id="instagram" name="social_links[instagram]"
               placeholder="Lien Instagram"
               oninput="updatePreview('social_links_instagram', this.value)">
    </div>

    <div class="mb-2">
        <label for="twitter" class="form-label">Twitter</label>
        <input type="url" class="form-control" id="twitter" name="social_links[twitter]"
               placeholder="Lien Twitter"
               oninput="updatePreview('social_links_twitter', this.value)">
    </div>

    <div class="mb-2">
        <label for="tiktok" class="form-label">TikTok</label>
        <input type="url" class="form-control" id="tiktok" name="social_links[tiktok]"
               placeholder="Lien TikTok"
               oninput="updatePreview('social_links_tiktok', this.value)">
    </div>

    <div class="mb-2">
        <label for="linkedin" class="form-label">LinkedIn</label>
        <input type="url" class="form-control" id="linkedin" name="social_links[linkedin]"
               placeholder="Lien LinkedIn"
               oninput="updatePreview('social_links_linkedin', this.value)">
    </div>

    <div class="mb-2">
        <label for="snapchat" class="form-label">Snapchat</label>
        <input type="url" class="form-control" id="snapchat" name="social_links[snapchat]"
               placeholder="Lien Snapchat"
               oninput="updatePreview('social_links_snapchat', this.value)">
    </div>

    <button type="button" class="btn btn-secondary mt-2" onclick="addSocialField()">
        Ajouter un autre réseau
    </button>
    <div id="social_links_fields"></div>
</div>


<!-- Autres champs communs -->
<div class="mb-3">
    <label for="qr_code_file" class="form-label">QR Code</label>
    <input type="file" class="form-control" id="qr_code_file" name="qr_code_file" accept="image/*"
           onchange="handleFileUpload('qr_code_file', this.files[0])">
</div>

<div class="mb-3">
    <label for="photo_url" class="form-label">Photo de profile</label>
    <input type="file" class="form-control" id="photo_url" name="photo_url" accept="image/*"
           onchange="updatePreview('profile-image', this.files[0])">
</div>

<div class="mb-3">
    <label for="logo" class="form-label">Logo</label>
    <input type="file" class="form-control" id="logo" name="logo" accept="image/*"
           onchange="updatePreview('logo', this.files[0])">
</div>

<div class="mb-3">
    <label for="background_image" class="form-label">Image de fond</label>
    <input type="file" class="form-control" id="background_image" name="background_image" accept="image/*"
           onchange="updatePreview('background-image', this.files[0])">
</div>

<div class="mb-3">
    <label for="user_id" class="form-label">Client</label>
    <select class="form-control" id="user_id" name="user_id" required>
        <option value="">-- Sélectionnez un client --</option>
        @foreach($clients as $client)
            <option value="{{ $client->id }}">{{ $client->name }}</option>
        @endforeach
    </select>
</div>

<div class="mb-3">
    <label for="colors_primary" class="form-label">Couleur Principale</label>
    <input type="color" class="form-control form-control-color"
           id="colors_primary"
           name="colors[primary]"
           onchange="updatePreview('colors', { primary: this.value })"
           value="#000000">
</div>
<div class="mb-3">
    <label for="colors_secondary" class="form-label">Couleur Secondaire</label>
    <input type="color" class="form-control form-control-color"
           id="colors_secondary"
           name="colors[secondary]"
           onchange="updatePreview('colors', { secondary: this.value })"
           value="#ffffff">
</div>
<div class="mb-3">
    <label for="colors_text" class="form-label">Couleur du Texte</label>
    <input type="color" class="form-control form-control-color"
           id="colors_text"
           name="colors[text]"
           onchange="updatePreview('colors', { text: this.value })"
           value="#000000">
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
           @foreach ($errors->all() as $error)
               <li>{{ $error }}</li>
           @endforeach
        </ul>
    </div>
@endif
