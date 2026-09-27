@extends('layouts.front')

@section('title', 'Réalisations Vidéo & Photo Casablanca | Portfolio SmartFilms Prod')
@section('meta_description', 'Découvrez nos réalisations audiovisuelles à Casablanca et au Maroc : production de films institutionnels, shooting photo corporate, capsules vidéo et spots publicitaires.')
@section('og_title', 'Réalisations Vidéo & Photo Casablanca | Portfolio SmartFilms Prod')
@section('og_description', 'Découvrez nos réalisations audiovisuelles à Casablanca : films institutionnels, reportages photo corporate et capsules vidéo de marque.')

@section('content')
<!-- PORTFOLIO HERO (CHAPTER: CINEMATIC DARK) -->
<section class="pt-32 sm:pt-40 pb-16 sm:pb-20 bg-[#080914] text-white relative overflow-hidden border-b border-white/10">
    <div class="absolute inset-0 bg-[radial-gradient(ellipse_80%_80%_at_50%_-20%,rgba(255,77,66,0.15),rgba(255,255,255,0))]"></div>
    
    <div class="max-w-[96rem] mx-auto px-6 sm:px-12 relative z-10">
        <div class="max-w-4xl space-y-6">
            <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-white/10 backdrop-blur-md border border-white/20 text-[11px] tracking-widest uppercase font-semibold text-[#B8BDE0]">
                <span class="w-2 h-2 rounded-full bg-[#FF4D42]"></span>
                <span>PORTFOLIO &bull; RÉALISATIONS</span>
            </div>

            <h1 class="text-4xl sm:text-6xl md:text-7xl font-bold tracking-tight leading-[1.05]">
                <span class="font-serif-italic font-normal block lowercase text-3xl sm:text-5xl md:text-6xl text-[#B8BDE0]">nos réalisations</span>
                <span class="uppercase font-sans block text-white">FILMS INSTITUTIONNELS & PHOTOS CASABLANCA</span>
            </h1>

            <p class="text-[#B8BDE0] text-lg sm:text-xl font-light max-w-2xl leading-relaxed">
                Une sélection de films institutionnels, shooting photo corporate, capsules vidéo pour réseaux sociaux et campagnes publicitaires réalisés pour des marques et institutions au Maroc.
            </p>
        </div>
    </div>
</section>

<!-- PORTFOLIO GRID & CATEGORY FILTER -->
<section class="py-24 bg-[#080914] text-white min-h-screen" aria-labelledby="portfolio-gallery-heading">
    <div class="max-w-[96rem] mx-auto px-6 sm:px-12">
        <h2 id="portfolio-gallery-heading" class="sr-only">Sélection de réalisations et productions audiovisuelles à Casablanca</h2>
        
        <!-- Filter Tabs (Accessible Tablist) -->
        <div class="flex flex-wrap items-center gap-3 pb-16 border-b border-white/10" role="tablist" aria-label="Filtrer les réalisations par catégorie">
            <button role="tab" aria-selected="true" onclick="filterPortfolio(event, 'all')" class="portfolio-filter-btn active px-6 py-2.5 rounded-full text-xs font-bold uppercase tracking-wider transition-all bg-[#FF4D42] text-white shadow-lg shadow-rose-500/20 focus:outline-none focus:ring-2 focus:ring-white">
                Tous les films ({{ $projects->count() }})
            </button>
            @foreach($categories as $category)
                <button role="tab" aria-selected="false" onclick="filterPortfolio(event, '{{ Str::slug($category) }}')" class="portfolio-filter-btn px-6 py-2.5 rounded-full text-xs font-bold uppercase tracking-wider transition-all bg-white/5 hover:bg-white/15 text-[#B8BDE0] hover:text-white border border-white/10 focus:outline-none focus:ring-2 focus:ring-[#FF4D42]">
                    {{ $category }}
                </button>
            @endforeach
        </div>

        <!-- 2-Column Editorial Grid -->
        <div id="portfolioGrid" class="grid grid-cols-1 md:grid-cols-2 gap-8 lg:gap-12 mt-16">
            @forelse($projects as $project)
                <article class="project-item group" data-category="{{ Str::slug($project->category) }}">
                    <a href="{{ route('project.show', $project->slug ?? 'dell-empowering-digital-leaders') }}" class="block" aria-label="Découvrir le projet {{ $project->title }} pour {{ $project->client_name ?? $project->client ?? 'Client' }}">
                        <div class="relative aspect-[16/10] rounded-3xl overflow-hidden bg-[#171936] border border-white/10 shadow-2xl transition-all duration-700 group-hover:border-[#FF4D42]/50 group-hover:shadow-[0_20px_50px_rgba(255,77,66,0.2)]">
                            
                            @if($project->thumbnail)
                                @php
                                    $portWebp = preg_replace('/\.(jpe?g|png)$/i', '.webp', $project->thumbnail);
                                @endphp
                                <picture>
                                    <source srcset="{{ $portWebp }}" type="image/webp">
                                    <img src="{{ $project->thumbnail }}" alt="{{ $project->title }} - Réalisation par SmartFilms Prod agence audiovisuelle Casablanca" loading="lazy" decoding="async" width="600" height="375" class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-105">
                                </picture>
                            @else
                                <div class="w-full h-full bg-gradient-to-br from-[#101229] to-[#171936] flex items-center justify-center">
                                    <i class="bi bi-film text-5xl text-white/20" aria-hidden="true"></i>
                                </div>
                            @endif

                            <div class="absolute inset-0 bg-gradient-to-t from-[#080914] via-[#080914]/20 to-transparent opacity-80 group-hover:opacity-60 transition-opacity"></div>

                            <!-- Center Play Action (Instant Fullscreen Player on Click) -->
                            <div class="absolute inset-0 flex items-center justify-center z-20">
                                <button type="button" 
                                        onclick="event.preventDefault(); event.stopPropagation(); openVideoModal('{{ $project->video_url }}', '{{ addslashes($project->title) }} • {{ addslashes($project->client_name ?? 'SmartFilms Prod') }}');"
                                        class="w-16 h-16 sm:w-20 sm:h-20 rounded-full bg-[#FF4D42] text-white flex items-center justify-center text-2xl sm:text-3xl shadow-[0_0_35px_rgba(255,77,66,0.65)] hover:scale-110 active:scale-95 transition-all duration-300 opacity-95 sm:opacity-0 sm:group-hover:opacity-100 cursor-pointer pointer-events-auto focus:outline-none"
                                        aria-label="Visionner en plein écran : {{ $project->title }}">
                                    <i class="bi bi-play-fill ml-0.5" aria-hidden="true"></i>
                                </button>
                            </div>

                            <!-- Category Badge -->
                            <div class="absolute top-6 left-6 z-10">
                                <span class="px-3.5 py-1.5 rounded-full bg-black/60 backdrop-blur-md border border-white/20 text-[10px] uppercase font-bold tracking-widest text-[#B8BDE0]">
                                    {{ $project->category ?? 'Film de Marque' }}
                                </span>
                            </div>

                            <!-- Year / Specs Badge -->
                            <div class="absolute top-6 right-6 z-10">
                                <span class="px-3 py-1 rounded-full bg-black/40 backdrop-blur-md border border-white/10 text-[10px] font-mono text-white/80">
                                    {{ $project->year ?? '2026' }}
                                </span>
                            </div>
                        </div>

                        <!-- Card Metadata -->
                        <div class="mt-4 sm:mt-6 flex flex-col sm:flex-row sm:items-baseline justify-between gap-2 sm:gap-4">
                            <div>
                                <span class="text-xs font-mono uppercase tracking-widest text-[#FF4D42] font-semibold block mb-1">
                                    {{ $project->client_name ?? $project->client ?? 'Client Studio' }}
                                </span>
                                <h3 class="text-xl sm:text-2xl font-bold tracking-tight text-white group-hover:text-[#FF4D42] transition-colors">
                                    {{ $project->title }}
                                </h3>
                            </div>
                            <span class="text-xs font-bold uppercase tracking-widest text-[#B8BDE0] group-hover:text-white group-hover:translate-x-1 transition-all flex items-center gap-1.5 self-start sm:self-auto">
                                <span>Étude de cas</span>
                                <i class="bi bi-arrow-right" aria-hidden="true"></i>
                            </span>
                        </div>
                    </a>
                </article>
            @empty
                <div class="col-span-2 text-center py-20">
                    <p class="text-[#B8BDE0] text-lg">Aucun projet disponible pour le moment.</p>
                </div>
            @endforelse
        </div>
    </div>
</section>

@push('scripts')
<script>
function filterPortfolio(e, cat) {
    const items = document.querySelectorAll('.project-item');
    const buttons = document.querySelectorAll('.portfolio-filter-btn');

    buttons.forEach(btn => {
        btn.classList.remove('active', 'bg-[#FF4D42]', 'text-white');
        btn.classList.add('bg-white/5', 'text-[#B8BDE0]');
        btn.setAttribute('aria-selected', 'false');
    });

    const targetBtn = e.currentTarget || e.target;
    targetBtn.classList.add('active', 'bg-[#FF4D42]', 'text-white');
    targetBtn.classList.remove('bg-white/5', 'text-[#B8BDE0]');
    targetBtn.setAttribute('aria-selected', 'true');

    items.forEach(item => {
        if (cat === 'all' || item.getAttribute('data-category') === cat) {
            item.style.display = 'block';
        } else {
            item.style.display = 'none';
        }
    });
}
</script>
@endpush
@endsection
