@extends('layouts.app')

@section('title', 'Our Services - Max Holdings')

@section('content')
<!-- Services Hero Section with Modern Parallax Effect -->
<section class="relative min-h-screen flex items-center justify-center overflow-hidden bg-center bg-cover bg-no-repeat" 
         style="background-image: url('{{ asset('images/serviceshero.webp') }}');">
    
    <!-- Enhanced Gradient Overlay -->
    <div class="absolute inset-0 bg-gradient-to-br from-black/70 via-black/50 to-transparent z-0"></div>
    
    <!-- Animated Background Elements -->
    <div class="absolute inset-0 z-1">
        <div class="absolute top-1/4 right-1/4 w-72 h-72 bg-red-500/10 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute bottom-1/3 left-1/4 w-96 h-96 bg-orange-500/10 rounded-full blur-3xl animate-pulse" style="animation-delay: 1.5s;"></div>
        <div class="absolute top-1/2 right-1/3 w-64 h-64 bg-red-500/10 rounded-full blur-3xl animate-pulse" style="animation-delay: 3s;"></div>
    </div>

    <div class="container mx-auto px-4 z-10 relative">
        <div class="text-center text-white max-w-5xl mx-auto">
            <!-- Animated Badge -->
            <div class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-md rounded-full px-6 py-3 mb-8 border border-white/20">
                <div class="w-2 h-2 bg-red-500 rounded-full animate-pulse"></div>
                <span class="font-inter text-sm font-medium tracking-wide">WHAT WE OFFER</span>
            </div>
            
            <!-- Enhanced Title with Animation -->
            <h1 class="font-poppins font-bold text-4xl md:text-6xl lg:text-7xl mb-6 lg:mb-8 drop-shadow-2xl leading-tight">
                Max Holdings <span class="bg-gradient-to-r from-red-400 to-orange-500 bg-clip-text text-transparent">Services</span>
            </h1>
            
            <!-- Enhanced Subtitle -->
            <p class="font-poppins text-xl md:text-2xl lg:text-3xl max-w-3xl mx-auto drop-shadow-lg mb-8 leading-relaxed">
                Comprehensive Solutions Across Multiple Industries
            </p>
            
            <!-- Service Categories Pills -->
            <div class="flex flex-wrap justify-center gap-3 mt-12">
                <div class="bg-white/10 backdrop-blur-md border border-white/20 rounded-full px-6 py-3 hover:bg-white/20 transition-all duration-300 cursor-pointer group">
                    <div class="flex items-center gap-2">
                        <i class="fas fa-cogs text-red-400 group-hover:scale-110 transition-transform duration-300"></i>
                        <span class="font-inter text-sm font-medium">Engineering</span>
                    </div>
                </div>
                <div class="bg-white/10 backdrop-blur-md border border-white/20 rounded-full px-6 py-3 hover:bg-white/20 transition-all duration-300 cursor-pointer group">
                    <div class="flex items-center gap-2">
                        <i class="fas fa-users text-orange-400 group-hover:scale-110 transition-transform duration-300"></i>
                        <span class="font-inter text-sm font-medium">Manpower</span>
                    </div>
                </div>
                <div class="bg-white/10 backdrop-blur-md border border-white/20 rounded-full px-6 py-3 hover:bg-white/20 transition-all duration-300 cursor-pointer group">
                    <div class="flex items-center gap-2">
                        <i class="fas fa-plane text-red-400 group-hover:scale-110 transition-transform duration-300"></i>
                        <span class="font-inter text-sm font-medium">Tourism</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Scroll Indicator -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 z-10">
        <div class="flex flex-col items-center text-white/70">
            <span class="text-sm font-inter mb-2 tracking-wide">Discover our services</span>
            <div class="w-6 h-10 border-2 border-white/30 rounded-full flex justify-center">
                <div class="w-1 h-3 bg-white/50 rounded-full mt-2 animate-bounce"></div>
            </div>
        </div>
    </div>
</section>

<!-- Our Market Focus Section -->
<section class="py-24 lg:py-32 bg-gradient-to-b from-white to-gray-50 relative overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-5">
        <div class="absolute inset-0" 
             style="background-image: radial-gradient(circle at 1px 1px, #333 1px, transparent 0); 
                    background-size: 40px 40px;">
        </div>
    </div>
    
    <!-- Floating Background Elements -->
    <div class="absolute top-20 right-20 w-64 h-64 bg-red-100 rounded-full opacity-20 blur-3xl"></div>
    <div class="absolute bottom-20 left-20 w-80 h-80 bg-orange-100 rounded-full opacity-20 blur-3xl"></div>
    
    <div class="container mx-auto px-4 relative z-10">
        <!-- Section Header -->
        <div class="text-center mb-8 lg:mb-12">
            <div class="inline-flex items-center gap-2 bg-red-50 text-red-600 rounded-full px-6 py-2 mb-6 font-medium text-sm">
                <div class="w-2 h-2 bg-red-500 rounded-full"></div>
                Industries We Serve
            </div>
            <h2 class="font-poppins font-bold text-4xl lg:text-5xl text-gray-900 mb-6">
                Our <span class="text-red-500">Market Focus</span>
            </h2>
        </div>

        <!-- Content Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">
            
            <div class="lg:col-span-5">
                <div class="relative group">
                    <!-- Decorative Element -->
                    <div class="absolute -inset-4 bg-gradient-to-r from-red-100 to-orange-100 rounded-3xl blur-2xl opacity-30 
                                group-hover:opacity-50 transition-opacity duration-500">
                    </div>
                    
                    <!-- Main Image -->
                    <div class="relative rounded-3xl overflow-hidden shadow-2xl">
                        <img src="{{ asset('images/marketfocus.png') }}" 
                             alt="Target Market" 
                             class="w-full h-auto object-cover transform group-hover:scale-105 transition-transform duration-700">
                        
                        <!-- Overlay Gradient -->
                        <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent opacity-0 
                                    group-hover:opacity-100 transition-opacity duration-500">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right: Content -->
            <div class="lg:col-span-7">
                <!-- Description -->
                <p class="font-inter text-lg leading-relaxed text-gray-700 mb-10">
                    At Max Holdings Pvt Ltd, we work closely with diverse industries to 
                    deliver solutions that add value, improve efficiency, and support 
                    long-term growth. Our focus is on understanding the unique challenges 
                    of each sector and providing services that help businesses operate 
                    with confidence and consistency.
                </p>

                <!-- Industries Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <!-- Industry Item -->
                    <div class="flex items-center gap-3">
                        <div class="w-4 h-4 bg-red-500 rounded-full flex-shrink-0"></div>
                        <span class="font-inter font-medium text-gray-900">Garment and Apparel Industry</span>
                    </div>

                    <div class="flex items-center gap-3">
                        <div class="w-4 h-4 bg-red-500 rounded-full flex-shrink-0"></div>
                        <span class="font-inter font-medium text-gray-900">Manufacturing Industry</span>
                    </div>

                    <div class="flex items-center gap-3">
                        <div class="w-4 h-4 bg-red-500 rounded-full flex-shrink-0"></div>
                        <span class="font-inter font-medium text-gray-900">Cleaning Services</span>
                    </div>

                    <div class="flex items-center gap-3">
                        <div class="w-4 h-4 bg-red-500 rounded-full flex-shrink-0"></div>
                        <span class="font-inter font-medium text-gray-900">Maintenance</span>
                    </div>

                    <div class="flex items-center gap-3">
                        <div class="w-4 h-4 bg-red-500 rounded-full flex-shrink-0"></div>
                        <span class="font-inter font-medium text-gray-900">Construction Industry</span>
                    </div>

                    <div class="flex items-center gap-3">
                        <div class="w-4 h-4 bg-red-500 rounded-full flex-shrink-0"></div>
                        <span class="font-inter font-medium text-gray-900">Engineering Industry</span>
                    </div>

                    <div class="flex items-center gap-3">
                        <div class="w-4 h-4 bg-red-500 rounded-full flex-shrink-0"></div>
                        <span class="font-inter font-medium text-gray-900">Packaging & Printing Industry</span>
                    </div>

                    <div class="flex items-center gap-3">
                        <div class="w-4 h-4 bg-red-500 rounded-full flex-shrink-0"></div>
                        <span class="font-inter font-medium text-gray-900">FMCG Industry</span>
                    </div>
                </div>
            </div>                
        </div>
    </div>
</section>

<!-- Parallax JavaScript -->
<script>
document.addEventListener('DOMContentLoaded', () => {
    // Parallax Effect for Hero Section
    const hero = document.querySelector('section[style*="background-image"]');
    if (hero) {
        window.addEventListener('scroll', () => {
            const scrolled = window.pageYOffset;
            const parallax = hero.querySelector('.container');
            if (parallax) {
                parallax.style.transform = `translateY(${scrolled * 0.3}px)`;
            }
        });
    }
});
</script>

@endsection