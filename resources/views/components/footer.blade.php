<!-- CHAPTER 09: STUDIO FOOTER (#2D2658 DARK LOGO PURPLE) -->
<footer class="bg-[#2D2658] text-[#ECE9F3] border-t border-white/10 py-16 text-xs">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 lg:gap-10">
            
            <!-- Col 1: Studio Brand -->
            <div class="space-y-4">
                <a href="{{ route('home') }}" class="inline-block">
                    <picture>
                        <source srcset="/uploads/smartfilms_logo_white.webp" type="image/webp">
                        <img src="/uploads/smartfilms_logo_white.png" alt="SmartFilms Prod - Agence de production audiovisuelle, shooting photo corporate et films institutionnels à Casablanca" class="h-10 w-auto" loading="lazy" decoding="async" width="160" height="40" style="height: 40px; max-height: 40px; width: auto;">
                    </picture>
                </a>
                <p class="text-[#ECE9F3]/80 leading-relaxed text-xs max-w-xs">
                    Agence audiovisuelle et photographe professionnel à Casablanca. Production de films institutionnels, shooting photo corporate, capsules vidéo et spots publicitaires au Maroc.
                </p>
                <div class="flex items-center gap-3 pt-2">
                    <span class="w-2.5 h-2.5 rounded-full bg-emerald-400 animate-pulse"></span>
                    <span class="text-[11px] font-mono uppercase tracking-widest text-[#FADDE3]">Casablanca &bull; Interventions Partout au Maroc</span>
                </div>
            </div>

            <!-- Col 2: Navigation & Expertises -->
            <div>
                <h4 class="font-bold text-white uppercase tracking-widest text-xs mb-4">EXPERTISES</h4>
                <ul class="space-y-2.5 text-[#ECE9F3]/80">
                    <li><a href="{{ url('/expertises/production-audiovisuelle') }}" class="hover:text-[#FF5A68] transition-colors">Films Institutionnels & Vidéo</a></li>
                    <li><a href="{{ url('/expertises/shooting-photo-corporate') }}" class="hover:text-[#FF5A68] transition-colors">Photographe Casablanca & Shooting Photo</a></li>
                    <li><a href="{{ url('/expertises/contenus-sociaux') }}" class="hover:text-[#FF5A68] transition-colors">Capsules Vidéo & Réseaux Sociaux</a></li>
                    <li><a href="{{ url('/expertises/publicite-campagnes') }}" class="hover:text-[#FF5A68] transition-colors">Spot Publicitaire TV & Digital</a></li>
                    <li><a href="{{ url('/expertises/evenement-live') }}" class="hover:text-[#FF5A68] transition-colors">Captation Événementielle & Aftermovie</a></li>
                    <li><a href="{{ url('/expertises/strategie-conception') }}" class="hover:text-[#FF5A68] transition-colors">Stratégie & Conception Audiovisuelle</a></li>
                </ul>
            </div>

            <!-- Col 3: Direct Contact -->
            <div>
                <h4 class="font-bold text-white uppercase tracking-widest text-xs mb-4">BUREAUX & PRODUCTION</h4>
                <ul class="space-y-2.5 text-[#ECE9F3]/80">
                    <li><i class="bi bi-geo-alt text-[#FF5A68] mr-2"></i> {{ $settings['address'] ?? 'Villa Brion 7, rue Khadija courbée Khouailid 20250, Casablanca 20250' }}</li>
                    <li><i class="bi bi-telephone text-[#FF5A68] mr-2"></i> <a href="tel:{{ str_replace(' ', '', $settings['phone'] ?? '+212617202345') }}" class="hover:text-[#FF5A68]">{{ $settings['phone'] ?? '+212 6 17 20 23 45' }}</a></li>
                    <li><i class="bi bi-envelope text-[#FF5A68] mr-2"></i> <a href="mailto:{{ $settings['email'] ?? 'contact@smartfilmsprod.com' }}" class="hover:text-[#FF5A68]">{{ $settings['email'] ?? 'contact@smartfilmsprod.com' }}</a></li>
                    <li><i class="bi bi-shield-check text-[#FF5A68] mr-2"></i> Devis gratuit sous 24h ouvrées</li>
                </ul>
            </div>

            <!-- Col 4: Studio Hours & Socials -->
            <div>
                <h4 class="font-bold text-white uppercase tracking-widest text-xs mb-4">HORAIRES D'OUVERTURE</h4>
                <p class="text-[#ECE9F3]/80 leading-relaxed">
                    Lundi au Vendredi<br>
                    09:00 — 19:00 (GMT+1)
                </p>
                <div class="mt-4 pt-4 border-t border-white/15 flex items-center gap-3">
                    <a href="https://linkedin.com" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn SmartFilms" class="w-8 h-8 rounded-full bg-white/10 hover:bg-[#FF5A68] text-white flex items-center justify-center text-sm transition-colors">
                        <i class="bi bi-linkedin"></i>
                    </a>
                    <a href="https://instagram.com" target="_blank" rel="noopener noreferrer" aria-label="Instagram SmartFilms" class="w-8 h-8 rounded-full bg-white/10 hover:bg-[#FF5A68] text-white flex items-center justify-center text-sm transition-colors">
                        <i class="bi bi-instagram"></i>
                    </a>
                    <a href="https://youtube.com" target="_blank" rel="noopener noreferrer" aria-label="YouTube SmartFilms" class="w-8 h-8 rounded-full bg-white/10 hover:bg-[#FF5A68] text-white flex items-center justify-center text-sm transition-colors">
                        <i class="bi bi-youtube"></i>
                    </a>
                    <a href="https://wa.me/{{ $settings['whatsapp'] ?? '212617202345' }}" target="_blank" rel="noopener noreferrer" aria-label="WhatsApp SmartFilms" class="w-8 h-8 rounded-full bg-emerald-500 hover:bg-emerald-600 text-white flex items-center justify-center text-sm transition-colors">
                        <i class="bi bi-whatsapp"></i>
                    </a>
                </div>
            </div>
        </div>
        
        <div class="pt-8 border-t border-white/10 flex flex-col sm:flex-row justify-between items-center gap-4 text-[#ECE9F3]/60 text-[11px] font-mono">
            <p>© {{ date('Y') }} SmartFilms Prod. Tous droits réservés.</p>
            <p>Casablanca, Maroc &bull; Agence Audiovisuelle, Photographe & Production de Films Institutionnels</p>
        </div>
    </div>
</footer>
