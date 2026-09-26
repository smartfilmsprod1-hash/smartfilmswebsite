<!-- CHAPTER 07: PARLONS DE VOTRE PROJET (#F8F6F1 WARM OFF-WHITE) -->
<section id="estimateur" class="bg-[#F8F6F1] text-[#252238] py-20 md:py-32 border-b border-[#2D2658]/10 relative overflow-hidden">
    
    <!-- Subtle Background Ambient Glows -->
    <div class="absolute inset-0 pointer-events-none overflow-hidden">
        <div class="absolute -top-24 right-1/4 w-96 h-96 bg-[#FF5A68]/5 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-24 left-1/4 w-96 h-96 bg-[#2D2658]/5 rounded-full blur-3xl"></div>
    </div>

    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        
        <!-- Header -->
        <div class="text-center max-w-2xl mx-auto mb-12 sm:mb-16">
            <div class="inline-flex items-center gap-2 mb-3">
                <span class="text-xs font-mono font-bold uppercase tracking-[0.2em] text-[#FF5A68]">
                    07 — PARLONS DE VOTRE PROJET
                </span>
                <span class="w-6 h-[1px] bg-[#FF5A68]/40"></span>
            </div>
            
            <h2 class="text-3xl sm:text-4xl md:text-5xl font-black uppercase tracking-tight text-[#161828] leading-[1.15] mb-4">
                PARLONS DE VOTRE PROJET.
            </h2>
            
            <p class="text-[#686580] text-sm sm:text-base font-light leading-relaxed max-w-xl mx-auto">
                Notre équipe est là pour vous accompagner et donner vie à vos idées. Décrivez votre projet et recevez une proposition chiffrée sous 24 heures ouvrées.
            </p>
        </div>

        <!-- Project Consultation Form Container -->
        <div class="bg-white rounded-[28px] sm:rounded-[36px] p-6 sm:p-10 lg:p-12 border border-[#2D2658]/10 shadow-[0_20px_60px_rgba(45,38,88,0.06)] relative">
            
            <!-- Success Screen (Hidden initially) -->
            <div id="projectSuccessMessage" class="hidden py-10 sm:py-16 text-center space-y-6">
                <div class="w-20 h-20 sm:w-24 sm:h-24 rounded-full bg-[#10B981]/10 text-[#10B981] flex items-center justify-center text-4xl sm:text-5xl mx-auto shadow-inner">
                    <i class="bi bi-check2-circle"></i>
                </div>
                <div class="space-y-3 max-w-lg mx-auto">
                    <h3 class="text-2xl sm:text-3xl font-black uppercase tracking-tight text-[#161828]">
                        DEMANDE BIEN TRANSMISE !
                    </h3>
                    <p class="text-sm sm:text-base text-[#686580] font-light leading-relaxed">
                        Merci pour votre confiance. Votre projet a bien été transmis à notre équipe de direction à l'adresse <strong class="font-bold text-[#161828]">contact@smartfilmsprod.com</strong>.
                    </p>
                    <p class="text-xs sm:text-sm text-[#7A7793] font-light">
                        Nous étudierons vos besoins et reviendrons vers vous avec une proposition chiffrée sous 24 heures ouvrées.
                    </p>
                </div>
                <div class="pt-4 flex flex-col sm:flex-row items-center justify-center gap-4">
                    <a href="https://wa.me/212617202345" target="_blank" class="inline-flex items-center gap-2.5 bg-[#25D366] hover:bg-[#1EBE5D] text-white px-6 py-3 rounded-full font-bold text-xs uppercase tracking-wider shadow-md hover:shadow-lg transition-all">
                        <i class="bi bi-whatsapp text-base"></i>
                        <span>Échanger sur WhatsApp</span>
                    </a>
                    <button type="button" onclick="resetProjectForm()" class="inline-flex items-center gap-2 text-xs font-mono font-bold uppercase tracking-wider text-[#686580] hover:text-[#161828] px-5 py-3 rounded-full border border-[#2D2658]/15 hover:border-[#2D2658] transition-all">
                        <span>Nouvelle demande</span>
                    </button>
                </div>
            </div>

            <!-- Main Interactive Form -->
            <form id="projectInquiryForm" onsubmit="submitProjectInquiry(event)" class="space-y-10">
                @csrf

                <!-- Section 01: Type de Projet (6 Expertises SmartFilms) -->
                <div class="space-y-4">
                    <div class="flex items-center justify-between">
                        <label class="text-xs font-mono font-bold uppercase tracking-wider text-[#161828] flex items-center gap-2">
                            <span class="w-5 h-5 rounded-full bg-[#2D2658] text-white flex items-center justify-center text-[10px] font-bold">1</span>
                            <span>TYPE DE PROJET</span>
                            <span class="text-[#FF5A68]">*</span>
                        </label>
                        <span class="text-[11px] font-mono text-[#7A7793]">Sélectionnez une option</span>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-3 sm:gap-4">
                        @php
                            $projectTypes = [
                                [
                                    'id' => 'strat',
                                    'title' => 'Stratégie & Conception',
                                    'desc' => 'Storytelling, analyse & direction artistique',
                                    'icon' => 'bi-lightbulb',
                                ],
                                [
                                    'id' => 'prod',
                                    'title' => 'Production Audiovisuelle',
                                    'desc' => 'Tournage cinéma, régie & réalisation',
                                    'icon' => 'bi-camera-video',
                                ],
                                [
                                    'id' => 'social',
                                    'title' => 'Contenus Sociaux',
                                    'desc' => 'Formats verticaux, reels & réseaux sociaux',
                                    'icon' => 'bi-phone',
                                ],
                                [
                                    'id' => 'corp',
                                    'title' => 'Communication Corporate',
                                    'desc' => 'Films d\'entreprise & marque employeur',
                                    'icon' => 'bi-people',
                                ],
                                [
                                    'id' => 'pub',
                                    'title' => 'Publicité & Campagnes',
                                    'desc' => 'Spots publicitaires TV, cinéma & digital',
                                    'icon' => 'bi-camera',
                                ],
                                [
                                    'id' => 'live',
                                    'title' => 'Événement & Live',
                                    'desc' => 'Captation multi-caméras & streaming en direct',
                                    'icon' => 'bi-broadcast',
                                ],
                            ];
                        @endphp

                        @foreach($projectTypes as $p)
                            <label class="project-type-card relative p-4 rounded-2xl border border-[#2D2658]/15 bg-[#F8F6F1]/60 hover:bg-white hover:border-[#FF5A68]/60 cursor-pointer transition-all duration-300 flex items-start gap-3.5 has-[:checked]:border-[#FF5A68] has-[:checked]:bg-[#FADDE3]/30 has-[:checked]:shadow-sm group">
                                <input type="radio" name="project_type" value="{{ $p['title'] }}" class="hidden" {{ $loop->first ? 'checked' : '' }}>
                                <div class="w-9 h-9 rounded-xl bg-white border border-[#2D2658]/10 text-[#FF5A68] flex items-center justify-center shrink-0 text-base shadow-sm group-hover:scale-105 transition-transform">
                                    <i class="bi {{ $p['icon'] }}"></i>
                                </div>
                                <div class="pr-5">
                                    <h4 class="font-bold text-xs sm:text-sm text-[#161828] uppercase tracking-wide leading-snug">
                                        {{ $p['title'] }}
                                    </h4>
                                    <p class="text-[11px] text-[#7A7793] font-light mt-0.5 leading-snug">
                                        {{ $p['desc'] }}
                                    </p>
                                </div>
                                <!-- Radio Check Indicator -->
                                <div class="absolute top-3.5 right-3.5 w-4 h-4 rounded-full border border-[#2D2658]/20 flex items-center justify-center check-circle">
                                    <span class="w-2 h-2 rounded-full bg-[#FF5A68] hidden check-dot"></span>
                                </div>
                            </label>
                        @endforeach
                    </div>
                </div>

                <!-- Section 02: Vos Coordonnées (Nom, Organisme, Email, Téléphone) -->
                <div class="space-y-4 pt-6 border-t border-[#2D2658]/10">
                    <label class="text-xs font-mono font-bold uppercase tracking-wider text-[#161828] flex items-center gap-2">
                        <span class="w-5 h-5 rounded-full bg-[#2D2658] text-white flex items-center justify-center text-[10px] font-bold">2</span>
                        <span>VOS COORDONNÉES</span>
                        <span class="text-[#FF5A68]">*</span>
                    </label>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 sm:gap-6">
                        <!-- Nom & Prénom -->
                        <div class="space-y-1.5">
                            <label for="project_name" class="block text-[11px] font-mono font-bold uppercase tracking-wider text-[#686580]">
                                Nom & Prénom <span class="text-[#FF5A68]">*</span>
                            </label>
                            <input 
                                type="text" 
                                id="project_name" 
                                name="name" 
                                required 
                                placeholder="Ex: Karim Idrissi" 
                                class="w-full bg-[#F8F6F1] border border-[#2D2658]/15 rounded-xl px-4 py-3 text-sm text-[#161828] placeholder-[#7A7793]/60 focus:bg-white focus:outline-none focus:border-[#FF5A68] focus:ring-1 focus:ring-[#FF5A68] transition-all"
                            >
                        </div>

                        <!-- Organisme ou Société -->
                        <div class="space-y-1.5">
                            <label for="project_company" class="block text-[11px] font-mono font-bold uppercase tracking-wider text-[#686580]">
                                Organisme / Société <span class="text-[#FF5A68]">*</span>
                            </label>
                            <input 
                                type="text" 
                                id="project_company" 
                                name="company" 
                                required 
                                placeholder="Ex: Groupe OCP, Danone, Entreprise..." 
                                class="w-full bg-[#F8F6F1] border border-[#2D2658]/15 rounded-xl px-4 py-3 text-sm text-[#161828] placeholder-[#7A7793]/60 focus:bg-white focus:outline-none focus:border-[#FF5A68] focus:ring-1 focus:ring-[#FF5A68] transition-all"
                            >
                        </div>

                        <!-- Email Professionnel -->
                        <div class="space-y-1.5">
                            <label for="project_email" class="block text-[11px] font-mono font-bold uppercase tracking-wider text-[#686580]">
                                Email professionnel <span class="text-[#FF5A68]">*</span>
                            </label>
                            <input 
                                type="email" 
                                id="project_email" 
                                name="email" 
                                required 
                                placeholder="Ex: k.idrissi@entreprise.ma" 
                                class="w-full bg-[#F8F6F1] border border-[#2D2658]/15 rounded-xl px-4 py-3 text-sm text-[#161828] placeholder-[#7A7793]/60 focus:bg-white focus:outline-none focus:border-[#FF5A68] focus:ring-1 focus:ring-[#FF5A68] transition-all"
                            >
                        </div>

                        <!-- Téléphone / WhatsApp -->
                        <div class="space-y-1.5">
                            <label for="project_phone" class="block text-[11px] font-mono font-bold uppercase tracking-wider text-[#686580]">
                                Téléphone / WhatsApp <span class="text-[#FF5A68]">*</span>
                            </label>
                            <input 
                                type="tel" 
                                id="project_phone" 
                                name="phone" 
                                required 
                                placeholder="Ex: +212 6 12 34 56 78" 
                                class="w-full bg-[#F8F6F1] border border-[#2D2658]/15 rounded-xl px-4 py-3 text-sm text-[#161828] placeholder-[#7A7793]/60 focus:bg-white focus:outline-none focus:border-[#FF5A68] focus:ring-1 focus:ring-[#FF5A68] transition-all"
                            >
                        </div>
                    </div>
                </div>

                <!-- Section 03: Budget & Détails du Projet -->
                <div class="space-y-4 pt-6 border-t border-[#2D2658]/10">
                    <div class="flex items-center justify-between">
                        <label class="text-xs font-mono font-bold uppercase tracking-wider text-[#161828] flex items-center gap-2">
                            <span class="w-5 h-5 rounded-full bg-[#2D2658] text-white flex items-center justify-center text-[10px] font-bold">3</span>
                            <span>BUDGET PRÉVISIONNEL & DÉTAILS</span>
                        </label>
                        <span class="text-[11px] font-mono text-[#7A7793]">Optionnel</span>
                    </div>

                    <!-- Selectable Budget Range Pills -->
                    <div>
                        <span class="block text-[11px] font-mono font-bold uppercase tracking-wider text-[#686580] mb-2.5">
                            Enveloppe budgétaire envisagée
                        </span>
                        <div class="flex flex-wrap gap-2.5">
                            @php
                                $budgets = [
                                    '< 30 000 MAD',
                                    '30 000 - 60 000 MAD',
                                    '60 000 - 120 000 MAD',
                                    '+ 120 000 MAD',
                                    'Sur devis / À définir',
                                ];
                            @endphp
                            @foreach($budgets as $b)
                                <label class="px-4 py-2.5 rounded-full border border-[#2D2658]/15 bg-[#F8F6F1] text-xs font-mono font-medium text-[#161828] cursor-pointer hover:border-[#FF5A68] transition-all has-[:checked]:bg-[#2D2658] has-[:checked]:text-white has-[:checked]:border-[#2D2658] shadow-sm">
                                    <input type="radio" name="budget_tier" value="{{ $b }}" class="hidden" {{ $loop->last ? 'checked' : '' }}>
                                    <span>{{ $b }}</span>
                                </label>
                            @endforeach
                        </div>
                    </div>

                    <!-- Message / Description -->
                    <div class="space-y-1.5 pt-2">
                        <label for="project_message" class="block text-[11px] font-mono font-bold uppercase tracking-wider text-[#686580]">
                            Description du besoin / Précisions
                        </label>
                        <textarea 
                            id="project_message" 
                            name="message" 
                            rows="3" 
                            placeholder="Décrivez brièvement les objectifs du film, les délais souhaités, les formats ou lieux de tournage envisagés..."
                            class="w-full bg-[#F8F6F1] border border-[#2D2658]/15 rounded-xl p-4 text-sm text-[#161828] placeholder-[#7A7793]/60 focus:bg-white focus:outline-none focus:border-[#FF5A68] focus:ring-1 focus:ring-[#FF5A68] transition-all"
                        ></textarea>
                    </div>
                </div>

                <!-- Error Box -->
                <div id="projectFormError" class="hidden p-4 rounded-xl bg-red-50 border border-red-200 text-red-700 text-xs font-medium"></div>

                <!-- Submit Button & Trust Row -->
                <div class="pt-6 border-t border-[#2D2658]/10 flex flex-col sm:flex-row items-center justify-between gap-6">
                    <button 
                        type="submit" 
                        id="submitProjectBtn" 
                        class="w-full sm:w-auto inline-flex items-center justify-center gap-3 bg-[#FF5A68] hover:bg-[#E84554] text-white font-bold uppercase tracking-wider text-xs sm:text-sm px-8 sm:px-10 py-4 rounded-full shadow-[0_0_30px_rgba(255,90,104,0.35)] hover:shadow-[0_0_45px_rgba(255,90,104,0.6)] hover:scale-[1.02] transition-all duration-300 group cursor-pointer"
                    >
                        <span id="btnText">ENVOYER MA DEMANDE DE PROJET</span>
                        <i id="btnIcon" class="bi bi-arrow-right text-sm transform group-hover:translate-x-1 transition-transform"></i>
                        <svg id="btnSpinner" class="hidden animate-spin h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v8H4z"></path>
                        </svg>
                    </button>

                    <div class="text-center sm:text-right space-y-1">
                        <div class="text-xs text-[#161828] font-medium flex items-center justify-center sm:justify-end gap-1.5">
                            <i class="bi bi-envelope-check text-[#FF5A68]"></i>
                            <span>Envoi direct à : <strong class="font-bold text-[#FF5A68]">contact@smartfilmsprod.com</strong></span>
                        </div>
                        <p class="text-[11px] text-[#7A7793] font-light">
                            Réponse garantie sous 24h ouvrées &bull; Devis 100% gratuit & confidentiel
                        </p>
                    </div>
                </div>

            </form>

        </div>

    </div>
</section>

<style>
    /* Radio styling inside cards */
    .project-type-card input:checked ~ .check-circle {
        border-color: #FF5A68;
    }
    .project-type-card input:checked ~ .check-circle .check-dot {
        display: block;
    }
</style>

<script>
    function submitProjectInquiry(event) {
        event.preventDefault();

        const form = document.getElementById('projectInquiryForm');
        const submitBtn = document.getElementById('submitProjectBtn');
        const btnText = document.getElementById('btnText');
        const btnIcon = document.getElementById('btnIcon');
        const btnSpinner = document.getElementById('btnSpinner');
        const errorBox = document.getElementById('projectFormError');
        const successBox = document.getElementById('projectSuccessMessage');

        errorBox.classList.add('hidden');
        errorBox.innerText = '';

        // UI Loading State
        submitBtn.disabled = true;
        btnText.innerText = 'ENVOI EN COURS...';
        btnIcon.classList.add('hidden');
        btnSpinner.classList.remove('hidden');

        const formData = new FormData(form);

        fetch('{{ route("inquiry.submit") }}', {
            method: 'POST',
            headers: {
                'X-Requested-With': 'XMLHttpRequest',
                'Accept': 'application/json'
            },
            body: formData
        })
        .then(response => {
            if (!response.ok) {
                return response.json().then(err => { throw err; });
            }
            return response.json();
        })
        .then(data => {
            // Hide Form & Show Success Screen
            form.classList.add('hidden');
            successBox.classList.remove('hidden');
            successBox.scrollIntoView({ behavior: 'smooth', block: 'center' });
        })
        .catch(err => {
            let message = 'Une erreur est survenue lors de l\'envoi. Veuillez vérifier vos informations ou nous contacter directement à contact@smartfilmsprod.com.';
            if (err && err.errors) {
                message = Object.values(err.errors).flat().join('<br>');
            } else if (err && err.message) {
                message = err.message;
            }
            errorBox.innerHTML = message;
            errorBox.classList.remove('hidden');
        })
        .finally(() => {
            submitBtn.disabled = false;
            btnText.innerText = 'ENVOYER MA DEMANDE DE PROJET';
            btnIcon.classList.remove('hidden');
            btnSpinner.classList.add('hidden');
        });
    }

    function resetProjectForm() {
        const form = document.getElementById('projectInquiryForm');
        const successBox = document.getElementById('projectSuccessMessage');
        form.reset();
        form.classList.remove('hidden');
        successBox.classList.add('hidden');
        form.scrollIntoView({ behavior: 'smooth', block: 'start' });
    }
</script>
