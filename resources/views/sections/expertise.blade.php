<!-- CHAPTER 04: NOS EXPERTISES (EDITORIAL MOCKUP CARDS) -->
<section id="expertises" class="bg-[#F8F6F1] text-[#252238] py-20 md:py-32 relative overflow-hidden border-t border-b border-[#2D2658]/10">
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        
        <!-- Section Header with Mockup Editorial Composition -->
        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-end mb-12 sm:mb-16 gap-6">
            <div>
                <div class="flex items-center gap-3 mb-3">
                    <span class="text-xs font-mono font-bold tracking-[0.2em] text-[#FF5A68] uppercase">
                        04 — NOS EXPERTISES & SERVICES
                    </span>
                    <span class="w-8 h-[1px] bg-[#FF5A68]/40"></span>
                </div>
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-black uppercase tracking-tight text-[#161828] leading-[1.15]">
                    PRODUCTION AUDIOVISUELLE, SHOOTING PHOTO & DRONE À CASABLANCA.
                </h2>
                <p class="text-[#686580] text-sm sm:text-base font-light max-w-xl leading-relaxed mt-2">
                    De la conception narrative à la diffusion : films d'entreprise, reportages photo corporate, packshots produits et tournages aériens à Casablanca et partout au Maroc.
                </p>
            </div>

            <div>
                <a href="{{ url('/expertises') }}" class="inline-flex items-center gap-2 text-xs sm:text-sm font-bold uppercase tracking-wider text-[#FF5A68] hover:text-[#2D2658] transition-colors group">
                    <span>TOUTES NOS EXPERTISES</span>
                    <i class="bi bi-arrow-right group-hover:translate-x-1 transition-transform"></i>
                </a>
            </div>
        </div>

        @php
            $iconMap = [
                1 => 'bi-lightbulb',
                2 => 'bi-camera-video',
                3 => 'bi-phone',
                4 => 'bi-camera',
                5 => 'bi-megaphone',
                6 => 'bi-broadcast',
            ];

            $expertisesList = [
                [
                    'order' => 1,
                    'title' => 'STRATÉGIE & CONCEPTION',
                    'slug' => 'strategie-conception',
                    'hero_desc' => 'Storytelling de marque, écriture scénaristique et direction artistique : nous sculptons des récits percutants pour vos campagnes de communication.',
                    'image' => '/uploads/expertise_01_strategy.jpg',
                    'alt' => 'Stratégie de communication et conception audiovisuelle Casablanca',
                ],
                [
                    'order' => 2,
                    'title' => 'PRODUCTION AUDIOVISUELLE',
                    'slug' => 'production-audiovisuelle',
                    'hero_desc' => 'Films d\'entreprise, vidéos corporate institutionnelles et reportages de marque en 4K/6K cinéma pour valoriser votre société au Maroc.',
                    'image' => '/uploads/expertise_02_production.jpg',
                    'alt' => 'Agence de production audiovisuelle et film d\'entreprise Casablanca Maroc',
                ],
                [
                    'order' => 3,
                    'title' => 'CONTENUS SOCIAUX & REELS',
                    'slug' => 'contenus-sociaux',
                    'hero_desc' => 'Création de capsules vidéos percutantes au format vertical 9:16 pour Instagram Reels, TikTok et LinkedIn afin de booster votre visibilité.',
                    'image' => '/uploads/expertise_03_social.jpg',
                    'alt' => 'Création de contenu vidéo réseaux sociaux Reels TikTok Casablanca',
                ],
                [
                    'order' => 4,
                    'title' => 'SHOOTING PHOTO CORPORATE',
                    'slug' => 'shooting-photo-corporate',
                    'hero_desc' => 'Photographe professionnel à Casablanca : portraits de dirigeants, trombinoscopes d\'équipes, packshots produits e-commerce et reportages industriels.',
                    'image' => '/uploads/expertise_04_corporate.jpg',
                    'alt' => 'Photographe corporate et shooting photo d\'entreprise Casablanca Maroc',
                ],
                [
                    'order' => 5,
                    'title' => 'PUBLICITÉ & CAMPAGNES',
                    'slug' => 'publicite-campagnes',
                    'hero_desc' => 'Conception et production de spots publicitaires TV et digitaux à fort impact émotionnel pour vos lancements de produits et campagnes au Maroc.',
                    'image' => '/uploads/expertise_05_advertising.jpg',
                    'alt' => 'Réalisation de spots publicitaires TV et digitaux Maroc',
                ],
                [
                    'order' => 6,
                    'title' => 'ÉVÉNEMENT, DRONE & LIVE',
                    'slug' => 'evenement-live',
                    'hero_desc' => 'Captation d\'événements, aftermovies dynamiques, régie multi-caméras et prises de vues aériennes par drone 8K homologué au Maroc.',
                    'image' => '/uploads/expertise_06_events.jpg',
                    'alt' => 'Captation événementielle aftermovie et tournage drone Casablanca Maroc',
                ],
            ];
        @endphp

        <!-- 6 Expertises Cards Grid (Sleek Dark Cards with Elegant Passe-Partout Image Framing) -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
            @foreach($expertisesList as $idx => $item)
                @php
                    $orderNum = is_object($item) ? $item->order : ($item['order'] ?? ($idx + 1));
                    $title = is_object($item) ? $item->title : $item['title'];
                    $slug = is_object($item) ? $item->slug : $item['slug'];
                    $desc = is_object($item) ? $item->hero_desc : $item['hero_desc'];
                    $image = is_object($item) ? ($item->image ?? '/uploads/expertise_01_strategy.jpg') : ($item['image'] ?? '/uploads/expertise_01_strategy.jpg');
                    $imgAlt = is_object($item) ? ($item->title . ' Casablanca') : ($item['alt'] ?? $title);
                    $icon = $iconMap[$orderNum] ?? 'bi-star';
                @endphp

                <div class="group relative bg-[#090D1D] rounded-[24px] overflow-hidden flex flex-col justify-between border border-white/[0.08] shadow-[0_16px_36px_-10px_rgba(15,23,42,0.2)] hover:shadow-[0_24px_50px_-10px_rgba(15,23,42,0.35),0_0_0_1px_rgba(255,90,104,0.35)] hover:-translate-y-1.5 transition-all duration-400 ease-out">
                    
                    <!-- Elegant Passe-Partout Framed Image Container -->
                    <div class="p-3 sm:p-3.5 pb-0">
                        <div class="relative w-full aspect-[16/10] rounded-[18px] overflow-hidden bg-[#060813] border border-white/10 shadow-inner">
                            <img src="{{ $image }}" alt="{{ $imgAlt }}" class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-700 ease-out">
                            
                            <!-- Subtle cinematic contrast vignette (Edges only, no black wash over the image) -->
                            <div class="absolute inset-0 bg-gradient-to-t from-black/40 via-transparent to-black/15 pointer-events-none"></div>

                            <!-- Small Circular Category Icon Badge -->
                            <div class="absolute bottom-3 left-3 w-7 h-7 rounded-full bg-black/65 border border-white/25 backdrop-blur-md flex items-center justify-center text-white/90 text-xs shadow-md group-hover:border-[#FF5A68] group-hover:text-[#FF5A68] transition-colors">
                                <i class="bi {{ $icon }}"></i>
                            </div>
                        </div>
                    </div>

                    <!-- Card Body Content -->
                    <div class="p-6 sm:p-7 pt-4 flex-1 flex flex-col justify-between space-y-4">
                        <div class="space-y-2.5">
                            <!-- Title -->
                            <h3 class="text-base sm:text-lg font-bold uppercase tracking-tight text-white group-hover:text-[#FF5A68] transition-colors leading-snug">
                                <a href="{{ url('/expertises/' . $slug) }}">
                                    @if($orderNum == 2)
                                        PRODUCTION <span class="text-[#FF5A68]">AUDIO</span>VISUELLE
                                    @else
                                        {{ $title }}
                                    @endif
                                </a>
                            </h3>

                            <!-- Description -->
                            <p class="text-[#8E8B9F] text-xs sm:text-[13px] font-light leading-relaxed">
                                {{ $desc }}
                            </p>
                        </div>

                        <!-- Bottom Action Link: DÉCOUVRIR → -->
                        <div class="pt-2 flex items-center justify-between">
                            <a href="{{ url('/expertises/' . $slug) }}" class="inline-flex items-center gap-2 text-xs font-bold uppercase tracking-wider text-white group-hover:text-[#FF5A68] transition-colors">
                                <span>DÉCOUVRIR</span>
                                <i class="bi bi-arrow-right group-hover:translate-x-1.5 transition-transform duration-300"></i>
                            </a>
                        </div>
                    </div>

                </div>
            @endforeach
        </div>

    </div>
</section>
