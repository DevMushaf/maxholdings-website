@extends('layouts.app')

@section('title', 'Innovation, Unity, and Growth - Max Holdings')

@section('content')
<!-- Modern Hero Section with Parallax Effect -->
<section class="hero-section relative overflow-hidden min-h-screen flex items-center" 
         style="background-image: url('{{ asset('images/homeheroimage.webp') }}'); 
                background-size: cover; 
                background-position: center; 
                background-repeat: no-repeat;
                background-attachment: fixed;">

    <!-- Enhanced Gradient Overlay -->
    <div class="absolute inset-0 bg-gradient-to-br from-black/70 via-black/50 to-transparent z-0"></div>
    
    <!-- Animated Background Elements -->
    <div class="absolute inset-0 z-[1]">
        <div class="absolute top-1/4 left-1/4 w-72 h-72 bg-red-500/10 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute bottom-1/3 right-1/4 w-96 h-96 bg-blue-500/10 rounded-full blur-3xl animate-pulse" style="animation-delay: 1s;"></div>
        <div class="absolute top-1/3 right-1/3 w-1 h-1 bg-white/30 rounded-full animate-ping animation-delay-1000"></div>
        <div class="absolute bottom-1/4 left-1/3 w-3 h-3 bg-white/10 rounded-full animate-pulse animation-delay-2000"></div>
    </div>

    <!-- Hero Content -->
    <div class="relative z-10 container mx-auto px-4 py-20">
        <div class="max-w-5xl hero-content transition-transform duration-500 ease-out">
          
            <h1 class="hero-title font-poppins font-bold text-white mb-8 leading-tight animate-fade-in-up animation-delay-300 text-3xl md:text-5xl lg:text-6xl xl:text-7xl">
                Innovation, Unity, and Growth
            </h1>
            
            <p class="font-inter text-base md:text-lg lg:text-xl text-white/80 max-w-3xl mb-12 leading-relaxed animate-fade-in-up animation-delay-700">
                At Max Holdings, we unite diverse industries under one vision, driving 
                innovation, collaboration, and sustainable growth beyond boundaries.
            </p>
            
            <div class="flex flex-col sm:flex-row gap-6 items-center sm:items-start animate-fade-in-up animation-delay-900">
                <a href="#services" class="group">
                    <button class="btn-primary inline-flex items-center gap-3 px-8 py-4 bg-gradient-to-r from-red-600 to-red-700 hover:from-red-700 hover:to-red-800 text-white font-semibold rounded-full shadow-2xl hover:shadow-red-500/25 transform hover:scale-105 transition-all duration-300">
                        <span>Explore Our Services</span>
                        <svg class="w-5 h-5 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                        </svg>
                    </button>
                </a>
            </div>
        </div>
    </div>
    
    <!-- Scroll Indicator -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 z-10">
        <div class="flex flex-col items-center text-white/70">
            <span class="text-sm font-inter mb-2 tracking-wide">Scroll to explore</span>
            <div class="w-6 h-10 border-2 border-white/30 rounded-full flex justify-center">
                <div class="w-1 h-3 bg-white/50 rounded-full mt-2 animate-bounce"></div>
            </div>
        </div>
    </div>
</section>

<!-- Enhanced Services Section with Consistent Styling -->
<section id="services" class="py-24 lg:py-32 bg-gradient-to-b from-gray-50 to-white relative overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-5">
        <div class="absolute inset-0" style="background-image: radial-gradient(circle at 1px 1px, #333 1px, transparent 0); background-size: 40px 40px;"></div>
    </div>
    
    <div class="container mx-auto px-4 relative z-10">
        <!-- Section Header -->
        <div class="text-center mb-20">
            <div class="inline-flex items-center gap-2 bg-red-50 text-red-600 rounded-full px-6 py-2 mb-6 font-medium text-sm">
                <div class="w-2 h-2 bg-red-500 rounded-full"></div>
                <span class="font-inter font-semibold tracking-wide">OUR SERVICES</span>
            </div>
            
            <h2 class="font-poppins font-bold text-4xl lg:text-5xl text-gray-900 mb-6 leading-tight">
                What We <span class="text-red-500">Offer</span>
            </h2>
            <p class="font-inter text-xl lg:text-2xl text-gray-600 max-w-4xl mx-auto leading-relaxed">
                Reliable solutions across industries from engineering and manpower to tourism and events, 
                designed to add exceptional value and convenience for every client.
            </p>
        </div>

        <!-- Modern Services Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 lg:gap-12">
            <!-- Service Card 1 -->
            <div class="group relative bg-white border border-gray-100 rounded-3xl overflow-hidden shadow-md hover:shadow-lg transform transition-all duration-500 hover:scale-[1.02] hover:-translate-y-2 hover:border-red-200">
                <div class="absolute inset-0 bg-gradient-to-br from-red-500/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                
                <div class="relative aspect-[4/3] overflow-hidden">
                    <img src="{{ asset('images/passengerlifts.png') }}" 
                         alt="Modern passenger lift interior"
                         class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent"></div>
                    
                    <!-- Floating Badge -->
                    <div class="absolute top-6 left-6">
                        <div class="bg-white/90 backdrop-blur-sm rounded-full px-3 py-1">
                            <span class="text-red-700 text-sm font-semibold">Engineering</span>
                        </div>
                    </div>
                </div>
                
                <div class="p-8 relative">
                    <h3 class="font-poppins font-bold text-2xl lg:text-3xl text-gray-900 mb-4 group-hover:text-red-700 transition-colors duration-300">
                        Passenger Lifts
                    </h3>
                    <p class="font-inter text-gray-600 leading-relaxed mb-6">
                        Safe, comfortable, and cost-effective lift solutions designed for everyday use in residential and commercial buildings.
                    </p>
                    
                    <a href="{{ route('services') }}" class="flex items-center gap-2 text-red-600 font-medium group-hover:gap-3 transition-all duration-300">
                        <span>Learn more</span>
                        <svg class="w-4 h-4 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Service Card 2 -->
            <div class="group relative bg-white border border-gray-100 rounded-3xl overflow-hidden shadow-md hover:shadow-lg transform transition-all duration-500 hover:scale-[1.02] hover:-translate-y-2 lg:mt-12 hover:border-orange-200">
                <div class="absolute inset-0 bg-gradient-to-br from-orange-500/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                
                <div class="relative aspect-[4/3] overflow-hidden">
                    <img src="{{ asset('images/manpowersupply.png') }}" 
                         alt="Professional skilled worker"
                         class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent"></div>
                    
                    <!-- Floating Badge -->
                    <div class="absolute top-6 left-6">
                        <div class="bg-white/90 backdrop-blur-sm rounded-full px-3 py-1">
                            <span class="text-orange-700 text-sm font-semibold">Consultancy</span>
                        </div>
                    </div>
                </div>
                
                <div class="p-8 relative">
                    <h3 class="font-poppins font-bold text-2xl lg:text-3xl text-gray-900 mb-4 group-hover:text-orange-700 transition-colors duration-300">
                        Manpower Supply
                    </h3>
                    <p class="font-inter text-gray-600 leading-relaxed mb-6">
                        Providing skilled and unskilled general workers to meet the day-to-day operational needs of multiple industries.
                    </p>
                    
                    <a href="{{ route('services') }}" class="flex items-center gap-2 text-red-600 font-medium group-hover:gap-3 transition-all duration-300">
                        <span>Learn more</span>
                        <svg class="w-4 h-4 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Service Card 3 -->
            <div class="group relative bg-white border border-gray-100 rounded-3xl overflow-hidden shadow-md hover:shadow-lg transform transition-all duration-500 hover:scale-[1.02] hover:-translate-y-2 lg:mt-6 hover:border-green-200">
                <div class="absolute inset-0 bg-gradient-to-br from-green-500/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                
                <div class="relative aspect-[4/3] overflow-hidden">
                    <img src="{{ asset('images/accessibility.png') }}" 
                         alt="Accessibility solutions"
                         class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent"></div>
                    
                    <!-- Floating Badge -->
                    <div class="absolute top-6 left-6">
                        <div class="bg-white/90 backdrop-blur-sm rounded-full px-3 py-1">
                            <span class="text-green-700 text-sm font-semibold">Solutions</span>
                        </div>
                    </div>
                </div>
                
                <div class="p-8 relative">
                    <h3 class="font-poppins font-bold text-2xl lg:text-3xl text-gray-900 mb-4 group-hover:text-green-700 transition-colors duration-300">
                        Accessibility Solutions
                    </h3>
                    <p class="font-inter text-gray-600 leading-relaxed mb-6">
                        Custom stairway installations that ensure maximum safety, minimal space usage, and low-maintenance accessibility.
                    </p>
                    
                    <a href="{{ route('services') }}" class="flex items-center gap-2 text-red-600 font-medium group-hover:gap-3 transition-all duration-300">
                        <span>Learn more</span>
                        <svg class="w-4 h-4 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <!-- Enhanced CTA -->
        <div class="text-center mt-20">
            <a href="{{ route('services') }}" class="group">
                <button class="inline-flex items-center gap-4 px-10 py-5 bg-gradient-to-r from-red-600 via-red-700 to-orange-600 hover:from-red-700 hover:via-red-800 hover:to-orange-700 text-white font-bold text-lg rounded-full shadow-2xl hover:shadow-red-500/25 transform hover:scale-105 transition-all duration-300">
                    <span>View All Services</span>
                    <div class="bg-white/20 rounded-full p-1">
                        <svg class="w-5 h-5 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </div>
                </button>
            </a>
        </div>
    </div>
</section>

<!-- Company Overview Section with Consistent Styling -->
<section class="py-24 lg:py-32 bg-white relative overflow-hidden">
    <!-- Background Elements -->
    <div class="absolute top-0 left-0 w-full h-64 bg-gradient-to-b from-red-50/50 to-transparent"></div>
    
    <div class="container mx-auto px-4 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 lg:gap-20 items-center">
            <!-- Enhanced Image -->
            <div class="order-2 lg:order-1 relative">
                <div class="relative group">
                    <!-- Main Image -->
                    <div class="aspect-[4/3] overflow-hidden rounded-3xl shadow-2xl transform transition-transform duration-700 group-hover:scale-[1.02]">
                        <img src="{{ asset('images/companyoverview.png') }}" 
                             alt="Industrial manufacturing facility" 
                             class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-tr from-red-600/10 to-transparent"></div>
                    </div>
                    
                    <!-- Floating Stats -->
                    <div class="absolute -bottom-6 -right-6 bg-white rounded-2xl shadow-xl p-6 transform transition-all duration-500 hover:scale-105">
                        <div class="text-center">
                            <div class="text-3xl font-bold text-red-600 mb-1">2021</div>
                            <div class="text-sm text-gray-600 font-medium">Established</div>
                        </div>
                    </div>
                    
                    <!-- Decorative Element -->
                    <div class="absolute -top-4 -left-4 w-20 h-20 bg-gradient-to-br from-red-500/20 to-orange-500/20 rounded-full blur-xl"></div>
                </div>
            </div>
            
            <!-- Enhanced Content -->
            <div class="order-1 lg:order-2">
                <div class="inline-flex items-center gap-2 bg-red-50 text-red-600 rounded-full px-6 py-2 mb-8 font-medium text-sm">
                    <div class="w-2 h-2 bg-red-500 rounded-full"></div>
                    <span class="font-inter font-semibold tracking-wide">ABOUT US</span>
                </div>
                
                <h2 class="font-poppins font-bold text-4xl lg:text-5xl text-gray-900 mb-8 leading-tight">
                    Company <span class="text-red-500">Overview</span>
                </h2>
                
                <div class="space-y-8">
                    <p class="font-inter text-l text-gray-700 leading-relaxed">
                        Max Holdings Pvt Ltd is a fully Sri Lankan-owned and managed company, headquartered in 
                        Minuwangoda, Sri Lanka, and established in 2021. As a diversified business group, Max Holdings 
                        operates through its subsidiaries delivering excellence across multiple sectors.
                    </p>
                    
                    <p class="font-inter text-l text-gray-700 leading-relaxed">
                        Our subsidiaries specialize in delivering high-quality services tailored to the needs of 
                        businesses and clients across Sri Lanka. Max Engineering focuses on engineering solutions, Max Manpower 
                        & Consultancy offers temporary and permanent staffing along with specialized recruitment for skilled and 
                        unskilled labor, and Max Tourism provides comprehensive travel and hospitality services.
                    </p>
                    
                    <p class="font-inter text-l text-gray-700 leading-relaxed">
                        At Max Holdings, we are committed to excellence, efficiency, and creating value for every client, 
                        ensuring that each service and solution aligns perfectly with specific business needs.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Companies Section with Consistent Dark Theme -->
<section id="companies" class="py-24 lg:py-32 bg-gradient-to-br from-gray-900 via-gray-800 to-red-900 text-white relative overflow-hidden">
    <!-- Animated Background -->
    <div class="absolute inset-0">
        <div class="absolute inset-0 bg-gradient-to-r from-red-600/10 to-orange-600/10"></div>
        <!-- Floating Particles -->
        <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-red-500/10 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute bottom-1/4 right-1/4 w-80 h-80 bg-blue-500/10 rounded-full blur-3xl animate-pulse" style="animation-delay: 2s;"></div>
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-64 h-64 bg-orange-500/10 rounded-full blur-3xl animate-pulse" style="animation-delay: 4s;"></div>
        <div class="absolute top-1/3 right-1/3 w-1 h-1 bg-orange-400/40 rounded-full animate-ping animation-delay-1000"></div>
        <div class="absolute bottom-1/4 left-1/3 w-3 h-3 bg-red-400/20 rounded-full animate-pulse animation-delay-2000"></div>
    </div>
    
    <div class="container mx-auto px-4 relative z-10">
        <!-- Section Header -->
        <div class="text-center mb-20">
            <div class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-md text-white rounded-full px-6 py-2 mb-8 font-medium text-sm border border-white/20">
                <div class="w-2 h-2 bg-red-500 rounded-full animate-pulse"></div>
                <span class="font-inter font-semibold tracking-wide">OUR ECOSYSTEM</span>
            </div>
            
            <h2 class="font-poppins font-bold text-4xl lg:text-6xl text-white mb-8 leading-tight">
                Our <span class="bg-gradient-to-r from-red-400 to-orange-500 bg-clip-text text-transparent">Companies</span>
            </h2>
            <p class="font-inter text-xl lg:text-2xl text-white/80 max-w-4xl mx-auto leading-relaxed">
                Three specialized companies working in perfect harmony to deliver comprehensive solutions 
                across engineering, manpower, and tourism sectors.
            </p>
        </div>

        <!-- Interactive Company Cards -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-16">
            <!-- Max Engineering -->
            <div class="group relative bg-white/5 backdrop-blur-lg border border-white/10 rounded-3xl overflow-hidden hover:bg-white/10 transition-all duration-500 hover:scale-105 hover:-translate-y-2">
                <div class="absolute inset-0 bg-gradient-to-br from-red-500/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                
                <div class="p-8 text-center">
                    <div class="relative mb-8">
                        <img src="{{ asset('images/maxholdingsenglogo.png') }}" 
                             alt="Max Engineering Logo" 
                             class="w-32 h-16 object-contain mx-auto opacity-80 group-hover:opacity-100 transition-opacity duration-300">
                    </div>
                    
                    <h3 class="font-poppins font-bold text-2xl text-white mb-4 group-hover:text-red-300 transition-colors duration-300">
                        Max Engineering
                    </h3>
                    <p class="font-inter text-white/70 leading-relaxed group-hover:text-white/90 transition-colors duration-300">
                        Innovative engineering solutions tailored to meet the diverse needs of modern industries with precision and excellence.
                    </p>
                </div>
            </div>

            <!-- Max Manpower & Consultancy -->
            <div class="group relative bg-white/5 backdrop-blur-lg border border-white/10 rounded-3xl overflow-hidden hover:bg-white/10 transition-all duration-500 hover:scale-105 hover:-translate-y-2 lg:mt-8">
                <div class="absolute inset-0 bg-gradient-to-br from-orange-500/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                
                <div class="p-8 text-center">
                    <div class="relative mb-8">
                        <img src="{{ asset('images/maxholdingsmclogowhitebg.png') }}" 
                             alt="Max Manpower & Consultancy Logo" 
                             class="w-32 h-16 object-contain mx-auto opacity-80 group-hover:opacity-100 transition-opacity duration-300">
                    </div>
                    
                    <h3 class="font-poppins font-bold text-2xl text-white mb-4 group-hover:text-orange-300 transition-colors duration-300">
                        Max Manpower & Consultancy
                    </h3>
                    <p class="font-inter text-white/70 leading-relaxed group-hover:text-white/90 transition-colors duration-300">
                        Comprehensive staffing services including temporary, permanent, and specialized recruitment for skilled professionals.
                    </p>
                </div>
            </div>

            <!-- Max Tourism -->
            <div class="group relative bg-white/5 backdrop-blur-lg border border-white/10 rounded-3xl overflow-hidden hover:bg-white/10 transition-all duration-500 hover:scale-105 hover:-translate-y-2 lg:mt-4">
                <div class="absolute inset-0 bg-gradient-to-br from-green-500/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                
                <div class="p-8 text-center">
                    <div class="relative mb-8">
                        <img src="{{ asset('images/maxholdingslogowhitebg.png') }}" 
                             alt="Max Tourism Logo" 
                             class="w-32 h-16 object-contain mx-auto opacity-80 group-hover:opacity-100 transition-opacity duration-300">
                    </div>
                    
                    <h3 class="font-poppins font-bold text-2xl text-white mb-4 group-hover:text-green-300 transition-colors duration-300">
                        Max Tourism
                    </h3>
                    <p class="font-inter text-white/70 leading-relaxed group-hover:text-white/90 transition-colors duration-300">
                        Comprehensive travel and hospitality services creating unforgettable experiences for clients worldwide.
                    </p>
                </div>
            </div>
        </div>

        <!-- Interactive Connection Lines (Desktop Only) -->
        <div class="hidden lg:block relative">
            <svg class="absolute inset-0 w-full h-full pointer-events-none" style="top: -50%;">
                <defs>
                    <linearGradient id="connectionGradient" x1="0%" y1="0%" x2="100%" y2="0%">
                        <stop offset="0%" style="stop-color:rgb(239, 68, 68);stop-opacity:0.3" />
                        <stop offset="50%" style="stop-color:rgb(251, 146, 60);stop-opacity:0.3" />
                        <stop offset="100%" style="stop-color:rgb(34, 197, 94);stop-opacity:0.3" />
                    </linearGradient>
                </defs>
                <path d="M 200 100 Q 400 50 600 100 T 1000 100" stroke="url(#connectionGradient)" stroke-width="2" fill="none" opacity="0.5">
                    <animate attributeName="stroke-dasharray" values="0,1000;1000,1000;0,1000" dur="4s" repeatCount="indefinite"/>
                </path>
            </svg>
        </div>
    </div>
</section>

<!-- Enhanced Brands Section with Consistent Styling -->
<section class="py-24 lg:py-32 bg-gradient-to-b from-gray-50 to-white overflow-hidden relative">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-5">
        <div class="absolute inset-0" style="background-image: radial-gradient(circle at 1px 1px, #333 1px, transparent 0); background-size: 40px 40px;"></div>
    </div>
    
    <div class="container mx-auto px-4 relative z-10">
        <!-- Section Header -->
        <div class="text-center mb-20">
            <div class="inline-flex items-center gap-2 bg-red-50 text-red-600 rounded-full px-6 py-2 mb-8 font-medium text-sm">
                <div class="w-2 h-2 bg-red-500 rounded-full"></div>
                <span class="font-inter font-semibold tracking-wide">OUR PARTNERS</span>
            </div>
            
            <h2 class="font-poppins font-bold text-4xl lg:text-5xl text-gray-900 mb-6 leading-tight">
                Brands We <span class="text-red-500">Work With</span>
            </h2>
            <p class="font-inter text-xl lg:text-2xl text-gray-600 max-w-4xl mx-auto leading-relaxed">
                Building lasting partnerships with industry leaders through trust, innovation, and unwavering commitment to excellence.
            </p>
        </div>

        <!-- Enhanced Logo Showcase -->
        <div class="relative">
            <!-- Gradient Overlays -->
            <div class="absolute left-0 top-0 bottom-0 w-20 bg-gradient-to-r from-gray-50 to-transparent z-10"></div>
            <div class="absolute right-0 top-0 bottom-0 w-20 bg-gradient-to-l from-white to-transparent z-10"></div>
            
            <!-- Infinite Scroll Container -->
            <div class="brands-showcase overflow-hidden">
                <div class="brands-track-enhanced flex items-center gap-16 animate-scroll-brands">
                    <!-- Brand Cards -->
                    <div class="brand-card flex-shrink-0">
                        <div class="w-48 h-24 bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 flex items-center justify-center group hover:-translate-y-1">
                            <img src="{{ asset('images/maxholdingsenglogo.png') }}" 
                                alt="Partner Brand" 
                                class="max-w-[80%] max-h-[60%] object-contain opacity-60 group-hover:opacity-100 transition-opacity duration-300">
                        </div>
                    </div>
                    
                    <div class="brand-card flex-shrink-0">
                        <div class="w-48 h-24 bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 flex items-center justify-center group hover:-translate-y-1">
                            <img src="{{ asset('images/maxholdingsmclogo.png') }}" 
                                alt="Partner Brand" 
                                class="max-w-[80%] max-h-[60%] object-contain opacity-60 group-hover:opacity-100 transition-opacity duration-300">
                        </div>
                    </div>
                    
                    <div class="brand-card flex-shrink-0">
                        <div class="w-48 h-24 bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 flex items-center justify-center group hover:-translate-y-1">
                            <img src="{{ asset('images/maxholdingslogo1.png') }}" 
                                alt="Partner Brand" 
                                class="max-w-[80%] max-h-[60%] object-contain opacity-60 group-hover:opacity-100 transition-opacity duration-300">
                        </div>
                    </div>
                    
                    <div class="brand-card flex-shrink-0">
                        <div class="w-48 h-24 bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 flex items-center justify-center group hover:-translate-y-1">
                            <img src="{{ asset('images/maxholdingsenglogo.png') }}" 
                                alt="Partner Brand" 
                                class="max-w-[80%] max-h-[60%] object-contain opacity-60 group-hover:opacity-100 transition-opacity duration-300">
                        </div>
                    </div>
                    
                    <div class="brand-card flex-shrink-0">
                        <div class="w-48 h-24 bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 flex items-center justify-center group hover:-translate-y-1">
                            <img src="{{ asset('images/maxholdingsmclogo.png') }}" 
                                alt="Partner Brand" 
                                class="max-w-[80%] max-h-[60%] object-contain opacity-60 group-hover:opacity-100 transition-opacity duration-300">
                        </div>
                    </div>
                    
                    <!-- Duplicate for seamless loop -->
                    <div class="brand-card flex-shrink-0">
                        <div class="w-48 h-24 bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 flex items-center justify-center group hover:-translate-y-1">
                            <img src="{{ asset('images/maxholdingsenglogo.png') }}" 
                                alt="Partner Brand" 
                                class="max-w-[80%] max-h-[60%] object-contain opacity-60 group-hover:opacity-100 transition-opacity duration-300">
                        </div>
                    </div>
                    
                    <div class="brand-card flex-shrink-0">
                        <div class="w-48 h-24 bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 flex items-center justify-center group hover:-translate-y-1">
                            <img src="{{ asset('images/maxholdingsmclogo.png') }}" 
                                alt="Partner Brand" 
                                class="max-w-[80%] max-h-[60%] object-contain opacity-60 group-hover:opacity-100 transition-opacity duration-300">
                        </div>
                    </div>
                    
                    <div class="brand-card flex-shrink-0">
                        <div class="w-48 h-24 bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 flex items-center justify-center group hover:-translate-y-1">
                            <img src="{{ asset('images/maxholdingslogo1.png') }}" 
                                alt="Partner Brand" 
                                class="max-w-[80%] max-h-[60%] object-contain opacity-60 group-hover:opacity-100 transition-opacity duration-300">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Partnership CTA -->
        <div class="text-center mt-16">
            <p class="font-inter text-lg text-gray-600 mb-8">Interested in partnering with us?</p>
            <a href="#contact" class="group inline-flex items-center gap-3 px-8 py-4 bg-gradient-to-r from-red-600 to-orange-600 hover:from-red-700 hover:to-orange-700 text-white font-semibold rounded-full shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-300">
                <span>Let's Collaborate</span>
                <svg class="w-5 h-5 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                </svg>
            </a>
        </div>
    </div>
</section>

<!-- Premium CEO Message Section with Consistent Styling -->
<section class="py-24 lg:py-32 bg-white relative overflow-hidden">
    <!-- Background Elements -->
    <div class="absolute top-0 left-0 w-full h-64 bg-gradient-to-b from-red-50/50 to-transparent"></div>
    
    <!-- Floating Elements -->
    <div class="absolute top-20 left-10 w-20 h-20 bg-red-100 rounded-full opacity-50 animate-float"></div>
    <div class="absolute bottom-20 right-10 w-32 h-32 bg-orange-100 rounded-full opacity-30 animate-float" style="animation-delay: 2s;"></div>
    
    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-7xl mx-auto">
            <!-- Desktop Layout -->
            <div class="hidden lg:grid lg:grid-cols-5 lg:gap-16 items-center">
                <!-- CEO Image -->
                <div class="lg:col-span-2">
                    <div class="relative">
                        <!-- Decorative Elements -->
                        <div class="absolute -top-6 -left-6 w-24 h-24 bg-gradient-to-br from-red-500/20 to-orange-500/20 rounded-full blur-2xl"></div>
                        <div class="absolute -bottom-4 -right-4 w-16 h-16 bg-gradient-to-br from-orange-500/20 to-red-500/20 rounded-full blur-xl"></div>
                        
                        <!-- Main Image -->
                        <div class="relative z-10">
                            <img src="{{ asset('images/ceopicture.jpg') }}" 
                                 alt="Shiraq Shaleel - Founder / CEO" 
                                 class="w-full max-w-md mx-auto rounded-3xl aspect-square object-cover shadow-2xl hover:shadow-3xl transition-shadow duration-500">
                            
                            <!-- Floating Badge -->
                            <div class="absolute -bottom-4 left-1/2 transform -translate-x-1/2">
                                <div class="bg-white rounded-2xl shadow-xl px-6 py-3 border border-gray-100">
                                    <div class="text-center">
                                        <div class="text-2xl font-bold text-gray-900">CEO</div>
                                        <div class="text-sm text-gray-600">& Founder</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Message Content -->
                <div class="lg:col-span-3">
                    <div class="inline-flex items-center gap-2 bg-red-50 text-red-600 rounded-full px-6 py-2 mb-8 font-medium text-sm">
                        <div class="w-2 h-2 bg-red-500 rounded-full"></div>
                        <span class="font-inter font-semibold tracking-wide">LEADERSHIP MESSAGE</span>
                    </div>
                    
                    <h2 class="font-poppins font-bold text-4xl lg:text-5xl text-gray-900 mb-12 leading-tight">
                        Message From Our <span class="text-red-500">CEO</span>
                    </h2>
                    
                    <div class="relative">
                        <!-- Stylized Quote -->
                        <div class="absolute -top-8 -left-4 text-8xl font-bold text-red-600/10 leading-none select-none">"</div>
                        
                        <div class="relative bg-white border border-gray-100 rounded-3xl p-8 shadow-lg">
                            <p class="font-inter text-xl text-gray-700 leading-relaxed mb-6">
                                At Max Holdings, we believe that true success comes from the perfect harmony of 
                                innovation, collaboration, and sustainable growth. Our journey began with a simple yet 
                                powerful vision: to create value that transcends traditional business boundaries. Through 
                                our three specialized companies, we're not just serving clients-we're building 
                                lasting partnerships that drive Sri Lanka's economic growth and innovation forward. Every project, 
                                every solution, every service reflects our unwavering commitment to excellence.
                            </p>
                        </div>
                        
                        <div class="absolute -bottom-4 right-4 text-6xl font-bold text-red-600/10 leading-none select-none">"</div>
                    </div>
                    
                    <!-- CEO Details -->
                    <div class="mt-8 flex items-center gap-4">
                        <div>
                            <h3 class="font-poppins font-bold text-2xl text-gray-900">
                                Shiraq Shaleel
                            </h3>
                            <p class="font-inter text-lg text-gray-600">
                                Founder & Chief Executive Officer
                            </p>
                        </div>
                        
                    </div>
                </div>
            </div>

            <!-- Mobile/Tablet Layout -->
            <div class="lg:hidden text-center">
                <div class="inline-flex items-center gap-2 bg-red-50 text-red-600 rounded-full px-6 py-2 mb-8 font-medium text-sm">
                    <div class="w-2 h-2 bg-red-500 rounded-full"></div>
                    <span class="font-inter font-semibold tracking-wide">LEADERSHIP MESSAGE</span>
                </div>
                
                <h2 class="font-poppins font-bold text-3xl md:text-4xl text-gray-900 mb-12 leading-tight">
                    Message From Our <span class="text-red-500">CEO</span>
                </h2>
                
                <!-- CEO Image -->
                <div class="mb-12">
                    <div class="relative inline-block">
                        <img src="{{ asset('images/ceopicture.jpg') }}" 
                             alt="Shiraq Shaleel - Founder / CEO" 
                             class="w-48 h-48 md:w-64 md:h-64 rounded-3xl object-cover shadow-2xl mx-auto">
                        
                        <!-- Mobile Badge -->
                        <div class="absolute -bottom-4 left-1/2 transform -translate-x-1/2">
                            <div class="bg-white rounded-xl shadow-lg px-4 py-2 border border-gray-100">
                                <div class="text-center">
                                    <div class="text-lg font-bold text-gray-900">CEO & Founder</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Message Content -->
                <div class="max-w-4xl mx-auto">
                    <div class="relative bg-white border border-gray-100 rounded-3xl p-6 md:p-8 shadow-lg mb-8">
                        <div class="absolute -top-4 left-4 text-6xl font-bold text-red-600/10 leading-none select-none">"</div>
                        
                        <p class="font-inter text-lg md:text-xl text-gray-700 leading-relaxed mb-4 relative z-10">
                            At Max Holdings, we believe that true success comes from the perfect harmony of 
                            innovation, collaboration, and sustainable growth. Our journey began with a powerful 
                            vision: to create value that transcends traditional business boundaries.
                        </p>
                        
                        <p class="font-inter text-base md:text-lg text-gray-600 leading-relaxed relative z-10">
                            Through our three specialized companies, we're building lasting partnerships that 
                            drive Sri Lanka's economic growth forward.
                        </p>
                        
                        <div class="absolute -bottom-2 right-4 text-4xl font-bold text-red-600/10 leading-none select-none">"</div>
                    </div>
                    
                    <!-- CEO Details -->
                    <div>
                        <h3 class="font-poppins font-bold text-2xl md:text-3xl text-gray-900 mb-2">
                            Shiraaj Shaleel
                        </h3>
                        <p class="font-inter text-lg md:text-xl text-gray-600">
                            Founder & Chief Executive Officer
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@push('styles')
<style>
    /* Custom Animations */
    @keyframes fade-in-up {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes scroll-brands {
        0% { transform: translateX(0); }
        100% { transform: translateX(calc(-100% - 4rem)); }
    }

    @keyframes float {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-20px); }
    }

    .animate-fade-in-up {
        animation: fade-in-up 0.8s ease-out forwards;
    }

    .animate-scroll-brands {
        animation: scroll-brands 30s linear infinite;
    }

    .animate-float {
        animation: float 6s ease-in-out infinite;
    }

    /* Animation Delays */
    .animation-delay-300 { animation-delay: 0.3s; }
    .animation-delay-600 { animation-delay: 0.6s; }
    .animation-delay-700 { animation-delay: 0.7s; }
    .animation-delay-900 { animation-delay: 0.9s; }
    .animation-delay-1000 { animation-delay: 1s; }
    .animation-delay-2000 { animation-delay: 2s; }

    /* Enhanced Hover Effects */
    .hover\:shadow-3xl:hover {
        box-shadow: 0 35px 60px -12px rgba(0, 0, 0, 0.25);
    }

    /* Glassmorphism Effects */
    .backdrop-blur-lg {
        backdrop-filter: blur(16px);
    }

    .backdrop-blur-sm {
        backdrop-filter: blur(4px);
    }

    .backdrop-blur-md {
        backdrop-filter: blur(8px);
    }

    /* Smooth Scrolling */
    html {
        scroll-behavior: smooth;
    }

    /* Hero Section Enhancements */
    .hero-section {
        background-attachment: fixed;
    }

    @media (max-width: 768px) {
        .hero-section {
            background-attachment: scroll;
            min-height: 100vh;
        }
        
        .hero-title {
            font-size: 2.5rem;
            line-height: 1.1;
        }
    }

    /* Brand Showcase */
    .brands-showcase:hover .brands-track-enhanced {
        animation-play-state: paused;
    }

    /* Custom Gradient Text */
    .bg-clip-text {
        -webkit-background-clip: text;
        background-clip: text;
    }

    /* Enhanced Focus States */
    button:focus-visible,
    a:focus-visible {
        outline: 2px solid #EF4444;
        outline-offset: 2px;
    }

    /* Loading Animation for Images */
    img {
        loading: lazy;
    }

    /* Print Styles */
    @media print {
        .hero-section {
            background: white !important;
            color: black !important;
        }
        
        .animate-pulse,
        .animate-ping,
        .animate-bounce,
        .animate-float {
            animation: none !important;
        }
    }
</style>
@endpush

@push('scripts')
<script>
    // Enhanced Scroll Animations
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate-fade-in-up');
            }
        });
    }, observerOptions);

    // Observe all service cards and content sections
    document.addEventListener('DOMContentLoaded', () => {
        const elementsToAnimate = document.querySelectorAll('.group, .bg-white, h2, p');
        elementsToAnimate.forEach(el => observer.observe(el));
    });

    // Hero text parallax effect
    const heroContent = document.querySelector('.hero-content');

    window.addEventListener('scroll', () => {
    if (!heroContent) return;
    const scrolled = window.scrollY;

    heroContent.style.transform = `translateY(${scrolled * 0.3}px)`;

    heroContent.style.opacity = Math.max(1 - scrolled / 400, 0);
    });

    // Smooth Scroll for Anchor Links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // Performance Optimization: Lazy Loading for Background Images
    if ('IntersectionObserver' in window) {
        const imageObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    img.classList.remove('lazy');
                    imageObserver.unobserve(img);
                }
            });
        });

        document.querySelectorAll('img[data-src]').forEach(img => {
            imageObserver.observe(img);
        });
    }

    // Auto-scroll brand carousel
    const brandCarousel = document.querySelector('.brands-track-enhanced');
    if (brandCarousel) {
        brandCarousel.addEventListener('mouseenter', () => {
            brandCarousel.style.animationPlayState = 'paused';
        });
        
        brandCarousel.addEventListener('mouseleave', () => {
            brandCarousel.style.animationPlayState = 'running';
        });
    }
</script>
@endpush