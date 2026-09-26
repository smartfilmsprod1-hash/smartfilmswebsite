<!-- CHAPTER 06: STUDIO CONTACT & CASABLANCA HEADQUARTERS (#F8F6F1 WARM OFF-WHITE) -->
<section id="contact" class="bg-[#F8F6F1] text-[#252238] py-20 md:py-32 border-b border-[#2D2658]/10 relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        
        <!-- Header with Sleek Editorial Composition matching previous chapters -->
        <div class="text-center max-w-3xl mx-auto mb-14 sm:mb-16">
            <div class="flex items-center justify-center gap-3 mb-3">
                <span class="text-xs font-mono font-bold tracking-[0.2em] text-[#FF5A68] uppercase">
                    06 — PRENDRE CONTACT
                </span>
                <span class="w-8 h-[1px] bg-[#FF5A68]/40"></span>
            </div>
            <h2 class="text-3xl sm:text-4xl md:text-5xl font-black uppercase tracking-tight text-[#161828] leading-[1.15]">
                PARLONS DE VOTRE <span class="text-[#FF5A68]">PROJET.</span>
            </h2>
            <p class="text-[#686580] text-sm sm:text-base font-light max-w-xl mx-auto mt-3 leading-relaxed">
                Une vision, un film ou une campagne d'envergure ? Rencontrons-nous à Casablanca ou échangeons directement sur vos objectifs.
            </p>
        </div>

        <!-- Split Editorial Card Container with Pro Finish -->
        <div class="bg-white rounded-2xl sm:rounded-[28px] border border-[#2D2658]/10 shadow-[0_20px_50px_-12px_rgba(22,24,40,0.12)] overflow-hidden grid grid-cols-1 lg:grid-cols-12 items-stretch">
            
            <!-- Left Info Panel: Cinematic Dark Obsidian Studio Identity -->
            <div class="lg:col-span-5 bg-[#090D1E] text-white p-6 sm:p-10 md:p-12 flex flex-col justify-between space-y-8 relative overflow-hidden">
                <!-- Ambient Glow Elements -->
                <div class="absolute -top-24 -left-24 w-64 h-64 bg-[#FF5A68]/15 rounded-full blur-3xl pointer-events-none"></div>
                <div class="absolute -bottom-24 -right-24 w-64 h-64 bg-[#2D2658]/40 rounded-full blur-3xl pointer-events-none"></div>

                <div class="relative z-10 space-y-6">
                    <div>
                        <!-- Status Badge -->
                        <div class="inline-flex items-center gap-2.5 px-3.5 py-1.5 rounded-full bg-white/10 border border-white/15 backdrop-blur-md text-[11px] font-mono uppercase tracking-wider text-[#FADDE3] mb-4">
                            <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
                            <span>Casablanca &bull; Interventions Partout au Maroc</span>
                        </div>

                        <h3 class="text-2xl sm:text-3xl font-black uppercase tracking-tight text-white leading-tight">
                            SMARTFILMS <span class="text-[#FF5A68]">PROD</span>
                        </h3>
                        <p class="text-[#8E8B9F] text-xs sm:text-sm font-light mt-2 leading-relaxed">
                            Agence de production audiovisuelle, shooting photo professionnel et réalisation de films d'entreprise au Maroc. Échangeons sur votre projet ou rendez-nous visite à nos bureaux à Casablanca.
                        </p>
                    </div>

                    <!-- Contact Details Cards -->
                    <div class="space-y-3 pt-2">
                        <!-- Address -->
                        <div class="flex items-start gap-3.5 p-3.5 rounded-2xl bg-white/[0.04] border border-white/[0.08] hover:bg-white/[0.07] transition-colors">
                            <div class="w-9 h-9 rounded-xl bg-[#FF5A68]/20 text-[#FF5A68] flex items-center justify-center shrink-0 text-sm">
                                <i class="bi bi-geo-alt"></i>
                            </div>
                            <div>
                                <h4 class="text-[10px] uppercase font-mono tracking-widest text-[#FADDE3] font-bold mb-0.5">ADRESSE</h4>
                                <p class="text-white/90 text-xs sm:text-sm font-normal leading-relaxed">
                                    {{ $settings['address'] ?? '130 Bv d\'Anfa, 20300 Casablanca, Maroc' }}
                                </p>
                            </div>
                        </div>

                        <!-- Phone -->
                        <div class="flex items-start gap-3.5 p-3.5 rounded-2xl bg-white/[0.04] border border-white/[0.08] hover:bg-white/[0.07] transition-colors">
                            <div class="w-9 h-9 rounded-xl bg-[#FF5A68]/20 text-[#FF5A68] flex items-center justify-center shrink-0 text-sm">
                                <i class="bi bi-telephone"></i>
                            </div>
                            <div>
                                <h4 class="text-[10px] uppercase font-mono tracking-widest text-[#FADDE3] font-bold mb-0.5">TÉLÉPHONE</h4>
                                <a href="tel:{{ str_replace(' ', '', $settings['phone'] ?? '+212617202345') }}" class="text-white font-bold text-xs sm:text-sm hover:text-[#FF5A68] transition-colors">
                                    {{ $settings['phone'] ?? '+212 6 17 20 23 45' }}
                                </a>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="flex items-start gap-3.5 p-3.5 rounded-2xl bg-white/[0.04] border border-white/[0.08] hover:bg-white/[0.07] transition-colors">
                            <div class="w-9 h-9 rounded-xl bg-[#FF5A68]/20 text-[#FF5A68] flex items-center justify-center shrink-0 text-sm">
                                <i class="bi bi-envelope"></i>
                            </div>
                            <div>
                                <h4 class="text-[10px] uppercase font-mono tracking-widest text-[#FADDE3] font-bold mb-0.5">EMAIL</h4>
                                <a href="mailto:{{ $settings['email'] ?? 'contact@smartfilmsprod.com' }}" class="text-white/90 text-xs sm:text-sm hover:text-[#FF5A68] transition-colors">
                                    {{ $settings['email'] ?? 'contact@smartfilmsprod.com' }}
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Direct WhatsApp Quick Action -->
                    <div class="pt-2">
                        <a href="https://wa.me/{{ $settings['whatsapp'] ?? '212617202345' }}" target="_blank" rel="noopener noreferrer" class="inline-flex items-center justify-center gap-2.5 w-full py-3.5 px-5 rounded-xl bg-emerald-500 hover:bg-emerald-600 text-white font-bold text-xs uppercase tracking-wider transition-all shadow-lg shadow-emerald-500/20 hover:-translate-y-0.5">
                            <i class="bi bi-whatsapp text-sm"></i>
                            <span>Discuter directement sur WhatsApp</span>
                        </a>
                    </div>
                </div>

                <!-- Google Map Embed Styled with Overlay -->
                <div class="relative z-10 rounded-2xl overflow-hidden border border-white/15 shadow-md group">
                    <iframe class="w-full h-32 border-0 opacity-80 group-hover:opacity-100 transition-opacity" src="https://maps.google.com/maps?q=Boulevard+d+Anfa+Casablanca&t=&z=14&ie=UTF8&iwloc=&output=embed" loading="lazy" title="Bureaux SmartFilms Casablanca"></iframe>
                    <div class="absolute bottom-2 right-2">
                        <a href="https://maps.google.com/?q=Boulevard+d+Anfa+Casablanca" target="_blank" rel="noopener noreferrer" class="px-2.5 py-1 rounded-lg bg-[#090D1E]/90 backdrop-blur-md text-[10px] font-mono text-white/90 hover:text-white border border-white/20 inline-flex items-center gap-1.5 transition-colors">
                            <span>Ouvrir dans Maps</span>
                            <i class="bi bi-box-arrow-up-right text-[9px]"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Right Direct Message Form -->
            <div class="lg:col-span-7 p-8 sm:p-10 md:p-12 bg-white flex flex-col justify-center">
                
                @if(session('success'))
                    <div class="mb-6 p-4 rounded-2xl bg-emerald-50 border border-emerald-200 text-emerald-800 text-xs sm:text-sm flex items-center gap-3">
                        <i class="bi bi-check-circle-fill text-emerald-500 text-lg shrink-0"></i>
                        <p class="font-medium">{{ session('success') }}</p>
                    </div>
                @endif

                <div class="mb-6">
                    <h3 class="text-xl sm:text-2xl font-bold uppercase tracking-tight text-[#161828]">
                        Envoyez-nous un message
                    </h3>
                    <p class="text-[#686580] text-xs sm:text-sm font-light mt-1">
                        Décrivez brièvement vos attentes et notre directeur de production vous contactera sous 24h.
                    </p>
                </div>

                <form action="{{ route('inquiry.submit') }}" method="POST" class="space-y-5">
                    @csrf
                    
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                        <div>
                            <label class="block text-[11px] font-mono uppercase tracking-wider text-[#686580] font-bold mb-2">
                                Nom & Prénom <span class="text-[#FF5A68]">*</span>
                            </label>
                            <input type="text" name="name" placeholder="Votre nom" required class="w-full px-4 py-3.5 bg-[#F8F6F1]/80 hover:bg-[#F8F6F1] border border-[#2D2658]/15 rounded-xl text-sm text-[#161828] placeholder-[#9E9BAE] focus:outline-none focus:ring-2 focus:ring-[#FF5A68]/20 focus:border-[#FF5A68] transition-all">
                        </div>
                        <div>
                            <label class="block text-[11px] font-mono uppercase tracking-wider text-[#686580] font-bold mb-2">
                                Téléphone <span class="text-[#FF5A68]">*</span>
                            </label>
                            <input type="tel" name="phone" placeholder="06..." required class="w-full px-4 py-3.5 bg-[#F8F6F1]/80 hover:bg-[#F8F6F1] border border-[#2D2658]/15 rounded-xl text-sm text-[#161828] placeholder-[#9E9BAE] focus:outline-none focus:ring-2 focus:ring-[#FF5A68]/20 focus:border-[#FF5A68] transition-all">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                        <div>
                            <label class="block text-[11px] font-mono uppercase tracking-wider text-[#686580] font-bold mb-2">
                                Email
                            </label>
                            <input type="email" name="email" placeholder="votre@email.com" class="w-full px-4 py-3.5 bg-[#F8F6F1]/80 hover:bg-[#F8F6F1] border border-[#2D2658]/15 rounded-xl text-sm text-[#161828] placeholder-[#9E9BAE] focus:outline-none focus:ring-2 focus:ring-[#FF5A68]/20 focus:border-[#FF5A68] transition-all">
                        </div>
                        <div>
                            <label class="block text-[11px] font-mono uppercase tracking-wider text-[#686580] font-bold mb-2">
                                Type de projet
                            </label>
                            <select name="budget_tier" class="w-full px-4 py-3.5 bg-[#F8F6F1]/80 hover:bg-[#F8F6F1] border border-[#2D2658]/15 rounded-xl text-sm text-[#161828] focus:outline-none focus:ring-2 focus:ring-[#FF5A68]/20 focus:border-[#FF5A68] transition-all cursor-pointer">
                                <option value="Non spécifié">Sélectionner un type de projet</option>
                                <option value="Film Corporate & Institutionnel">Film Corporate & Institutionnel</option>
                                <option value="Spot Publicitaire TV & Digital">Spot Publicitaire TV & Digital</option>
                                <option value="Shooting Photo Corporate & Packshot">Shooting Photo Corporate & Packshot</option>
                                <option value="Contenus Sociaux & Reels">Contenus Sociaux & Reels</option>
                                <option value="Captation Événementielle">Captation Événementielle</option>
                                <option value="Prises de Vues par Drone">Prises de Vues par Drone</option>
                            </select>
                        </div>
                    </div>

                    <div>
                        <label class="block text-[11px] font-mono uppercase tracking-wider text-[#686580] font-bold mb-2">
                            Message & Vision du projet <span class="text-[#FF5A68]">*</span>
                        </label>
                        <textarea name="message" rows="4" placeholder="Parlez-nous de vos objectifs, dates clés et attentes visuelles..." required class="w-full px-4 py-3.5 bg-[#F8F6F1]/80 hover:bg-[#F8F6F1] border border-[#2D2658]/15 rounded-xl text-sm text-[#161828] placeholder-[#9E9BAE] focus:outline-none focus:ring-2 focus:ring-[#FF5A68]/20 focus:border-[#FF5A68] transition-all resize-none"></textarea>
                    </div>

                    <div class="flex flex-col sm:flex-row items-center justify-between pt-2 gap-4">
                        <div class="flex items-center gap-2 text-xs text-[#686580]">
                            <i class="bi bi-shield-check text-[#FF5A68] text-sm"></i>
                            <span>Réponse confidentielle garantie sous 24h</span>
                        </div>

                        <button type="submit" class="w-full sm:w-auto bg-[#FF5A68] hover:bg-[#E84554] text-white px-9 py-4 rounded-full font-bold uppercase tracking-widest text-xs transition-all shadow-lg shadow-rose-500/25 hover:shadow-rose-500/40 hover:-translate-y-0.5 flex items-center justify-center gap-2.5 group">
                            <span>Envoyer le message</span>
                            <i class="bi bi-arrow-right group-hover:translate-x-1.5 transition-transform duration-300"></i>
                        </button>
                    </div>
                </form>
            </div>

        </div>

        <!-- Geographic Presence & Keyword Cloud -->
        <div class="mt-14 pt-8 border-t border-[#2D2658]/10 text-center">
            <p class="text-[11px] font-mono uppercase tracking-wider text-[#686580]/85 leading-relaxed">
                <span class="font-bold text-[#161828]">ZONES D'INTERVENTION & PRESTATIONS AUDIOVISUELLES AU MAROC :</span><br class="hidden sm:inline">
                Agence de production audiovisuelle Casablanca &bull; Shooting photo corporate &bull; Film d'entreprise Rabat &bull; Photographe professionnel Tanger &bull; Spot publicitaire TV Marrakech &bull; Prises de vues par drone Agadir &bull; Vidéo marque employeur &bull; Aftermovie événementiel &bull; Packshot produit e-commerce
            </p>
        </div>

    </div>
</section>
