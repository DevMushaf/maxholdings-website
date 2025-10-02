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
            
            <!-- Enhanced Title with Animation -->
            <h1 class="hero-title font-poppins font-bold text-white mb-8 leading-tight animate-fade-in-up text-3xl md:text-5xl lg:text-6xl xl:text-7xl">
                Our <span class="bg-gradient-to-r from-red-400 to-orange-500 bg-clip-text text-transparent">Services</span>
            </h1>
            
            <!-- Enhanced Subtitle -->
            <p class="font-inter text-base md:text-lg lg:text-xl text-white max-w-3xl mb-12 leading-relaxed text-center mx-auto animate-fade-in-up">
                Comprehensive Solutions Across Multiple Industries
            </p>
            
            <!-- Service Categories Pills -->
            <div class="flex flex-wrap justify-center gap-3 mt-12 animate-fade-in-up">
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
    
    <div class="container mx-auto px-4 relative z-10 max-w-6xl">
        <!-- Section Header -->
        <div class="text-center mb-8 lg:mb-12">
            <h2 class="font-poppins font-bold text-4xl lg:text-5xl text-gray-900 mb-6">
                Our <span class="text-red-500">Market Focus</span>
            </h2>
        </div>

        <!-- Description -->
        <p class="font-inter text-lg leading-relaxed text-gray-700 mb-12 text-justify">
            At Max Holdings Pvt Ltd, we work closely with diverse industries to 
            deliver solutions that add value, improve efficiency, and support 
            long-term growth. Our focus is on understanding the unique challenges 
            of each sector and providing services that help businesses operate 
            with confidence and consistency.
        </p>

        <!-- Industries Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-x-6 gap-y-6">
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
</section>

<!-- Max Engineering Services Section -->
<section class="py-24 lg:py-32 bg-white relative overflow-hidden">
    <div class="container mx-auto px-4 relative z-10">
        <!-- Section Header -->
        <div class="text-center mb-20">
            <h2 class="font-poppins font-bold text-4xl lg:text-5xl text-gray-900 mb-6">
                Max <span class="text-blue-600">Engineering</span> Services
            </h2>
            <p class="font-inter text-lg text-gray-600 mx-auto leading-relaxed max-w-[1000px] text-justify">
                Max Engineering specializes in designing and delivering advanced solutions for 
                traction and hydraulic lifts, with or without machine rooms. Our products are 
                engineered for reliability, safety, and efficiency, serving residential, commercial, and 
                industrial spaces including offices, hospitals, and shopping centers.
            </p>
        </div>

        <!-- Services Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

            <!-- Passenger Lifts -->
            <div class="group relative bg-gradient-to-br from-blue-50 to-indigo-50 rounded-2xl p-8 hover:shadow-xl transition-all duration-300 border border-blue-100 hover:border-blue-300">
                <div class="mb-6">
                    <div class="bg-gradient-to-br from-blue-500 to-indigo-600 w-14 h-14 rounded-xl flex items-center justify-center transform group-hover:scale-110 transition-transform duration-300 shadow-md">
                        <i class="fa-solid fa-building text-white text-xl"></i>
                    </div>
                </div>
                <h3 class="font-poppins font-bold text-xl text-gray-900 mb-3 group-hover:text-blue-600 transition-colors duration-300">
                    Passenger Lifts
                </h3>
                <p class="font-inter text-gray-700 leading-relaxed text-sm">
                    Safe, reliable, and cost-effective vertical transport designed for everyday use in residential and commercial buildings.
                </p>
                <div class="absolute bottom-0 left-0 right-0 h-0.5 bg-gradient-to-r from-blue-500 to-indigo-600 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300 rounded-b-2xl"></div>
            </div>

            <!-- Home Lifts -->
            <div class="group relative bg-gradient-to-br from-indigo-50 to-purple-50 rounded-2xl p-8 hover:shadow-xl transition-all duration-300 border border-indigo-100 hover:border-indigo-300">
                <div class="mb-6">
                    <div class="bg-gradient-to-br from-indigo-500 to-purple-600 w-14 h-14 rounded-xl flex items-center justify-center transform group-hover:scale-110 transition-transform duration-300 shadow-md">
                        <i class="fas fa-home text-white text-xl"></i>
                    </div>
                </div>
                <h3 class="font-poppins font-bold text-xl text-gray-900 mb-3 group-hover:text-indigo-600 transition-colors duration-300">
                    Home Lifts
                </h3>
                <p class="font-inter text-gray-700 leading-relaxed text-sm">
                    Convenient and modern lift solutions that enhance accessibility and independence for the elderly and differently-abled.
                </p>
                <div class="absolute bottom-0 left-0 right-0 h-0.5 bg-gradient-to-r from-indigo-500 to-purple-600 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300 rounded-b-2xl"></div>
            </div>

            <!-- Accessibility Solutions -->
            <div class="group relative bg-gradient-to-br from-cyan-50 to-blue-50 rounded-2xl p-8 hover:shadow-xl transition-all duration-300 border border-cyan-100 hover:border-cyan-300">
                <div class="mb-6">
                    <div class="bg-gradient-to-br from-cyan-500 to-blue-600 w-14 h-14 rounded-xl flex items-center justify-center transform group-hover:scale-110 transition-transform duration-300 shadow-md">
                        <i class="fas fa-universal-access text-white text-xl"></i>
                    </div>
                </div>
                <h3 class="font-poppins font-bold text-xl text-gray-900 mb-3 group-hover:text-cyan-600 transition-colors duration-300">
                    Accessibility Solutions
                </h3>
                <p class="font-inter text-gray-700 leading-relaxed text-sm">
                    Compact and efficient installations for stairways, ensuring maximum safety while requiring minimal space and maintenance.
                </p>
                <div class="absolute bottom-0 left-0 right-0 h-0.5 bg-gradient-to-r from-cyan-500 to-blue-600 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300 rounded-b-2xl"></div>
            </div>

            <!-- Lift Components -->
            <div class="group relative bg-gradient-to-br from-violet-50 to-purple-50 rounded-2xl p-8 hover:shadow-xl transition-all duration-300 border border-violet-100 hover:border-violet-300">
                <div class="mb-6">
                    <div class="bg-gradient-to-br from-violet-500 to-purple-600 w-14 h-14 rounded-xl flex items-center justify-center transform group-hover:scale-110 transition-transform duration-300 shadow-md">
                        <i class="fas fa-cog text-white text-xl"></i>
                    </div>
                </div>
                <h3 class="font-poppins font-bold text-xl text-gray-900 mb-3 group-hover:text-violet-600 transition-colors duration-300">
                    Lift Components
                </h3>
                <p class="font-inter text-gray-700 leading-relaxed text-sm">
                    High-quality components from trusted brands, extending the performance and lifespan of existing lift systems at optimal cost.
                </p>
                <div class="absolute bottom-0 left-0 right-0 h-0.5 bg-gradient-to-r from-violet-500 to-purple-600 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300 rounded-b-2xl"></div>
            </div>

            <!-- Escalators -->
            <div class="group relative bg-gradient-to-br from-sky-50 to-blue-50 rounded-2xl p-8 hover:shadow-xl transition-all duration-300 border border-sky-100 hover:border-sky-300">
                <div class="mb-6">
                    <div class="bg-gradient-to-br from-sky-500 to-blue-600 w-14 h-14 rounded-xl flex items-center justify-center transform group-hover:scale-110 transition-transform duration-300 shadow-md">
                        <i class="fas fa-sort-amount-up text-white text-xl"></i>
                    </div>
                </div>
                <h3 class="font-poppins font-bold text-xl text-gray-900 mb-3 group-hover:text-sky-600 transition-colors duration-300">
                    Escalators
                </h3>
                <p class="font-inter text-gray-700 leading-relaxed text-sm">
                    Smooth, energy-efficient, and low-noise escalators built for durability, flexible design, and seamless indoor or outdoor integration.
                </p>
                <div class="absolute bottom-0 left-0 right-0 h-0.5 bg-gradient-to-r from-sky-500 to-blue-600 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300 rounded-b-2xl"></div>
            </div>

            <!-- Maintenance & After-Sales -->
            <div class="group relative bg-gradient-to-br from-blue-50 to-cyan-50 rounded-2xl p-8 hover:shadow-xl transition-all duration-300 border border-blue-100 hover:border-blue-300">
                <div class="mb-6">
                    <div class="bg-gradient-to-br from-blue-500 to-cyan-600 w-14 h-14 rounded-xl flex items-center justify-center transform group-hover:scale-110 transition-transform duration-300 shadow-md">
                        <i class="fas fa-tools text-white text-xl"></i>
                    </div>
                </div>
                <h3 class="font-poppins font-bold text-xl text-gray-900 mb-3 group-hover:text-blue-600 transition-colors duration-300">
                    Maintenance & After-Sales
                </h3>
                <p class="font-inter text-gray-700 leading-relaxed text-sm">
                    Comprehensive maintenance solutions to ensure long-term reliability, safety, and uninterrupted operation.
                </p>
                <div class="absolute bottom-0 left-0 right-0 h-0.5 bg-gradient-to-r from-blue-500 to-cyan-600 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300 rounded-b-2xl"></div>
            </div>

        </div>
    </div>
</section>

<!-- Max Manpower Services Section -->
<section class="py-24 lg:py-32 bg-gradient-to-b from-gray-50 to-white relative overflow-hidden">
    <div class="container mx-auto px-4 relative z-10">
        <!-- Section Header -->
        <div class="text-center mb-20">
            <h2 class="font-poppins font-bold text-4xl lg:text-5xl text-gray-900 mb-6">
                Max <span class="text-orange-600">Manpower</span> Services
            </h2>
            <p class="font-inter text-lg text-gray-600 mx-auto leading-relaxed max-w-[1000px] text-justify"">
                Max Manpower provides reliable workforce solutions across diverse industries, 
                ensuring businesses have the talent and support needed to operate efficiently. 
                From skilled professionals to general workforce, we tailor our services to meet the 
                dynamic requirements of each sector with consistency, quality, and professionalism.
            </p>
        </div>

        <!-- Services Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

            <!-- Garment & Apparel Staffing -->
            <div class="group relative bg-gradient-to-br from-orange-50 to-amber-50 rounded-2xl p-8 hover:shadow-xl transition-all duration-300 border border-orange-100 hover:border-orange-300">
                <div class="mb-6">
                    <div class="bg-gradient-to-br from-orange-500 to-amber-600 w-14 h-14 rounded-xl flex items-center justify-center transform group-hover:scale-110 transition-transform duration-300 shadow-md">
                        <i class="fas fa-tshirt text-white text-xl"></i>
                    </div>
                </div>
                <h3 class="font-poppins font-bold text-xl text-gray-900 mb-3 group-hover:text-orange-600 transition-colors duration-300">
                    Garment & Apparel Staffing
                </h3>
                <p class="font-inter text-gray-700 leading-relaxed text-sm">
                    Workforce solutions tailored for production, quality control, and operations in the apparel industry.
                </p>
            </div>

            <!-- Cleaning & Facility Services -->
            <div class="group relative bg-gradient-to-br from-orange-50 to-amber-50 rounded-2xl p-8 hover:shadow-xl transition-all duration-300 border border-orange-100 hover:border-orange-300">
                <div class="mb-6">
                    <div class="bg-gradient-to-br from-orange-500 to-amber-600 w-14 h-14 rounded-xl flex items-center justify-center transform group-hover:scale-110 transition-transform duration-300 shadow-md">
                        <i class="fas fa-broom text-white text-xl"></i>
                    </div>
                </div>
                <h3 class="font-poppins font-bold text-xl text-gray-900 mb-3 group-hover:text-orange-600 transition-colors duration-300">
                    Cleaning & Facility Services
                </h3>
                <p class="font-inter text-gray-700 leading-relaxed text-sm">
                    Trained staff delivering reliable cleaning, hygiene, and facility management support.
                </p>
            </div>

            <!-- Construction Workforce -->
            <div class="group relative bg-gradient-to-br from-orange-50 to-amber-50 rounded-2xl p-8 hover:shadow-xl transition-all duration-300 border border-orange-100 hover:border-orange-300">
                <div class="mb-6">
                    <div class="bg-gradient-to-br from-orange-500 to-amber-600 w-14 h-14 rounded-xl flex items-center justify-center transform group-hover:scale-110 transition-transform duration-300 shadow-md">
                        <i class="fas fa-hard-hat text-white text-xl"></i>
                    </div>
                </div>
                <h3 class="font-poppins font-bold text-xl text-gray-900 mb-3 group-hover:text-orange-600 transition-colors duration-300">
                    Construction Workforce
                </h3>
                <p class="font-inter text-gray-700 leading-relaxed text-sm">
                    Skilled and unskilled manpower to support construction, infrastructure, and on-site operations.
                </p>
            </div>

            <!-- Packaging & Printing Workforce -->
            <div class="group relative bg-gradient-to-br from-orange-50 to-amber-50 rounded-2xl p-8 hover:shadow-xl transition-all duration-300 border border-orange-100 hover:border-orange-300">
                <div class="mb-6">
                    <div class="bg-gradient-to-br from-orange-500 to-amber-600 w-14 h-14 rounded-xl flex items-center justify-center transform group-hover:scale-110 transition-transform duration-300 shadow-md">
                        <i class="fas fa-box text-white text-xl"></i>
                    </div>
                </div>
                <h3 class="font-poppins font-bold text-xl text-gray-900 mb-3 group-hover:text-orange-600 transition-colors duration-300">
                    Packaging & Printing Workforce
                </h3>
                <p class="font-inter text-gray-700 leading-relaxed text-sm">
                    Staff for packaging lines, printing operations, and production support.
                </p>
            </div>

            <!-- Manufacturing Workforce -->
            <div class="group relative bg-gradient-to-br from-orange-50 to-amber-50 rounded-2xl p-8 hover:shadow-xl transition-all duration-300 border border-orange-100 hover:border-orange-300">
                <div class="mb-6">
                    <div class="bg-gradient-to-br from-orange-500 to-amber-600 w-14 h-14 rounded-xl flex items-center justify-center transform group-hover:scale-110 transition-transform duration-300 shadow-md">
                        <i class="fas fa-industry text-white text-xl"></i>
                    </div>
                </div>
                <h3 class="font-poppins font-bold text-xl text-gray-900 mb-3 group-hover:text-orange-600 transition-colors duration-300">
                    Manufacturing Workforce
                </h3>
                <p class="font-inter text-gray-700 leading-relaxed text-sm">
                    Reliable manpower for factory operations, machine handling, and production efficiency.
                </p>
            </div>

            <!-- Engineering Support Staff -->
            <div class="group relative bg-gradient-to-br from-orange-50 to-amber-50 rounded-2xl p-8 hover:shadow-xl transition-all duration-300 border border-orange-100 hover:border-orange-300">
                <div class="mb-6">
                    <div class="bg-gradient-to-br from-orange-500 to-amber-600 w-14 h-14 rounded-xl flex items-center justify-center transform group-hover:scale-110 transition-transform duration-300 shadow-md">
                        <i class="fas fa-wrench text-white text-xl"></i>
                    </div>
                </div>
                <h3 class="font-poppins font-bold text-xl text-gray-900 mb-3 group-hover:text-orange-600 transition-colors duration-300">
                    Engineering Support Staff
                </h3>
                <p class="font-inter text-gray-700 leading-relaxed text-sm">
                    Technicians, helpers, and assistants supporting mechanical, electrical, and technical operations.
                </p>
            </div>

            <!-- FMCG Workforce -->
            <div class="group relative bg-gradient-to-br from-orange-50 to-amber-50 rounded-2xl p-8 hover:shadow-xl transition-all duration-300 border border-orange-100 hover:border-orange-300">
                <div class="mb-6">
                    <div class="bg-gradient-to-br from-orange-500 to-amber-600 w-14 h-14 rounded-xl flex items-center justify-center transform group-hover:scale-110 transition-transform duration-300 shadow-md">
                        <i class="fas fa-shopping-cart text-white text-xl"></i>
                    </div>
                </div>
                <h3 class="font-poppins font-bold text-xl text-gray-900 mb-3 group-hover:text-orange-600 transition-colors duration-300">
                    FMCG Workforce
                </h3>
                <p class="font-inter text-gray-700 leading-relaxed text-sm">
                    Trained staff for fast-moving consumer goods industries, ensuring smooth supply chain and retail operations.
                </p>
            </div>

            <!-- Maintenance Workforce -->
            <div class="group relative bg-gradient-to-br from-orange-50 to-amber-50 rounded-2xl p-8 hover:shadow-xl transition-all duration-300 border border-orange-100 hover:border-orange-300">
                <div class="mb-6">
                    <div class="bg-gradient-to-br from-orange-500 to-amber-600 w-14 h-14 rounded-xl flex items-center justify-center transform group-hover:scale-110 transition-transform duration-300 shadow-md">
                        <i class="fas fa-tools text-white text-xl"></i>
                    </div>
                </div>
                <h3 class="font-poppins font-bold text-xl text-gray-900 mb-3 group-hover:text-orange-600 transition-colors duration-300">
                    Maintenance Workforce
                </h3>
                <p class="font-inter text-gray-700 leading-relaxed text-sm">
                    Skilled personnel for routine, preventive, and emergency maintenance tasks.
                </p>
            </div>

            <!-- Hospitality & Service Staff -->
            <div class="group relative bg-gradient-to-br from-orange-50 to-amber-50 rounded-2xl p-8 hover:shadow-xl transition-all duration-300 border border-orange-100 hover:border-orange-300">
                <div class="mb-6">
                    <div class="bg-gradient-to-br from-orange-500 to-amber-600 w-14 h-14 rounded-xl flex items-center justify-center transform group-hover:scale-110 transition-transform duration-300 shadow-md">
                        <i class="fas fa-concierge-bell text-white text-xl"></i>
                    </div>
                </div>
                <h3 class="font-poppins font-bold text-xl text-gray-900 mb-3 group-hover:text-orange-600 transition-colors duration-300">
                    Hospitality & Service Staff
                </h3>
                <p class="font-inter text-gray-700 leading-relaxed text-sm">
                    Professional staff for hotels, restaurants, and customer service operations, ensuring quality guest experiences.
                </p>
            </div>

        </div>
    </div>
</section>

<!-- Max Tourism Services Section -->
<section class="py-24 lg:py-32 bg-white relative overflow-hidden">
    <div class="container mx-auto px-4 relative z-10">
        <!-- Section Header -->
        <div class="text-center mb-20">
            <h2 class="font-poppins font-bold text-4xl lg:text-5xl text-gray-900 mb-6">
                Max <span class="text-green-600">Tourism</span> Services
            </h2>
            <p class="font-inter text-lg text-gray-600 mx-auto leading-relaxed max-w-[1100px] text-justify"">
                Max Tourism is dedicated to delivering exceptional travel and hospitality experiences 
                with professionalism and care. We combine reliability, comfort, and cultural insight to 
                ensure every journey whether for leisure or business is seamless and memorable. Our services 
                are tailored to meet the needs of modern travelers while supporting sustainable tourism growth.
            </p>
        </div>

        <!-- Services Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

            <!-- Inbound & Outbound Travel -->
            <div class="group relative bg-gradient-to-br from-green-50 to-emerald-50 rounded-2xl p-8 hover:shadow-xl transition-all duration-300 border border-green-100 hover:border-green-300">
                <div class="mb-6">
                    <div class="bg-gradient-to-br from-green-500 to-emerald-600 w-14 h-14 rounded-xl flex items-center justify-center transform group-hover:scale-110 transition-transform duration-300 shadow-md">
                        <i class="fas fa-globe-americas text-white text-xl"></i>
                    </div>
                </div>
                <h3 class="font-poppins font-bold text-xl text-gray-900 mb-3 group-hover:text-green-600 transition-colors duration-300">
                    Inbound & Outbound Travel
                </h3>
                <p class="font-inter text-gray-700 leading-relaxed text-sm">
                    Comprehensive travel packages for both local and international destinations, designed for leisure, business, and cultural exploration.
                </p>
                <div class="absolute bottom-0 left-0 right-0 h-0.5 bg-gradient-to-r from-green-500 to-emerald-600 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300 rounded-b-2xl"></div>
            </div>

            <!-- Hotel & Accommodation -->
            <div class="group relative bg-gradient-to-br from-green-50 to-emerald-50 rounded-2xl p-8 hover:shadow-xl transition-all duration-300 border border-green-100 hover:border-green-300">
                <div class="mb-6">
                    <div class="bg-gradient-to-br from-green-500 to-emerald-600 w-14 h-14 rounded-xl flex items-center justify-center transform group-hover:scale-110 transition-transform duration-300 shadow-md">
                        <i class="fas fa-hotel text-white text-xl"></i>
                    </div>
                </div>
                <h3 class="font-poppins font-bold text-xl text-gray-900 mb-3 group-hover:text-green-600 transition-colors duration-300">
                    Hotel & Accommodation Services
                </h3>
                <p class="font-inter text-gray-700 leading-relaxed text-sm">
                    Partnerships with premium hotels and resorts to provide comfortable, safe, and cost-effective stays.
                </p>
                <div class="absolute bottom-0 left-0 right-0 h-0.5 bg-gradient-to-r from-green-500 to-emerald-600 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300 rounded-b-2xl"></div>
            </div>

            <!-- Transport & Transfers -->
            <div class="group relative bg-gradient-to-br from-green-50 to-emerald-50 rounded-2xl p-8 hover:shadow-xl transition-all duration-300 border border-green-100 hover:border-green-300">
                <div class="mb-6">
                    <div class="bg-gradient-to-br from-green-500 to-emerald-600 w-14 h-14 rounded-xl flex items-center justify-center transform group-hover:scale-110 transition-transform duration-300 shadow-md">
                        <i class="fas fa-bus text-white text-xl"></i>
                    </div>
                </div>
                <h3 class="font-poppins font-bold text-xl text-gray-900 mb-3 group-hover:text-green-600 transition-colors duration-300">
                    Transport & Transfers
                </h3>
                <p class="font-inter text-gray-700 leading-relaxed text-sm">
                    Reliable airport transfers, private transport, and tour mobility solutions for a stress-free travel experience.
                </p>
                <div class="absolute bottom-0 left-0 right-0 h-0.5 bg-gradient-to-r from-green-500 to-emerald-600 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300 rounded-b-2xl"></div>
            </div>

            <!-- Guided Tours & Excursions -->
            <div class="group relative bg-gradient-to-br from-green-50 to-emerald-50 rounded-2xl p-8 hover:shadow-xl transition-all duration-300 border border-green-100 hover:border-green-300">
                <div class="mb-6">
                    <div class="bg-gradient-to-br from-green-500 to-emerald-600 w-14 h-14 rounded-xl flex items-center justify-center transform group-hover:scale-110 transition-transform duration-300 shadow-md">
                        <i class="fas fa-map-marked-alt text-white text-xl"></i>
                    </div>
                </div>
                <h3 class="font-poppins font-bold text-xl text-gray-900 mb-3 group-hover:text-green-600 transition-colors duration-300">
                    Guided Tours & Excursions
                </h3>
                <p class="font-inter text-gray-700 leading-relaxed text-sm">
                    Expert-led tours offering cultural, historical, and adventure experiences that enrich every trip.
                </p>
                <div class="absolute bottom-0 left-0 right-0 h-0.5 bg-gradient-to-r from-green-500 to-emerald-600 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300 rounded-b-2xl"></div>
            </div>

            <!-- Corporate Travel Solutions -->
            <div class="group relative bg-gradient-to-br from-green-50 to-emerald-50 rounded-2xl p-8 hover:shadow-xl transition-all duration-300 border border-green-100 hover:border-green-300">
                <div class="mb-6">
                    <div class="bg-gradient-to-br from-green-500 to-emerald-600 w-14 h-14 rounded-xl flex items-center justify-center transform group-hover:scale-110 transition-transform duration-300 shadow-md">
                        <i class="fas fa-briefcase text-white text-xl"></i>
                    </div>
                </div>
                <h3 class="font-poppins font-bold text-xl text-gray-900 mb-3 group-hover:text-green-600 transition-colors duration-300">
                    Corporate Travel Solutions
                </h3>
                <p class="font-inter text-gray-700 leading-relaxed text-sm">
                    Tailored services for business travelers, including meeting arrangements, incentive trips, and event coordination.
                </p>
                <div class="absolute bottom-0 left-0 right-0 h-0.5 bg-gradient-to-r from-green-500 to-emerald-600 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300 rounded-b-2xl"></div>
            </div>

            <!-- Visa & Travel Assistance -->
            <div class="group relative bg-gradient-to-br from-green-50 to-emerald-50 rounded-2xl p-8 hover:shadow-xl transition-all duration-300 border border-green-100 hover:border-green-300">
                <div class="mb-6">
                    <div class="bg-gradient-to-br from-green-500 to-emerald-600 w-14 h-14 rounded-xl flex items-center justify-center transform group-hover:scale-110 transition-transform duration-300 shadow-md">
                        <i class="fas fa-passport text-white text-xl"></i>
                    </div>
                </div>
                <h3 class="font-poppins font-bold text-xl text-gray-900 mb-3 group-hover:text-green-600 transition-colors duration-300">
                    Visa & Travel Assistance
                </h3>
                <p class="font-inter text-gray-700 leading-relaxed text-sm">
                    End-to-end support with visa processing, documentation, and travel formalities to ensure hassle-free journeys.
                </p>
                <div class="absolute bottom-0 left-0 right-0 h-0.5 bg-gradient-to-r from-green-500 to-emerald-600 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300 rounded-b-2xl"></div>
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
    // Intersection Observer for Service Cards Animation
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    // Observe all service cards
    const serviceCards = document.querySelectorAll('.group.relative.bg-gradient-to-br');
    serviceCards.forEach((card, index) => {
        card.style.opacity = '0';
        card.style.transform = 'translateY(30px)';
        card.style.transition = `opacity 0.2s ease ${index * 0.005}s, transform 0.2s ease ${index * 0.005}s`;
        observer.observe(card);
    });

    // Add floating animation to background elements
    const floatingElements = document.querySelectorAll('section > div.absolute');
    floatingElements.forEach((element, index) => {
        element.style.animation = `float ${6 + index}s ease-in-out infinite`;
        element.style.animationDelay = `${index * 0.5}s`;
    });

});
</script>

@endsection