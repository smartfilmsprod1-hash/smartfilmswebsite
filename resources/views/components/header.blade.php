<!-- Skip to Main Content Link for Keyboard and Screen Reader Accessibility -->
<a href="#main-content" class="sr-only focus:not-sr-only focus:absolute focus:top-4 focus:left-4 focus:z-50 focus:px-5 focus:py-2.5 focus:bg-[#FF5A68] focus:text-white focus:font-bold focus:rounded-full focus:shadow-2xl focus:outline-none focus:ring-2 focus:ring-white">
    Aller au contenu principal
</a>

<!-- Sticky Cinematic Header with Progressive Smooth Transition & Two-Logo Crossfade -->
<header id="mainHeader" class="fixed top-0 left-0 w-full z-50">
    
    <!-- Main Navigation Bar -->
    <div id="navContainer" class="max-w-[96rem] mx-auto px-4 sm:px-6 lg:px-8">
        <div id="navInner" class="flex justify-between items-center h-20 transition-all duration-500">
            
            <!-- Two-Logo Stack (Seamless Crossfade without Layout Shift) -->
            <a href="{{ route('home') }}" class="relative inline-flex items-center group logo-container outline-none focus:outline-none ring-0 select-none" aria-label="SmartFilms Prod - Accueil agence audiovisuelle Casablanca">
                <div class="relative h-10 sm:h-11 w-40 sm:w-44 flex items-center outline-none">
                    <img src="/uploads/smartfilms_logo_white.png" alt="SmartFilms Prod - Agence de production audiovisuelle et photographe professionnel Casablanca" class="logo-white h-10 sm:h-11 max-h-[44px] w-auto object-contain transition-all" width="176" height="44" fetchpriority="high" style="max-height: 44px; width: auto;">
                    <img src="/uploads/smartfilms_logo_black.png" alt="SmartFilms Prod Casablanca - Agence audiovisuelle et studio photo corporate" class="logo-black h-10 sm:h-11 max-h-[44px] w-auto object-contain transition-all" width="176" height="44" fetchpriority="high" style="max-height: 44px; width: auto;">
                </div>
            </a>
            
            <!-- Navigation Links (Brief & Pertinent for Desktop/Laptops) -->
            <nav aria-label="Navigation principale" class="hidden lg:flex items-center space-x-8 h-full">
                <a href="{{ route('home') }}" class="nav-link text-xs uppercase tracking-widest font-semibold py-1 {{ request()->routeIs('home') ? 'active-link' : '' }}">Accueil</a>
                <a href="{{ route('portfolio') }}" class="nav-link text-xs uppercase tracking-widest font-semibold py-1 {{ request()->routeIs('portfolio') || request()->routeIs('project.*') ? 'active-link' : '' }}">Réalisations</a>
                <a href="{{ url('/#expertises') }}" class="nav-link text-xs uppercase tracking-widest font-semibold py-1 {{ request()->routeIs('expertises*') ? 'active-link' : '' }}">Expertises</a>
                <a href="{{ route('blog') }}" class="nav-link text-xs uppercase tracking-widest font-semibold py-1 {{ request()->routeIs('blog*') ? 'active-link' : '' }}">Blog</a>
                <a href="{{ route('contact') }}" class="nav-link text-xs uppercase tracking-widest font-semibold py-1 {{ request()->routeIs('contact') ? 'active-link' : '' }}">Contact</a>
            </nav>

            <!-- Header Action Button (Visible from Tablet Upwards) -->
            <div class="hidden sm:flex items-center gap-3">
                <a href="{{ route('contact') }}" id="headerCtaBtn" class="header-cta inline-flex items-center gap-2 px-5 sm:px-6 py-2 sm:py-2.5 rounded-full text-xs font-semibold uppercase tracking-wider transition-all duration-400 group" aria-label="Accéder au formulaire de contact et devis">
                    <span>Nous contacter</span>
                    <i class="bi bi-arrow-right text-xs transform group-hover:translate-x-1 transition-transform" aria-hidden="true"></i>
                </a>
            </div>

            <!-- Mobile Menu Toggle Button -->
            <button id="mobileMenuBtn" aria-label="Ouvrir le menu de navigation" aria-expanded="false" aria-controls="mobileMenu" class="lg:hidden p-2 text-2xl transition-colors focus:outline-none flex items-center justify-center w-10 h-10 rounded-full hover:bg-black/5" onclick="toggleMobileMenu()">
                <i id="mobileMenuIcon" class="bi bi-list" aria-hidden="true"></i>
            </button>
        </div>
    </div>

    <!-- Mobile Drawer Overlay & Menu -->
    <nav id="mobileMenu" aria-label="Navigation mobile" class="hidden lg:hidden bg-[#2D2658] text-white border-t border-white/10 shadow-2xl px-6 py-6 space-y-4 max-h-[calc(100vh-80px)] overflow-y-auto">
        <a href="{{ route('home') }}" onclick="closeMobileMenu()" class="block text-sm font-bold uppercase tracking-wider {{ request()->routeIs('home') ? 'text-[#FF5A68]' : 'text-white' }} hover:text-[#FF5A68] py-2.5 border-b border-white/10">Accueil</a>
        <a href="{{ route('portfolio') }}" onclick="closeMobileMenu()" class="block text-sm font-bold uppercase tracking-wider {{ request()->routeIs('portfolio') ? 'text-[#FF5A68]' : 'text-white' }} hover:text-[#FF5A68] py-2.5 border-b border-white/10">Réalisations</a>
        <a href="{{ url('/#expertises') }}" onclick="closeMobileMenu()" class="block text-sm font-bold uppercase tracking-wider text-white hover:text-[#FF5A68] py-2.5 border-b border-white/10">Expertises</a>
        <a href="{{ route('blog') }}" onclick="closeMobileMenu()" class="block text-sm font-bold uppercase tracking-wider {{ request()->routeIs('blog*') ? 'text-[#FF5A68]' : 'text-white' }} hover:text-[#FF5A68] py-2.5 border-b border-white/10">Blog</a>
        <a href="{{ route('contact') }}" onclick="closeMobileMenu()" class="block text-sm font-bold uppercase tracking-wider {{ request()->routeIs('contact') ? 'text-[#FF5A68]' : 'text-white' }} hover:text-[#FF5A68] py-2.5 border-b border-white/10">Contact</a>
        <div class="pt-4 space-y-3">
            <a href="{{ route('contact') }}" onclick="closeMobileMenu()" class="block text-center bg-[#FF5A68] text-white py-3 rounded-full text-xs font-bold uppercase tracking-wider shadow-lg hover:bg-[#E84554] transition-all">
                Nous contacter &rarr;
            </a>
            <div class="text-center text-[11px] text-white/60 font-mono pt-2">
                Casablanca &bull; +212 6 17 20 23 45
            </div>
        </div>
    </nav>
</header>

<script>
    function toggleMobileMenu() {
        const menu = document.getElementById('mobileMenu');
        const btn = document.getElementById('mobileMenuBtn');
        const icon = document.getElementById('mobileMenuIcon');
        if (!menu || !icon || !btn) return;
        
        const isHidden = menu.classList.contains('hidden');
        if (isHidden) {
            menu.classList.remove('hidden');
            icon.classList.remove('bi-list');
            icon.classList.add('bi-x-lg');
            btn.setAttribute('aria-expanded', 'true');
            btn.setAttribute('aria-label', 'Fermer le menu de navigation');
        } else {
            menu.classList.add('hidden');
            icon.classList.remove('bi-x-lg');
            icon.classList.add('bi-list');
            btn.setAttribute('aria-expanded', 'false');
            btn.setAttribute('aria-label', 'Ouvrir le menu de navigation');
        }
    }

    function closeMobileMenu() {
        const menu = document.getElementById('mobileMenu');
        const btn = document.getElementById('mobileMenuBtn');
        const icon = document.getElementById('mobileMenuIcon');
        if (menu) menu.classList.add('hidden');
        if (btn) {
            btn.setAttribute('aria-expanded', 'false');
            btn.setAttribute('aria-label', 'Ouvrir le menu de navigation');
        }
        if (icon) {
            icon.classList.remove('bi-x-lg');
            icon.classList.add('bi-list');
        }
    }
</script>
