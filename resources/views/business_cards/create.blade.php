@extends('layouts.app')

@section('content')
<div class="container-fluid d-flex justify-content-center align-items-center" style="height: 100vh;">
    <div class="card shadow-lg p-4" style="width: 100%; max-width: 2000px;">

        <!-- Stepper -->
        <div class="stepper d-flex justify-content-between mb-4">
            <div class="step text-center" data-step="1">
                <div class="circle active">1</div>
                <p class="mt-2">Choix du Template</p>
            </div>
            <div class="step text-center" data-step="2">
                <div class="circle">2</div>
                <p class="mt-2">Choix du Type</p>
            </div>
            <div class="step text-center" data-step="3">
                <div class="circle">3</div>
                <p class="mt-2">Remplissage</p>
            </div>
        </div>

        <!-- Formulaire principal -->
        <form id="business-card-form" method="POST" action="{{ route('business-cards.store') }}" enctype="multipart/form-data" novalidate>
            @csrf

            <!-- Étape 1: Choix du Template -->
            <div class="step-content active" data-step="1">
                <h4 class="text-center">Choisissez un Template</h4>
                <div class="template-selector d-flex flex-wrap justify-content-center mt-3">
                    @foreach($templates as $template)
                        <div class="template-option m-2" style="width: 100px; text-align: center;">
                            <input
                                type="radio"
                                name="template_id"
                                value="{{ $template->id }}"
                                id="template-{{ $template->id }}"
                                required
                                onchange="loadTemplate('template{{ $template->id }}')"
                            >
                            <label for="template-{{ $template->id }}" class="d-block">
                                <img
                                    src="{{ $template->thumbnail }}"
                                    alt="{{ $template->name }}"
                                    class="img-thumbnail mb-1"
                                    style="width: 100px; height: 100px; object-fit: cover;"
                                >
                                <p class="text-center small">{{ $template->name }}</p>
                            </label>
                        </div>
                    @endforeach

                </div>
                <div class="text-center mt-4">
                    <button type="button" class="btn btn-primary" onclick="goToNextStep()">Suivant</button>
                </div>
            </div>

            <!-- Étape 2: Choix du Type -->
            <div class="step-content" data-step="2">
                <h4 class="text-center">Choisissez le Type de Formulaire</h4>
                <div class="d-flex justify-content-center mt-4">
                    <button type="button" class="btn btn-outline-primary mx-2" data-form-type="entreprise" onclick="selectFormType('entreprise')">Carte Entreprise</button>
                    <button type="button" class="btn btn-outline-primary mx-2" data-form-type="particulier" onclick="selectFormType('particulier')">Carte Particulier</button>
                </div>
                <div class="text-center mt-4">
                    <button type="button" class="btn btn-secondary" onclick="goToPreviousStep()">Précédent</button>
                    <button type="button" class="btn btn-primary" onclick="goToNextStep()">Suivant</button>
                </div>
            </div>


            <!-- Étape 3: Remplissage et Prévisualisation -->
            <div class="step-content" data-step="3">
                <div class="row g-3">
                    <!-- Section Formulaire -->
                    <div class="col-md-6">
                        <div class="tab-content p-3 border rounded" style="max-height: 400px; overflow-y: auto;">
                            <div id="entreprise-form" class="tab-pane fade">
                                {{-- Champs spécifiques à l'entreprise --}}
                                @include('partials.form-fields-entreprise')

                            </div>

                            <div id="particulier-form" class="tab-pane fade">
                                {{-- Champs spécifiques au particulier --}}
                                @include('partials.form-fields-particulier')

                            </div>
                            <div> @include('partials.form-fields-communs')</div>
                        </div>
                    </div>

                    <!-- Section Prévisualisation -->
                    <div class="col-md-6">
                        <h4 class="text-center">Prévisualisation</h4>
                        <div id="template-preview"
                            class="template-preview border rounded p-3 bg-light shadow"
                            style="min-height: 400px; max-height: 450px; overflow-y: auto; overflow-x: auto;">
                            <!-- État par défaut pour la prévisualisation -->
                            <div style="max-width: 100%; overflow-x: auto;">
                                <p class="text-center text-muted m-0">
                                    Prévisualisation du template sélectionné...
                                </p>
                                <!-- Ajoutez ici le contenu réel de la prévisualisation -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>



                <div class="text-center mt-4">
                    <button type="button" class="btn btn-secondary" onclick="goToPreviousStep()">Précédent</button>
                    <button type="submit" class="btn btn-success">Créer la Carte</button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection



