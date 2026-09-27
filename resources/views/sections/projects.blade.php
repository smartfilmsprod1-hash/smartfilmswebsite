<!-- CHAPTER 03: SELECTED WORKS / LES RÉALISATIONS (#F8F6F1 WARM OFF-WHITE) -->
<section id="films" class="bg-[#F8F6F1] text-[#252238] py-24 md:py-36 relative overflow-hidden border-b border-[#2D2658]/10" aria-labelledby="featured-projects-heading">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Section Header -->
        <div class="flex flex-col md:flex-row justify-between items-start md:items-end mb-12 lg:mb-16 gap-6">
            <div>
                <span class="reveal-fade-up text-[11px] font-mono font-bold tracking-[0.25em] text-[#FF5A68] uppercase block mb-3">
                    03 • Portfolio Sélectionné
                </span>
                <h2 id="featured-projects-heading" class="text-3xl sm:text-5xl lg:text-6xl font-black uppercase tracking-tight text-[#2D2658]">
                    Nos <span class="font-serif-italic font-normal lowercase text-[#40376F]">réalisations phares</span>
                </h2>
            </div>
            
            <a href="{{ route('portfolio') }}" class="reveal-fade-up delay-200 group inline-flex items-center space-x-2 text-xs font-mono font-bold tracking-wider uppercase text-[#2D2658] hover:text-white px-6 py-3.5 rounded-full bg-white hover:bg-[#2D2658] border border-[#2D2658]/15 shadow-sm transition-all duration-300" aria-label="Explorer toutes les réalisations du portfolio SmartFilms">
                <span>Explorer toutes les réalisations</span>
                <span class="text-[#FF5A68] group-hover:text-white transform group-hover:translate-x-1.5 transition-transform" aria-hidden="true">&rarr;</span>
            </a>
        </div>

        @php
            $featuredProject = $projects->first();
            $gridProjects = $projects->slice(1, 4);
        @endphp

        <!-- Main Cinematic Hero Project Card -->
        @if($featuredProject)
            <article class="group relative rounded-[28px] overflow-hidden cursor-pointer w-full bg-white border border-[#2D2658]/10 shadow-lg hover:shadow-2xl transition-all duration-500 hover:border-[#FF5A68]/40 mb-12 reveal-scale-up" aria-labelledby="featured-card-title">
              
              <!-- Thumbnail Media with Subtle Zoom -->
              <div class="relative w-full aspect-[16/9] md:aspect-[21/9] min-h-[440px] md:min-h-[520px] overflow-hidden bg-[#2D2658]">
                  @php
                      $featuredThumb = $featuredProject->thumbnail ? asset($featuredProject->thumbnail) : asset('uploads/cinema_corporate_film.png');
                      $featuredWebp = preg_replace('/\.(jpe?g|png)$/i', '.webp', $featuredThumb);
                  @endphp
                  <picture>
                      <source srcset="{{ $featuredWebp }}" type="image/webp">
                      <img 
                          src="{{ $featuredThumb }}" 
                          alt="Projet {{ $featuredProject->title }} - Production vidéo par SmartFilms Prod agence audiovisuelle Casablanca" 
                          loading="lazy"
                          decoding="async"
                          width="1280"
                          height="720"
                          class="w-full h-full object-cover transition-transform duration-700 ease-[cubic-bezier(0.16,1,0.3,1)] group-hover:scale-[1.025] filter brightness-[0.92] contrast-[1.02]" 
                      />
                  </picture>
                  
                  <!-- Soft Cinematic Gradient Overlays -->
                  <div class="absolute inset-0 bg-gradient-to-t from-[#2D2658]/90 via-[#2D2658]/40 to-transparent pointer-events-none"></div>
                  <div class="absolute inset-0 bg-gradient-to-r from-[#2D2658]/80 via-transparent to-[#2D2658]/40 pointer-events-none"></div>
              </div>

              <!-- Top Left: Category Tag -->
              <div class="absolute top-6 left-6 flex items-center space-x-2 z-10">
                <span class="bg-white/90 backdrop-blur-md text-[#2D2658] text-[11px] font-mono font-bold px-4 py-1.5 rounded-full uppercase tracking-wider border border-[#2D2658]/10 shadow-md">
                  Film Vedette • {{ $featuredProject->category ?? 'Film Corporate' }}
                </span>
              </div>

              <!-- Top Right: Duration -->
              <div class="absolute top-6 right-6 z-10">
                <span class="bg-[#2D2658]/80 backdrop-blur-md text-white font-mono text-xs font-semibold px-3.5 py-1.5 rounded-full border border-white/10 shadow-md">
                  {{ $featuredProject->duration ?? '02:45' }}
                </span>
              </div>

              <!-- Center: Play Button with Subtle Hover Response -->
              <div class="absolute inset-0 flex items-center justify-center z-20 pointer-events-auto">
                <button 
                  onclick="openVideoModal('{{ $featuredProject->video_url }}', '{{ addslashes($featuredProject->title) }} • {{ addslashes($featuredProject->client_name) }}'); if (window.trackEvent) trackEvent('showreel_play', { project: '{{ $featuredProject->slug }}' });"
                  aria-label="Lancer la vidéo {{ $featuredProject->title }}"
                  class="bg-[#FF5A68] hover:bg-[#E84554] text-white rounded-full p-6 md:p-7 transform transition-all duration-300 group-hover:scale-105 shadow-[0_0_35px_rgba(255,90,104,0.6)] flex items-center justify-center focus:outline-none"
                >
                  <svg class="w-8 h-8 md:w-9 md:h-9 ml-1 text-white" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path d="M8 5v14l11-7z"/>
                  </svg>
                </button>
              </div>

              <!-- Bottom Content Bar -->
              <div class="absolute bottom-0 left-0 right-0 p-6 md:p-10 flex flex-col md:flex-row justify-between items-start md:items-end gap-6 z-10 bg-gradient-to-t from-[#2D2658]/95 via-[#2D2658]/85 to-transparent text-white">
                <div class="max-w-2xl">
                  <p class="text-[#FADDE3] text-xs font-mono uppercase tracking-widest font-semibold mb-2">
                    {{ $featuredProject->client_name ?? 'Dell Technologies' }} • {{ $featuredProject->year ?? date('Y') }}
                  </p>
                  <h3 id="featured-card-title" class="text-white text-2xl sm:text-4xl md:text-5xl font-extrabold tracking-tight leading-tight">
                    <a href="{{ route('project.show', $featuredProject->slug ?? Str::slug($featuredProject->title)) }}" class="hover:text-[#FADDE3] transition-colors">
                      {{ $featuredProject->title }}
                    </a>
                  </h3>
                  @if(!empty($featuredProject->short_description))
                    <p class="text-slate-200 text-sm md:text-base font-light mt-2 line-clamp-2 max-w-xl">
                      {{ $featuredProject->short_description }}
                    </p>
                  @endif
                </div>
                
                <!-- Action Button -->
                <a href="{{ route('project.show', $featuredProject->slug ?? Str::slug($featuredProject->title)) }}" class="inline-flex items-center space-x-2 text-white text-xs font-mono font-bold uppercase tracking-wider bg-white/15 hover:bg-white hover:text-[#2D2658] border border-white/20 px-6 py-3.5 rounded-full backdrop-blur-md transition-all duration-300 shrink-0" aria-label="Consulter l'étude de cas du projet {{ $featuredProject->title }}">
                  <span>Voir le case study</span>
                  <svg class="w-4 h-4 transform group-hover:translate-x-0.5 group-hover:-translate-y-0.5 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 17L17 7M17 7H7M17 7v10"/>
                  </svg>
                </a>
              </div>
              
            </article>
        @endif

        <!-- Secondary Projects Grid (2-Column Clean Cards) -->
        @if($gridProjects->isNotEmpty())
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 lg:gap-10">
                @foreach($gridProjects as $idx => $project)
                    <article class="group relative flex flex-col justify-between rounded-[26px] bg-white border border-[#2D2658]/10 overflow-hidden hover:border-[#FF5A68]/40 hover:shadow-xl transition-all duration-500 reveal-scale-up delay-{{ ($idx + 1) * 100 }}" aria-labelledby="grid-proj-title-{{ $idx }}">
                        
                        <!-- Media Container with Subtle Zoom -->
                        <div class="relative aspect-[16/10] overflow-hidden bg-[#2D2658]">
                            @php
                                $gridThumb = $project->thumbnail ? asset($project->thumbnail) : asset('uploads/cinema_corporate_film.png');
                                $gridWebp = preg_replace('/\.(jpe?g|png)$/i', '.webp', $gridThumb);
                            @endphp
                            <picture>
                                <source srcset="{{ $gridWebp }}" type="image/webp">
                                <img 
                                    src="{{ $gridThumb }}" 
                                    alt="Réalisation {{ $project->title }} - SmartFilms Prod agence audiovisuelle Casablanca" 
                                    loading="lazy"
                                    decoding="async"
                                    width="600"
                                    height="375"
                                    class="w-full h-full object-cover transition-transform duration-700 ease-[cubic-bezier(0.16,1,0.3,1)] group-hover:scale-[1.025] filter brightness-[0.92] contrast-[1.02]" 
                                />
                            </picture>
                            <div class="absolute inset-0 bg-gradient-to-t from-[#2D2658]/70 via-transparent to-transparent pointer-events-none"></div>

                            <!-- Category & Duration Pill -->
                            <div class="absolute top-4 left-4 right-4 flex justify-between items-center z-10">
                                <span class="bg-white/90 backdrop-blur-md text-[#2D2658] text-[10px] font-mono font-bold uppercase tracking-widest px-3 py-1 rounded-full border border-[#2D2658]/10 shadow-sm">
                                    {{ $project->category ?? 'Production' }}
                                </span>
                                @if(!empty($project->duration))
                                    <span class="bg-[#2D2658]/80 backdrop-blur-md text-white text-[10px] font-mono px-2.5 py-1 rounded-full border border-white/10">
                                        {{ $project->duration }}
                                    </span>
                                @endif
                            </div>

                            <!-- Center Play Button Overlay -->
                            <div class="absolute inset-0 flex items-center justify-center z-10 opacity-95 sm:opacity-0 sm:group-hover:opacity-100 transition-opacity duration-300 bg-[#2D2658]/30 sm:bg-[#2D2658]/40 backdrop-blur-[2px]">
                                <button 
                                  onclick="openVideoModal('{{ $project->video_url }}', '{{ addslashes($project->title) }} • {{ addslashes($project->client_name) }}')"
                                  class="w-14 h-14 rounded-full bg-[#FF5A68] hover:bg-[#E84554] text-white flex items-center justify-center text-lg shadow-[0_0_25px_rgba(255,90,104,0.6)] transform transition-transform duration-300 hover:scale-105 focus:outline-none"
                                  aria-label="Lire la vidéo {{ $project->title }}"
                                >
                                  <svg class="w-6 h-6 ml-0.5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path d="M8 5v14l11-7z"/>
                                  </svg>
                                </button>
                            </div>
                        </div>

                        <!-- Card Meta Info -->
                        <div class="p-6 flex justify-between items-start gap-4">
                            <div>
                                <span class="text-[11px] font-mono uppercase tracking-wider text-[#FF5A68] font-bold block mb-1">
                                    {{ $project->client_name }} • {{ $project->year ?? date('Y') }}
                                </span>
                                <h3 id="grid-proj-title-{{ $idx }}" class="text-xl sm:text-2xl font-bold text-[#2D2658] group-hover:text-[#FF5A68] transition-colors leading-snug">
                                    <a href="{{ route('project.show', $project->slug ?? Str::slug($project->title)) }}">
                                        {{ $project->title }}
                                    </a>
                                </h3>
                            </div>

                            <a href="{{ route('project.show', $project->slug ?? Str::slug($project->title)) }}" aria-label="Voir le projet {{ $project->title }}" class="shrink-0 w-10 h-10 rounded-full border border-[#2D2658]/15 text-[#2D2658] group-hover:text-white group-hover:border-[#FF5A68] group-hover:bg-[#FF5A68] flex items-center justify-center text-sm transition-all duration-300 shadow-sm">
                                <svg class="w-4 h-4 transform group-hover:translate-x-0.5 group-hover:-translate-y-0.5 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 17L17 7M17 7H7M17 7v10"/>
                                </svg>
                            </a>
                        </div>
                    </article>
                @endforeach
            </div>
        @endif

    </div>
</section>
