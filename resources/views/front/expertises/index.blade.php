@extends('layouts.front')

@section('title', 'Expertises Audiovisuelles & Photo Casablanca | SmartFilms Prod')
@section('meta_description', 'Découvrez les expertises de notre agence audiovisuelle à Casablanca : production de films institutionnels, shooting photo corporate, capsules vidéo et spots publicitaires.')
@section('og_title', 'Expertises Audiovisuelles & Photo Casablanca | SmartFilms Prod')
@section('og_description', 'Production de films institutionnels, shooting photo corporate, capsules vidéo pour réseaux sociaux et spots publicitaires à Casablanca.')

@section('content')
<!-- HERO SECTION -->
<section class="pt-40 pb-20 bg-[#080914] text-white relative overflow-hidden border-b border-white/10">
    <div class="absolute inset-0 bg-[radial-gradient(ellipse_80%_80%_at_50%_-20%,rgba(255,77,66,0.15),rgba(255,255,255,0))]"></div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="max-w-4xl space-y-6">
            <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-white/10 backdrop-blur-md border border-white/20 text-[11px] tracking-widest uppercase font-semibold text-[#B8BDE0]">
                <span class="w-2 h-2 rounded-full bg-[#FF4D42]"></span>
                <span>DISCIPLINES & SAVOIR-FAIRE</span>
            </div>

            <h1 class="text-4xl sm:text-6xl md:text-7xl font-bold tracking-tight leading-[1.05]">
                <span class="font-serif-italic font-normal block lowercase text-3xl sm:text-5xl md:text-6xl text-[#B8BDE0]">nos expertises audiovisuelles</span>
                <span class="uppercase font-sans block text-white">FILMS INSTITUTIONNELS & CAPSULES VIDÉO</span>
            </h1>

            <p class="text-[#B8BDE0] text-lg sm:text-xl font-light max-w-2xl leading-relaxed">
                Pôles d'excellence audiovisuelle et photographique à Casablanca pour concevoir, tourner et diffuser des contenus à fort impact pour votre marque au Maroc.
            </p>
        </div>
    </div>
</section>

<!-- 5 POLES DETAILED SECTION -->
<section class="py-24 bg-[#080914] text-white" aria-labelledby="poles-heading">
    <h2 id="poles-heading" class="sr-only">Nos pôles d'expertise audiovisuelle et photo</h2>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-24">
        
        @php
            $pillars = [
                [
                    'num' => '01',
                    'slug' => 'film-corporate',
                    'title' => 'Production de Films Institutionnels',
                    'tagline' => 'Storytelling de marque & valorisation industrielle',
                    'desc' => 'Des films de référence pour présenter vos infrastructures, fédérer vos collaborateurs et incarner l\'ambition de votre groupe auprès de vos investisseurs et partenaires.',
                    'deliverables' => ['Film manifeste d\'entreprise', 'Reportages immersifs sur site', 'Portraits de dirigeants & experts', 'Teasers LinkedIn & relations presse'],
                    'image' => '/uploads/cinema_corporate_film.png'
                ],
                [
                    'num' => '02',
                    'slug' => 'shooting-photo-corporate',
                    'title' => 'Shooting Photo Corporate & Portraits',
                    'tagline' => 'Photographe professionnel à Casablanca',
                    'desc' => 'Portraits de dirigeants, trombinoscopes d\'équipes, reportages industriels et packshots produits e-commerce pour affirmer une image de marque d\'excellence.',
                    'deliverables' => ['Portraits exécutifs studio mobile', 'Trombinoscopes d\'équipes harmonisés', 'Reportages photo en immersion', 'Packshots produits haute définition'],
                    'image' => '/uploads/expertise_04_corporate.jpg'
                ],
                [
                    'num' => '03',
                    'slug' => 'contenus-sociaux',
                    'title' => 'Capsules Vidéo & Réseaux Sociaux',
                    'tagline' => 'Formats verticaux 9:16 & Reels percutants',
                    'desc' => 'Création de capsules vidéo engageantes et dynamiques pensées pour capter l\'attention et convertir sur Instagram Reels, TikTok et LinkedIn.',
                    'deliverables' => ['Packs de capsules vidéo 9:16', 'Formats snack content pour LinkedIn', 'Montages dynamiques sous-titrés', 'Stratégie de diffusion sociale'],
                    'image' => '/uploads/expertise_03_social.jpg'
                ],
                [
                    'num' => '04',
                    'slug' => 'spot-publicitaire',
                    'title' => 'Spot Publicitaire & Brand Films',
                    'tagline' => 'Campagnes TV, cinéma et activations digitales',
                    'desc' => 'Des créations percutantes pensées pour marquer les esprits en quelques secondes. Direction artistique soignée, casting sur-mesure et sound design immersif.',
                    'deliverables' => ['Spots TV & Cinéma 4K/8K', 'Campagnes social media 9:16', 'Films manifestes de marque', 'Déclinaisons publicitaires digitales'],
                    'image' => '/uploads/studio_commercial_spot.png'
                ],
                [
                    'num' => '05',
                    'slug' => 'production-evenementielle',
                    'title' => 'Captation Événementielle & Aftermovie',
                    'tagline' => 'Régie live multi-caméras & aftermovies de prestige',
                    'desc' => 'Immortalisez vos sommets internationaux, lancements de produits et conventions avec une régie de direct fluide et des aftermovies livrés en un temps record.',
                    'deliverables' => ['Aftermovie officiel dynamique', 'Same-Day Edit pour réseaux sociaux', 'Captation intégrale des keynotes', 'Live streaming sécurisé multi-flux'],
                    'image' => '/uploads/expertise_06_events.jpg'
                ]
            ];
        @endphp

        @foreach($pillars as $idx => $p)
            <article class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center {{ $idx % 2 == 1 ? 'lg:flex-row-reverse' : '' }}" aria-labelledby="pillar-title-{{ $p['slug'] }}">
                <div class="lg:col-span-6 space-y-6 {{ $idx % 2 == 1 ? 'lg:order-2' : '' }}">
                    <div class="flex items-center gap-4">
                        <span class="text-3xl font-mono font-black text-[#FF4D42]" aria-hidden="true">{{ $p['num'] }}</span>
                        <span class="h-px w-12 bg-white/20" aria-hidden="true"></span>
                        <span class="text-xs uppercase font-mono tracking-widest text-[#B8BDE0]">{{ $p['tagline'] }}</span>
                    </div>

                    <h3 id="pillar-title-{{ $p['slug'] }}" class="text-3xl sm:text-4xl font-bold tracking-tight text-white">
                        {{ $p['title'] }}
                    </h3>

                    <p class="text-[#B8BDE0] text-base font-light leading-relaxed">
                        {{ $p['desc'] }}
                    </p>

                    <div class="space-y-2 pt-2">
                        <span class="text-xs font-mono uppercase text-slate-400 font-bold block">Livrables Clés :</span>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-2 text-xs text-slate-300">
                            @foreach($p['deliverables'] as $del)
                                <div class="flex items-center gap-2">
                                    <i class="bi bi-check2 text-[#FF4D42]" aria-hidden="true"></i>
                                    <span>{{ $del }}</span>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="pt-4 flex items-center gap-4">
                        <a href="{{ url('/expertises/' . $p['slug']) }}" class="bg-[#FF4D42] hover:bg-[#E94239] text-white px-7 py-3.5 rounded-full text-xs font-bold uppercase tracking-wider transition-all shadow-lg hover:scale-105 flex items-center gap-2" aria-label="Découvrir l'expertise {{ $p['title'] }}">
                            <span>Découvrir l'expertise</span>
                            <i class="bi bi-arrow-right" aria-hidden="true"></i>
                        </a>
                        <a href="{{ route('portfolio') }}" class="glass-dark hover:bg-white/15 text-white px-6 py-3.5 rounded-full text-xs font-bold uppercase tracking-wider transition-all border border-white/10" aria-label="Voir les réalisations du portfolio">
                            <span>Voir les films</span>
                        </a>
                    </div>
                </div>

                <div class="lg:col-span-6 {{ $idx % 2 == 1 ? 'lg:order-1' : '' }}">
                    <div class="relative aspect-[16/10] rounded-3xl overflow-hidden bg-[#171936] border border-white/10 shadow-2xl group">
                        @php
                            $expImg = $p['image'];
                            $expWebp = preg_replace('/\.(jpe?g|png)$/i', '.webp', $expImg);
                        @endphp
                        <picture>
                            <source srcset="{{ $expWebp }}" type="image/webp">
                            <img src="{{ $expImg }}" alt="{{ $p['title'] }} — Production audiovisuelle et photographe professionnel SmartFilms Prod Casablanca" loading="lazy" decoding="async" width="800" height="500" class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-105">
                        </picture>
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
                    </div>
                </div>
            </article>
        @endforeach

    </div>
</section>

<!-- CALL TO ACTION ESTIMATOR -->
<section class="py-20 bg-[#101229] border-t border-white/10 text-center" aria-labelledby="cta-heading">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 space-y-6">
        <h2 id="cta-heading" class="text-3xl sm:text-4xl font-black text-white uppercase">UN PROJET AUDIOVISUEL EN VUE ?</h2>
        <p class="text-[#B8BDE0] text-base font-light max-w-xl mx-auto">
            Discutez de vos objectifs avec nos réalisateurs et recevez un chiffrage prévisionnel adapté sous 24h.
        </p>
        <div class="pt-4 flex flex-wrap items-center justify-center gap-4">
            <a href="{{ url('/#estimateur') }}" class="bg-[#FF4D42] hover:bg-[#E94239] text-white px-8 py-4 rounded-full text-xs font-bold uppercase tracking-wider transition-all shadow-xl hover:scale-105">
                Estimer mon projet
            </a>
            <a href="{{ url('/contact') }}" class="glass-dark text-white px-8 py-4 rounded-full text-xs font-bold uppercase tracking-wider transition-all border border-white/20 hover:bg-white/20">
                Nous contacter
            </a>
        </div>
    </div>
</section>
@endsection
