@extends('layouts.front')

@section('title', $page->meta_title ?? 'SmartFilms Prod | Agence Audiovisuelle & Photographe Casablanca')
@section('meta_description', $page->meta_description ?? 'Agence audiovisuelle et photographe à Casablanca. Production de films institutionnels, shooting photo corporate, capsules vidéo pour réseaux sociaux et spots publicitaires au Maroc.')
@section('og_title', $page->meta_title ?? 'SmartFilms Prod | Agence Audiovisuelle & Photographe Casablanca')
@section('og_description', $page->meta_description ?? 'Agence audiovisuelle et photographe à Casablanca. Production de films institutionnels, shooting photo corporate, capsules vidéo pour réseaux sociaux et spots publicitaires au Maroc.')
@section('og_image', asset('uploads/vision_monitor.jpg'))

@section('content')

    {{-- CHAPTER 01: CINEMATIC FULL-BLEED HERO (#080914) --}}
    @include('sections.hero')

    {{-- CHAPTER 02: TRUST & MONOCHROME CLIENT MARQUEE (#F7F6F3) --}}
    @include('sections.clients')

    {{-- CHAPTER 03: NOTRE VISION (#F8F6F1) --}}
    @include('sections.vision')

    {{-- CHAPTER 04: CORE DISCIPLINES & EXPERTISE (#F7F6F3) --}}
    @include('sections.expertise')

    {{-- CHAPTER 05: MANIFESTO & CREATIVE PROCESS (#101229) --}}
    @include('sections.manifesto')

    {{-- CHAPTER 06: QUESTIONS FRÉQUENTES & SEO ACCORDION (#F8F6F1) --}}
    @include('sections.faq')

    {{-- CHAPTER 07: CONTACT & CASABLANCA HEADQUARTERS (#F8F6F1) --}}
    @include('sections.contact')

@endsection
