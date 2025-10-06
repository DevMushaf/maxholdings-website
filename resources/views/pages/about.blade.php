@extends('layouts.app')

@section('title', 'About Us - Max Holdings')

@section('content')
<!-- About Us Hero Section -->
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
            
            <!-- Enhanced Title with Animation -->
            <h1 class="hero-title font-poppins font-bold text-white mb-8 leading-tight animate-fade-in-up text-3xl md:text-5xl lg:text-6xl xl:text-7xl animate-fade-in-up">
                About <span class="bg-gradient-to-r from-red-400 to-orange-500 bg-clip-text text-transparent">Max Holdings</span>
            </h1>
            
            <!-- Enhanced Subtitle -->
            <p class="font-inter text-base md:text-lg lg:text-xl text-white max-w-3xl mb-12 leading-relaxed text-center mx-auto animate-fade-in-up">
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

<!-- Company Information Section -->
<section class="py-24 lg:py-32 bg-gradient-to-b from-gray-50 to-white relative overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-5">
        <div class="absolute inset-0" style="background-image: radial-gradient(circle at 1px 1px, #333 1px, transparent 0); background-size: 40px 40px;"></div>
    </div>
    
    <div class="w-full max-w-7xl mx-auto px-6 sm:px-10 md:px-12 relative z-10">
        <!-- Section Header -->
        <div class="text-center mb-16">
            <h2 class="font-poppins font-bold text-4xl lg:text-5xl text-gray-900 mb-6">
                Built on Excellence
            </h2>
        </div>
        
        <div class="max-w-4xl mx-auto">
            <!-- Content (Centered + Justified) -->
            <div class="flex flex-col justify-start h-full">
                <div class="space-y-6 text-justify">
                    <p class="font-inter text-base leading-[30px] text-gray-700">
                        Founded in 2021 and proudly Sri Lankan-owned, Max Holdings Pvt Ltd is more than a diversified business group; we are a catalyst for growth, innovation, and global collaboration. Headquartered in Minuwangoda, we operate through our subsidiaries, delivering tailored solutions across industries while empowering businesses and brands both locally and internationally.
                    </p>

                    <p class="font-inter text-base leading-[30px] text-gray-700">
                        Over the years, we have helped numerous companies and brands thrive, connecting ideas to execution and transforming challenges into opportunities. From engineering precision and workforce solutions to immersive travel experiences, our approach is always holistic, adaptive, and forward-thinking.
                    </p>

                    <!-- Quote -->
                    <div class="mt-auto bg-gradient-to-r from-red-50 to-orange-50 border-l-4 border-red-500 p-6 rounded-r-lg">
                        <p class="font-inter text-base leading-[30px] text-gray-800 italic text-justify">
                            "At Max Holdings, we don't just provide services-we create legacies. Driven by integrity, excellence, and innovation, we unite diverse sectors under one vision to redefine what's possible."
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Subsidiaries Section -->
<section class="py-24 lg:py-32 bg-gradient-to-b from-gray-50 to-gray-50 relative overflow-hidden">
    <!-- Background Elements -->
    <div class="absolute top-0 left-0 w-full h-64 bg-gradient-to-b from-red-50/50 to-transparent"></div>
    
    <div class="w-full max-w-7xl mx-auto px-6 sm:px-10 md:px-12 relative z-10">
        <!-- Section Header -->
        <div class="text-center mb-20">
            <h2 class="font-poppins font-bold text-4xl lg:text-5xl text-gray-900 mb-6">
                Our <span class="text-red-500">Subsidiaries</span>
            </h2>
        </div>

        <div class="space-y-16">
            <!-- Max Engineering -->
            <div class="group flex flex-col lg:flex-row items-center rounded-3xl overflow-hidden transition-all duration-700 bg-white">
                <!-- Image Container -->
                <div class="w-full lg:w-5/12 relative overflow-hidden bg-white flex items-center justify-center min-h-[400px]">
                    <img src="{{ asset('images/maxholdingsenglogo.png') }}" 
                         alt="Max Engineering Logo" 
                         class="w-full h-full object-contain p-12 transform transition-transform duration-700 group-hover:scale-105">
                </div>
                
                <!-- Content -->
                <div class="w-full lg:w-7/12 p-12 md:p-16 bg-white">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="w-3 h-3 rounded-full animate-pulse" style="background-color: #032153;"></div>
                        <span class="font-semibold text-sm uppercase tracking-wider" style="color: #032153;">Engineering Excellence</span>
                    </div>
                    <h3 class="font-poppins font-bold text-3xl lg:text-4xl text-gray-900 mb-6">
                        Max Engineering
                    </h3>
                    <p class="text-lg leading-relaxed text-gray-700 mb-8 text-justify">
                        At Max Engineering, we design and deliver advanced lift solutions that redefine safety, comfort, and efficiency. From residential complexes to commercial hubs and large-scale industrial projects, our focus is on creating reliable, future-ready systems that ensure accessibility and sustainable growth throughout Sri Lanka.
                    </p>
                </div>
            </div>

            <!-- Max Manpower -->
            <div class="group flex flex-col lg:flex-row-reverse items-center rounded-3xl overflow-hidden transition-all duration-700 bg-white">
                <!-- Image Container -->
                <div class="w-full lg:w-5/12 relative overflow-hidden bg-white flex items-center justify-center min-h-[400px]">
                    <img src="{{ asset('images/maxholdingsmclogo.png') }}" 
                         alt="Max Manpower Logo" 
                         class="w-full h-full object-contain p-12 transform transition-transform duration-700 group-hover:scale-105">
                </div>
                
                <!-- Content -->
                <div class="w-full lg:w-7/12 p-12 md:p-16 bg-white">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="w-3 h-3 rounded-full animate-pulse" style="background-color: #032153;"></div>
                        <span class="font-semibold text-sm uppercase tracking-wider" style="color: #032153;">Workforce Solutions</span>
                    </div>
                    <h3 class="font-poppins font-bold text-3xl lg:text-4xl text-gray-900 mb-6">
                        Max Manpower
                    </h3>
                    <p class="text-lg leading-relaxed text-gray-700 mb-8 text-justify">
                        Max Manpower is your trusted partner for workforce excellence. We provide skilled and dependable staffing solutions, seamlessly connecting businesses with the right talent in construction, manufacturing, and FMCG industries. Our mission is to enhance operational efficiency, foster growth, and empower both employers and employees to achieve success.
                    </p>
                </div>
            </div>

            <!-- Max Tourism -->
            <div class="group flex flex-col lg:flex-row items-center rounded-3xl overflow-hidden transition-all duration-700 bg-white">
                <!-- Image Container -->
                <div class="w-full lg:w-5/12 relative overflow-hidden bg-white flex items-center justify-center min-h-[400px]">
                    <img src="{{ asset('images/maxholdingslogo1.png') }}" 
                         alt="Max Tourism Logo" 
                         class="w-full h-full object-contain p-12 transform transition-transform duration-700 group-hover:scale-105">
                </div>
                
                <!-- Content -->
                <div class="w-full lg:w-7/12 p-12 md:p-16 bg-white">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="w-3 h-3 rounded-full animate-pulse" style="background-color: #032153;"></div>
                        <span class="font-semibold text-sm uppercase tracking-wider" style="color: #032153;">Travel Experiences</span>
                    </div>
                    <div class="flex items-start justify-between gap-4 mb-6">
                        <h3 class="font-poppins font-bold text-3xl lg:text-4xl text-gray-900">
                            Max Tourism
                        </h3>
                        <a href="https://www.facebook.com/share/1RFrcvTEvd/?mibextid=wwXIfr" 
                        target="_blank" 
                        rel="noopener noreferrer"
                        class="group/fb flex-shrink-0 w-12 h-12 rounded-full bg-gradient-to-br from-blue-500 to-blue-600 flex items-center justify-center shadow-lg hover:shadow-xl transform hover:scale-110 transition-all duration-300 hover:from-blue-600 hover:to-blue-700"
                        aria-label="Visit Max Tourism on Facebook">
                            <i class="fab fa-facebook-f text-white text-xl group-hover/fb:scale-110 transition-transform duration-300"></i>
                        </a>
                    </div>
                    <p class="text-lg leading-relaxed text-gray-700 mb-8 text-justify">
                        Max Tourism opens the gateway to Sri Lanka's wonders through meaningful and responsible travel. We craft experiences that highlight the island's natural beauty and cultural richness, while uplifting local communities. With us, every journey becomes more than a trip-it transforms into a lasting memory for global explorers.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Associate Companies Section -->
<section class="py-24 lg:py-32 bg-gradient-to-b from-white to-gray-50 relative overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-5">
        <div class="absolute inset-0" style="background-image: radial-gradient(circle at 1px 1px, #333 1px, transparent 0); background-size: 40px 40px;"></div>
    </div>
    
    <!-- Animated Background Elements -->
    <div class="absolute inset-0">
        <div class="absolute top-1/3 left-1/4 w-80 h-80 bg-red-500/10 rounded-full blur-3xl animate-pulse" style="animation-delay: 1s;"></div>
        <div class="absolute bottom-1/3 right-1/4 w-72 h-72 bg-orange-500/10 rounded-full blur-3xl animate-pulse" style="animation-delay: 3s;"></div>
    </div>
    
    <div class="w-full max-w-7xl mx-auto px-6 sm:px-10 md:px-12 relative z-10">
        <!-- Section Header -->
        <div class="text-center mb-16">
            <h2 class="font-poppins font-bold text-4xl lg:text-5xl text-gray-900 mb-4">
                Our <span class="text-red-500">Associate Companies</span>
            </h2>
            <p class="font-inter text-lg text-gray-600 max-w-2xl mx-auto">
                Accelerating Innovation, Together
            </p>
        </div>

        <!-- Associates Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-5xl mx-auto">
            
            <!-- Endevo -->
            <div class="group relative">
                <div class="bg-white rounded-3xl p-4 shadow-lg hover:shadow-2xl transition-all duration-500 border border-gray-100 transform hover:-translate-y-1 h-full flex flex-col items-center justify-center text-center">
                    <!-- Logo Container -->
                    <div class="relative mb-3 w-full flex items-center justify-center">
                        <div class="relative w-64 h-64 md:w-72 md:h-72 flex items-center justify-center">
                            <img src="{{ asset('images/endevologo.png') }}" 
                                 alt="Endevo Logo" 
                                 class="w-full h-full object-contain transform transition-all duration-700 group-hover:scale-110">
                        </div>
                    </div>
                    
                    <!-- Decorative Line -->
                    <div class="w-24 h-1 bg-gradient-to-r from-red-500 to-orange-500 rounded-full mb-2 transform group-hover:w-32 transition-all duration-500"></div>
                </div>
            </div>

            <!-- DigiPrint Lab -->
            <div class="group relative">
                <div class="bg-white rounded-3xl p-4 shadow-lg hover:shadow-2xl transition-all duration-500 border border-gray-100 transform hover:-translate-y-1 h-full flex flex-col items-center justify-center text-center">
                    <!-- Logo Container -->
                    <div class="relative mb-3 w-full flex items-center justify-center">
                        <div class="relative w-64 h-64 md:w-72 md:h-72 flex items-center justify-center">
                            <img src="{{ asset('images/digiprintlogo.png') }}" 
                                 alt="DigiPrint Lab Logo" 
                                 class="w-full h-full object-contain transform transition-all duration-700 group-hover:scale-110">
                        </div>
                    </div>
                    
                    <!-- Decorative Line -->
                    <div class="w-24 h-1 bg-gradient-to-r from-red-500 to-orange-500 rounded-full mb-2 transform group-hover:w-32 transition-all duration-500"></div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Vision & Mission Section -->
<section class="py-24 lg:py-32 bg-gradient-to-b from-white to-white relative overflow-hidden">
    <!-- Animated Background Elements -->
    <div class="absolute inset-0">
        <div class="absolute top-1/4 right-1/4 w-96 h-96 bg-red-500/10 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute bottom-1/4 left-1/4 w-80 h-80 bg-orange-500/10 rounded-full blur-3xl animate-pulse" style="animation-delay: 2s;"></div>
    </div>
    
    <!-- Floating Particles -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-20 left-20 w-2 h-2 bg-red-400/30 rounded-full animate-ping" style="animation-delay: 1s;"></div>
        <div class="absolute top-40 right-40 w-1 h-1 bg-orange-400/40 rounded-full animate-ping" style="animation-delay: 3s;"></div>
        <div class="absolute bottom-40 left-1/3 w-2 h-2 bg-red-400/30 rounded-full animate-ping" style="animation-delay: 5s;"></div>
    </div>
    
    <div class="w-full max-w-7xl mx-auto px-6 sm:px-10 md:px-12 relative z-10">

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 max-w-6xl mx-auto">
            <!-- Vision Card -->
            <div class="group relative">
                
                <!-- Card Content -->
                <div class="relative bg-white/90 backdrop-blur-sm rounded-2xl md:rounded-3xl p-6 md:p-8 lg:p-10 shadow-xl hover:shadow-2xl transition-all duration-500 border border-red-100/50 h-full flex flex-col">
                    <!-- Icon Container -->
                    <div class="mb-6 md:mb-8">
                        <div class="w-16 h-16 md:w-20 md:h-20 bg-gradient-to-br from-red-500 to-orange-500 rounded-2xl flex items-center justify-center transform group-hover:scale-110 group-hover:rotate-3 transition-all duration-500 shadow-lg">
                            <i class="fas fa-eye text-white text-2xl md:text-3xl"></i>
                        </div>
                    </div>
                    
                    <!-- Title -->
                    <div class="mb-4 md:mb-6">
                        <h3 class="font-poppins font-bold text-2xl md:text-3xl text-gray-900 mb-2 flex items-center gap-2 md:gap-3">
                            Vision
                            <div class="w-10 md:w-12 h-1 bg-gradient-to-r from-red-500 to-orange-500 rounded-full"></div>
                        </h3>
                        <div class="w-20 md:w-24 h-1 bg-gradient-to-r from-red-500/50 to-transparent rounded-full"></div>
                    </div>
                    
                    <!-- Text Content -->
                    <div class="flex-1">
                        <p class="font-inter text-gray-700 text-sm md:text-base lg:text-lg leading-relaxed text-justify">
                            To be the leading provider of innovative and reliable manpower solutions, empowering organizations and individuals to achieve sustainable growth and success globally.
                        </p>
                    </div>
                    
                </div>
            </div>

            <!-- Mission Card -->
            <div class="group relative">
                
                <!-- Card Content -->
                <div class="relative bg-white/90 backdrop-blur-sm rounded-2xl md:rounded-3xl p-6 md:p-8 lg:p-10 shadow-xl hover:shadow-2xl transition-all duration-500 border border-orange-100/50 h-full flex flex-col">
                    <!-- Icon Container -->
                    <div class="mb-6 md:mb-8">
                        <div class="w-16 h-16 md:w-20 md:h-20 bg-gradient-to-br from-orange-500 to-red-500 rounded-2xl flex items-center justify-center transform group-hover:scale-110 group-hover:rotate-3 transition-all duration-500 shadow-lg">
                            <i class="fas fa-bullseye text-white text-2xl md:text-3xl"></i>
                        </div>
                    </div>
                    
                    <!-- Title -->
                    <div class="mb-4 md:mb-6">
                        <h3 class="font-poppins font-bold text-2xl md:text-3xl text-gray-900 mb-2 flex items-center gap-2 md:gap-3">
                            Mission
                            <div class="w-10 md:w-12 h-1 bg-gradient-to-r from-orange-500 to-red-500 rounded-full"></div>
                        </h3>
                        <div class="w-20 md:w-24 h-1 bg-gradient-to-r from-orange-500/50 to-transparent rounded-full"></div>
                    </div>
                    
                    <!-- Text Content -->
                    <div class="flex-1">
                        <p class="font-inter text-gray-700 text-sm md:text-base lg:text-lg leading-relaxed text-justify">
                            To connect businesses with skilled and dedicated professionals, ensuring the right talent for the right opportunities. Foster trust and long-term partnerships through exceptional service, integrity, and professionalism while supporting employees in achieving their career aspirations.
                        </p>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Values Section-->
<section class="py-24 lg:py-32 bg-gradient-to-b from-gray-50 to-white relative overflow-hidden">
    <div class="w-full max-w-7xl mx-auto px-6 sm:px-10 md:px-12 relative z-10">
        <!-- Section Header -->
        <div class="text-center mb-20">
            <h2 class="font-poppins font-bold text-4xl lg:text-5xl text-gray-900 mb-6">
                Our <span class="text-red-500">Values</span>
            </h2>
        </div>

        <!-- Grid Layout -->
        <div class="grid gap-8 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-4">

            <!-- Integrity -->
            <div class="group relative">
                <div class="bg-white/80 backdrop-blur-sm rounded-2xl p-8 text-center shadow-lg hover:shadow-2xl transition-all duration-500 border border-gray-200 transform hover:-translate-y-2 h-full">
                    <div class="relative z-10">
                        <div class="w-16 h-16 mx-auto mb-6 text-4xl text-red-500 transition-transform duration-500 group-hover:scale-110 group-hover:rotate-12">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h3 class="font-poppins font-bold text-2xl mb-4 text-gray-900">Integrity</h3>
                        <p class="font-inter text-gray-700 leading-relaxed">Acting with honesty and transparency in all endeavors, building trust through every interaction.</p>
                    </div>
                </div>
            </div>

            <!-- Excellence -->
            <div class="group relative">
                <div class="bg-white/80 backdrop-blur-sm rounded-2xl p-8 text-center shadow-lg hover:shadow-2xl transition-all duration-500 border border-gray-200 transform hover:-translate-y-2 h-full">
                    <div class="relative z-10">
                        <div class="w-16 h-16 mx-auto mb-6 text-4xl text-red-500 transition-transform duration-500 group-hover:scale-110 group-hover:rotate-12">
                            <i class="fas fa-trophy"></i>
                        </div>
                        <h3 class="font-poppins font-bold text-2xl mb-4 text-gray-900">Excellence</h3>
                        <p class="font-inter text-gray-700 leading-relaxed">Striving for the highest standards in every solution and service we deliver.</p>
                    </div>
                </div>
            </div>

            <!-- Innovation -->
            <div class="group relative">
                <div class="bg-white/80 backdrop-blur-sm rounded-2xl p-8 text-center shadow-lg hover:shadow-2xl transition-all duration-500 border border-gray-200 transform hover:-translate-y-2 h-full">
                    <div class="relative z-10">
                        <div class="w-16 h-16 mx-auto mb-6 text-4xl text-red-500 transition-transform duration-500 group-hover:scale-110 group-hover:rotate-12">
                            <i class="fas fa-lightbulb"></i>
                        </div>
                        <h3 class="font-poppins font-bold text-2xl mb-4 text-gray-900">Innovation</h3>
                        <p class="font-inter text-gray-700 leading-relaxed">Adopting creative and forward-thinking approaches to overcome challenges.</p>
                    </div>
                </div>
            </div>

            <!-- Commitment -->
            <div class="group relative">
                <div class="bg-white/80 backdrop-blur-sm rounded-2xl p-8 text-center shadow-lg hover:shadow-2xl transition-all duration-500 border border-gray-200 transform hover:-translate-y-2 h-full">
                    <div class="relative z-10">
                        <div class="w-16 h-16 mx-auto mb-6 text-4xl text-red-500 transition-transform duration-500 group-hover:scale-110 group-hover:rotate-12">
                            <i class="fas fa-handshake"></i>
                        </div>
                        <h3 class="font-poppins font-bold text-2xl mb-4 text-gray-900">Commitment</h3>
                        <p class="font-inter text-gray-700 leading-relaxed">Dedication to client success and building lasting partnerships.</p>
                    </div>
                </div>
            </div>

            <!-- Empowerment -->
            <div class="group relative">
                <div class="bg-white/80 backdrop-blur-sm rounded-2xl p-8 text-center shadow-lg hover:shadow-2xl transition-all duration-500 border border-gray-200 transform hover:-translate-y-2 h-full">
                    <div class="relative z-10">
                        <div class="w-16 h-16 mx-auto mb-6 text-4xl text-red-500 transition-transform duration-500 group-hover:scale-110 group-hover:rotate-12">
                            <i class="fas fa-users-cog"></i>
                        </div>
                        <h3 class="font-poppins font-bold text-2xl mb-4 text-gray-900">Empowerment</h3>
                        <p class="font-inter text-gray-700 leading-relaxed">Enabling employees and clients to reach their full potential.</p>
                    </div>
                </div>
            </div>

            <!-- Reliability -->
            <div class="group relative">
                <div class="bg-white/80 backdrop-blur-sm rounded-2xl p-8 text-center shadow-lg hover:shadow-2xl transition-all duration-500 border border-gray-200 transform hover:-translate-y-2 h-full">
                    <div class="relative z-10">
                        <div class="w-16 h-16 mx-auto mb-6 text-4xl text-red-500 transition-transform duration-500 group-hover:scale-110 group-hover:rotate-12">
                            <i class="fas fa-check-circle"></i>
                        </div>
                        <h3 class="font-poppins font-bold text-2xl mb-4 text-gray-900">Reliability</h3>
                        <p class="font-inter text-gray-700 leading-relaxed">Providing dependable and consistent solutions across all sectors.</p>
                    </div>
                </div>
            </div>

            <!-- Collaboration -->
            <div class="group relative">
                <div class="bg-white/80 backdrop-blur-sm rounded-2xl p-8 text-center shadow-lg hover:shadow-2xl transition-all duration-500 border border-gray-200 transform hover:-translate-y-2 h-full">
                    <div class="relative z-10">
                        <div class="w-16 h-16 mx-auto mb-6 text-4xl text-red-500 transition-transform duration-500 group-hover:scale-110 group-hover:rotate-12">
                            <i class="fas fa-hand-holding-heart"></i>
                        </div>
                        <h3 class="font-poppins font-bold text-2xl mb-4 text-gray-900">Collaboration</h3>
                        <p class="font-inter text-gray-700 leading-relaxed">Fostering teamwork and strong relationships for shared success.</p>
                    </div>
                </div>
            </div>

            <!-- Sustainability -->
            <div class="group relative">
                <div class="bg-white/80 backdrop-blur-sm rounded-2xl p-8 text-center shadow-lg hover:shadow-2xl transition-all duration-500 border border-gray-200 transform hover:-translate-y-2 h-full">
                    <div class="relative z-10">
                        <div class="w-16 h-16 mx-auto mb-6 text-4xl text-red-500 transition-transform duration-500 group-hover:scale-110 group-hover:rotate-12">
                            <i class="fas fa-seedling"></i>
                        </div>
                        <h3 class="font-poppins font-bold text-2xl mb-4 text-gray-900">Sustainability</h3>
                        <p class="font-inter text-gray-700 leading-relaxed">Delivering solutions that support long-term growth and responsible practices.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Enhanced Journey Section with Modern Stats -->
<section class="py-24 lg:py-32 bg-gradient-to-br from-gray-900 via-red-900/80 to-orange-900 relative overflow-hidden">
    <!-- Animated Background Elements -->
    <div class="absolute inset-0">
        <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-red-500/10 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute bottom-1/4 right-1/4 w-80 h-80 bg-orange-500/10 rounded-full blur-3xl animate-pulse" style="animation-delay: 2s;"></div>
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-64 h-64 bg-yellow-500/10 rounded-full blur-3xl animate-pulse" style="animation-delay: 4s;"></div>
    </div>
    
    <!-- Particles Effect -->
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute top-20 left-20 w-2 h-2 bg-white/20 rounded-full animate-ping" style="animation-delay: 1s;"></div>
        <div class="absolute top-40 right-40 w-1 h-1 bg-red-400/30 rounded-full animate-ping" style="animation-delay: 3s;"></div>
        <div class="absolute bottom-40 left-1/3 w-2 h-2 bg-orange-400/20 rounded-full animate-ping" style="animation-delay: 5s;"></div>
    </div>
    
    <div class="w-full max-w-7xl mx-auto px-6 sm:px-10 md:px-12 relative z-10">
        <!-- Section Header -->
        <div class="text-center mb-20">
            <h2 class="font-poppins font-bold text-4xl lg:text-6xl text-white mb-6">
                Our Journey of <span class="bg-gradient-to-r from-red-400 to-orange-500 bg-clip-text text-transparent">Excellence</span>
            </h2>
            <p class="font-inter text-base md:text-lg leading-[28px] text-white/80 max-w-3xl mx-auto text-justify md:text-center">
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

@push('styles')
<style>
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

    .animate-fade-in-up {
        animation: fade-in-up 0.8s ease-out forwards;
    }
</style>
@endpush

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