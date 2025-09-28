@extends('layouts.app')

@section('title', 'About Us - Max Holdings')

@section('content')
<!-- About Us Hero Section with Modern Parallax Effect -->
<section class="relative min-h-screen flex items-center justify-center overflow-hidden bg-center bg-cover bg-no-repeat" 
         style="background-image: url('{{ asset('images/abouthero.webp') }}');">
    
    <!-- Enhanced Gradient Overlay -->
    <div class="absolute inset-0 bg-gradient-to-br from-black/70 via-black/50 to-transparent z-0"></div>
    
    <!-- Animated Background Elements -->
    <div class="absolute inset-0 z-1">
        <div class="absolute top-1/4 left-1/4 w-72 h-72 bg-red-500/10 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute bottom-1/3 right-1/4 w-96 h-96 bg-blue-500/10 rounded-full blur-3xl animate-pulse" style="animation-delay: 1s;"></div>
    </div>

    <div class="container mx-auto px-4 z-10 relative">
        <div class="text-center text-white max-w-5xl mx-auto">
            <!-- Animated Badge -->
            <div class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-md rounded-full px-6 py-3 mb-8 border border-white/20">
                <div class="w-2 h-2 bg-red-500 rounded-full animate-pulse"></div>
                <span class="font-inter text-sm font-medium tracking-wide">EST. 2021</span>
            </div>
            
            <!-- Enhanced Title with Animation -->
            <h1 class="font-poppins font-bold text-4xl md:text-6xl lg:text-7xl mb-6 lg:mb-8 drop-shadow-2xl leading-tight">
                About <span class="bg-gradient-to-r from-red-400 to-orange-500 bg-clip-text text-transparent">Max Holdings</span>
            </h1>
            
            <!-- Enhanced Subtitle -->
            <p class="font-poppins text-xl md:text-2xl lg:text-3xl max-w-3xl mx-auto drop-shadow-lg mb-8 leading-relaxed">
                One Vision. Many Ventures. Shared Success
            </p>
            
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

<!-- Company Information Section with Modern Cards -->
<section class="py-24 lg:py-32 bg-gradient-to-b from-gray-50 to-white relative overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-5">
        <div class="absolute inset-0" style="background-image: radial-gradient(circle at 1px 1px, #333 1px, transparent 0); background-size: 40px 40px;"></div>
    </div>
    
    <div class="container mx-auto px-4 relative z-10">
        <!-- Section Header -->
        <div class="text-center mb-16">
            <div class="inline-flex items-center gap-2 bg-red-50 text-red-600 rounded-full px-6 py-2 mb-6 font-medium text-sm">
                <div class="w-2 h-2 bg-red-500 rounded-full"></div>
                Our Foundation
            </div>
            <h2 class="font-poppins font-bold text-4xl lg:text-5xl text-gray-900 mb-6">
                Built on Excellence
            </h2>
            <p class="font-inter text-base leading-[30px] text-gray-600 max-w-3xl mx-auto">
                A legacy of innovation, growth, and meaningful partnerships across diverse industries
            </p>
        </div>
        
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-start">

            <!-- Left Content -->
            <div class="lg:col-span-7 flex flex-col justify-start h-full">
                <div class="space-y-6">
                    <p class="font-inter text-base leading-[30px] text-gray-700">
                        Founded in 2021 and proudly Sri Lankan-owned, Max Holdings Pvt Ltd is more than a diversified business group; we are a catalyst for growth, innovation, and global collaboration. Headquartered in Minuwangoda, we operate through our subsidiaries, delivering tailored solutions across industries while empowering businesses and brands both locally and internationally.
                    </p>

                    <p class="font-inter text-base leading-[30px] text-gray-700">
                        Over the years, we have helped numerous companies and brands thrive, connecting ideas to execution and transforming challenges into opportunities. From engineering precision and workforce solutions to immersive travel experiences, our approach is always holistic, adaptive, and forward-thinking.
                    </p>

                    <!-- Quote aligned with middle card -->
                    <div class="mt-auto bg-gradient-to-r from-red-50 to-orange-50 border-l-4 border-red-500 p-6 rounded-r-lg">
                        <p class="font-inter text-base leading-[30px] text-gray-800 italic">
                            "At Max Holdings, we don't just provide services—we create legacies. Driven by integrity, excellence, and innovation, we unite diverse sectors under one vision to redefine what's possible."
                        </p>
                    </div>
                </div>
            </div>

            <!-- Right Stats Cards -->
            <div class="lg:col-span-5 flex flex-col justify-start">
                <div class="space-y-5 sticky top-0 lg:top-24">
                    <!-- Founded Card -->
                    <div class="group bg-white border border-gray-100 rounded-3xl p-6 shadow-md hover:shadow-lg transition-all duration-500 transform hover:-translate-y-1 hover:border-red-200">
                        <div class="flex items-center gap-4">
                            <div class="relative">
                                <div class="bg-gradient-to-tr from-red-500 to-orange-500 text-white p-3 rounded-2xl shadow group-hover:scale-105 transition-transform duration-300">
                                    <i class="fas fa-calendar-alt text-2xl"></i>
                                </div>
                                <div class="absolute -top-1 -right-1 w-3 h-3 bg-green-500 rounded-full border-2 border-white animate-pulse"></div>
                            </div>
                            <div>
                                <p class="font-inter text-sm text-gray-500 uppercase tracking-wider font-semibold">Founded</p>
                                <p class="font-inter font-bold text-2xl text-gray-900 mt-1">2021</p>
                                <p class="font-inter text-sm text-gray-600 mt-2">4+ Years Strong</p>
                            </div>
                        </div>
                    </div>

                    <!-- Headquarters Card -->
                    <div class="group bg-white border border-gray-100 rounded-3xl p-6 shadow-md hover:shadow-lg transition-all duration-500 transform hover:-translate-y-1 hover:border-blue-200">
                        <div class="flex items-center gap-4">
                            <div class="bg-gradient-to-tr from-blue-500 to-indigo-500 text-white p-3 rounded-2xl shadow group-hover:scale-105 transition-transform duration-300">
                                <i class="fas fa-map-marker-alt text-2xl"></i>
                            </div>
                            <div>
                                <p class="font-inter text-sm text-gray-500 uppercase tracking-wider font-semibold">Headquarters</p>
                                <p class="font-inter font-bold text-2xl text-gray-900 mt-1">Minuwangoda</p>
                                <p class="font-inter text-sm text-gray-600 mt-2">Sri Lanka</p>
                            </div>
                        </div>
                    </div>

                    <!-- Subsidiaries Card -->
                    <div class="group bg-white border border-gray-100 rounded-3xl p-6 shadow-md hover:shadow-lg transition-all duration-500 transform hover:-translate-y-1 hover:border-green-200">
                        <div class="flex items-center gap-4">
                            <div class="bg-gradient-to-tr from-green-500 to-emerald-500 text-white p-3 rounded-2xl shadow group-hover:scale-105 transition-transform duration-300">
                                <i class="fas fa-building text-2xl"></i>
                            </div>
                            <div>
                                <p class="font-inter text-sm text-gray-500 uppercase tracking-wider font-semibold">Subsidiaries</p>
                                <p class="font-inter font-bold text-2xl text-gray-900 mt-1">3</p>
                                <p class="font-inter text-sm text-gray-600 mt-2">Specialized Companies</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- Our Subsidiaries Section with Modern Design -->
<section class="py-24 lg:py-32 bg-white relative">
    <!-- Background Elements -->
    <div class="absolute top-0 left-0 w-full h-64 bg-gradient-to-b from-red-50/50 to-transparent"></div>
    
    <div class="container mx-auto px-4 relative z-10">
        <!-- Section Header -->
        <div class="text-center mb-20">
            <div class="inline-flex items-center gap-2 bg-red-50 text-red-600 rounded-full px-6 py-2 mb-6 font-medium text-sm">
                <div class="w-2 h-2 bg-red-500 rounded-full"></div>
                Our Portfolio
            </div>
            <h2 class="font-poppins font-bold text-4xl lg:text-5xl text-gray-900 mb-6">
                Our <span class="text-red-500">Subsidiaries</span>
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                Three specialized companies, one unified vision for excellence across multiple industries
            </p>
        </div>

        <div class="space-y-16">
            <!-- Max Engineering -->
            <div class="group flex flex-col lg:flex-row items-center rounded-3xl overflow-hidden shadow-xl hover:shadow-2xl transition-all duration-700 bg-gradient-to-r from-blue-50 to-indigo-50">
                <!-- Image Container -->
                <div class="w-full lg:w-5/12 relative overflow-hidden">
                    <div class="bg-gradient-to-br from-blue-100 to-indigo-100 p-16 flex items-center justify-center min-h-[400px] group-hover:scale-105 transition-transform duration-700">
                        <div class="relative">
                            <img src="{{ asset('images/maxholdingsenglogo.png') }}" 
                                 alt="Max Engineering Logo" 
                                 class="w-64 md:w-80 drop-shadow-xl">
                            <div class="absolute inset-0 bg-gradient-to-r from-blue-500/20 to-transparent rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        </div>
                    </div>
                </div>
                
                <!-- Content -->
                <div class="w-full lg:w-7/12 p-12 md:p-16 bg-white">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="w-3 h-3 bg-blue-500 rounded-full animate-pulse"></div>
                        <span class="text-blue-600 font-semibold text-sm uppercase tracking-wider">Engineering Excellence</span>
                    </div>
                    <h3 class="font-poppins font-bold text-3xl lg:text-4xl text-gray-900 mb-6">
                        Max Engineering
                    </h3>
                    <p class="text-lg leading-relaxed text-gray-700 mb-8">
                        At Max Engineering, we design and deliver advanced lift solutions that redefine safety, comfort, and efficiency. From residential complexes to commercial hubs and large-scale industrial projects, our focus is on creating reliable, future-ready systems that ensure accessibility and sustainable growth throughout Sri Lanka.
                    </p>
                </div>
            </div>

            <!-- Max Manpower -->
            <div class="group flex flex-col lg:flex-row-reverse items-center rounded-3xl overflow-hidden shadow-xl hover:shadow-2xl transition-all duration-700 bg-gradient-to-l from-orange-50 to-yellow-50">
                <!-- Image Container -->
                <div class="w-full lg:w-5/12 relative overflow-hidden">
                    <div class="bg-gradient-to-br from-orange-100 to-yellow-100 p-16 flex items-center justify-center min-h-[400px] group-hover:scale-105 transition-transform duration-700">
                        <div class="relative">
                            <img src="{{ asset('images/maxholdingsmclogo.png') }}" 
                                 alt="Max Manpower Logo" 
                                 class="w-64 md:w-80 drop-shadow-xl">
                            <div class="absolute inset-0 bg-gradient-to-r from-orange-500/20 to-transparent rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        </div>
                    </div>
                </div>
                
                <!-- Content -->
                <div class="w-full lg:w-7/12 p-12 md:p-16 bg-white">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="w-3 h-3 bg-orange-500 rounded-full animate-pulse"></div>
                        <span class="text-orange-600 font-semibold text-sm uppercase tracking-wider">Workforce Solutions</span>
                    </div>
                    <h3 class="font-poppins font-bold text-3xl lg:text-4xl text-gray-900 mb-6">
                        Max Manpower
                    </h3>
                    <p class="text-lg leading-relaxed text-gray-700 mb-8">
                        Max Manpower is your trusted partner for workforce excellence. We provide skilled and dependable staffing solutions, seamlessly connecting businesses with the right talent in construction, manufacturing, and FMCG industries. Our mission is to enhance operational efficiency, foster growth, and empower both employers and employees to achieve success.
                    </p>
                </div>
            </div>

            <!-- Max Tourism -->
            <div class="group flex flex-col lg:flex-row items-center rounded-3xl overflow-hidden shadow-xl hover:shadow-2xl transition-all duration-700 bg-gradient-to-r from-green-50 to-emerald-50">
                <!-- Image Container -->
                <div class="w-full lg:w-5/12 relative overflow-hidden">
                    <div class="bg-gradient-to-br from-green-100 to-emerald-100 p-16 flex items-center justify-center min-h-[400px] group-hover:scale-105 transition-transform duration-700">
                        <div class="relative">
                            <img src="{{ asset('images/maxholdingslogo1.png') }}" 
                                 alt="Max Tourism Logo" 
                                 class="w-64 md:w-80 drop-shadow-xl">
                            <div class="absolute inset-0 bg-gradient-to-r from-green-500/20 to-transparent rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        </div>
                    </div>
                </div>
                
                <!-- Content -->
                <div class="w-full lg:w-7/12 p-12 md:p-16 bg-white">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="w-3 h-3 bg-green-500 rounded-full animate-pulse"></div>
                        <span class="text-green-600 font-semibold text-sm uppercase tracking-wider">Travel Experiences</span>
                    </div>
                    <h3 class="font-poppins font-bold text-3xl lg:text-4xl text-gray-900 mb-6">
                        Max Tourism
                    </h3>
                    <p class="text-lg leading-relaxed text-gray-700 mb-8">
                        Max Tourism opens the gateway to Sri Lanka's wonders through meaningful and responsible travel. We craft experiences that highlight the island's natural beauty and cultural richness, while uplifting local communities. With us, every journey becomes more than a trip-it transforms into a lasting memory for global explorers.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Vision & Mission Section -->
<section class="py-24 lg:py-32 bg-gradient-to-br from-gray-50 to-gray-100 relative overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-5">
        <div class="absolute inset-0"
            style="background-image: linear-gradient(45deg, #ff2212 25%, transparent 25%), 
                   linear-gradient(-45deg, #ff2212 25%, transparent 25%), 
                   linear-gradient(45deg, transparent 75%, #ff2212 75%), 
                   linear-gradient(-45deg, transparent 75%, #ff2212 75%);
                   background-size: 60px 60px;
                   background-position: 0 0, 0 30px, 30px -30px, -30px 0;">
        </div>
    </div>

    <div class="container mx-auto px-4 relative z-10">
        <!-- Section Header -->
        <div class="text-center mb-20">
            <div class="inline-flex items-center gap-2 bg-red-50 text-red-600 rounded-full px-6 py-2 mb-6 font-medium text-sm">
                <div class="w-2 h-2 bg-red-500 rounded-full"></div>
                Our Purpose
            </div>
            <h2 class="font-poppins font-bold text-4xl lg:text-5xl text-gray-900 mb-6">
                Vision & Mission
            </h2>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-stretch">
            <!-- Vision Card -->
            <div class="group relative flex flex-col h-full">
                <div class="absolute inset-0 bg-gradient-to-r from-red-100 to-pink-100 rounded-3xl blur-2xl opacity-60 group-hover:opacity-80 transition-all duration-500"></div>
                <div class="relative bg-white rounded-3xl p-12 shadow-xl hover:shadow-2xl transition-all duration-500 flex-1 flex flex-col justify-between border border-red-100 h-full">
                    <!-- Icon + Heading -->
                    <div class="flex items-center justify-center gap-6 mb-4">
                        <div class="w-20 h-20 rounded-full bg-gradient-to-tr from-red-400 to-red-600 flex items-center justify-center shadow-xl group-hover:scale-110 transition-transform duration-500 overflow-hidden">
                            <img src="{{ asset('images/vision.png') }}" alt="Vision Icon" class="w-12 h-12 object-contain z-10">
                        </div>
                        <h3 class="font-poppins font-bold text-3xl text-gray-900 relative">
                            Vision
                            <div class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 w-16 h-1 bg-gradient-to-r from-red-400 to-red-600 rounded-full"></div>
                        </h3>
                    </div>
                    <!-- Text -->
                    <p class="font-inter text-gray-700 text-base leading-relaxed max-w-md mx-auto text-center flex-1 mt-2">
                        To be the leading provider of innovative and reliable manpower solutions, empowering organizations and individuals to achieve sustainable growth and success globally.
                    </p>
                </div>
            </div>

            <!-- Mission Card -->
            <div class="group relative flex flex-col h-full">
                <div class="absolute inset-0 bg-gradient-to-r from-blue-100 to-indigo-100 rounded-3xl blur-2xl opacity-60 group-hover:opacity-80 transition-all duration-500"></div>
                <div class="relative bg-white rounded-3xl p-12 shadow-xl hover:shadow-2xl transition-all duration-500 flex-1 flex flex-col justify-between border border-blue-100 h-full">
                    <!-- Icon + Heading -->
                    <div class="flex items-center justify-center gap-6 mb-4">
                        <div class="w-20 h-20 rounded-full bg-gradient-to-tr from-blue-400 to-blue-600 flex items-center justify-center shadow-xl group-hover:scale-110 transition-transform duration-500 overflow-hidden">
                            <img src="{{ asset('images/mission.png') }}" alt="Mission Icon" class="w-12 h-12 object-contain z-10">
                        </div>
                        <h3 class="font-poppins font-bold text-3xl text-gray-900 relative">
                            Mission
                            <div class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 w-16 h-1 bg-gradient-to-r from-blue-400 to-blue-600 rounded-full"></div>
                        </h3>
                    </div>
                    <!-- Text -->
                    <p class="font-inter text-gray-700 text-base leading-relaxed max-w-md mx-auto text-center flex-1 mt-2">
                        To connect businesses with skilled and dedicated professionals, ensuring the right talent for the right opportunities. Foster trust and long-term partnerships through exceptional service, integrity, and professionalism while supporting employees in achieving their career aspirations.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Enhanced Values Section with Modern Carousel -->
<section class="py-24 lg:py-32 bg-white relative overflow-hidden">
    <!-- Floating Elements -->
    <div class="absolute top-20 left-10 w-20 h-20 bg-red-100 rounded-full opacity-50 animate-float"></div>
    <div class="absolute bottom-20 right-10 w-32 h-32 bg-blue-100 rounded-full opacity-30 animate-float" style="animation-delay: 2s;"></div>
    
    <div class="container mx-auto px-4 relative z-10">
        <!-- Section Header -->
        <div class="text-center mb-20">
            <div class="inline-flex items-center gap-2 bg-red-50 text-red-600 rounded-full px-6 py-2 mb-6 font-medium text-sm">
                <div class="w-2 h-2 bg-red-500 rounded-full"></div>
                What Drives Us
            </div>
            <h2 class="font-poppins font-bold text-4xl lg:text-5xl text-gray-900 mb-6">
                Our <span class="text-red-500">Values</span>
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                Eight fundamental principles that guide every decision and shape our company culture
            </p>
        </div>

        <!-- Enhanced Carousel Container -->
        <div class="relative">
            <!-- Navigation Buttons -->
            <button id="prevBtn" class="absolute left-4 top-1/2 -translate-y-1/2 z-20 bg-white/90 backdrop-blur-sm p-4 rounded-full shadow-xl hover:bg-white hover:scale-110 transition-all duration-300 border border-gray-200">
                <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
            </button>

            <button id="nextBtn" class="absolute right-4 top-1/2 -translate-y-1/2 z-20 bg-white/90 backdrop-blur-sm p-4 rounded-full shadow-xl hover:bg-white hover:scale-110 transition-all duration-300 border border-gray-200">
                <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </button>

            <!-- Carousel -->
            <div id="carousel" class="flex overflow-x-auto overflow-y-hidden scroll-smooth space-x-8 snap-x snap-mandatory scrollbar-none px-8">
                
                <!-- Integrity -->
                <div class="flex-shrink-0 w-80 snap-start group relative">
                    <div class="bg-gradient-to-br from-amber-50 to-orange-50 rounded-2xl p-8 text-center shadow-lg hover:shadow-2xl transition-all duration-500 border border-amber-100 h-full transform hover:-translate-y-2">
                        <!-- Glow Effect -->
                        <div class="absolute inset-0 bg-gradient-to-r from-amber-200/20 to-orange-200/20 rounded-2xl blur-xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        
                        <div class="relative z-10">
                            <div class="w-20 h-20 mx-auto mb-6 transition-transform duration-500 group-hover:scale-110 group-hover:rotate-12">
                                <img src="{{ asset('images/integrity.png') }}" alt="Integrity" class="w-full h-full object-contain drop-shadow-lg">
                            </div>
                            <h3 class="font-poppins font-bold text-2xl mb-4 text-gray-900 group-hover:text-amber-700 transition-colors duration-300">Integrity</h3>
                            <p class="font-inter text-gray-700 leading-relaxed">Acting with honesty and transparency in all endeavors, building trust through every interaction.</p>
                        </div>
                    </div>
                </div>

                <!-- Excellence -->
                <div class="flex-shrink-0 w-80 snap-start group relative">
                    <div class="bg-gradient-to-br from-emerald-50 to-green-50 rounded-2xl p-8 text-center shadow-lg hover:shadow-2xl transition-all duration-500 border border-emerald-100 h-full transform hover:-translate-y-2">
                        <div class="absolute inset-0 bg-gradient-to-r from-emerald-200/20 to-green-200/20 rounded-2xl blur-xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        
                        <div class="relative z-10">
                            <div class="w-20 h-20 mx-auto mb-6 transition-transform duration-500 group-hover:scale-110 group-hover:rotate-12">
                                <img src="{{ asset('images/excellence.png') }}" alt="Excellence" class="w-full h-full object-contain drop-shadow-lg">
                            </div>
                            <h3 class="font-poppins font-bold text-2xl mb-4 text-gray-900 group-hover:text-emerald-700 transition-colors duration-300">Excellence</h3>
                            <p class="font-inter text-gray-700 leading-relaxed">Striving for the highest standards in every solution and service we deliver.</p>
                        </div>
                    </div>
                </div>

                <!-- Innovation -->
                <div class="flex-shrink-0 w-80 snap-start group relative">
                    <div class="bg-gradient-to-br from-purple-50 to-indigo-50 rounded-2xl p-8 text-center shadow-lg hover:shadow-2xl transition-all duration-500 border border-purple-100 h-full transform hover:-translate-y-2">
                        <div class="absolute inset-0 bg-gradient-to-r from-purple-200/20 to-indigo-200/20 rounded-2xl blur-xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        
                        <div class="relative z-10">
                            <div class="w-20 h-20 mx-auto mb-6 transition-transform duration-500 group-hover:scale-110 group-hover:rotate-12">
                                <img src="{{ asset('images/innovation.png') }}" alt="Innovation" class="w-full h-full object-contain drop-shadow-lg">
                            </div>
                            <h3 class="font-poppins font-bold text-2xl mb-4 text-gray-900 group-hover:text-purple-700 transition-colors duration-300">Innovation</h3>
                            <p class="font-inter text-gray-700 leading-relaxed">Adopting creative and forward-thinking approaches to overcome challenges.</p>
                        </div>
                    </div>
                </div>

                <!-- Commitment -->
                <div class="flex-shrink-0 w-80 snap-start group relative">
                    <div class="bg-gradient-to-br from-red-50 to-pink-50 rounded-2xl p-8 text-center shadow-lg hover:shadow-2xl transition-all duration-500 border border-red-100 h-full transform hover:-translate-y-2">
                        <div class="absolute inset-0 bg-gradient-to-r from-red-200/20 to-pink-200/20 rounded-2xl blur-xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        
                        <div class="relative z-10">
                            <div class="w-20 h-20 mx-auto mb-6 transition-transform duration-500 group-hover:scale-110 group-hover:rotate-12">
                                <img src="{{ asset('images/commitment.png') }}" alt="Commitment" class="w-full h-full object-contain drop-shadow-lg">
                            </div>
                            <h3 class="font-poppins font-bold text-2xl mb-4 text-gray-900 group-hover:text-red-700 transition-colors duration-300">Commitment</h3>
                            <p class="font-inter text-gray-700 leading-relaxed">Dedication to client success and building lasting partnerships.</p>
                        </div>
                    </div>
                </div>

                <!-- Empowerment -->
                <div class="flex-shrink-0 w-80 snap-start group relative">
                    <div class="bg-gradient-to-br from-blue-50 to-cyan-50 rounded-2xl p-8 text-center shadow-lg hover:shadow-2xl transition-all duration-500 border border-blue-100 h-full transform hover:-translate-y-2">
                        <div class="absolute inset-0 bg-gradient-to-r from-blue-200/20 to-cyan-200/20 rounded-2xl blur-xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        
                        <div class="relative z-10">
                            <div class="w-20 h-20 mx-auto mb-6 transition-transform duration-500 group-hover:scale-110 group-hover:rotate-12">
                                <img src="{{ asset('images/empowerment.png') }}" alt="Empowerment" class="w-full h-full object-contain drop-shadow-lg">
                            </div>
                            <h3 class="font-poppins font-bold text-2xl mb-4 text-gray-900 group-hover:text-blue-700 transition-colors duration-300">Empowerment</h3>
                            <p class="font-inter text-gray-700 leading-relaxed">Enabling employees and clients to reach their full potential.</p>
                        </div>
                    </div>
                </div>

                <!-- Reliability -->
                <div class="flex-shrink-0 w-80 snap-start group relative">
                    <div class="bg-gradient-to-br from-teal-50 to-green-50 rounded-2xl p-8 text-center shadow-lg hover:shadow-2xl transition-all duration-500 border border-teal-100 h-full transform hover:-translate-y-2">
                        <div class="absolute inset-0 bg-gradient-to-r from-teal-200/20 to-green-200/20 rounded-2xl blur-xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        
                        <div class="relative z-10">
                            <div class="w-20 h-20 mx-auto mb-6 transition-transform duration-500 group-hover:scale-110 group-hover:rotate-12">
                                <img src="{{ asset('images/reliability.png') }}" alt="Reliability" class="w-full h-full object-contain drop-shadow-lg">
                            </div>
                            <h3 class="font-poppins font-bold text-2xl mb-4 text-gray-900 group-hover:text-teal-700 transition-colors duration-300">Reliability</h3>
                            <p class="font-inter text-gray-700 leading-relaxed">Providing dependable and consistent solutions across all sectors.</p>
                        </div>
                    </div>
                </div>

                <!-- Collaboration -->
                <div class="flex-shrink-0 w-80 snap-start group relative">
                    <div class="bg-gradient-to-br from-rose-50 to-pink-50 rounded-2xl p-8 text-center shadow-lg hover:shadow-2xl transition-all duration-500 border border-rose-100 h-full transform hover:-translate-y-2">
                        <div class="absolute inset-0 bg-gradient-to-r from-rose-200/20 to-pink-200/20 rounded-2xl blur-xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        
                        <div class="relative z-10">
                            <div class="w-20 h-20 mx-auto mb-6 transition-transform duration-500 group-hover:scale-110 group-hover:rotate-12">
                                <img src="{{ asset('images/collaboration.png') }}" alt="Collaboration" class="w-full h-full object-contain drop-shadow-lg">
                            </div>
                            <h3 class="font-poppins font-bold text-2xl mb-4 text-gray-900 group-hover:text-rose-700 transition-colors duration-300">Collaboration</h3>
                            <p class="font-inter text-gray-700 leading-relaxed">Fostering teamwork and strong relationships for shared success.</p>
                        </div>
                    </div>
                </div>

                <!-- Sustainability -->
                <div class="flex-shrink-0 w-80 snap-start group relative">
                    <div class="bg-gradient-to-br from-lime-50 to-green-50 rounded-2xl p-8 text-center shadow-lg hover:shadow-2xl transition-all duration-500 border border-lime-100 h-full transform hover:-translate-y-2">
                        <div class="absolute inset-0 bg-gradient-to-r from-lime-200/20 to-green-200/20 rounded-2xl blur-xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        
                        <div class="relative z-10">
                            <div class="w-20 h-20 mx-auto mb-6 transition-transform duration-500 group-hover:scale-110 group-hover:rotate-12">
                                <img src="{{ asset('images/sustainability.png') }}" alt="Sustainability" class="w-full h-full object-contain drop-shadow-lg">
                            </div>
                            <h3 class="font-poppins font-bold text-2xl mb-4 text-gray-900 group-hover:text-lime-700 transition-colors duration-300">Sustainability</h3>
                            <p class="font-inter text-gray-700 leading-relaxed">Delivering solutions that support long-term growth and responsible practices.</p>
                        </div>
                    </div>
                </div>

            </div>
            
            <!-- Carousel Indicators -->
            <div class="flex justify-center mt-12 space-x-2">
                <div class="w-3 h-3 bg-red-200 rounded-full cursor-pointer hover:bg-red-400 transition-colors duration-300"></div>
                <div class="w-3 h-3 bg-red-200 rounded-full cursor-pointer hover:bg-red-400 transition-colors duration-300"></div>
                <div class="w-3 h-3 bg-red-200 rounded-full cursor-pointer hover:bg-red-400 transition-colors duration-300"></div>
            </div>
        </div>
    </div>
</section>

<!-- Enhanced Journey Section with Modern Stats -->
<section class="py-24 lg:py-32 bg-gradient-to-br from-gray-900 via-gray-800 to-red-900 relative overflow-hidden">
    <!-- Animated Background Elements -->
    <div class="absolute inset-0">
        <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-red-500/10 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute bottom-1/4 right-1/4 w-80 h-80 bg-blue-500/10 rounded-full blur-3xl animate-pulse" style="animation-delay: 2s;"></div>
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-64 h-64 bg-orange-500/10 rounded-full blur-3xl animate-pulse" style="animation-delay: 4s;"></div>
    </div>
    
    <!-- Particles Effect -->
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute top-20 left-20 w-2 h-2 bg-white/20 rounded-full animate-ping" style="animation-delay: 1s;"></div>
        <div class="absolute top-40 right-40 w-1 h-1 bg-red-400/30 rounded-full animate-ping" style="animation-delay: 3s;"></div>
        <div class="absolute bottom-40 left-1/3 w-2 h-2 bg-blue-400/20 rounded-full animate-ping" style="animation-delay: 5s;"></div>
    </div>
    
    <div class="container mx-auto px-4 relative z-10">
        <!-- Section Header -->
        <div class="text-center mb-20">
            <div class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-md text-white rounded-full px-6 py-2 mb-6 font-medium text-sm border border-white/20">
                <div class="w-2 h-2 bg-red-500 rounded-full animate-pulse"></div>
                Our Impact
            </div>
            <h2 class="font-poppins font-bold text-4xl lg:text-6xl text-white mb-6">
                Our Journey of <span class="bg-gradient-to-r from-red-400 to-orange-500 bg-clip-text text-transparent">Excellence</span>
            </h2>
            <p class="font-inter text-xl leading-relaxed text-gray-300 max-w-4xl mx-auto">
                For over a decade, Max Holdings has been driven by innovation, trust, and impact. With a strong foundation built on collaboration and dedication, we have partnered with businesses across industries and borders delivering projects that inspire growth, empower communities, and create lasting value.
            </p>
        </div>
        
        <!-- Enhanced Stats Container -->
        <div id="stats" class="relative">
            <!-- Glassmorphism Background -->
            <div class="absolute inset-0 bg-white/5 backdrop-blur-xl rounded-3xl border border-white/10"></div>
            
            <div class="relative z-10 p-12 md:p-16">
                <div class="grid grid-cols-2 lg:grid-cols-4 gap-12 text-center text-white">
                    
                    <!-- Years of Experience -->
                    <div class="group transform hover:scale-105 transition-all duration-500">
                        <div class="relative">
                            <!-- Animated Ring -->
                            <div class="absolute inset-0 w-24 h-24 mx-auto border-4 border-red-400/30 rounded-full animate-spin" style="animation-duration: 8s;"></div>
                            
                            <div class="relative bg-gradient-to-r from-red-500/20 to-orange-500/20 backdrop-blur-sm rounded-full w-24 h-24 mx-auto mb-6 border border-red-400/30 group-hover:border-red-400/60 transition-colors duration-300 flex items-center justify-center">
                                <div class="text-2xl md:text-3xl font-poppins font-bold">
                                    <span class="counter" data-target="10">0</span>+
                                </div>
                            </div>
                        </div>
                        <p class="font-inter font-semibold text-lg text-gray-300 group-hover:text-white transition-colors duration-300">Years of Experience</p>
                        <p class="font-inter text-sm text-gray-400 mt-2">Building Excellence</p>
                    </div>

                    <!-- Trusted Clients -->
                    <div class="group transform hover:scale-105 transition-all duration-500">
                        <div class="relative">
                            <div class="absolute inset-0 w-24 h-24 mx-auto border-4 border-blue-400/30 rounded-full animate-pulse"></div>
                            
                            <div class="relative bg-gradient-to-r from-blue-500/20 to-indigo-500/20 backdrop-blur-sm rounded-full w-24 h-24 mx-auto mb-6 border border-blue-400/30 group-hover:border-blue-400/60 transition-colors duration-300 flex items-center justify-center">
                                <div class="text-2xl md:text-3xl font-poppins font-bold">
                                    <span class="counter" data-target="75">0</span>+
                                </div>
                            </div>
                        </div>
                        <p class="font-inter font-semibold text-lg text-gray-300 group-hover:text-white transition-colors duration-300">Trusted Clients</p>
                        <p class="font-inter text-sm text-gray-400 mt-2">Global Partnerships</p>
                    </div>

                    <!-- Successful Projects -->
                    <div class="group transform hover:scale-105 transition-all duration-500">
                        <div class="relative">
                            <div class="absolute inset-0 w-24 h-24 mx-auto border-4 border-green-400/30 rounded-full animate-spin" style="animation-duration: 6s; animation-direction: reverse;"></div>
                            
                            <div class="relative bg-gradient-to-r from-green-500/20 to-emerald-500/20 backdrop-blur-sm rounded-full w-24 h-24 mx-auto mb-6 border border-green-400/30 group-hover:border-green-400/60 transition-colors duration-300 flex items-center justify-center">
                                <div class="text-2xl md:text-3xl font-poppins font-bold">
                                    <span class="counter" data-target="150">0</span>+
                                </div>
                            </div>
                        </div>
                        <p class="font-inter font-semibold text-lg text-gray-300 group-hover:text-white transition-colors duration-300">Successful Projects</p>
                        <p class="font-inter text-sm text-gray-400 mt-2">Delivered Excellence</p>
                    </div>

                    <!-- Countries -->
                    <div class="group transform hover:scale-105 transition-all duration-500">
                        <div class="relative">
                            <div class="absolute inset-0 w-24 h-24 mx-auto border-4 border-orange-400/30 rounded-full animate-pulse" style="animation-delay: 1s;"></div>
                            
                            <div class="relative bg-gradient-to-r from-orange-500/20 to-yellow-500/20 backdrop-blur-sm rounded-full w-24 h-24 mx-auto mb-6 border border-orange-400/30 group-hover:border-orange-400/60 transition-colors duration-300 flex items-center justify-center">
                                <div class="text-2xl md:text-3xl font-poppins font-bold">
                                    <span class="counter" data-target="3">0</span>+
                                </div>
                            </div>
                        </div>
                        <p class="font-inter font-semibold text-lg text-gray-300 group-hover:text-white transition-colors duration-300">Countries</p>
                        <p class="font-inter text-sm text-gray-400 mt-2">Global Reach</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<!-- Enhanced JavaScript with Modern Interactions -->
<script>
document.addEventListener('DOMContentLoaded', () => {
    
    // -------------------------------
    // Smooth Scroll for Navigation
    // -------------------------------
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
    
    // -------------------------------
    // Parallax Effect for Hero Section
    // -------------------------------
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
    
    // -------------------------------
    // Enhanced Stats Counter Animation
    // -------------------------------
    const statsSection = document.getElementById('stats');
    if (statsSection) {
        const counters = statsSection.querySelectorAll('.counter');
        let hasAnimated = false;
        
        function animateCounter(counter, duration = 2500) {
            const target = parseInt(counter.getAttribute('data-target'), 10) || 0;
            const startTime = performance.now();
            const increment = target / (duration / 16); // 60fps
            
            function step(now) {
                const elapsed = now - startTime;
                const progress = Math.min(elapsed / duration, 1);
                
                // Easing function for smooth animation
                const easeOutQuart = 1 - Math.pow(1 - progress, 4);
                const value = Math.floor(easeOutQuart * target);
                
                counter.textContent = value;
                
                if (progress < 1) {
                    requestAnimationFrame(step);
                } else {
                    counter.textContent = target;
                }
            }
            
            requestAnimationFrame(step);
        }
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting && !hasAnimated) {
                    hasAnimated = true;
                    counters.forEach((counter, index) => {
                        setTimeout(() => {
                            animateCounter(counter, 2500);
                        }, index * 200); // Stagger the animations
                    });
                }
            });
        }, { threshold: 0.5 });
        
        observer.observe(statsSection);
    }
    
    // -------------------------------
    // Enhanced Carousel with Touch Support
    // -------------------------------
    const carousel = document.getElementById('carousel');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    
    if (carousel && prevBtn && nextBtn) {
        let isScrolling = false;
        
        const getCardWidth = () => {
            const card = carousel.querySelector('.flex-shrink-0');
            if (!card) return 0;
            const style = getComputedStyle(carousel);
            const gap = parseInt(style.gap) || 32; // space-x-8 = 32px
            return card.offsetWidth + gap;
        };
        
        const scrollCarousel = (direction) => {
            if (isScrolling) return;
            isScrolling = true;
            
            const cardWidth = getCardWidth();
            const scrollAmount = direction === 'next' ? cardWidth : -cardWidth;
            
            carousel.scrollBy({ 
                left: scrollAmount, 
                behavior: 'smooth' 
            });
            
            setTimeout(() => {
                isScrolling = false;
            }, 500);
        };
        
        nextBtn.addEventListener('click', () => scrollCarousel('next'));
        prevBtn.addEventListener('click', () => scrollCarousel('prev'));
        
        // Touch/Swipe support
        let startX = 0;
        let startY = 0;
        
        carousel.addEventListener('touchstart', (e) => {
            startX = e.touches[0].clientX;
            startY = e.touches[0].clientY;
        });
        
        carousel.addEventListener('touchmove', (e) => {
            if (!startX || !startY) return;
            
            const xUp = e.touches[0].clientX;
            const yUp = e.touches[0].clientY;
            
            const xDiff = startX - xUp;
            const yDiff = startY - yUp;
            
            if (Math.abs(xDiff) > Math.abs(yDiff)) {
                e.preventDefault();
                if (xDiff > 50) {
                    scrollCarousel('next');
                } else if (xDiff < -50) {
                    scrollCarousel('prev');
                }
            }
            
            startX = null;
            startY = null;
        });
        
        // Auto-scroll with pause on hover
        let autoScrollInterval;
        
        const startAutoScroll = () => {
            autoScrollInterval = setInterval(() => {
                const maxScroll = carousel.scrollWidth - carousel.clientWidth;
                if (carousel.scrollLeft >= maxScroll - 10) {
                    carousel.scrollTo({ left: 0, behavior: 'smooth' });
                } else {
                    scrollCarousel('next');
                }
            }, 4000);
        };
        
        const stopAutoScroll = () => {
            clearInterval(autoScrollInterval);
        };
        
        carousel.addEventListener('mouseenter', stopAutoScroll);
        carousel.addEventListener('mouseleave', startAutoScroll);
        
        // Start auto-scroll
        startAutoScroll();
        
        // Update navigation buttons based on scroll position
        const updateNavButtons = () => {
            const maxScroll = carousel.scrollWidth - carousel.clientWidth;
            prevBtn.style.opacity = carousel.scrollLeft <= 0 ? '0.5' : '1';
            nextBtn.style.opacity = carousel.scrollLeft >= maxScroll - 10 ? '0.5' : '1';
        };
        
        carousel.addEventListener('scroll', updateNavButtons);
        updateNavButtons(); // Initial state
    }
    
    // -------------------------------
    // Intersection Observer for Animations
    // -------------------------------
    const animateOnScroll = (entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
                observer.unobserve(entry.target);
            }
        });
    };
    
    const scrollObserver = new IntersectionObserver(animateOnScroll, {
        threshold: 0.1,
        rootMargin: '50px'
    });
    
    // Animate elements on scroll
    document.querySelectorAll('.group, .prose, h2, h3').forEach(el => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(30px)';
        el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        scrollObserver.observe(el);
    });
    
    // -------------------------------
    // Add Custom CSS Animations
    // -------------------------------
    const style = document.createElement('style');
    style.textContent = `
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }
        
        .animate-float {
            animation: float 6s ease-in-out infinite;
        }
        
        /* Custom scrollbar for carousel */
        .scrollbar-none::-webkit-scrollbar {
            display: none;
        }
        
        /* Gradient text animation */
        @keyframes gradient-x {
            0%, 100% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
        }
        
        .animate-gradient-x {
            background-size: 200% 200%;
            animation: gradient-x 3s ease infinite;
        }
        
        /* Pulse glow effect */
        @keyframes pulse-glow {
            0%, 100% { box-shadow: 0 0 20px rgba(239, 68, 68, 0.4); }
            50% { box-shadow: 0 0 40px rgba(239, 68, 68, 0.6); }
        }
        
        .animate-pulse-glow {
            animation: pulse-glow 2s ease-in-out infinite;
        }
    `;
    document.head.appendChild(style);
});
</script>

@endsection