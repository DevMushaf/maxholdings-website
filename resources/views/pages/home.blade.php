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
    
</section>

<!-- What We Offer Section -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <!-- Section Header -->
        <div class="text-center">
            <h2 class="text-4xl lg:text-5xl font-poppins font-bold text-black mb-6">
                What we offer
            </h2>
            <p class="text-lg lg:text-xl text-black-75 max-w-4xl mx-auto leading-relaxed">
                At Max Holdings, we provide reliable solutions across industries from engineering and 
                manpower to tourism and events designed to add value and convenience for every client.
            </p>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="py-20" style="background-color: rgba(47, 37, 35, 0.1);">
    <div class="container mx-auto px-4">
        <!-- Services Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-16">
            <!-- Passenger Lifts -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden transform transition-all duration-300 hover:scale-105 hover:shadow-xl">
                <div class="aspect-video overflow-hidden">
                    <img src="{{ asset('images/passenger-lifts.jpg') }}" 
                         alt="Modern passenger lift interior with red lighting" 
                         class="w-full h-full object-cover transition-transform duration-300 hover:scale-110">
                </div>
                <div class="p-8">
                    <h3 class="text-2xl font-poppins font-semibold text-black mb-4">
                        Passenger Lifts
                    </h3>
                    <p class="text-black-75 leading-relaxed">
                        Safe, comfortable, and cost-effective lift solutions designed for everyday 
                        use in residential and commercial buildings.
                    </p>
                </div>
            </div>

            <!-- Manpower Supply -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden transform transition-all duration-300 hover:scale-105 hover:shadow-xl">
                <div class="aspect-video overflow-hidden">
                    <img src="{{ asset('images/manpower-supply.jpg') }}" 
                         alt="Professional worker in checkered shirt and overalls" 
                         class="w-full h-full object-cover transition-transform duration-300 hover:scale-110">
                </div>
                <div class="p-8">
                    <h3 class="text-2xl font-poppins font-semibold text-black mb-4">
                        Manpower Supply
                    </h3>
                    <p class="text-black-75 leading-relaxed">
                        Providing skilled and unskilled general workers to meet the day-to-day 
                        operational needs of multiple industries.
                    </p>
                </div>
            </div>

            <!-- Accessibility Solutions -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden transform transition-all duration-300 hover:scale-105 hover:shadow-xl">
                <div class="aspect-video overflow-hidden">
                    <img src="{{ asset('images/passenger-lifts.jpg') }}" 
                         alt="Hand using accessible stair lift controls" 
                         class="w-full h-full object-cover transition-transform duration-300 hover:scale-110">
                </div>
                <div class="p-8">
                    <h3 class="text-2xl font-poppins font-semibold text-black mb-4">
                        Accessibility Solutions
                    </h3>
                    <p class="text-black-75 leading-relaxed">
                        Custom stairway installations that ensure maximum safety, minimal 
                        space usage, and low-maintenance accessibility.
                    </p>
                </div>
            </div>
        </div>

        <!-- Call to Action Button -->
        <div class="text-center">
            <a href="{{ route('services') }}" 
               class="btn-primary inline-flex items-center gap-3 text-base font-medium transition-all duration-300 hover:shadow-lg hover:scale-105">
                View all our services
                <svg class="w-4 h-4 transition-transform duration-300 group-hover:translate-x-1" 
                     fill="none" 
                     stroke="currentColor" 
                     viewBox="0 0 24 24">
                    <path stroke-linecap="round" 
                          stroke-linejoin="round" 
                          stroke-width="2" 
                          d="M17 8l4 4m0 0l-4 4m4-4H3">
                    </path>
                </svg>
            </a>
        </div>
    </div>
</section>

<!-- Company Overview Section -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="flex flex-col lg:flex-row items-center gap-12 lg:gap-16">
            <!-- Image -->
            <div class="w-full lg:w-2/5">
                <div class="aspect-[4/3] overflow-hidden rounded-2xl">
                    <img src="{{ asset('images/company-overview.jpg') }}" 
                         alt="Industrial manufacturing facility with precision machinery" 
                         class="w-full h-full object-cover">
                </div>
            </div>
            
            <!-- Content -->
            <div class="w-full lg:w-3/5">
                <h2 class="text-4xl lg:text-5xl font-poppins font-bold text-black mb-8">
                    Company Overview
                </h2>
                
                <div class="space-y-6">
                    <p class="text-lg text-black-75 leading-relaxed">
                        Max Holdings Pvt Ltd is a fully Sri Lankan-owned and managed company, headquartered in 
                        Minuwangoda, Sri Lanka, and established in 2021. As a diversified business group, Max Holdings 
                        operates through its subsidiaries: Max Engineering, Max Manpower & Consultancy, and Max 
                        Tourism, providing reliable solutions across multiple sectors.
                    </p>
                    
                    <p class="text-lg text-black-75 leading-relaxed">
                        Our subsidiaries specialize in delivering high-quality services tailored to the needs of businesses 
                        and clients across Sri Lanka. Max Engineering focuses on engineering solutions, Max Manpower & 
                        Consultancy offers temporary and permanent staffing along with specialized recruitment for 
                        skilled and unskilled labor, and Max Tourism provides comprehensive travel and hospitality 
                        services.
                    </p>
                    
                    <p class="text-lg text-black-75 leading-relaxed">
                        At Max Holdings, we are committed to excellence, efficiency, and creating value for every client, 
                        ensuring that each service and solution aligns perfectly with specific business needs.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Companies Section -->
<section class="py-20" style="background-color: rgba(47, 37, 35, 0.1);">
    <div class="container mx-auto px-4">
        <!-- Section Header -->
        <div class="text-center mb-16">
            <h2 class="text-4xl lg:text-5xl font-poppins font-bold text-black mb-6">
                Our Companies
            </h2>
            <p class="text-lg lg:text-xl text-black-75 max-w-4xl mx-auto leading-relaxed">
                Max Holdings Pvt Ltd operates through a group of specialized companies, each dedicated to 
                delivering excellence in its respective field.
            </p>
        </div>

        <!-- Desktop/Tablet Tabs -->
        <div class="hidden md:block">
            <!-- Tab Navigation -->
            <div class="flex justify-center mb-12">
                <div class="flex space-x-8">
                    <button class="company-tab-btn active text-xl font-poppins font-semibold pb-3 border-b-2 transition-all duration-300" 
                            onclick="showCompany('engineering')" data-company="engineering">
                        Engineering
                    </button>
                    <button class="company-tab-btn text-xl font-poppins font-semibold pb-3 border-b-2 border-transparent transition-all duration-300" 
                            onclick="showCompany('manpower')" data-company="manpower">
                        Manpower & Consultancy
                    </button>
                    <button class="company-tab-btn text-xl font-poppins font-semibold pb-3 border-b-2 border-transparent transition-all duration-300" 
                            onclick="showCompany('tourism')" data-company="tourism">
                        Tourism
                    </button>
                </div>
            </div>

            <!-- Tab Content -->
            <div class="max-w-4xl mx-auto">
                <!-- Engineering -->
                <div id="engineering-content" class="company-content bg-white rounded-2xl shadow-lg p-12 items-center gap-12" style="display: flex;">
                    <div class="w-2/5">
                        <img src="{{ asset('images/max-engineering-logo.png') }}" 
                             alt="Max Engineering Logo" 
                             class="w-full max-w-xs mx-auto">
                    </div>
                    <div class="w-3/5">
                        <h3 class="text-3xl font-poppins font-bold text-black mb-6">Max Engineering</h3>
                        <p class="text-lg text-black-75 leading-relaxed">
                            Providing innovative engineering solutions tailored to meet the needs of diverse industries.
                        </p>
                    </div>
                </div>

                <!-- Manpower -->
                <div id="manpower-content" class="company-content bg-white rounded-2xl shadow-lg p-12 items-center gap-12" style="display: none;">
                    <div class="w-2/5">
                        <img src="{{ asset('images/max-manpower-logo.png') }}" 
                             alt="Max Manpower & Consultancy Logo" 
                             class="w-full max-w-xs mx-auto">
                    </div>
                    <div class="w-3/5">
                        <h3 class="text-3xl font-poppins font-bold text-black mb-6">Max Manpower & Consultancy</h3>
                        <p class="text-lg text-black-75 leading-relaxed">
                            Offering comprehensive staffing services, including temporary, permanent, and specialized 
                            recruitment for skilled and unskilled labor.
                        </p>
                    </div>
                </div>

                <!-- Tourism -->
                <div id="tourism-content" class="company-content bg-white rounded-2xl shadow-lg p-12 items-center gap-12" style="display: none;">
                    <div class="w-2/5">
                        <img src="{{ asset('images/max-tourism-logo.png') }}" 
                             alt="Max Tourism Logo" 
                             class="w-full max-w-xs mx-auto">
                    </div>
                    <div class="w-3/5">
                        <h3 class="text-3xl font-poppins font-bold text-black mb-6">Max Tourism</h3>
                        <p class="text-lg text-black-75 leading-relaxed">
                            Providing comprehensive travel and hospitality services to create memorable experiences 
                            for our clients.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Mobile View - Stacked Cards -->
        <div class="md:hidden space-y-6">
            <!-- Engineering -->
            <div class="bg-white rounded-2xl shadow-lg p-8 text-center">
                <div class="mb-6">
                    <img src="{{ asset('images/max-engineering-logo.png') }}" 
                         alt="Max Engineering Logo" 
                         class="w-full max-w-xs mx-auto">
                </div>
                <h3 class="text-2xl font-poppins font-bold text-black mb-4">Max Engineering</h3>
                <p class="text-base text-black-75 leading-relaxed">
                    Providing innovative engineering solutions tailored to meet the needs of diverse industries.
                </p>
            </div>

            <!-- Manpower -->
            <div class="bg-white rounded-2xl shadow-lg p-8 text-center">
                <div class="mb-6">
                    <img src="{{ asset('images/max-manpower-logo.png') }}" 
                         alt="Max Manpower & Consultancy Logo" 
                         class="w-full max-w-xs mx-auto">
                </div>
                <h3 class="text-2xl font-poppins font-bold text-black mb-4">Max Manpower & Consultancy</h3>
                <p class="text-base text-black-75 leading-relaxed">
                    Offering comprehensive staffing services, including temporary, permanent, and specialized 
                    recruitment for skilled and unskilled labor.
                </p>
            </div>

            <!-- Tourism -->
            <div class="bg-white rounded-2xl shadow-lg p-8 text-center">
                <div class="mb-6">
                    <img src="{{ asset('images/max-tourism-logo.png') }}" 
                         alt="Max Tourism Logo" 
                         class="w-full max-w-xs mx-auto">
                </div>
                <h3 class="text-2xl font-poppins font-bold text-black mb-4">Max Tourism</h3>
                <p class="text-base text-black-75 leading-relaxed">
                    Providing comprehensive travel and hospitality services to create memorable experiences 
                    for our clients.
                </p>
            </div>
        </div>
    </div>
</section>

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

    /* Company Tabs Styles */
    .company-tab-btn {
        color: rgba(47, 37, 35, 0.75);
        cursor: pointer;
    }

    .company-tab-btn.active {
        color: #FF2212;
        border-bottom-color: #FF2212 !important;
    }

    .company-tab-btn:hover {
        color: #FF2212;
    }
</style>

<script>
function showCompany(company) {
    // Hide all content
    document.querySelectorAll('.company-content').forEach(content => {
        content.style.display = 'none';
    });
    
    // Remove active class from all tabs
    document.querySelectorAll('.company-tab-btn').forEach(tab => {
        tab.classList.remove('active');
        tab.classList.remove('border-primary');
        tab.classList.add('border-transparent');
    });
    
    // Show selected content
    const selectedContent = document.getElementById(company + '-content');
    selectedContent.style.display = 'flex';
    
    // Add active class to selected tab
    const activeTab = document.querySelector(`[data-company="${company}"]`);
    activeTab.classList.add('active');
    activeTab.classList.add('border-primary');
    activeTab.classList.remove('border-transparent');
}
</script>
@endpush