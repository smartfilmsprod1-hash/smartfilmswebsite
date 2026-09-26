@extends('layouts.front')

@section('title', $page->meta_title ?? 'SmartFilms Prod | Agence Audiovisuelle & Photographe Casablanca')
@section('meta_description', $page->meta_description ?? 'Agence audiovisuelle et photographe à Casablanca. Production de films institutionnels, shooting photo corporate, capsules vidéo pour réseaux sociaux et spots publicitaires au Maroc.')
@section('og_title', $page->meta_title ?? 'SmartFilms Prod | Agence Audiovisuelle & Photographe Casablanca')
@section('og_description', $page->meta_description ?? 'Agence audiovisuelle et photographe à Casablanca. Production de films institutionnels, shooting photo corporate, capsules vidéo pour réseaux sociaux et spots publicitaires au Maroc.')
@section('og_image', asset('uploads/vision_monitor.jpg'))

@section('content')
@php
    $blocks = collect($page->content ?? [])->keyBy('type');
@endphp

    {{-- CHAPTER 01: CINEMATIC FULL-BLEED HERO (#080914) --}}
    @include('sections.hero', ['props' => $blocks['hero']['props'] ?? ($blocks['rembrand_hero']['props'] ?? [])])

    {{-- CHAPTER 02: TRUST & MONOCHROME CLIENT MARQUEE (#F7F6F3) --}}
    @include('sections.clients', ['props' => $blocks['clients']['props'] ?? ($blocks['rembrand_client_logos']['props'] ?? [])])

    {{-- CHAPTER 03: NOTRE VISION (#F8F6F1) --}}
    @include('sections.vision', ['props' => $blocks['vision']['props'] ?? ($blocks['rembrand_mission']['props'] ?? [])])

    {{-- CHAPTER 04: CORE DISCIPLINES & EXPERTISE (#F7F6F3) --}}
    @include('sections.expertise', ['props' => $blocks['expertise']['props'] ?? ($blocks['rembrand_offres']['props'] ?? [])])

    {{-- CHAPTER 05: MANIFESTO & CREATIVE PROCESS (#101229) --}}
    @include('sections.manifesto', ['props' => $blocks['manifesto']['props'] ?? []])

    {{-- CHAPTER 06: QUESTIONS FRÉQUENTES & SEO ACCORDION (#F8F6F1) --}}
    @include('sections.faq', ['props' => $blocks['faq']['props'] ?? ($blocks['rembrand_faq']['props'] ?? [])])

    {{-- CHAPTER 07: CONTACT & CASABLANCA HEADQUARTERS (#F8F6F1) --}}
    @include('sections.contact', ['props' => $blocks['contact']['props'] ?? ($blocks['rembrand_contact']['props'] ?? [])])
@endsection
