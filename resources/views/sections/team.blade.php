<!-- CHAPTER 06: THE TEAM / LES VISAGES DERRIÈRE LES IMAGES -->
<section id="equipe" class="bg-[#F8F6F1] text-[#252238] py-20 md:py-32 border-b border-[#2D2658]/10 relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        
        <!-- Header & Action Button -->
        <div class="flex flex-col lg:flex-row justify-between items-start lg:items-end mb-12 sm:mb-16 gap-8">
            <div class="max-w-2xl">
                <div class="flex items-center gap-3 mb-3">
                    <span class="text-xs font-mono font-bold tracking-[0.2em] text-[#FF5A68] uppercase">
                        06 — LES VISAGES DERRIÈRE
                    </span>
                    <span class="w-8 h-[1px] bg-[#FF5A68]/40"></span>
                </div>
                <h2 class="text-3xl sm:text-4xl md:text-5xl font-black uppercase tracking-tight text-[#161828] mb-4">
                    LES IMAGES.
                </h2>
                <p class="text-[#686580] text-sm sm:text-base font-light leading-relaxed mb-6">
                    Une équipe créative, technique et opérationnelle réunie autour d'une même exigence : créer des contenus qui ont du sens.
                </p>
                <div>
                    <a href="{{ url('/equipe') }}" class="inline-flex items-center gap-2 px-6 py-2.5 rounded-full border border-[#2D2658]/30 text-[#161828] font-bold text-xs uppercase tracking-wider hover:bg-[#161828] hover:text-white transition-all group">
                        <span>DÉCOUVRIR L'ÉQUIPE</span>
                        <i class="bi bi-arrow-right group-hover:translate-x-1 transition-transform"></i>
                    </a>
                </div>
            </div>
        </div>

        @php
            $team = \App\Models\TeamMember::orderBy('order')->get();
            if ($team->isEmpty()) {
                $team = [
                    (object)['name' => 'Yassine Boujhrane', 'role' => 'Directeur de production', 'photo' => '/uploads/team_yassine.jpg'],
                    (object)['name' => 'Mehdi Aitani', 'role' => 'Réalisateur', 'photo' => '/uploads/team_mehdi.jpg'],
                    (object)['name' => 'Sofia Tojer', 'role' => 'Monteuse', 'photo' => '/uploads/team_sofia.jpg'],
                    (object)['name' => 'Amine Cherabi', 'role' => 'Chef opérateur', 'photo' => '/uploads/team_amine.jpg'],
                ];
            }
        @endphp

        <!-- Team Grid with 4 Sleek Dark Cards with Passe-Partout Framing -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 sm:gap-8">
            @foreach($team as $idx => $m)
                <div class="group relative bg-[#090D1D] rounded-[24px] overflow-hidden border border-white/[0.08] shadow-[0_16px_36px_-10px_rgba(15,23,42,0.2)] hover:shadow-[0_24px_50px_-10px_rgba(15,23,42,0.35),0_0_0_1px_rgba(255,90,104,0.35)] hover:-translate-y-1.5 transition-all duration-400 ease-out flex flex-col justify-between">
                    
                    <!-- Portrait Image Banner with Passe-Partout Framing -->
                    <div class="p-3 sm:p-3.5 pb-0">
                        <div class="relative w-full aspect-[4/5] rounded-[18px] overflow-hidden bg-[#060813] border border-white/10 shadow-inner">
                            <img src="{{ $m->photo ?? '/uploads/team_yassine.jpg' }}" alt="{{ $m->name }} — {{ $m->role }}" class="w-full h-full object-cover object-top group-hover:scale-105 transition-transform duration-700 ease-out">
                            <!-- Bottom Subtle Vignette -->
                            <div class="absolute inset-0 bg-gradient-to-t from-black/35 via-transparent to-transparent pointer-events-none"></div>
                        </div>
                    </div>

                    <!-- Member Info -->
                    <div class="p-5 space-y-1">
                        <h3 class="font-bold text-base text-white group-hover:text-[#FF5A68] transition-colors">
                            {{ $m->name }}
                        </h3>
                        <p class="text-xs text-[#8E8B9F] font-light">
                            {{ $m->role }}
                        </p>
                    </div>

                </div>
            @endforeach
        </div>

    </div>
</section>
