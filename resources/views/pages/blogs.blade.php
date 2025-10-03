@extends('layouts.app')

@section('title', 'Insights & Stories - Max Holdings Blog')

@php
    $blogs = [
        [
            'title' => 'Max Holdings Pvt Ltd: Bridging the Gap Between Locals and Foreigners in Sri Lanka',
            'slug' => 'max-holdings-bridging-gap',
            'date' => 'February 15, 2025',
            'image' => 'maxholdingslogowhitebg.png',
            'excerpt' => 'Discover how Max Holdings is creating opportunities and fostering collaboration between local and international communities in Sri Lanka.',
            'category' => 'Company News',
            'readTime' => '5 min read',
            'gradient' => 'from-red-500/5',
            'categoryColor' => 'text-red-700 bg-red-50',
        ],
        [
            'title' => 'Max Tourism: Redefining Travel Experiences in Sri Lanka',
            'slug' => 'max-tourism-redefining-travel',
            'date' => 'March 17, 2025',
            'image' => 'maxholdingslogowhitebg.png',
            'excerpt' => 'Explore how Max Tourism is revolutionizing the travel industry with personalized and unforgettable experiences across Sri Lanka.',
            'category' => 'Tourism',
            'readTime' => '4 min read',
            'gradient' => 'from-green-500/5',
            'categoryColor' => 'text-green-700 bg-green-50',
        ],
        [
            'title' => 'Max Holdings Manpower Services: Empowering Sri Lanka\'s Workforce for a Brighter Future',
            'slug' => 'max-manpower-empowering-workforce',
            'date' => 'February 15, 2025',
            'image' => 'maxholdingsmclogowhitebg.png',
            'excerpt' => 'Learn how Max Holdings Manpower Services is transforming lives by connecting skilled professionals with meaningful career opportunities.',
            'category' => 'Manpower',
            'readTime' => '6 min read',
            'gradient' => 'from-orange-500/5',
            'categoryColor' => 'text-orange-700 bg-orange-50',
        ],
        [
            'title' => 'Max Holdings Engineering: Pioneering Innovation in Sri Lanka\'s Construction and Infrastructure Sector',
            'slug' => 'max-engineering-pioneering-innovation',
            'date' => 'February 15, 2025',
            'image' => 'maxholdingsenglogo.png',
            'excerpt' => 'Discover the cutting-edge engineering solutions that are shaping Sri Lanka\'s future infrastructure and construction landscape.',
            'category' => 'Engineering',
            'readTime' => '7 min read',
            'gradient' => 'from-blue-500/5',
            'categoryColor' => 'text-blue-700 bg-blue-50',
        ],
    ];
@endphp

@section('content')
<!-- Hero Section -->
<section class="hero-section relative overflow-hidden min-h-[60vh] flex items-center" 
         style="background-image: url('{{ asset('images/blogshero.webp') }}'); 
                background-size: cover; 
                background-position: center; 
                background-repeat: no-repeat;">

    <!-- Enhanced Gradient Overlay -->
    <div class="absolute inset-0 bg-gradient-to-br from-black/70 via-black/50 to-transparent z-0"></div>
    
    <!-- Animated Background Elements -->
    <div class="absolute inset-0 z-[1]">
        <div class="absolute top-1/4 left-1/4 w-72 h-72 bg-red-500/10 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute bottom-1/3 right-1/4 w-96 h-96 bg-orange-500/10 rounded-full blur-3xl animate-pulse" style="animation-delay: 1s;"></div>
    </div>

    <!-- Hero Content -->
    <div class="relative z-10 container mx-auto px-4 py-20">
        <div class="max-w-4xl mx-auto text-center">
            
            <h1 class="hero-title font-poppins font-bold text-white mb-8 leading-tight animate-fade-in-up text-3xl md:text-5xl lg:text-6xl xl:text-7xl">
                Insights & <span class="text-red-500">Stories</span>
            </h1>
            
            <p class="font-inter text-base md:text-lg lg:text-xl text-white/80 max-w-3xl mb-12 leading-relaxed text-center mx-auto animate-fade-in-up">
                Explore the latest updates, industry insights, and success stories from Max Holdings and our subsidiaries.
            </p>
        </div>
    </div>
</section>

<!-- Blog Cards Section -->
<section class="py-24 lg:py-32 bg-gradient-to-b from-gray-50 to-white relative overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-5">
        <div class="absolute inset-0" style="background-image: radial-gradient(circle at 1px 1px, #333 1px, transparent 0); background-size: 40px 40px;"></div>
    </div>
    
    <div class="container mx-auto px-4 relative z-10">
        <!-- Section Header -->
        <div class="text-center mb-20">
            
            <h2 class="font-poppins font-bold text-4xl lg:text-5xl text-gray-900 mb-6 leading-tight">
                Featured <span class="text-red-500">Posts</span>
            </h2>
            <p class="font-inter text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                Stay informed with our latest news, insights, and thought leadership across all our business verticals.
            </p>
        </div>

        <!-- Blog Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 lg:gap-12">
            @foreach($blogs as $blog)
                <article class="group relative bg-white border border-gray-100 rounded-3xl overflow-hidden shadow-md hover:shadow-2xl transform transition-all duration-500 hover:scale-[1.02] hover:-translate-y-2">
                    
                    <!-- Gradient Hover Background -->
                    <div class="absolute inset-0 bg-gradient-to-br {{ $blog['gradient'] }} to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>

                    <!-- Image Container -->
                    <div class="relative aspect-[16/10] overflow-hidden">
                        <img src="{{ asset('images/' . $blog['image']) }}" 
                            alt="{{ $blog['title'] }}" 
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>

                        <!-- Category Badge -->
                        <div class="absolute top-6 left-6">
                            <span class="{{ $blog['categoryColor'] }} rounded-full px-4 py-2 text-sm font-semibold backdrop-blur-sm">
                                {{ $blog['category'] }}
                            </span>
                        </div>

                        <!-- Read Time -->
                        <div class="absolute top-6 right-6">
                            <div class="bg-white/90 backdrop-blur-sm rounded-full px-3 py-1 flex items-center gap-2">
                                <svg class="w-4 h-4 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <span class="text-sm font-medium text-gray-700">{{ $blog['readTime'] }}</span>
                            </div>
                        </div>
                    </div>

                    <!-- Content -->
                    <div class="p-8 relative">
                        <!-- Date -->
                        <div class="flex items-center gap-2 text-gray-500 text-sm mb-4">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                            <time datetime="{{ $blog['date'] }}">{{ $blog['date'] }}</time>
                        </div>

                        <!-- Title -->
                        <h3 class="font-poppins font-bold text-2xl text-gray-900 mb-4 leading-tight group-hover:text-red-600 transition-colors duration-300 min-h-[5.3rem]">
                            {{ $blog['title'] }}
                        </h3>

                        <!-- Excerpt -->
                        <p class="font-inter text-gray-600 leading-relaxed mb-6 min-h-[6.3rem]">
                            {{ $blog['excerpt'] }}
                        </p>

                        <!-- Read More Button -->
                        <a href="{{ route('blog.show', $blog['slug']) }}" 
                           class="inline-flex items-center gap-2 text-red-600 font-semibold group-hover:gap-3 transition-all duration-300">
                            <span>Read Full Article</span>
                            <svg class="w-5 h-5 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </a>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</section>



@endsection

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

    .animation-delay-300 { animation-delay: 0.3s; }

    .bg-clip-text {
        -webkit-background-clip: text;
        background-clip: text;
    }

    html {
        scroll-behavior: smooth;
    }

    @media (max-width: 768px) {
        .hero-section {
            min-height: 50vh;
        }
    }
</style>
@endpush