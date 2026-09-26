@extends('layouts.front')

@section('title', 'Blog Audiovisuel & Photographie Casablanca | SmartFilms Prod')
@section('meta_description', 'Conseils, tendances et guides sur la production de films institutionnels, capsules vidéo pour réseaux sociaux et photographie corporate à Casablanca.')
@section('og_title', 'Blog Audiovisuel & Photographie Casablanca | SmartFilms Prod')
@section('og_description', 'Tendances, astuces de réalisation et conseils d\'experts en production de films d\'entreprise et shooting photo à Casablanca.')

@section('content')
<!-- BLOG HERO -->
<section class="pt-36 sm:pt-44 pb-16 sm:pb-24 bg-[#080914] text-white relative overflow-hidden border-b border-white/10">
    <div class="absolute inset-0 bg-[radial-gradient(ellipse_80%_80%_at_50%_-20%,rgba(255,90,104,0.18),rgba(255,255,255,0))]"></div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="max-w-3xl space-y-5">
            <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-white/10 backdrop-blur-md border border-white/20 text-[11px] tracking-widest uppercase font-mono font-bold text-[#FADDE3]">
                <span class="w-2 h-2 rounded-full bg-[#FF5A68] animate-pulse"></span>
                <span>INSIGHTS &bull; TENDANCES & ANALYSES</span>
            </div>

            <h1 class="text-4xl sm:text-5xl md:text-6xl font-black tracking-tight leading-[1.1] uppercase">
                FILMS INSTITUTIONNELS, PHOTO & <br>
                <span class="text-[#FF5A68]">CAPSULES VIDÉO CASABLANCA.</span>
            </h1>

            <p class="text-[#8E8B9F] text-base sm:text-lg font-light max-w-2xl leading-relaxed">
                Analyses de tendances, guides de production et retours d'expérience partagés par notre agence audiovisuelle et photographes à Casablanca.
            </p>
        </div>
    </div>
</section>

<!-- BLOG ARTICLES GRID -->
<section class="py-20 md:py-28 bg-[#F8F6F1] text-[#252238] min-h-screen relative" aria-labelledby="articles-heading">
    <h2 id="articles-heading" class="sr-only">Articles, guides et analyses de l'agence SmartFilms Prod</h2>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($articles as $article)
                <article class="group relative bg-[#090D1D] rounded-[24px] overflow-hidden flex flex-col justify-between border border-white/[0.08] shadow-[0_16px_36px_-10px_rgba(15,23,42,0.18)] hover:shadow-[0_24px_50px_-10px_rgba(15,23,42,0.32),0_0_0_1px_rgba(255,90,104,0.35)] hover:-translate-y-1.5 transition-all duration-400 ease-out">
                    
                    <!-- Framed Passe-Partout Visual Container -->
                    <div class="p-3.5 pb-0">
                        <div class="relative w-full aspect-[16/10] rounded-[18px] overflow-hidden bg-[#060813] border border-white/10 shadow-inner">
                            @php
                                $artImg = $article['image'];
                                $artWebp = preg_replace('/\.(jpe?g|png)$/i', '.webp', $artImg);
                            @endphp
                            <picture>
                                <source srcset="{{ $artWebp }}" type="image/webp">
                                <img src="{{ $artImg }}" alt="{{ $article['title'] }} — Guide et conseils par SmartFilms Prod agence audiovisuelle Casablanca" loading="lazy" decoding="async" width="600" height="375" class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-700 ease-out">
                            </picture>
                            
                            <!-- Vignette -->
                            <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent pointer-events-none"></div>

                            <!-- Category Badge -->
                            <div class="absolute top-3 left-3 px-3 py-1 rounded-full bg-black/60 backdrop-blur-md border border-white/20 text-[10px] font-mono uppercase tracking-wider text-white font-semibold">
                                {{ $article['category'] }}
                            </div>
                        </div>
                    </div>

                    <!-- Article Body -->
                    <div class="p-6 sm:p-7 pt-4 flex-1 flex flex-col justify-between space-y-4">
                        <div class="space-y-3">
                            <div class="flex items-center gap-3 text-[11px] font-mono text-[#8E8B9F]">
                                <span>{{ $article['date'] }}</span>
                                <span>&bull;</span>
                                <span class="flex items-center gap-1">
                                    <i class="bi bi-clock" aria-hidden="true"></i> {{ $article['read_time'] }}
                                </span>
                            </div>

                            <h3 class="text-base sm:text-lg font-bold text-white group-hover:text-[#FF5A68] transition-colors leading-snug">
                                {{ $article['title'] }}
                            </h3>

                            <p class="text-[#8E8B9F] text-xs sm:text-[13px] font-light leading-relaxed">
                                {{ $article['excerpt'] }}
                            </p>
                        </div>

                        <!-- Read Link -->
                        <div class="pt-3 border-t border-white/10 flex items-center justify-between">
                            <span class="inline-flex items-center gap-2 text-xs font-bold uppercase tracking-wider text-white group-hover:text-[#FF5A68] transition-colors">
                                <span>Lire l'article</span>
                                <i class="bi bi-arrow-right group-hover:translate-x-1.5 transition-transform duration-300" aria-hidden="true"></i>
                            </span>
                        </div>
                    </div>

                </article>
            @endforeach
        </div>

        <!-- Newsletter / Contact Teaser Box -->
        <aside class="mt-20 rounded-[28px] p-8 sm:p-12 bg-white border border-[#2D2658]/10 shadow-xl flex flex-col lg:flex-row justify-between items-center gap-8" aria-label="Accompagnement de projet audiovisuel">
            <div class="max-w-xl space-y-2">
                <span class="text-xs font-mono font-bold tracking-[0.2em] text-[#FF5A68] uppercase block">
                    VOTRE PROJET AUDIOVISUEL
                </span>
                <h2 class="text-2xl sm:text-3xl font-black uppercase tracking-tight text-[#161828]">
                    Prêt à donner une dimension cinématographique à votre marque ?
                </h2>
                <p class="text-[#686580] text-sm font-light leading-relaxed">
                    Échangez avec nos producteurs à Casablanca pour élaborer votre prochaine campagne vidéo.
                </p>
            </div>

            <div>
                <a href="{{ route('contact') }}" class="inline-flex items-center gap-3 px-8 py-4 rounded-full bg-[#FF5A68] hover:bg-[#E84554] text-white font-bold text-xs uppercase tracking-wider transition-all shadow-lg shadow-rose-500/20 hover:-translate-y-0.5" aria-label="Échanger sur votre projet de production audiovisuelle">
                    <span>Échanger sur votre projet</span>
                    <i class="bi bi-arrow-right" aria-hidden="true"></i>
                </a>
            </div>
        </aside>

    </div>
</section>
@endsection
