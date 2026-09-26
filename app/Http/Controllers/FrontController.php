<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\Project;
use App\Models\TeamMember;
use App\Models\Menu;
use App\Models\Setting;
use Illuminate\Support\Str;

class FrontController extends Controller
{
    private function getCommonData()
    {
        return [
            'menus' => Menu::whereNull('parent_id')->orderBy('order')->with('children.children')->get(),
            'settings' => [
                'phone' => Setting::get('phone', '+212 6 17 20 23 45'),
                'email' => Setting::get('email', 'contact@smartfilmsprod.com'),
                'address' => Setting::get('address', 'Villa Brion 7, rue Khadija courbée Khouailid 20250, Casablanca 20250'),
                'whatsapp' => Setting::get('whatsapp', '212617202345'),
            ]
        ];
    }

    /**
     * Homepage - Cinematic Production Studio Experience
     */
    public function index()
    {
        $page = Page::where('slug', 'accueil')->where('is_active', true)->first();
        if (!$page) {
            $page = new Page([
                'title' => 'Accueil',
                'slug' => 'accueil',
                'meta_title' => 'SmartFilms Prod | Agence Audiovisuelle & Photographe Casablanca',
                'meta_description' => 'Agence audiovisuelle et photographe professionnel à Casablanca. Production de films institutionnels, shooting photo corporate, capsules vidéo et spots publicitaires au Maroc.',
                'content' => []
            ]);
        }

        $projects = Project::orderBy('order')->get();
        
        $featuredProject = $projects->where('is_featured', true)->first() ?? $projects->first();
        $teamMembers = TeamMember::orderBy('order')->get();
        $categories = $projects->pluck('category')->unique()->filter()->values();

        $common = $this->getCommonData();
        $menus = $common['menus'];
        $settings = $common['settings'];

        return view('front.page', compact('page', 'menus', 'projects', 'featuredProject', 'teamMembers', 'categories', 'settings'));
    }

    /**
     * Dedicated Portfolio / Réalisations Gallery
     */
    public function portfolio()
    {
        $projects = Project::orderBy('order')->get();
        $categories = $projects->pluck('category')->unique()->filter()->values();
        $common = $this->getCommonData();

        return view('front.portfolio', [
            'projects' => $projects,
            'categories' => $categories,
            'menus' => $common['menus'],
            'settings' => $common['settings']
        ]);
    }

    /**
     * Individual Film Case Study
     */
    public function projectShow($slug)
    {
        $project = Project::where('slug', $slug)->firstOrFail();
        $nextProject = Project::where('id', '>', $project->id)->orderBy('id', 'asc')->first()
            ?? Project::orderBy('id', 'asc')->first();

        $common = $this->getCommonData();

        return view('front.project-show', [
            'project' => $project,
            'nextProject' => $nextProject,
            'menus' => $common['menus'],
            'settings' => $common['settings']
        ]);
    }

    /**
     * Expertises Overview Hub (/expertises)
     */
    public function expertises()
    {
        $common = $this->getCommonData();
        $expertises = \App\Models\Expertise::where('is_active', true)->orderBy('order')->get();
        $projects = Project::orderBy('order')->take(6)->get();

        return view('front.expertises.index', [
            'menus' => $common['menus'],
            'settings' => $common['settings'],
            'expertises' => $expertises,
            'projects' => $projects
        ]);
    }

    /**
     * Dedicated Expertise Landing Page (/expertises/{slug})
     */
    public function expertiseDetail($slug)
    {
        // 1. Try fetching from Database Model first
        $expertiseModel = \App\Models\Expertise::where('slug', $slug)->where('is_active', true)->first();
        
        if ($expertiseModel) {
            $expertise = [
                'title' => $expertiseModel->title,
                'subtitle' => $expertiseModel->subtitle,
                'meta_title' => $expertiseModel->seo_title ?? ($expertiseModel->title . ' Casablanca | SmartFilms Prod Maroc'),
                'meta_description' => $expertiseModel->seo_description ?? $expertiseModel->hero_desc,
                'h1' => $expertiseModel->h1 ?? strtoupper($expertiseModel->title),
                'hero_desc' => $expertiseModel->hero_desc,
                'image' => $expertiseModel->image ?? '/uploads/cinema_corporate_film.png',
                'deliverables' => $expertiseModel->deliverables ?? [],
                'equipment' => $expertiseModel->equipment ?? [],
                'category_filter' => $expertiseModel->category_filter ?? 'Film Corporate',
                'faq' => $expertiseModel->faq ?? []
            ];
        } else {
            // 2. Fallback to clean configuration array
            $expertisesList = [
                'strategie-conception' => [
                    'title' => 'Stratégie & Conception',
                    'subtitle' => 'Donner du sens à chaque projet',
                    'meta_title' => 'Stratégie de Contenu & Conception Audiovisuelle | SmartFilms Maroc',
                    'meta_description' => 'Conception de stratégies de contenu percutantes et lignes éditoriales adaptées à vos objectifs et à votre audience à Casablanca et au Maroc.',
                    'h1' => 'STRATÉGIE & CONCEPTION CRÉATIVE',
                    'hero_desc' => 'Nous imaginons des concepts créatifs, des stratégies de contenu et des lignes éditoriales calibrées pour marquer les esprits et atteindre vos cibles.',
                    'image' => '/uploads/expertise_01_strategy.jpg',
                    'deliverables' => [
                        'Lignes éditoriales et chartes audiovisuelles',
                        'Storyboards détaillés et moodboards créatifs',
                        'Scénarisation et rédaction des voix-off',
                        'Plan de diffusion multi-canaux'
                    ],
                    'equipment' => ['Direction artistique dédiée', 'Scénaristes & Concepteurs rédacteurs', 'Ateliers de co-création stratégique'],
                    'category_filter' => 'Film de Marque',
                    'faq' => [
                        [
                            'q' => 'Comment démarre la phase de conception ?',
                            'a' => 'Nous débutons par un brief approfondi pour comprendre vos objectifs, vos personas et vos messages clés, puis nous élaborons 2 à 3 pistes créatives.'
                        ]
                    ]
                ],
                'production-audiovisuelle' => [
                    'title' => 'Films Institutionnels & Vidéo d\'Entreprise',
                    'subtitle' => 'Agence de Production Audiovisuelle Casablanca',
                    'meta_title' => 'Agence Audiovisuelle & Films Institutionnels Casablanca | SmartFilms',
                    'meta_description' => 'Agence de production audiovisuelle à Casablanca spécialisée dans la création de films institutionnels, vidéos d\'entreprise et reportages corporate de prestige.',
                    'h1' => 'PRODUCTION DE FILMS INSTITUTIONNELS & VIDÉO',
                    'hero_desc' => 'Films institutionnels, vidéos corporate d\'entreprise, interviews de dirigeants et reportages de marque en 4K/6K cinéma pour valoriser votre société au Maroc.',
                    'image' => '/uploads/expertise_02_production.jpg',
                    'deliverables' => [
                        'Films institutionnels master 4K cinéma',
                        'Captations multi-caméras d\'entreprise',
                        'Interviews dirigeants & portraits collaborateurs',
                        'Banque de plans B-Roll 4K/6K haute définition'
                    ],
                    'equipment' => ['Caméras Cinéma Arri / RED / Sony FX', 'Optiques Anamorphiques & Cinéma', 'Éclairages studio professionnels ARRI / Aputure'],
                    'category_filter' => 'Film de Marque',
                    'faq' => [
                        [
                            'q' => 'Quels équipements utilisez-vous en tournage ?',
                            'a' => 'Nous tournons exclusivement avec des configurations cinéma certifiées (capteurs grand format, optiques de cinéma et machinerie stabilisée).'
                        ]
                    ]
                ],
                'contenus-sociaux' => [
                    'title' => 'Capsules Vidéo & Réseaux Sociaux',
                    'subtitle' => 'Formats Verticaux 9:16 & Reels Casablanca',
                    'meta_title' => 'Capsules Vidéo Réseaux Sociaux & Reels Casablanca | SmartFilms',
                    'meta_description' => 'Création de capsules vidéo dynamiques pour réseaux sociaux à Casablanca : formats verticaux 9:16 pour Instagram Reels, TikTok et LinkedIn adaptés à votre audience.',
                    'h1' => 'CAPSULES VIDÉO POUR RÉSEAUX SOCIAUX',
                    'hero_desc' => 'Capsules vidéo percutantes, Reels, formats verticaux 9:16 et contenus courts conçus pour capter l\'attention et susciter un engagement maximal sur Instagram, TikTok et LinkedIn.',
                    'image' => '/uploads/expertise_03_social.jpg',
                    'deliverables' => [
                        'Packs de capsules vidéo & Reels au format vertical 9:16',
                        'Formats courts snack content pour LinkedIn & Instagram',
                        'Shooting photo éditorial et corporate d\'accompagnement',
                        'Micro-animations et motion design'
                    ],
                    'equipment' => ['Configurations agiles de tournage vertical 4K', 'Éclairage mobile LED haute fidélité', 'Montage express optimisé pour les algorithmes'],
                    'category_filter' => 'Publicité TV',
                    'faq' => [
                        [
                            'q' => 'Quel est le délai moyen pour produire des capsules vidéo réseaux sociaux ?',
                            'a' => 'Pour les séries de capsules vidéo sociales, nous pouvons livrer des lots complets en quelques jours ouvrés après le tournage.'
                        ]
                    ]
                ],
                'shooting-photo-corporate' => [
                    'title' => 'Photographe Casablanca & Shooting Photo Corporate',
                    'subtitle' => 'Portraits Professionnels, Trombinoscopes & Packshots Produits',
                    'meta_title' => 'Photographe Casablanca & Shooting Photo Corporate | SmartFilms',
                    'meta_description' => 'Photographe professionnel à Casablanca : shooting photo corporate, portraits de dirigeants, trombinoscopes d\'équipes, reportages industriels et packshots produits.',
                    'h1' => 'PHOTOGRAPHE CASABLANCA & SHOOTING PHOTO CORPORATE',
                    'hero_desc' => 'Valorisez le capital humain et l\'image de marque de votre entreprise grâce à des prises de vues photographiques d\'exception : portraits exécutifs, reportages industriels et packshots e-commerce.',
                    'image' => '/uploads/expertise_04_corporate.jpg',
                    'deliverables' => [
                        'Portraits institutionnels de dirigeants et comités exécutifs',
                        'Trombinoscopes d\'équipes harmonisés en studio mobile',
                        'Reportages photographiques sur sites industriels & bureaux',
                        'Packshots produits haute définition et retouches haut de gamme'
                    ],
                    'equipment' => ['Boîtiers plein format haute résolution (Sony A7R / Canon R5)', 'Optiques à focale fixe d\'excellence série G-Master / L', 'Systèmes d\'éclairage flash studio mobile Profoto'],
                    'category_filter' => 'Film de Marque',
                    'faq' => [
                        [
                            'q' => 'Pouvez-vous installer un studio photo directement dans nos locaux ?',
                            'a' => 'Absolument. Nous nous déplaçons avec un studio photo nomade complet (fonds studio, éclairages Profoto, stations de visionnage immédiat) directement dans vos locaux à Casablanca ou partout au Maroc.'
                        ],
                        [
                            'q' => 'Quels sont les délais de retouche et de livraison ?',
                            'a' => 'Une planche de sélection vous est transmise sous 24h à 48h. Après sélection, la livraison finale des photos retouchées en haute définition s\'effectue sous 3 à 5 jours ouvrés.'
                        ]
                    ]
                ],
                'communication-corporate' => [
                    'title' => 'Communication Corporate',
                    'subtitle' => 'Faire rayonner ce qui fait votre entreprise',
                    'meta_title' => 'Communication Corporate & Institutionnelle | SmartFilms Maroc',
                    'meta_description' => 'Valorisation de vos équipes, vos savoir-faire et vos engagements à travers des contenus qui renforcent votre image et votre crédibilité.',
                    'h1' => 'COMMUNICATION CORPORATE & LEADERSHIP',
                    'hero_desc' => 'Nous valorisons vos équipes, vos savoir-faire et vos engagements à travers des contenus qui renforcent votre image et votre crédibilité.',
                    'image' => '/uploads/cinema_corporate_film.png',
                    'deliverables' => [
                        'Films de marque institutionnels',
                        'Vidéos RSE et rapports annuels vidéo',
                        'Portraits de collaborateurs & marque employeur',
                        'Vidéos de communication interne et externe'
                    ],
                    'equipment' => ['Caméras Cinéma 4K/6K', 'Optiques Cinéma Anamorphiques & Sphériques', 'Prises de vues aériennes drone 4K'],
                    'category_filter' => 'Film Corporate',
                    'faq' => [
                        [
                            'q' => 'Intervenez-vous dans les sites industriels partout au Maroc ?',
                            'a' => 'Oui, nous disposons des protocoles de sécurité EPI et des autorisations pour intervenir sur des sites miniers, industriels et logistiques.'
                        ]
                    ]
                ],
                'publicite-campagnes' => [
                    'title' => 'Publicité & Campagnes',
                    'subtitle' => 'Donner de l\'impact aux messages',
                    'meta_title' => 'Publicité & Campagnes de Marque | SmartFilms Maroc',
                    'meta_description' => 'Des idées fortes, des directions créatives audacieuses et des formats adaptés à chaque canal de diffusion.',
                    'h1' => 'PUBLICITÉS & CAMPAGNES DE MARQUE',
                    'hero_desc' => 'Une idée forte, une direction créative, des formats adaptés à chaque canal : nous développons des campagnes qui marquent les esprits et génèrent de la valeur.',
                    'image' => '/uploads/studio_commercial_spot.png',
                    'deliverables' => [
                        'Spots TV & Cinéma 4K (15s, 30s, 60s)',
                        'Déclinaisons digitales YouTube & Social Ads',
                        'Sound design et composition musicale originale',
                        'Voice-over multilingue Darija, Français, Anglais'
                    ],
                    'equipment' => ['Caméras Slow-Motion haute vitesse', 'Machinerie travelling & Stabilisation', 'Mixage et étalonnage HDR broadcast'],
                    'category_filter' => 'Publicité TV',
                    'faq' => [
                        [
                            'q' => 'Pouvez-vous gérer le casting et les repérages ?',
                            'a' => 'Oui, nous gérons l\'intégralité de la pré-production : repérages, casting acteurs, stylisme et décors.'
                        ]
                    ]
                ],
                'evenement-live' => [
                    'title' => 'Événement & Live',
                    'subtitle' => 'Capturer l\'instant. Le faire vivre. Le prolonger.',
                    'meta_title' => 'Captation Événementielle & Diffusion Live | SmartFilms Maroc',
                    'meta_description' => 'Photo & vidéo événementielle, aftermovies, captation multi-caméra, livestream, écran géant et régie.',
                    'h1' => 'ÉVÉNEMENTIEL, AFTERMOVIES & LIVESTREAM',
                    'hero_desc' => 'Photo & vidéo événementielle, aftermovies, captation multi-caméra, livestream, écran géant, régie et sonorisation : nous donnons une nouvelle dimension à vos événements.',
                    'image' => '/uploads/cinema_corporate_film.png',
                    'deliverables' => [
                        'Aftermovie officiel dynamique 4K',
                        'Teaser Same-Day Edit livré le jour même',
                        'Captation intégrale des keynotes & tables rondes',
                        'Diffusion en direct live streaming multi-plateformes'
                    ],
                    'equipment' => ['Régie vidéo broadcast 4K', 'Systèmes de transmission HF sans fil longue portée', 'Prise de son HF Sennheiser'],
                    'category_filter' => 'Événementiel',
                    'faq' => [
                        [
                            'q' => 'Pouvez-vous diffuser en streaming direct sur LinkedIn et YouTube ?',
                            'a' => 'Oui, notre régie mobile permet la diffusion simultanée multi-plateformes en 1080p/4K avec liaisons 4G/5G sécurisées.'
                        ]
                    ]
                ],
                'film-corporate' => [
                    'title' => 'Production de Films Institutionnels & Vidéo Corporate',
                    'subtitle' => 'Agence Audiovisuelle Casablanca',
                    'meta_title' => 'Production de Films Institutionnels Casablanca | SmartFilms',
                    'meta_description' => 'Production de films institutionnels et vidéos d\'entreprise haut de gamme à Casablanca. Valorisez vos équipes, vos infrastructures et votre vision stratégique au Maroc.',
                    'h1' => 'PRODUCTION DE FILMS INSTITUTIONNELS & CORPORATE',
                    'hero_desc' => 'Racontez l\'ambition de votre entreprise à travers la production de films institutionnels cinématographiques et des prises de vues d\'infrastructures d\'exception.',
                    'image' => '/uploads/cinema_corporate_film.png',
                    'deliverables' => [
                        'Film institutionnel master 4K (2 à 5 minutes)',
                        'Teasers réseaux sociaux 9:16 pour LinkedIn et Instagram',
                        'Interviews des dirigeants & collaborateurs clés',
                        'Banque de plans B-Roll haute fidélité'
                    ],
                    'equipment' => ['Configurations caméras cinéma calibrées selon les besoins', 'Optiques Cinéma Anamorphiques & Sphériques', 'Prises de vues aériennes complémentaires', 'Éclairage Studio & Gestion lumière continue'],
                    'category_filter' => 'Film de Marque',
                    'faq' => [
                        [
                            'q' => 'Combien de temps faut-il pour produire un film corporate institutionnel ?',
                            'a' => 'En moyenne, une production institutionnelle complète nécessite entre 2 à 4 semaines, incluant l\'écriture du scénario, le tournage (1 à 3 jours) et la post-production (montage, étalonnage, sound design).'
                        ]
                    ]
                ],
                'spot-publicitaire' => [
                    'title' => 'Spot Publicitaire & Commercial',
                    'subtitle' => 'Campagnes TV, Cinéma & Formats Digitaux',
                    'meta_title' => 'Spot Publicitaire & Publicité TV/Digitale Casablanca | SmartFilms Maroc',
                    'meta_description' => 'Création et réalisation de spots publicitaires percutants à Casablanca. Diffusion TV, cinéma et réseaux sociaux calibrée pour maximiser l\'impact et la mémorisation.',
                    'h1' => 'SPOTS PUBLICITAIRES & BRAND FILMS',
                    'hero_desc' => 'Des concepts publicitaires audacieux, des castings rigoureux et une réalisation millimétrée pour imposer votre marque dans l\'esprit du public.',
                    'image' => '/uploads/studio_commercial_spot.png',
                    'deliverables' => [
                        'Spots TV & Cinéma broadcast masters 4K (15s, 30s, 60s)',
                        'Déclinaisons digitales dynamiques (Story, Reel, YouTube Ads)',
                        'Sound design immersif et composition musicale originale',
                        'Voice-over multilingue (Arabe Darija, Français, Anglais)'
                    ],
                    'equipment' => ['Caméras Haute Vitesse & Slow-Motion', 'Machinerie travelling & Stabilisation 3 axes', 'Production sonore & Mixage multicanal broadcast', 'Étalonnage couleur DaVinci Resolve Studio HDR'],
                    'category_filter' => 'Publicité TV',
                    'faq' => [
                        [
                            'q' => 'Comment se déroule la conception d\'un spot publicitaire ?',
                            'a' => 'Nous commençons par l\'élaboration du concept créatif et du storyboard, suivi du casting, du stylisme et du repérage des décors. Après validation, nous orchestrons le tournage et la post-production complète.'
                        ]
                    ]
                ],
                'production-evenementielle' => [
                    'title' => 'Production & Captation Événementielle',
                    'subtitle' => 'Congrès, Sommets Internationaux & Galas',
                    'meta_title' => 'Captation Événementielle & Aftermovie Casablanca | SmartFilms Maroc',
                    'meta_description' => 'Couverture audiovisuelle haut de gamme pour sommets internationaux, lancements de produits et galas au Maroc. Régie multi-caméras 4K et aftermovies percutants.',
                    'h1' => 'CAPTATION & PRODUCTION ÉVÉNEMENTIELLE',
                    'hero_desc' => 'Immortalisez vos grands rendez-vous professionnels avec une régie multi-caméras 4K fluide et des aftermovies rythmés livrés en un temps record.',
                    'image' => '/uploads/cinema_corporate_film.png',
                    'deliverables' => [
                        'Aftermovie officiel dynamique (2 à 3 minutes)',
                        'Teaser Same-Day Edit (livré pendant l\'événement)',
                        'Captation intégrale des keynotes & tables rondes',
                        'Diffusion en direct live streaming multi-plateformes'
                    ],
                    'equipment' => ['Régie vidéo broadcast 4K', 'Systèmes de transmission HF sans fil longue portée', 'Caméras PTZ robotisées & tourelles', 'Prise de son HF professionnelle Sennheiser'],
                    'category_filter' => 'Événementiel',
                    'faq' => [
                        [
                            'q' => 'Pouvez-vous livrer une vidéo le jour même de l\'événement ?',
                            'a' => 'Oui. Grâce à notre régie de montage nomade sur site, nous produisons des teasers "Same-Day" en quelques heures pour alimenter vos réseaux sociaux en temps réel.'
                        ]
                    ]
                ],
                'drone-aerien' => [
                    'title' => 'Prise de Vue Drone 4K/6K & FPV',
                    'subtitle' => 'Captations Aériennes & Télépilotes Agréés',
                    'meta_title' => 'Prise de Vue par Drone 4K/6K & FPV Maroc | SmartFilms Prod',
                    'meta_description' => 'Images aériennes spectaculaires par drone et FPV à Casablanca et au Maroc. Télépilotes certifiés, conformité réglementaire et qualité cinéma.',
                    'h1' => 'PRISES DE VUES AÉRIENNES & DRONE FPV',
                    'hero_desc' => 'Prenez de la hauteur avec des perspectives aériennes spectaculaires. Drones cinéma stabilisés et drones FPV de précision pour valoriser vos sites industriels et projets d\'envergure.',
                    'image' => '/uploads/studio_commercial_spot.png',
                    'deliverables' => [
                        'Plans aériens cinématiques 4K/6K Prores & RAW',
                        'Plans séquences FPV immersifs intérieur/extérieur',
                        'Survols d\'infrastructures et d\'aménagements',
                        'Intégration directe dans vos films de marque'
                    ],
                    'equipment' => ['Drones cinéma professionnels haute définition', 'Drones FPV agiles pour plans dynamiques', 'Systèmes de double commande pilote / cadreur', 'Capteurs stabilisés sur 3 axes'],
                    'category_filter' => 'Drone',
                    'faq' => [
                        [
                            'q' => 'Les vols par drone sont-ils conformes à la réglementation au Maroc ?',
                            'a' => 'Oui. Nos vols sont encadrés par des télépilotes qualifiés avec l\'ensemble des autorisations administratives et protocoles de sécurité requis pour chaque mission.'
                        ]
                    ]
                ]
            ];

            if (!isset($expertisesList[$slug])) {
                abort(404);
            }

            $expertise = $expertisesList[$slug];
        }

        $common = $this->getCommonData();
        $relatedProjects = Project::orderBy('order')->take(4)->get();

        return view('front.expertises.show', [
            'slug' => $slug,
            'expertise' => $expertise,
            'menus' => $common['menus'],
            'settings' => $common['settings'],
            'relatedProjects' => $relatedProjects
        ]);
    }

    /**
     * About Page (/a-propos)
     */
    public function about()
    {
        $common = $this->getCommonData();
        $teamMembers = TeamMember::orderBy('order')->get();

        return view('front.about', [
            'menus' => $common['menus'],
            'settings' => $common['settings'],
            'teamMembers' => $teamMembers
        ]);
    }

    /**
     * Team Page (/equipe)
     */
    public function team()
    {
        $common = $this->getCommonData();
        $teamMembers = TeamMember::orderBy('order')->get();

        return view('front.team', [
            'menus' => $common['menus'],
            'settings' => $common['settings'],
            'teamMembers' => $teamMembers
        ]);
    }

    /**
     * Contact Page (/contact)
     */
    public function contact()
    {
        $common = $this->getCommonData();

        return view('front.contact', [
            'menus' => $common['menus'],
            'settings' => $common['settings']
        ]);
    }

    /**
     * Blog & Insights Page (/blog)
     */
    public function blog()
    {
        $common = $this->getCommonData();

        $articles = [
            [
                'title' => 'Production de films institutionnels au Maroc : Les clés d\'un storytelling percutant',
                'slug' => 'reussir-film-corporate-maroc',
                'category' => 'Films Institutionnels',
                'read_time' => '4 min',
                'date' => '18 Septembre 2026',
                'excerpt' => 'La production de films institutionnels ne se résume plus à une simple vidéo d\'entreprise. Découvrez les méthodes narratives pour convaincre vos partenaires et clients.',
                'image' => '/uploads/expertise_01_strategy.jpg',
            ],
            [
                'title' => 'Capsules vidéo & Reels : Comment captiver son audience sur les réseaux sociaux',
                'slug' => 'reels-video-verticale-marques',
                'category' => 'Capsules Vidéo',
                'read_time' => '3 min',
                'date' => '12 Septembre 2026',
                'excerpt' => 'Les 3 premières secondes déterminent l\'impact de vos capsules vidéo. Comment concilier rigueur visuelle et formats verticaux dynamiques sur Instagram et LinkedIn.',
                'image' => '/uploads/expertise_03_social.jpg',
            ],
            [
                'title' => 'Shooting photo corporate à Casablanca : Valoriser l\'humain et la direction',
                'slug' => 'shooting-photo-corporate-casablanca',
                'category' => 'Photographe Casablanca',
                'read_time' => '4 min',
                'date' => '05 Septembre 2026',
                'excerpt' => 'Portraits de dirigeants, trombinoscopes d\'équipes et reportages en entreprise : comment un photographe professionnel forge l\'autorité visuelle de votre société.',
                'image' => '/uploads/expertise_04_corporate.jpg',
            ],
        ];

        return view('front.blog', [
            'menus' => $common['menus'],
            'settings' => $common['settings'],
            'articles' => $articles,
        ]);
    }
}
