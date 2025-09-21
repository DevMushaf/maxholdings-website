@extends('layouts.app')

@section('title', 'Innovation, Unity, and Growth - Max Holdings')

@section('content')
<section class="hero-section relative overflow-hidden">
    <div class="absolute inset-0 z-0">
        <div class="absolute inset-0 bg-gradient-to-br from-orange-400 via-orange-500 to-orange-600"></div>
    </div>

    <!-- Hero Content -->
    <div class="relative z-10 container mx-auto px-4 py-20 lg:py-32">
        <div class="max-w-4xl">
            <h1 class="hero-title font-poppins font-bold text-white mb-6 leading-tight">
                Innovation, Unity, and Growth
            </h1>
            
            <p class="hero-description font-inter text-white/90 max-w-2xl mb-8 leading-relaxed">
                At Max Holdings, we unite diverse industries under one vision, driving 
                innovation, collaboration, and sustainable growth beyond boundaries.
            </p>
            
            <div class="flex flex-col sm:flex-row gap-4 items-start">
                <button class="btn-primary inline-flex items-center gap-2 text-base font-medium transition-all duration-300 hover:shadow-lg hover:scale-105">
                    Explore our services
                    <svg class="w-4 h-4 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>
    
    <!-- Removed the decorative wave SVG completely -->
</section>

<!-- Additional sections will go here -->
@endsection

@push('styles')
<style>
    .hero-section {
        min-height: 100vh;
        background-size: cover;
        background-position: center;
    }
    
    @media (max-width: 768px) {
        .hero-section {
            min-height: 80vh;
        }
    }
</style>
@endpush