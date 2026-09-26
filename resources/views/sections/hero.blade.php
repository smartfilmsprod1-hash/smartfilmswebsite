@php
    $hp = $props ?? [];
    $heroVideo = !empty($hp['videoUrl']) ? $hp['videoUrl'] : '/uploads/hero_youtube.mp4';
    $heroEyebrow = !empty($hp['eyebrow']) ? $hp['eyebrow'] : 'AGENCE AUDIOVISUELLE & PHOTOGRAPHE &bull; CASABLANCA';
    $heroPrefix = !empty($hp['serifPrefix']) ? $hp['serifPrefix'] : 'agence de';
    $heroTitle1 = !empty($hp['titleLine1']) ? $hp['titleLine1'] : 'PRODUCTION';
    $heroTitle2 = !empty($hp['titleLine2']) ? $hp['titleLine2'] : 'AUDIOVISUELLE';
    $heroDesc = !empty($hp['description']) ? $hp['description'] : 'Production de films institutionnels, shooting photo corporate, capsules vidéo pour réseaux sociaux et spots publicitaires. Votre agence audiovisuelle et photographe de référence à Casablanca.';
    $heroBtnText = !empty($hp['btn1Text']) ? $hp['btn1Text'] : 'Découvrir nos expertises';
    $heroBtnLink = !empty($hp['btn1Link']) ? $hp['btn1Link'] : '#expertises';
@endphp

<!-- CHAPTER 01: ROUNDED CINEMATIC HERO PANEL (Fits Fully on Screen with White Framing) -->
<section id="hero" class="relative w-full h-[94dvh] sm:h-screen min-h-[580px] sm:min-h-[640px] max-h-[1080px] bg-[#FAF9F6] pt-20 sm:pt-24 pb-3 sm:pb-6 px-3 sm:px-6 lg:px-8 xl:px-10 overflow-hidden flex flex-col justify-center">
    
    <!-- Large Rounded Cinematic Hero Container (Fully Visible Inside Viewport) -->
    <div class="relative w-full h-full max-w-[96rem] mx-auto rounded-[22px] sm:rounded-[30px] lg:rounded-[34px] overflow-hidden shadow-[0_8px_30px_rgba(0,0,0,0.06)] bg-black flex items-center">
        
        <!-- 0ms: Cinematic Background Video (Instant Autoplay on Page Open) -->
        <div class="absolute inset-0 w-full h-full pointer-events-none bg-black">
            <video id="heroVideoEl" autoplay loop muted playsinline preload="auto" fetchpriority="high" aria-label="Showreel cinématique SmartFilms Prod - Production audiovisuelle et shooting photo à Casablanca" title="Production audiovisuelle et réalisation de films à Casablanca - SmartFilms Prod" class="w-full h-full object-cover">
                <source src="{{ $heroVideo }}" type="video/mp4">
            </video>
            <script>
                (function() {
                    var v = document.getElementById('heroVideoEl');
                    if (v) {
                        v.muted = true;
                        v.defaultMuted = true;
                        v.playsInline = true;
                        var p = v.play();
                        if (p !== undefined) p.catch(function() {});
                    }
                })();
            </script>
            
            <!-- Neutral Contrast Overlays for Crisp Text Legibility (NO PURPLE, NO TINT, NATURAL FOOTAGE) -->
            <div class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/40 sm:via-black/30 to-transparent pointer-events-none"></div>
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-black/30 pointer-events-none"></div>
        </div>

        <!-- Editorial Hero Typography & Composition (Left Dominant, Right Open for Video) -->
        <div class="relative z-10 w-full px-5 sm:px-10 lg:px-14 py-6 sm:py-12 flex flex-col justify-center">
            <div class="w-full max-w-3xl lg:max-w-[65%] text-white space-y-3.5 sm:space-y-5">
                
                <!-- 150ms: Eyebrow / Tag -->
                <div>
                    <div class="hero-eyebrow inline-flex items-center gap-2 sm:gap-2.5 px-3.5 sm:px-4 py-1.5 rounded-full bg-black/45 backdrop-blur-md border border-white/20 text-[9.5px] sm:text-[11px] font-mono tracking-wider sm:tracking-widest uppercase font-semibold text-white/95 shadow-md max-w-full">
                        <span class="w-2 h-2 rounded-full bg-[#FF5A68] animate-pulse shrink-0"></span>
                        <span class="truncate sm:whitespace-normal">{!! $heroEyebrow !!}</span>
                    </div>
                </div>

                <!-- Main Title Hierarchy -->
                <div class="space-y-1">
                    <!-- Complete H1 Tag for Google Crawlers -->
                    <h1 class="text-[1.85rem] xs:text-3xl sm:text-5xl md:text-6xl lg:text-[4rem] xl:text-[4.8rem] 2xl:text-[5.5rem] font-black uppercase tracking-tight text-white leading-[0.92] drop-shadow-2xl select-none">
                        <!-- 250ms: Elegant Italic / Serif -->
                        <span class="reveal-mask block pr-4">
                            <span class="hero-serif font-serif-italic font-normal block lowercase text-2xl sm:text-3xl md:text-4xl lg:text-5xl text-white/90 drop-shadow-lg mb-1 sm:mb-2 tracking-normal">
                                {{ $heroPrefix }}
                            </span>
                        </span>
                        <!-- 350ms & 450ms: Very Large Bold Sans-serif Stacked Title -->
                        <span class="reveal-mask block pr-4 sm:pr-6">
                            <span class="hero-title-line1 block font-black tracking-tight">
                                {{ $heroTitle1 }}
                            </span>
                        </span>
                        <span class="reveal-mask block mt-1 sm:mt-1.5 pr-4 sm:pr-6">
                            <span class="hero-title-line2 block font-black tracking-tight break-normal">
                                {{ $heroTitle2 }}
                            </span>
                        </span>
                        <span class="sr-only"> | Photographe Casablanca, Production de Films Institutionnels & Capsules Vidéo</span>
                    </h1>
                </div>

                <!-- 700ms: Supporting Description (Lower-Left underneath Title) -->
                <div class="reveal-mask pt-0.5">
                    <p class="hero-desc text-white/90 text-xs sm:text-sm md:text-base font-light max-w-xl leading-relaxed drop-shadow-md">
                        {{ $heroDesc }}
                    </p>
                </div>

                <!-- 850ms: Primary CTA -->
                <div class="pt-1 sm:pt-2 flex flex-col sm:flex-row items-stretch sm:items-center gap-3">
                    <a href="{{ $heroBtnLink }}" class="hero-cta inline-flex items-center justify-center gap-3 bg-[#FF5A68] hover:bg-[#E84554] text-white px-7 py-3.5 rounded-full font-bold uppercase tracking-wider text-xs transition-all duration-300 shadow-[0_0_30px_rgba(255,90,104,0.5)] hover:shadow-[0_0_45px_rgba(255,90,104,0.75)] hover:scale-105 group text-center">
                        <span>{{ $heroBtnText }}</span>
                        <i class="bi bi-arrow-right text-xs transform group-hover:translate-x-1.5 transition-transform duration-300"></i>
                    </a>
                </div>

            </div>
        </div>

    </div>
</section>

<!-- Bulletproof Seamless Video Looping Script -->
<script>
    (function() {
        const video = document.getElementById('heroVideoEl');
        if (!video) return;

        // Force native loop properties
        video.loop = true;
        video.muted = true;
        video.playsInline = true;

        // 1. Native ended fallback: rewind and replay
        video.addEventListener('ended', function() {
            video.currentTime = 0;
            const playPromise = video.play();
            if (playPromise !== undefined) {
                playPromise.catch(function() {});
            }
        }, false);

        // 2. Near-end safety trigger (fixes MP4 B-frame freezing on the last frame)
        video.addEventListener('timeupdate', function() {
            if (video.duration && video.currentTime >= video.duration - 0.2) {
                video.currentTime = 0;
                video.play().catch(function() {});
            }
        }, false);

        // 3. Resume automatically when returning to tab
        document.addEventListener('visibilitychange', function() {
            if (!document.hidden && video.paused) {
                video.play().catch(function() {});
            }
        });

        // 4. Initial instant autoplay trigger
        function startVideo() {
            if (!video) return;
            video.muted = true;
            video.defaultMuted = true;
            video.playsInline = true;
            const promise = video.play();
            if (promise !== undefined) {
                promise.catch(function() {
                    window.addEventListener('click', function() {
                        video.play().catch(function() {});
                    }, { once: true });
                });
            }
        }

        startVideo();
        video.addEventListener('loadeddata', startVideo, { once: true });
        video.addEventListener('canplay', startVideo, { once: true });
        window.addEventListener('pageshow', startVideo);
    })();
</script>
