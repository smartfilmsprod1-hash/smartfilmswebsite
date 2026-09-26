<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Page;
use App\Models\Menu;
use App\Models\Project;
use App\Models\TeamMember;
use App\Models\Setting;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Admin User
        User::firstOrCreate(
            ['email' => 'admin@smartfilms.com'],
            [
                'name' => 'Directeur SmartFilms',
                'password' => Hash::make('admin123'),
            ]
        );

        // 2. Settings
        $settings = [
            'site_name' => 'SmartFilms Prod',
            'phone' => '+212 6 17 20 23 45',
            'email' => 'contact@smartfilmsprod.com',
            'address' => '130 Bv d\'Anfa, 20300 Casablanca, Maroc',
            'whatsapp' => '+212617202345',
            'instagram' => 'https://instagram.com/smartfilmsprod',
            'linkedin' => 'https://linkedin.com/company/smartfilmsprod',
            'showreel_video' => '/uploads/hero_youtube.mp4',
            'ga4_id' => 'G-SF2026CASABLANCA',
        ];

        foreach ($settings as $k => $v) {
            Setting::set($k, $v);
        }

        // 3. Projects (Case Studies)
        $projects = [
            [
                'title' => 'Empowering Digital Leaders',
                'slug' => 'dell-technologies-empowering-digital',
                'client_name' => 'DELL Technologies',
                'category' => 'Film Corporate',
                'video_url' => 'https://www.youtube.com/embed/_yWLYCiW1Z8',
                'video_type' => 'youtube',
                'thumbnail' => '/uploads/cinema_corporate_film.png',
                'description' => 'Film institutionnel de haute volée mettant en valeur les infrastructures cloud et l\'innovation technologique au Maroc et en Afrique.',
                'duration' => '02:45',
                'year' => '2026',
                'metrics' => 'Diffusion C-Level & Salons Tech',
                'is_featured' => true,
                'order' => 1,
            ],
            [
                'title' => 'De la Terre à la Table',
                'slug' => 'danone-de-la-terre-a-la-table',
                'client_name' => 'DANONE Maroc',
                'category' => 'Spot Publicitaire',
                'video_url' => 'https://www.youtube.com/embed/_yWLYCiW1Z8',
                'video_type' => 'youtube',
                'thumbnail' => '/uploads/studio_commercial_spot.png',
                'description' => 'Spot publicitaire cinématographique célébrant les éleveurs partenaires et la fraîcheur des produits à travers tout le Royaume.',
                'duration' => '00:45',
                'year' => '2026',
                'metrics' => '+3.8M Vues Digitales & TV',
                'is_featured' => true,
                'order' => 2,
            ],
            [
                'title' => 'Hub Maritime Mondial',
                'slug' => 'tanger-alliance-hub-maritime',
                'client_name' => 'Tanger Alliance',
                'category' => 'Drone 4K',
                'video_url' => 'https://www.youtube.com/embed/_yWLYCiW1Z8',
                'video_type' => 'youtube',
                'thumbnail' => '/uploads/cinema_corporate_film.png',
                'description' => 'Captation aérienne FPV et cinéma 8K du terminal à conteneurs du détroit de Gibraltar. Une immersion spectaculaire dans la logistique mondiale.',
                'duration' => '01:30',
                'year' => '2025',
                'metrics' => 'Captation FPV & 8K Cinema',
                'is_featured' => true,
                'order' => 3,
            ],
            [
                'title' => 'L\'Audace d\'Entreprendre',
                'slug' => 'bcp-l-audace-d-entreprendre',
                'client_name' => 'BCP International',
                'category' => 'Film Corporate',
                'video_url' => 'https://www.youtube.com/embed/_yWLYCiW1Z8',
                'video_type' => 'youtube',
                'thumbnail' => '/uploads/studio_commercial_spot.png',
                'description' => 'Récit humain et dynamique valorisant les entrepreneurs marocains accompagnés par la Banque Centrale Populaire.',
                'duration' => '03:10',
                'year' => '2025',
                'metrics' => 'Campagne Marque Employeur',
                'is_featured' => true,
                'order' => 4,
            ],
            [
                'title' => 'L\'Énergie en Mouvement',
                'slug' => 'ingelec-l-energie-en-mouvement',
                'client_name' => 'Ingelec',
                'category' => 'Spot Publicitaire',
                'video_url' => 'https://www.youtube.com/embed/_yWLYCiW1Z8',
                'video_type' => 'youtube',
                'thumbnail' => '/uploads/cinema_corporate_film.png',
                'description' => 'Spot de marque rythmé mettant en avant l\'excellence industrielle et la qualité de l\'appareillage électrique marocain.',
                'duration' => '01:00',
                'year' => '2025',
                'metrics' => 'Campagne 360 & TV',
                'is_featured' => true,
                'order' => 5,
            ],
            [
                'title' => 'L\'Ingénierie de Précision',
                'slug' => 'flowpipe-ingenierie-de-precision',
                'client_name' => 'FlowPipe Plastima',
                'category' => 'Documentaire & RSE',
                'video_url' => 'https://www.youtube.com/embed/_yWLYCiW1Z8',
                'video_type' => 'youtube',
                'thumbnail' => '/uploads/studio_commercial_spot.png',
                'description' => 'Documentaire technique immersif sur les procédés d\'extrusion industrielle et l\'engagement pour le développement durable.',
                'duration' => '04:15',
                'year' => '2025',
                'metrics' => 'Reportage Industriel & Salons',
                'is_featured' => true,
                'order' => 6,
            ],
        ];

        foreach ($projects as $p) {
            Project::updateOrCreate(['slug' => $p['slug']], $p);
        }

        // 4. Team Members
        $team = [
            [
                'name' => 'Yassine Benkirane',
                'role' => 'Fondateur & Producteur Exécutif',
                'photo' => '/uploads/cinema_corporate_film.png',
                'bio' => '+12 ans d\'expérience dans la production cinématographique et publicitaire à Casablanca et Paris.',
                'linkedin' => 'https://linkedin.com',
                'order' => 1,
            ],
            [
                'name' => 'Mehdi Alami',
                'role' => 'Directeur de la Photographie & Télépilote Drone FPV',
                'photo' => '/uploads/studio_commercial_spot.png',
                'bio' => 'Spécialiste des caméras RED/ARRI et des prises de vues aériennes spectaculaires certifiées.',
                'linkedin' => 'https://linkedin.com',
                'order' => 2,
            ],
            [
                'name' => 'Sofia Tazi',
                'role' => 'Directrice Artistique & Scénariste',
                'photo' => '/uploads/cinema_corporate_film.png',
                'bio' => 'Créatrice d\'univers visuels forts et de récits de marque qui captivent et convertissent.',
                'linkedin' => 'https://linkedin.com',
                'order' => 3,
            ],
            [
                'name' => 'Amine Chraibi',
                'role' => 'Chef Monteur & Coloriste Étalonneur',
                'photo' => '/uploads/studio_commercial_spot.png',
                'bio' => 'Expert DaVinci Resolve, il façonne le look cinématographique propre à chaque film SmartFilms.',
                'linkedin' => 'https://linkedin.com',
                'order' => 4,
            ],
        ];

        foreach ($team as $t) {
            TeamMember::updateOrCreate(['name' => $t['name']], $t);
        }

        // 5. Default Accueil Page with Full Modern Blocks
        Page::updateOrCreate(
            ['slug' => 'accueil'],
            [
                'title' => 'Accueil - SmartFilms Prod',
                'meta_title' => 'SmartFilms Prod | Agence de Production Audiovisuelle & Films d\'Entreprise Casablanca',
                'meta_description' => 'SmartFilms Prod est l\'agence de production audiovisuelle de référence à Casablanca : films d\'entreprise 4K, spots publicitaires, prises de vues par drone et storytelling cinématographique pour les grandes marques au Maroc.',
                'is_active' => true,
                'content' => [
                    [
                        'type' => 'rembrand_hero',
                        'props' => [
                            'subtitle' => 'AGENCE DE PRODUCTION AUDIOVISUELLE & FILMS DE MARQUE',
                            'prefixText' => 'agence de production',
                            'title' => 'SMART FILMS PROD',
                            'description' => 'Nous façonnons des récits cinématographiques à fort impact pour sublimer la réputation de votre entreprise et captiver vos audiences à Casablanca, au Maroc et à l\'international.',
                            'btnText' => 'Démarrer votre projet',
                            'btnLink' => '#estimateur',
                            'showreelText' => 'Voir le Showreel 2026',
                            'bgColor' => '#F8F9FC',
                            'paddingTop' => '30',
                            'paddingBottom' => '30',
                        ],
                    ],
                    [
                        'type' => 'rembrand_client_logos',
                        'props' => [
                            'title' => 'ILS NOUS FONT CONFIANCE',
                            'bgColor' => '#F8F9FC',
                            'paddingTop' => '50',
                            'paddingBottom' => '50',
                        ],
                    ],
                    [
                        'type' => 'video_portfolio_showcase',
                        'props' => [
                            'title' => 'RÉALISATIONS',
                            'subtitle' => 'Explorez notre sélection de films d\'entreprise, spots publicitaires et captations 4K livrés pour les plus grandes marques.',
                            'bgColor' => '#0F1123',
                            'paddingTop' => '90',
                            'paddingBottom' => '90',
                        ],
                    ],
                    [
                        'type' => 'rembrand_offres',
                        'props' => [
                            'title' => 'NOS',
                            'titleItalic' => 'expertises',
                            'subtitle' => 'Quatre savoir-faire d\'exception pour donner à votre marque une longueur d\'avance.',
                            'bgColor' => '#141632',
                            'paddingTop' => '90',
                            'paddingBottom' => '90',
                        ],
                    ],
                    [
                        'type' => 'interactive_estimator',
                        'props' => [
                            'title' => 'ESTIMEZ VOTRE',
                            'titleItalic' => 'projet audiovisuel',
                            'subtitle' => 'Configurez votre besoin en 4 étapes simples et recevez une estimation personnalisée sous 24h ouvrées.',
                            'bgColor' => '#F8F9FC',
                            'paddingTop' => '90',
                            'paddingBottom' => '90',
                        ],
                    ],
                    [
                        'type' => 'rembrand_mission',
                        'props' => [
                            'text' => 'Les organisations qui marquent les esprits ont besoin d\'histoires cinématographiques fortes. Chez SmartFilms Prod, nous conjuguons la précision technique du cinéma avec une vision stratégique des enjeux de votre entreprise.',
                            'bgColor' => '#F8F9FC',
                            'paddingTop' => '90',
                            'paddingBottom' => '90',
                        ],
                    ],
                    [
                        'type' => 'team_showcase',
                        'props' => [
                            'title' => 'CEUX QUI FONT',
                            'titleItalic' => 'smartfilms',
                            'subtitle' => 'Une équipe de passionnés du 7ème art, directeurs de la photographie, cadreurs et étalonneurs dévoués à l\'excellence de votre image.',
                            'bgColor' => '#0F1123',
                            'paddingTop' => '90',
                            'paddingBottom' => '90',
                        ],
                    ],
                    [
                        'type' => 'rembrand_faq',
                        'props' => [
                            'bgColor' => '#141632',
                            'paddingTop' => '90',
                            'paddingBottom' => '90',
                        ],
                    ],
                    [
                        'type' => 'rembrand_contact',
                        'props' => [
                            'bgColor' => '#F8F9FC',
                            'paddingTop' => '90',
                            'paddingBottom' => '90',
                        ],
                    ],
                ],
            ]
        );

        // 7. Expertises (The 6 Core Editorial CMS Disciplines)
        $expertises = [
            [
                'title' => 'Stratégie & Conception',
                'slug' => 'strategie-conception',
                'subtitle' => 'Donner du sens à chaque projet',
                'seo_title' => 'Stratégie de Contenu & Conception Audiovisuelle | SmartFilms Maroc',
                'seo_description' => 'Conception de stratégies de contenu percutantes et lignes éditoriales adaptées à vos objectifs et à votre audience à Casablanca et au Maroc.',
                'h1' => 'STRATÉGIE & CONCEPTION CRÉATIVE',
                'hero_desc' => 'Analyse, storytelling, direction artistique : une vision sur mesure pour des contenus qui ont du sens.',
                'image' => '/uploads/expertise_01_strategy.jpg',
                'deliverables' => [
                    'Lignes éditoriales et chartes audiovisuelles',
                    'Storyboards détaillés et moodboards créatifs',
                    'Scénarisation et rédaction des voix-off',
                    'Plan de diffusion multi-canaux'
                ],
                'equipment' => [
                    'Direction artistique dédiée',
                    'Scénaristes & Concepteurs rédacteurs',
                    'Ateliers de co-création stratégique'
                ],
                'category_filter' => 'Stratégie',
                'faq' => [
                    [
                        'q' => 'Comment démarre la phase de conception ?',
                        'a' => 'Nous débutons par un brief approfondi pour comprendre vos objectifs, vos personas et vos messages clés, puis nous élaborons 2 à 3 pistes créatives.'
                    ]
                ],
                'order' => 1,
                'is_active' => true,
            ],
            [
                'title' => 'Production Audiovisuelle',
                'slug' => 'production-audiovisuelle',
                'subtitle' => 'Transformer une idée en image',
                'seo_title' => 'Production Audiovisuelle Cinématographique | SmartFilms Maroc',
                'seo_description' => 'Films institutionnels, publicités, interviews, capsules et prises de vues cinéma au Maroc.',
                'h1' => 'PRODUCTION AUDIOVISUELLE HAUTE FIDÉLITÉ',
                'hero_desc' => "Du tournage à la post-production, nous assurons la réalisation de films sur mesure, avec un haut niveau d'exigence.",
                'image' => '/uploads/expertise_02_production.jpg',
                'deliverables' => [
                    'Films institutionnels master 4K',
                    'Captations multi-caméras cinéma',
                    'Interviews dirigeants & portraits collaborateurs',
                    'Banque de plans B-Roll 4K/6K'
                ],
                'equipment' => [
                    'Caméras Cinéma Arri / RED / Sony FX',
                    'Optiques Anamorphiques & Sphériques',
                    'Éclairages studio professionnels ARRI / Aputure'
                ],
                'category_filter' => 'Production',
                'faq' => [
                    [
                        'q' => 'Quels équipements utilisez-vous en tournage ?',
                        'a' => 'Nous tournons exclusivement avec des configurations cinéma certifiées (capteurs grand format, optiques de cinéma et machinerie stabilisée).'
                    ]
                ],
                'order' => 2,
                'is_active' => true,
            ],
            [
                'title' => 'Contenus Sociaux',
                'slug' => 'contenus-sociaux',
                'subtitle' => "Créer du contenu qui mérite d'être regardé",
                'seo_title' => 'Production de Contenus Sociaux & Reels 9:16 | SmartFilms Maroc',
                'seo_description' => "Capsules verticales, Reels, TikTok et séries vidéo pensées pour maximiser l'engagement sur les réseaux sociaux.",
                'h1' => 'CONTENUS SOCIAUX & ENGAGEMENT DIGITAL',
                'hero_desc' => 'Des formats adaptés aux réseaux sociaux pour engager vos communautés et renforcer votre visibilité.',
                'image' => '/uploads/expertise_03_social.jpg',
                'deliverables' => [
                    'Reels & TikTok 9:16 verticaux dynamiques',
                    'Capsules interviews format Snack Content',
                    'Stories animées et motion design',
                    'Déclinaisons multi-ratios (9:16, 1:1, 16:9)'
                ],
                'equipment' => [
                    'Rigs verticaux cinéma',
                    'Systèmes de captation sonore nomade sans fil',
                    'Setup lumière compact et réactif'
                ],
                'category_filter' => 'Réseaux Sociaux',
                'faq' => [
                    [
                        'q' => 'À quel rythme pouvons-nous produire des vidéos pour les réseaux ?',
                        'a' => 'Nous proposons des forfaits mensuels récurrents ou des packs de tournage permettant de produire en 1 ou 2 jours de shooting tout un mois de contenu.'
                    ]
                ],
                'order' => 3,
                'is_active' => true,
            ],
            [
                'title' => 'Shooting Photo Corporate',
                'slug' => 'shooting-photo-corporate',
                'subtitle' => "Capturer l'humain et l'excellence industrielle",
                'seo_title' => 'Shooting Photo Corporate & Industriel Casablanca | SmartFilms Maroc',
                'seo_description' => "Photographe d'entreprise à Casablanca : portraits de dirigeants, reportages industriels et packshots produits.",
                'h1' => 'SHOOTING PHOTO CORPORATE & INDUSTRIEL',
                'hero_desc' => "Portraits de dirigeants, reportages industriels, packshots produits et banques d'images sur mesure à Casablanca et au Maroc.",
                'image' => '/uploads/expertise_04_corporate.jpg',
                'deliverables' => [
                    'Portraits corporate HD dirigeants & équipes',
                    'Reportage in situ ateliers et chantiers',
                    'Packshots produits haute résolution',
                    "Banque d'images exclusive et droits d'exploitation"
                ],
                'equipment' => [
                    'Boîtiers plein format haute résolution (60MP+)',
                    'Flashes studio autonomes Profoto',
                    'Optiques portraits & macro de précision'
                ],
                'category_filter' => 'Photographie',
                'faq' => [
                    [
                        'q' => 'Où se déroulent les shootings photos ?',
                        'a' => 'Nous nous déplaçons directement dans vos locaux avec notre studio mobile (fonds, éclairages pro) ou en extérieur/sites de production.'
                    ]
                ],
                'order' => 4,
                'is_active' => true,
            ],
            [
                'title' => 'Publicité & Campagnes',
                'slug' => 'publicite-campagnes',
                'subtitle' => 'Des concepts percutants pour faire rayonner vos marques',
                'seo_title' => 'Campagnes Publicitaires & Brand Films | SmartFilms Maroc',
                'seo_description' => 'Création et réalisation de campagnes publicitaires percutantes pour la télévision, le cinéma et le digital.',
                'h1' => 'PUBLICITÉ & GRANDES CAMPAGNES',
                'hero_desc' => 'Des campagnes créatives et percutantes pour faire rayonner vos marques et atteindre vos objectifs.',
                'image' => '/uploads/expertise_05_advertising.jpg',
                'deliverables' => [
                    'Spots TV broadcast masters (15s, 30s, 60s)',
                    'Déclinaisons digitales ads (YouTube, Meta, TikTok)',
                    'Bandes-son originales et mixage 5.1',
                    'Étalonnage couleur HDR DaVinci Resolve'
                ],
                'equipment' => [
                    'Caméras Cinéma haute vitesse slow-motion',
                    'Machinerie travelling, gimbal et grue',
                    'Éclairages cinéma grande puissance'
                ],
                'category_filter' => 'Publicité',
                'faq' => [
                    [
                        'q' => 'Gérez-vous le casting et les décors ?',
                        'a' => "Oui, nous prenons en charge l'ensemble de la pré-production : direction de casting, repérage des lieux, stylisme et autorisations de tournage."
                    ]
                ],
                'order' => 5,
                'is_active' => true,
            ],
            [
                'title' => 'Événement & Live',
                'slug' => 'evenement-live',
                'subtitle' => 'Donner une autre dimension à vos événements',
                'seo_title' => 'Captation Événementielle & Aftermovie 4K | SmartFilms Maroc',
                'seo_description' => 'Captation multi-caméras, aftermovies percutants et streaming live pour vos conventions, séminaires et galas.',
                'h1' => 'ÉVÉNEMENTIEL, AFTERMOVIES & LIVE',
                'hero_desc' => 'Captation, diffusion, régie multi-caméras... Nous donnons une autre dimension à vos événements.',
                'image' => '/uploads/expertise_06_events.jpg',
                'deliverables' => [
                    'Aftermovie dynamique 4K (2 à 4 minutes)',
                    'Teaser Same-Day pour diffusion le soir même',
                    'Captation intégrale des keynotes & conférences',
                    'Photos professionnelles en temps réel'
                ],
                'equipment' => [
                    'Régie multi-caméras sans fil HF',
                    'Drones certifiés pour captation extérieure',
                    'Prise de son numérique multi-pistes'
                ],
                'category_filter' => 'Événementiel',
                'faq' => [
                    [
                        'q' => "Pouvez-vous livrer un teaser pendant l'événement ?",
                        'a' => "Oui, notre équipe de montage sur place peut monter et étalonner un teaser dès la fin de la matinée ou de la journée pour vos réseaux sociaux."
                    ]
                ],
                'order' => 6,
                'is_active' => true,
            ],
        ];

        \App\Models\Expertise::truncate();
        foreach ($expertises as $exp) {
            \App\Models\Expertise::create($exp);
        }
    }
}
