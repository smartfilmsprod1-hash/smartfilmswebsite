<!-- CHAPTER 04: NOS EXPERTISES (EDITORIAL MOCKUP CARDS) -->
<section id="expertises" class="bg-[#F8F6F1] text-[#252238] py-20 md:py-32 relative overflow-hidden border-t border-b border-[#2D2658]/10">
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        
        <!-- Section Header with Mockup Editorial Composition -->
        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-end mb-12 sm:mb-16 gap-6">
            <div>
                <div class="flex items-center gap-3 mb-3">
                    <span class="text-xs font-mono font-bold tracking-[0.2em] text-[#FF5A68] uppercase">
                        04 — NOS EXPERTISES
                    </span>
                    <span class="w-8 h-[1px] bg-[#FF5A68]/40"></span>
                </div>
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-black uppercase tracking-tight text-[#161828] leading-[1.15]">
                    PRODUCTION VIDÉO, SHOOTING PHOTO & DRONE.
                </h2>
                <p class="text-[#686580] text-sm sm:text-base font-light max-w-xl leading-relaxed mt-2">
                    De la conception narrative à la diffusion : films corporate, reportages photo d'entreprise et tournages aériens à Casablanca et partout au Maroc.
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
            // Fetch dynamically from Database (editable via Admin Panel /admin/expertises)
            $dbExpertises = \App\Models\Expertise::where('is_active', true)->orderBy('order')->get();

            $iconMap = [
                1 => 'bi-lightbulb',
                2 => 'bi-camera-video',
                3 => 'bi-phone',
                4 => 'bi-camera',
                5 => 'bi-megaphone',
                6 => 'bi-broadcast',
            ];

            if ($dbExpertises->isEmpty()) {
                $expertisesList = [
                    [
                        'order' => 1,
                        'title' => 'STRATÉGIE & CONCEPTION',
                        'slug' => 'strategie-conception',
                        'hero_desc' => 'Analyse, storytelling, direction artistique : une vision sur mesure pour des contenus qui ont du sens.',
                        'image' => '/uploads/expertise_01_strategy.jpg',
                    ],
                    [
                        'order' => 2,
                        'title' => 'PRODUCTION AUDIOVISUELLE',
                        'slug' => 'production-audiovisuelle',
                        'hero_desc' => 'Du tournage à la post-production, nous assurons la réalisation de films sur mesure, avec un haut niveau d\'exigence.',
                        'image' => '/uploads/expertise_02_production.jpg',
                    ],
                    [
                        'order' => 3,
                        'title' => 'CONTENUS SOCIAUX',
                        'slug' => 'contenus-sociaux',
                        'hero_desc' => 'Des formats adaptés aux réseaux sociaux pour engager vos communautés et renforcer votre visibilité.',
                        'image' => '/uploads/expertise_03_social.jpg',
                    ],
                    [
                        'order' => 4,
                        'title' => 'SHOOTING PHOTO CORPORATE',
                        'slug' => 'shooting-photo-corporate',
                        'hero_desc' => 'Portraits de dirigeants, reportages industriels, packshots produits et banques d\'images sur mesure à Casablanca et au Maroc.',
                        'image' => '/uploads/expertise_04_corporate.jpg',
                    ],
                    [
                        'order' => 5,
                        'title' => 'PUBLICITÉ & CAMPAGNES',
                        'slug' => 'publicite-campagnes',
                        'hero_desc' => 'Des campagnes créatives et percutantes pour faire rayonner vos marques et atteindre vos objectifs.',
                        'image' => '/uploads/expertise_05_advertising.jpg',
                    ],
                    [
                        'order' => 6,
                        'title' => 'ÉVÉNEMENT & LIVE',
                        'slug' => 'evenement-live',
                        'hero_desc' => 'Captation, diffusion, régie multi-caméras... Nous donnons une autre dimension à vos événements.',
                        'image' => '/uploads/expertise_06_events.jpg',
                    ],
                ];
            } else {
                $expertisesList = $dbExpertises;
            }
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
                    $icon = $iconMap[$orderNum] ?? 'bi-star';
                @endphp

                <div class="group relative bg-[#090D1D] rounded-[24px] overflow-hidden flex flex-col justify-between border border-white/[0.08] shadow-[0_16px_36px_-10px_rgba(15,23,42,0.2)] hover:shadow-[0_24px_50px_-10px_rgba(15,23,42,0.35),0_0_0_1px_rgba(255,90,104,0.35)] hover:-translate-y-1.5 transition-all duration-400 ease-out">
                    
                    <!-- Elegant Passe-Partout Framed Image Container -->
                    <div class="p-3 sm:p-3.5 pb-0">
                        <div class="relative w-full aspect-[16/10] rounded-[18px] overflow-hidden bg-[#060813] border border-white/10 shadow-inner">
                            <img src="{{ $image }}" alt="{{ $title }}" class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-700 ease-out">
                            
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
