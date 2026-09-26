@extends('layouts.front')

@section('title', ($project->seo_title ?? $project->title) . ' | Agence Audiovisuelle Casablanca | SmartFilms')
@section('meta_description', $project->seo_description ?? ($project->description ? Str::limit(strip_tags($project->description), 155) : ('Découvrez la réalisation ' . $project->title . ' par SmartFilms Prod, agence de production audiovisuelle et photographe professionnel à Casablanca.')))
@section('og_title', $project->title . ' | Agence Audiovisuelle Casablanca — SmartFilms')
@section('og_description', $project->seo_description ?? ($project->description ? Str::limit(strip_tags($project->description), 155) : ('Production audiovisuelle réalisée par SmartFilms Prod à Casablanca, Maroc.')))
@section('og_image', asset($project->thumbnail ?? 'uploads/cinema_corporate_film.png'))

@push('head')
<!-- VideoObject Structured Data for Film Case Study -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "VideoObject",
  "name": "{{ $project->title }}",
  "description": "{{ $project->description ?? $project->title }}",
  "thumbnailUrl": [
    "{{ asset($project->thumbnail ?? 'uploads/cinema_corporate_film.png') }}"
  ],
  "uploadDate": "{{ $project->created_at ? $project->created_at->toIso8601String() : '2026-01-01T00:00:00+00:00' }}",
  "duration": "PT2M30S",
  "embedUrl": "{{ $project->video_url }}",
  "publisher": {
    "@type": ["LocalBusiness", "ProfessionalService"],
    "@id": "{{ url('/') }}#organization",
    "name": "SMART FILMS",
    "sameAs": [
      "https://share.google/mE2q5vvNawrfN8ax5"
    ],
    "logo": {
      "@type": "ImageObject",
      "url": "{{ asset('uploads/smartfilms_logo_white.png') }}"
    }
  }
}
</script>
@endpush

@section('content')
<!-- CINEMATIC CASE STUDY VIEW -->
<article class="bg-[#080914] text-white">

    <!-- 1. Hero Header -->
    <header class="relative w-full min-h-[70vh] flex items-end overflow-hidden pb-16 pt-36">
        <div class="absolute inset-0">
            @php
                $heroThumb = $project->thumbnail ?? '/uploads/cinema_corporate_film.png';
                $heroWebp = preg_replace('/\.(jpe?g|png)$/i', '.webp', $heroThumb);
            @endphp
            <picture>
                <source srcset="{{ $heroWebp }}" type="image/webp">
                <img src="{{ $heroThumb }}" alt="{{ $project->title }} - Tournage et production par SmartFilms Prod agence audiovisuelle Casablanca" class="w-full h-full object-cover opacity-35 scale-105" width="1920" height="1080" decoding="async" fetchpriority="high">
            </picture>
            <div class="absolute inset-0 bg-gradient-to-t from-[#080914] via-[#080914]/70 to-transparent"></div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full space-y-6">
            <div class="flex items-center gap-3 text-xs font-mono uppercase tracking-widest text-[#FF4D42]">
                <a href="{{ route('portfolio') }}" class="hover:underline flex items-center gap-1.5"><i class="bi bi-arrow-left"></i> Filmographie</a>
                <span>&bull;</span>
                <span>{{ $project->category ?? 'Film de Marque' }}</span>
                <span>&bull;</span>
                <span>{{ $project->year ?? '2026' }}</span>
            </div>

            <h1 class="text-4xl sm:text-6xl md:text-7xl font-black uppercase tracking-tight text-white max-w-5xl leading-[0.95]">
                {{ $project->title }}
            </h1>

            <!-- Project Metadata Bar -->
            <div class="grid grid-cols-2 sm:grid-cols-4 gap-6 pt-6 border-t border-white/10 text-xs font-mono">
                <div>
                    <span class="text-slate-500 uppercase block mb-1">CLIENT</span>
                    <span class="font-bold text-white">{{ $project->client_name }}</span>
                </div>
                <div>
                    <span class="text-slate-500 uppercase block mb-1">DISCIPLINE</span>
                    <span class="font-bold text-white">{{ $project->category ?? 'Brand Film' }}</span>
                </div>
                <div>
                    <span class="text-slate-500 uppercase block mb-1">LOCALISATION</span>
                    <span class="font-bold text-white">{{ $project->location ?? 'Casablanca, Maroc' }}</span>
                </div>
                <div>
                    <span class="text-slate-500 uppercase block mb-1">RÉALISATION & REGIE</span>
                    <span class="font-bold text-white">SmartFilms Studio</span>
                </div>
            </div>
        </div>
    </header>

    <!-- 2. Master Film Player Section -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 -mt-6 relative z-20">
        <div class="aspect-video w-full rounded-3xl overflow-hidden bg-black border border-white/15 shadow-2xl relative group">
            @if($project->video_url)
                @php
                    $embedUrl = $project->video_url;
                    if(str_contains($embedUrl, 'youtube.com/watch?v=')) {
                        $embedUrl = str_replace('watch?v=', 'embed/', $embedUrl);
                    } elseif(str_contains($embedUrl, 'youtu.be/')) {
                        $embedUrl = str_replace('youtu.be/', 'www.youtube.com/embed/', $embedUrl);
                    }
                @endphp
                <iframe class="w-full h-full border-0" src="{{ $embedUrl }}" allow="autoplay; fullscreen" allowfullscreen></iframe>
            @else
                @php
                    $mediaThumb = $project->thumbnail ?? '/uploads/cinema_corporate_film.png';
                    $mediaWebp = preg_replace('/\.(jpe?g|png)$/i', '.webp', $mediaThumb);
                @endphp
                <picture>
                    <source srcset="{{ $mediaWebp }}" type="image/webp">
                    <img src="{{ $mediaThumb }}" class="w-full h-full object-cover" alt="Visuel principal du projet {{ $project->title }} - Agence audiovisuelle SmartFilms Prod Casablanca" width="1280" height="720" loading="lazy" decoding="async">
                </picture>
            @endif
        </div>
    </section>

    <!-- 3. Editorial Overview & Creative Approach -->
    <section class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-20 space-y-16">
        
        <!-- Synopsis / Le Défi -->
        <div class="grid grid-cols-1 md:grid-cols-12 gap-8 items-start">
            <div class="md:col-span-4">
                <span class="text-[11px] font-mono font-bold uppercase tracking-[0.2em] text-[#FF4D42]">LE DÉFI CRÉATIF</span>
                <h2 class="text-2xl font-bold uppercase text-white mt-2">Vision & Objectifs</h2>
            </div>
            <div class="md:col-span-8 text-base text-[#B8BDE0] font-light leading-relaxed space-y-4">
                <p>
                    {{ $project->description }}
                </p>
                <p class="text-sm text-slate-400">
                    Concevoir un film à l'esthétique cinématographique internationale, valorisant la puissance des équipes et le leadership de la marque au Maroc et à l'export.
                </p>
            </div>
        </div>

        <!-- Dispositif & Livrables -->
        <div class="p-8 md:p-10 rounded-3xl bg-[#101229] border border-white/10 space-y-6">
            <h3 class="text-xs font-mono font-bold uppercase tracking-widest text-[#FF4D42]">DISPOSITIF TECHNIQUE & LIVRABLES</h3>
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 text-xs font-mono">
                <div class="space-y-1">
                    <span class="text-slate-400 uppercase block">Caméras & Optiques</span>
                    <span class="font-bold text-white">Caméras Cinéma &bull; Séries Prime</span>
                </div>
                <div class="space-y-1">
                    <span class="text-slate-400 uppercase block">Prises de Vues Aériennes</span>
                    <span class="font-bold text-white">Drone 4K Stabilisé &bull; FPV</span>
                </div>
                <div class="space-y-1">
                    <span class="text-slate-400 uppercase block">Post-Production</span>
                    <span class="font-bold text-white">Étalonnage HDR &bull; Mix Broadcast</span>
                </div>
            </div>
        </div>

        <!-- Studio Credits -->
        <div class="border-t border-white/10 pt-10 flex flex-wrap justify-between items-center gap-6 text-xs font-mono text-slate-400">
            <div>
                <span class="text-white font-bold block">Production : SmartFilms Prod Casablanca</span>
                <span>Villa Brion &bull; Casablanca</span>
            </div>
            <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 text-[#FF4D42] hover:underline font-bold">
                <span>Discuter d'un projet similaire</span>
                <i class="bi bi-arrow-right"></i>
            </a>
        </div>

    </section>

    <!-- 4. Campaign Deliverables & Multi-Video Showcase (if project has multiple videos/gallery) -->
    @if(!empty($galleryItems))
        <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-24 border-t border-white/10 pt-16 space-y-12">
            <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-4">
                <div>
                    <span class="text-[11px] font-mono font-bold uppercase tracking-[0.2em] text-[#FF4D42]">LIVRABLES DE LA CAMPAGNE</span>
                    <h3 class="text-3xl sm:text-4xl font-black uppercase text-white mt-1">Série de Vidéos & Formats Déployés</h3>
                </div>
                <p class="text-xs font-mono text-slate-400 max-w-md">
                    Chaque livrable a été pensé pour un angle narratif précis. Cliquez sur une capsule pour la visionner instantanément dans le lecteur principal.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-5xl mx-auto">
                @foreach($galleryItems as $idx => $item)
                    @if(($item['type'] ?? '') === 'video')
                        <div class="group bg-[#101229] rounded-3xl p-6 border border-white/10 hover:border-[#FF4D42]/50 transition-all duration-500 shadow-2xl flex flex-col justify-between">
                            <div>
                                <!-- Card Media Box with Play Overlay -->
                                <div class="relative aspect-video rounded-2xl overflow-hidden bg-black mb-5 group/box cursor-pointer"
                                     onclick="switchProjectVideo('{{ $item['video_url'] }}', '{{ addslashes($item['title'] ?? '') }}'); document.getElementById('masterPlayerContainer').scrollIntoView({ behavior: 'smooth' });">
                                    
                                    @php
                                        $galThumb = asset($item['thumbnail']);
                                        $galWebp = preg_replace('/\.(jpe?g|png)$/i', '.webp', $galThumb);
                                    @endphp
                                    <picture>
                                        <source srcset="{{ $galWebp }}" type="image/webp">
                                        <img src="{{ $galThumb }}" alt="{{ $item['title'] ?? $project->title }} - SmartFilms Prod production audiovisuelle Casablanca" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" loading="lazy" decoding="async" width="600" height="338">
                                    </picture>
                                    <div class="absolute inset-0 bg-gradient-to-t from-[#080914] via-[#080914]/20 to-transparent"></div>
                                    
                                    <!-- Badge -->
                                    <div class="absolute top-4 left-4 z-10">
                                        <span class="px-3 py-1.5 rounded-lg bg-black/70 backdrop-blur-md text-[10px] font-mono uppercase text-[#FF4D42] font-bold border border-white/15">
                                            {{ $item['badge'] ?? 'Format Réseaux' }}
                                        </span>
                                    </div>

                                    <!-- Center Play Action -->
                                    <div class="absolute inset-0 flex items-center justify-center">
                                        <span class="w-14 h-14 rounded-full bg-[#FF4D42] group-hover/box:scale-110 text-white flex items-center justify-center text-xl shadow-2xl transition-transform">
                                            <i class="bi bi-play-fill ml-0.5"></i>
                                        </span>
                                    </div>

                                    <!-- Bottom Label inside thumbnail -->
                                    <div class="absolute bottom-3 left-4 right-4 z-10">
                                        <span class="text-xs font-mono uppercase text-slate-300 font-semibold tracking-wider flex items-center gap-1.5">
                                            <i class="bi bi-film text-[#FF4D42]"></i>
                                            {{ $item['format'] ?? '9:16' }} &bull; SmartFilms 4K
                                        </span>
                                    </div>
                                </div>

                                <h4 class="font-bold text-white text-lg sm:text-xl leading-snug mb-2 group-hover:text-[#FF4D42] transition-colors">
                                    {{ $item['title'] }}
                                </h4>
                                <p class="text-sm text-slate-300 font-light leading-relaxed mb-6">
                                    {{ $item['description'] ?? '' }}
                                </p>
                            </div>

                            <div class="pt-4 border-t border-white/10 flex items-center justify-between">
                                <span class="text-xs font-mono text-slate-500 uppercase">Capsule {{ sprintf('%02d', $idx + 1) }}</span>
                                <button type="button" 
                                        onclick="switchProjectVideo('{{ $item['video_url'] }}', '{{ addslashes($item['title'] ?? '') }}'); document.getElementById('masterPlayerContainer').scrollIntoView({ behavior: 'smooth' });"
                                        class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/10 hover:bg-[#FF4D42] text-white text-xs font-mono font-bold transition-all">
                                    <span>Visionner dans le lecteur</span>
                                    <i class="bi bi-arrow-up-right"></i>
                                </button>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </section>
    @endif

    @push('scripts')
    <script>
        function switchProjectVideo(url, title, tabBtn) {
            const iframe = document.getElementById('mainProjectIframe');
            const shield = document.getElementById('mainProjectShield');
            if (!iframe) return;

            let embedUrl = url;
            let isGoogleDrive = false;
            if (url.includes('youtube.com/watch?v=')) {
                embedUrl = url.replace('watch?v=', 'embed/');
            } else if (url.includes('youtu.be/')) {
                embedUrl = url.replace('youtu.be/', 'www.youtube.com/embed/');
            } else if (url.includes('drive.google.com/file/d/')) {
                isGoogleDrive = true;
                embedUrl = url.replace(/\/view(\?.*)?$/, '/preview');
                if (!embedUrl.includes('/preview')) {
                    embedUrl = embedUrl.replace(/\/?$/, '/preview');
                }
            }

            if (isGoogleDrive) {
                iframe.className = "absolute -top-[56px] left-0 w-full h-[calc(100%+56px)] border-0";
                iframe.setAttribute("sandbox", "allow-scripts allow-same-origin allow-presentation");
                if (shield) shield.classList.remove('hidden');
            } else {
                iframe.className = "w-full h-full border-0";
                iframe.removeAttribute("sandbox");
                if (shield) shield.classList.add('hidden');
            }

            iframe.src = embedUrl;

            // Highlight corresponding button
            const allTabs = document.querySelectorAll('.project-capsule-tab');
            allTabs.forEach(tab => {
                tab.className = "project-capsule-tab px-4 py-2 rounded-xl text-xs font-mono font-bold transition-all flex items-center gap-2 bg-white/5 hover:bg-white/15 text-slate-300 border border-white/10";
            });
            if (tabBtn) {
                tabBtn.className = "project-capsule-tab px-4 py-2 rounded-xl text-xs font-mono font-bold transition-all flex items-center gap-2 bg-[#FF4D42] text-white shadow-lg shadow-rose-500/30";
            }
        }
    </script>
    @endpush

    <!-- 4. Next Project Navigation -->
    @if(isset($nextProject) && $nextProject->id !== $project->id)
        <nav class="border-t border-white/10 bg-[#101229] py-16">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col sm:flex-row justify-between items-center gap-6">
                <div>
                    <span class="text-xs font-mono uppercase tracking-widest text-slate-400 block mb-1">PROJET SUIVANT</span>
                    <h4 class="text-2xl font-bold text-white uppercase">{{ $nextProject->title }}</h4>
                    <span class="text-xs text-[#FF4D42] font-mono">{{ $nextProject->client_name }}</span>
                </div>

                <a href="{{ route('project.show', $nextProject->slug ?? Str::slug($nextProject->title)) }}" class="bg-[#FF4D42] hover:bg-[#E94239] text-white px-8 py-3.5 rounded-full text-xs font-bold uppercase tracking-widest transition-all shadow-lg hover:scale-105 flex items-center gap-2">
                    <span>Découvrir</span>
                    <i class="bi bi-arrow-right"></i>
                </a>
            </div>
        </nav>
    @endif

</article>
@endsection
