@extends('layouts.front')

@section('title', $page->meta_title ?? 'Production Audiovisuelle Casablanca & Shooting Photo Maroc | SmartFilms Prod')
@section('meta_description', $page->meta_description ?? 'Agence de production audiovisuelle & photo à Casablanca. Films corporate, spots publicitaires, shooting photo professionnel, drone 8K & captation au Maroc. Devis sous 24h.')

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
