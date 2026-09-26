<!DOCTYPE html>
<html lang="fr" class="scroll-smooth bg-[#F8F6F1]">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <title>@yield('title', 'SmartFilms Prod | Agence Audiovisuelle & Photographe Casablanca')</title>
    <meta name="description" content="@yield('meta_description', 'Agence audiovisuelle et photographe à Casablanca. Production de films institutionnels, shooting photo corporate, capsules vidéo pour réseaux sociaux et spots publicitaires au Maroc.')">
    <meta name="keywords" content="@yield('keywords', 'agence audiovisuelle casablanca, photographe casablanca, production de films institutionnels, capsules video, shooting photo corporate casablanca, photographe professionnel casablanca, film d\'entreprise maroc, spot publicitaire tv, captation evenementielle')">
    <meta name="author" content="SmartFilms Prod">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <link rel="canonical" href="@yield('canonical', url()->current())">

    <!-- Geo-Targeting for Casablanca, Morocco Local SEO -->
    <meta name="geo.region" content="MA-06">
    <meta name="geo.placename" content="Casablanca">
    <meta name="geo.position" content="33.587579;-7.632947">
    <meta name="ICBM" content="33.587579, -7.632947">

    <!-- OpenGraph Metadata -->
    <meta property="og:locale" content="fr_FR">
    <meta property="og:type" content="@yield('og_type', 'website')">
    <meta property="og:title" content="@yield('og_title', View::yieldContent('title', 'SmartFilms Prod | Agence Audiovisuelle & Photographe Casablanca'))">
    <meta property="og:description" content="@yield('og_description', View::yieldContent('meta_description', 'Agence audiovisuelle et photographe à Casablanca. Production de films institutionnels, shooting photo corporate, capsules vidéo pour réseaux sociaux et spots publicitaires au Maroc.'))">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:site_name" content="SmartFilms Prod">
    <meta property="og:image" content="@yield('og_image', asset('uploads/vision_monitor.jpg'))">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('og_title', View::yieldContent('title', 'SmartFilms Prod | Agence Audiovisuelle & Photographe Casablanca'))">
    <meta name="twitter:description" content="@yield('og_description', View::yieldContent('meta_description', 'Agence audiovisuelle et photographe à Casablanca. Production de films institutionnels, shooting photo corporate, capsules vidéo pour réseaux sociaux et spots publicitaires au Maroc.'))">
    <meta name="twitter:image" content="@yield('og_image', asset('uploads/vision_monitor.jpg'))">

    <!-- JSON-LD Structured Data Schema for Casablanca, Morocco & Google Rich Snippets -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "WebSite",
          "@id": "{{ url('/') }}#website",
          "url": "{{ url('/') }}",
          "name": "SmartFilms Prod",
          "description": "Agence Audiovisuelle, Photographe Professionnel & Production de Films Institutionnels à Casablanca Maroc",
          "inLanguage": "fr-FR",
          "publisher": {
            "@id": "{{ url('/') }}#organization"
          }
        },
        {
          "@type": ["LocalBusiness", "ProfessionalService"],
          "@id": "{{ url('/') }}#organization",
          "name": "SMART FILMS",
          "legalName": "SMART FILMS",
          "alternateName": [
            "SMART FILMS PROD",
            "SmartFilms Maroc",
            "SmartFilms Production Casablanca",
            "Agence SMART FILMS"
          ],
          "description": "SMART FILMS est une agence leader au Maroc spécialisée dans la production audiovisuelle, la réalisation cinématographique de films institutionnels, les capsules vidéo pour réseaux sociaux et les prestations de photographie professionnelle (shooting photo corporate, portraits de dirigeants, trombinoscopes d'entreprises, reportages industriels et packshots produits e-commerce).",
          "image": "{{ asset('uploads/smartfilms_logo_white.png') }}",
          "logo": {
            "@type": "ImageObject",
            "url": "{{ asset('uploads/smartfilms_logo_white.png') }}",
            "width": "600",
            "height": "150"
          },
          "telephone": "{{ $settings['phone'] ?? '+212 6 17 20 23 45' }}",
          "email": "{{ $settings['email'] ?? 'contact@smartfilmsprod.com' }}",
          "url": "{{ url('/') }}",
          "sameAs": [
            "https://share.google/mE2q5vvNawrfN8ax5"
          ],
          "address": {
            "@type": "PostalAddress",
            "streetAddress": "Villa Brion 7, rue Khadija courbée Khouailid",
            "addressLocality": "Casablanca",
            "postalCode": "20250",
            "addressRegion": "Grand Casablanca",
            "addressCountry": "MA"
          },
          "geo": {
            "@type": "GeoCoordinates",
            "latitude": 33.5875787,
            "longitude": -7.6329473
          },
          "openingHoursSpecification": [
            {
              "@type": "OpeningHoursSpecification",
              "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday"],
              "opens": "09:00",
              "closes": "19:00"
            }
          ],
          "areaServed": [
            { "@type": "City", "name": "Casablanca" },
            { "@type": "City", "name": "Rabat" },
            { "@type": "City", "name": "Tanger" },
            { "@type": "City", "name": "Marrakech" },
            { "@type": "City", "name": "Fès" },
            { "@type": "City", "name": "Agadir" },
            { "@type": "AdministrativeArea", "name": "Grand Casablanca" },
            { "@type": "Country", "name": "Maroc" }
          ],
          "priceRange": "MAD $$$$",
          "currenciesAccepted": "MAD, EUR, USD",
          "paymentAccepted": "Cash, Credit Card, Bank Transfer",
          "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "Prestations de Photographie Professionnelle, Réalisation et Production Audiovisuelle au Maroc",
            "itemListElement": [
              {
                "@type": "Offer",
                "itemOffered": {
                  "@type": "Service",
                  "name": "Production de Films Institutionnels & Vidéos d'Entreprise",
                  "serviceType": "Corporate Filmmaking & Production",
                  "description": "Scénarisation, tournage cinéma en 4K/6K, direction d'acteurs et post-production complète de films institutionnels et vidéos d'entreprise à Casablanca et partout au Maroc."
                }
              },
              {
                "@type": "Offer",
                "itemOffered": {
                  "@type": "Service",
                  "name": "Shooting Photo Professionnel & Photographe Corporate Casablanca",
                  "serviceType": "Professional Photography",
                  "description": "Séances de shooting photo professionnel : portraits de dirigeants, trombinoscopes d'équipes, reportages industriels sur site et packshots produits e-commerce en studio."
                }
              },
              {
                "@type": "Offer",
                "itemOffered": {
                  "@type": "Service",
                  "name": "Création de Capsules Vidéo Réseaux Sociaux (Formats Verticaux 9:16)",
                  "serviceType": "Social Media Video Production",
                  "description": "Conception et montage de capsules vidéo dynamiques optimisées pour l'engagement sur Instagram Reels, TikTok et LinkedIn."
                }
              },
              {
                "@type": "Offer",
                "itemOffered": {
                  "@type": "Service",
                  "name": "Réalisation de Spots Publicitaires TV, Cinéma & Campagnes Digitales",
                  "serviceType": "Commercials & TV Advertising",
                  "description": "Conception créative et production technique de spots publicitaires à fort impact pour la télévision, les salles de cinéma et les plateformes digitales."
                }
              },
              {
                "@type": "Offer",
                "itemOffered": {
                  "@type": "Service",
                  "name": "Captation Événementielle, Congrès & Aftermovies d'Entreprise",
                  "serviceType": "Event Video & Photo Coverage",
                  "description": "Couverture vidéo multi-caméras et reportages photo de congrès, séminaires professionnels, lancements de produits et aftermovies rythmés."
                }
              },
              {
                "@type": "Offer",
                "itemOffered": {
                  "@type": "Service",
                  "name": "Stratégie de Marque, Conception & Direction Artistique Audiovisuelle",
                  "serviceType": "Brand Strategy & Creative Direction",
                  "description": "Accompagnement en communication visuelle, storytelling de marque, écriture scénaristique et direction artistique globale."
                }
              }
            ]
          }
        },
        {
          "@type": "VideoObject",
          "@id": "{{ url('/') }}#showreel",
          "name": "Showreel SmartFilms 2026 | Agence Audiovisuelle & Photographe Casablanca",
          "description": "Showreel officiel de SmartFilms Prod à Casablanca : production de films institutionnels, shooting photo corporate, capsules vidéo pour réseaux sociaux et spots publicitaires au Maroc.",
          "thumbnailUrl": "{{ asset('uploads/vision_monitor.jpg') }}",
          "uploadDate": "2026-01-15T00:00:00+01:00",
          "contentUrl": "{{ asset('uploads/hero_youtube.mp4') }}",
          "embedUrl": "{{ url('/') }}",
          "publisher": {
            "@id": "{{ url('/') }}#organization"
          }
        },
        {
          "@type": "FAQPage",
          "@id": "{{ url('/') }}#faq",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "Quels types de productions audiovisuelles et films d'entreprise réalisez-vous au Maroc ?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "SmartFilms réalise l'ensemble de vos projets audiovisuels : films corporate & institutionnels, spots publicitaires TV et digitaux, vidéos de marque employeur & RSE, interviews de dirigeants, ainsi que des vidéos capsules 9:16 pour les réseaux sociaux (Reels, TikTok, LinkedIn) avec caméras cinéma 4K/6K et étalonnage DaVinci Resolve."
              }
            },
            {
              "@type": "Question",
              "name": "Proposez-vous des services de shooting photo corporate et packshot à Casablanca ?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Oui, nous disposons d'un pôle dédié à la photographie professionnelle d'entreprise à Casablanca : portraits de dirigeants, trombinoscopes d'équipes, packshots produits e-commerce haute définition et reportages industriels sur site partout au Maroc."
              }
            },
            {
              "@type": "Question",
              "name": "Quels sont les délais de livraison et comment obtenir un devis ?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Comptez 2 à 3 semaines pour un film d'entreprise complet et 48h à 72h pour les séries de formats courts ou reportages photo. Devis personnalisé gratuit transmis sous 24h ouvrées."
              }
            },
            {
              "@type": "Question",
              "name": "Vos prises de vues par drone au Maroc sont-elles conformes et autorisées ?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Toutes nos opérations aériennes par drone sont encadrées par des télépilotes certifiés avec obtention préalable des autorisations de tournage requises (CCM, DGAC, autorités locales)."
              }
            },
            {
              "@type": "Question",
              "name": "Dans quelles villes du Maroc intervenez-vous ?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Basés à la Villa Brion (rue Khadija courbée Khouailid) à Casablanca, nos réalisateurs et techniciens interviennent rapidement partout au Maroc : Rabat, Tanger, Marrakech, Fès, Agadir ainsi que sur des sites industriels et miniers isolés."
              }
            }
          ]
        }
      ]
    }
    </script>

    <!-- Performance Optimized Font Loading (Outfit & Cormorant Garamond) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@1,400;1,600&family=Outfit:wght@400;500;600;700;800&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@1,400;1,600&family=Outfit:wght@400;500;600;700;800&display=swap" media="print" onload="this.media='all'">
    <noscript>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@1,400;1,600&family=Outfit:wght@400;500;600;700;800&display=swap">
    </noscript>

    <!-- Asynchronous Non-Blocking Bootstrap Icons -->
    <link rel="preload" as="style" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" media="print" onload="this.media='all'">
    <noscript>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    </noscript>

    <!-- Precompiled Production Stylesheet (Eliminates Render-Blocking Tailwind CDN & JIT) -->
    @php
        $manifestPath = public_path('build/manifest.json');
        $manifest = file_exists($manifestPath) ? json_decode(file_get_contents($manifestPath), true) : null;
        $cssFile = $manifest['resources/css/app.css']['file'] ?? null;
        $jsFile = $manifest['resources/js/app.js']['file'] ?? null;
    @endphp
    @if($cssFile)
        <link rel="preload" as="style" href="{{ asset('build/' . $cssFile) }}">
        <link rel="stylesheet" href="{{ asset('build/' . $cssFile) }}">
    @endif

    <!-- Instant Preload for Cinematic Hero Video on Homepage -->
    @if(request()->is('/') || request()->routeIs('home'))
        <link rel="preload" as="video" href="{{ asset('uploads/hero_youtube.mp4') }}" type="video/mp4" fetchpriority="high">
    @endif

    <!-- Rich Motion, Hero Entrance & Navbar Smooth Transition Styles -->
    <style>
        :root {
            --brand-primary: #2D2658;
            --brand-secondary: #40376F;
            --brand-coral: #FF5A68;
            --brand-coral-hover: #E84554;
            --brand-pink: #FADDE3;
            --brand-bg: #F8F6F1;
            --brand-surface: #F4F2F7;
            --brand-lavender: #ECE9F3;
            --brand-text: #252238;
            --brand-muted: #726E8D;
            --ease-premium: cubic-bezier(0.16, 1, 0.3, 1);
            --ease-soft: cubic-bezier(0.16, 1, 0.3, 1);
        }
        body {
            background-color: #F8F6F1;
            color: #252238;
            font-family: 'Outfit', sans-serif;
            overflow-x: hidden;
            margin: 0;
            padding: 0;
        }
        .font-serif-italic {
            font-family: 'Cormorant Garamond', serif;
            font-style: italic;
        }
        .glass-dark {
            background: rgba(45, 38, 88, 0.8);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.12);
        }

        /* Instant High-Performance Hero Paint (Optimized for LCP & Zero CLS) */
        @keyframes heroEntrance {
            0% {
                opacity: 0;
                transform: translate3d(0, 14px, 0);
            }
            100% {
                opacity: 1;
                transform: translate3d(0, 0, 0);
            }
        }
        .hero-eyebrow,
        .hero-serif,
        .hero-title-line1,
        .hero-title-line2,
        .hero-desc,
        .hero-cta {
            opacity: 1;
            transform: translate3d(0, 0, 0);
            animation: heroEntrance 0.7s cubic-bezier(0.16, 1, 0.3, 1) both;
            will-change: opacity, transform;
        }
        .hero-eyebrow { animation-delay: 0.05s; }
        .hero-serif { animation-delay: 0.1s; }
        .hero-title-line1 { animation-delay: 0.16s; }
        .hero-title-line2 { animation-delay: 0.22s; }
        .hero-desc { animation-delay: 0.3s; }
        .hero-cta { animation-delay: 0.38s; }
        .hero-eyebrow.revealed,
        .hero-serif.revealed,
        .hero-title-line1.revealed,
        .hero-title-line2.revealed,
        .hero-desc.revealed,
        .hero-cta.revealed {
            opacity: 1 !important;
            transform: translate3d(0, 0, 0) !important;
        }

        /* Scroll Animations */
        .reveal-mask {
            overflow: hidden;
            display: block;
        }
        .reveal-line {
            transform: translate3d(0, 115%, 0);
            opacity: 0;
            transition: transform 0.85s var(--ease-premium), opacity 0.85s var(--ease-premium);
            will-change: transform, opacity;
        }
        .reveal-line.revealed {
            transform: translate3d(0, 0, 0) !important;
            opacity: 1 !important;
        }
        .reveal-fade-up {
            opacity: 0;
            transform: translate3d(0, 32px, 0);
            transition: opacity 0.85s var(--ease-premium), transform 0.85s var(--ease-premium);
            will-change: opacity, transform;
        }
        .reveal-fade-up.revealed {
            opacity: 1 !important;
            transform: translate3d(0, 0, 0) !important;
        }
        .reveal-left {
            opacity: 0;
            transform: translate3d(-36px, 0, 0);
            transition: opacity 0.85s var(--ease-premium), transform 0.85s var(--ease-premium);
            will-change: opacity, transform;
        }
        .reveal-left.revealed {
            opacity: 1 !important;
            transform: translate3d(0, 0, 0) !important;
        }
        .reveal-right {
            opacity: 0;
            transform: translate3d(36px, 0, 0);
            transition: opacity 0.85s var(--ease-premium), transform 0.85s var(--ease-premium);
            will-change: opacity, transform;
        }
        .reveal-right.revealed {
            opacity: 1 !important;
            transform: translate3d(0, 0, 0) !important;
        }
        .reveal-scale-up {
            opacity: 0;
            transform: scale(0.96) translate3d(0, 20px, 0);
            transition: opacity 0.85s var(--ease-premium), transform 0.85s var(--ease-premium);
            will-change: opacity, transform;
        }
        .reveal-scale-up.revealed {
            opacity: 1 !important;
            transform: scale(1) translate3d(0, 0, 0) !important;
        }

        /* Navbar & High-Contrast Logo System for White Canvas */
        #mainHeader {
            background-color: rgba(250, 249, 246, 0.95);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border-bottom: 1px solid rgba(45, 38, 88, 0.08);
            box-shadow: 0 4px 20px rgba(45, 38, 88, 0.04);
            transition:
                background-color 400ms var(--ease-premium),
                color 300ms ease,
                box-shadow 400ms ease,
                border-color 400ms ease,
                padding 400ms var(--ease-premium);
        }
        #navInner {
            height: 76px;
            transition: height 400ms var(--ease-premium);
        }
        .logo-white,
        .logo-black {
            position: absolute;
            left: 0;
            top: 50%;
            transform: translateY(-50%) scale(1);
            transition:
                opacity 350ms var(--ease-premium),
                transform 400ms var(--ease-premium);
            pointer-events: none;
        }
        .logo-white {
            opacity: 0;
        }
        .logo-black {
            opacity: 1;
        }
        .nav-link {
            color: #252238 !important;
            position: relative;
            transition: color 300ms ease;
        }
        .nav-link::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 0%;
            height: 2px;
            background-color: #FF5A68;
            transition: width 300ms var(--ease-premium);
        }
        .nav-link:hover {
            color: #FF5A68 !important;
        }
        .nav-link:hover::after {
            width: 100%;
        }
        .nav-link.active-link::after {
            width: 100%;
            background-color: #2D2658;
        }
        .header-cta {
            color: #252238 !important;
            border: 1px solid rgba(45, 38, 88, 0.25) !important;
            background-color: transparent !important;
            transition: color 300ms ease, border-color 300ms ease, background-color 300ms ease, transform 300ms ease;
        }
        .header-cta:hover {
            background-color: #2D2658 !important;
            color: #ffffff !important;
            border-color: #2D2658 !important;
            transform: scale(1.02);
        }
        #mobileMenuBtn {
            color: #252238 !important;
            transition: color 300ms ease;
        }

        /* Scrolled Navbar Theme */
        #mainHeader.is-scrolled,
        #mainHeader.scrolled {
            background-color: rgba(255, 255, 255, 0.98) !important;
            box-shadow: 0 8px 30px rgba(45, 38, 88, 0.08) !important;
        }
        #mainHeader.is-scrolled #navInner,
        #mainHeader.scrolled #navInner {
            height: 66px !important;
        }
        #mainHeader.is-scrolled #topInfoStrip,
        #mainHeader.scrolled #topInfoStrip {
            max-height: 0 !important;
            padding-top: 0 !important;
            padding-bottom: 0 !important;
            opacity: 0 !important;
            overflow: hidden !important;
            border-bottom: none !important;
        }

        /* Smooth Continuous Moving Logo Marquee */
        @keyframes smoothClientMarquee {
            0% {
                transform: translate3d(0, 0, 0);
            }
            100% {
                transform: translate3d(-50%, 0, 0);
            }
        }
        .client-marquee-track {
            display: flex;
            width: max-content;
            animation: smoothClientMarquee 32s linear infinite;
            will-change: transform;
        }
        .client-marquee-track:hover {
            animation-play-state: paused;
        }

        /* Editorial Card Utilities */
        .editorial-card {
            background-color: #ffffff;
            border: 1px solid rgba(45, 38, 88, 0.08);
            border-radius: 24px;
            transition: transform 350ms var(--ease-premium), box-shadow 350ms var(--ease-premium), border-color 350ms var(--ease-premium);
        }
        .editorial-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 18px 40px -10px rgba(45, 38, 88, 0.08);
            border-color: rgba(45, 38, 88, 0.16);
        }
        .editorial-icon-circle {
            width: 48px;
            height: 48px;
            border-radius: 50%;
            background-color: #FADDE3;
            color: #2D2658;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.25rem;
        }

        /* Reduced Motion */
        @media (prefers-reduced-motion: reduce) {
            *, ::before, ::after {
                animation-duration: 0.01ms !important;
                animation-iteration-count: 1 !important;
                transition-duration: 0.01ms !important;
                scroll-behavior: auto !important;
            }
            .hero-eyebrow, .hero-serif, .hero-title-line1, .hero-title-line2, .hero-desc, .hero-cta,
            .reveal-line, .reveal-fade-up, .reveal-left, .reveal-right, .reveal-scale-up {
                transform: none !important;
                opacity: 1 !important;
            }
        }
    </style>
</head>
<body class="bg-[#F8F6F1] text-[#252238] antialiased selection:bg-[#FF5A68] selection:text-white">

    <!-- Shared Header -->
    @include('components.header')

    <!-- Main Content Flow -->
    <main id="main-content" tabindex="-1" class="outline-none">
        @yield('content')
    </main>

    <!-- Shared Studio Footer -->
    @include('components.footer')

    <!-- 4K Cinema Video Lightbox Modal -->
    <div id="videoModal" role="dialog" aria-modal="true" aria-labelledby="modalVideoTitle" class="fixed inset-0 z-50 bg-[#2D2658]/95 backdrop-blur-xl hidden flex items-center justify-center p-4 transition-opacity duration-300">
        <div class="relative w-full max-w-5xl bg-[#2D2658] rounded-3xl overflow-hidden border border-white/15 shadow-2xl">
            <div class="flex justify-between items-center px-6 py-4 border-b border-white/10 bg-[#252238]">
                <h2 id="modalVideoTitle" class="font-bold text-xs uppercase tracking-widest text-white/90 font-mono">SmartFilms Cinema Player</h2>
                <button type="button" onclick="closeVideoModal()" aria-label="Fermer le lecteur vidéo" class="w-8 h-8 rounded-full bg-white/10 hover:bg-[#FF5A68] text-white flex items-center justify-center text-xs transition-colors">
                    <i class="bi bi-x-lg" aria-hidden="true"></i>
                </button>
            </div>
            <div class="aspect-video w-full bg-black">
                <iframe id="modalIframe" title="Lecteur vidéo immersif SmartFilms" class="w-full h-full border-0" src="" allow="autoplay; fullscreen" allowfullscreen></iframe>
            </div>
        </div>
    </div>

    <!-- WhatsApp VIP Concierge Button (Smaller & Soft Green) -->
    <a href="https://wa.me/{{ $settings['whatsapp'] ?? '212617202345' }}?text={{ urlencode('Bonjour SmartFilms, j\'aimerais échanger sur un projet de production audiovisuelle.') }}" target="_blank" rel="noopener noreferrer" aria-label="Contacter l'agence SmartFilms sur WhatsApp (ouvre un nouvel onglet)" class="fixed bottom-5 right-5 z-40 bg-[#25D366]/90 hover:bg-[#25D366] text-white px-4 py-2.5 rounded-full shadow-lg flex items-center gap-2.5 transition-all hover:scale-105 group border border-white/30 backdrop-blur-sm">
        <span class="relative flex h-2 w-2" aria-hidden="true">
            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-white opacity-75"></span>
            <span class="relative inline-flex rounded-full h-2 w-2 bg-white"></span>
        </span>
        <i class="bi bi-whatsapp text-sm" aria-hidden="true"></i>
        <span class="text-[11px] uppercase font-bold tracking-wider hidden sm:inline">WhatsApp Direct</span>
    </a>

    <!-- Deferred Core Application JavaScript Bundle -->
    @if($jsFile)
        <script type="module" src="{{ asset('build/' . $jsFile) }}" defer></script>
    @endif

    <!-- Lightweight Non-Blocking Video Lightbox Script -->
    <script>
        function openVideoModal(url, title) {
            const modal = document.getElementById('videoModal');
            const iframe = document.getElementById('modalIframe');
            const titleEl = document.getElementById('modalVideoTitle');
            if (modal && iframe) {
                titleEl.innerText = title || 'SmartFilms Cinema Player';
                let embedUrl = url;
                if (url && url.includes('youtube.com/watch?v=')) {
                    embedUrl = url.replace('watch?v=', 'embed/');
                }
                if (embedUrl && !embedUrl.includes('autoplay=1')) {
                    embedUrl += (embedUrl.includes('?') ? '&' : '?') + 'autoplay=1';
                }
                iframe.src = embedUrl || '';
                modal.classList.remove('hidden');
            }
        }

        function closeVideoModal() {
            const modal = document.getElementById('videoModal');
            const iframe = document.getElementById('modalIframe');
            if (modal && iframe) {
                iframe.src = '';
                modal.classList.add('hidden');
            }
        }
    </script>
    @stack('scripts')
</body>
</html>
