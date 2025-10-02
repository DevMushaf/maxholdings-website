@extends('layouts.app')

@section('title', $blog['title'] . ' - Max Holdings Blog')

@section('content')
<!-- Hero Section -->
<section class="relative overflow-hidden bg-gradient-to-br from-gray-900 via-gray-800 to-red-900 text-white py-20 lg:py-32">
    <!-- Animated Background -->
    <div class="absolute inset-0">
        <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-red-500/10 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute bottom-1/4 right-1/4 w-80 h-80 bg-orange-500/10 rounded-full blur-3xl animate-pulse" style="animation-delay: 2s;"></div>
    </div>
    
    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-4xl mx-auto">
            <!-- Breadcrumb -->
            <nav class="flex items-center gap-2 text-white/60 mb-8 text-sm">
                <a href="{{ route('home') }}" class="hover:text-white transition-colors duration-300">Home</a>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
                <a href="{{ route('blogs') }}" class="hover:text-white transition-colors duration-300">Blog</a>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
                <span class="text-white">{{ $blog['category'] }}</span>
            </nav>
            
            <!-- Title -->
            <h1 class="font-poppins font-bold text-4xl md:text-5xl lg:text-6xl mb-8 leading-tight">
                {{ $blog['title'] }}
            </h1>
            
            <!-- Meta Information -->
            <div class="flex flex-wrap items-center gap-6 text-white/80">
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                    </svg>
                    <span>{{ $blog['author'] }}</span>
                </div>
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                    </svg>
                    <time datetime="{{ $blog['date'] }}">{{ $blog['date'] }}</time>
                </div>
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <span>{{ $blog['readTime'] }}</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Featured Image -->
<section class="py-12 bg-white">
    <div class="container mx-auto px-4">
        <div class="max-w-5xl mx-auto">
            <div class="aspect-[16/9] rounded-3xl overflow-hidden">
                <img src="{{ asset('images/' . $blog['image']) }}" 
                     alt="{{ $blog['title'] }}" 
                     class="w-full h-full object-cover">
            </div>
        </div>
    </div>
</section>

<!-- Blog Content -->
<section class="py-16 lg:py-24 bg-white">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">
            <!-- Social Share -->
            <div class="flex items-center gap-4 mb-12 pb-8 border-b border-gray-200">
                <span class="font-inter font-semibold text-gray-700">Share this article:</span>
                <div class="flex items-center gap-3">
                    <button class="w-10 h-10 rounded-full bg-gray-100 hover:bg-blue-600 hover:text-white text-gray-600 flex items-center justify-center transition-all duration-300 transform hover:scale-110">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                        </svg>
                    </button>
                    <button class="w-10 h-10 rounded-full bg-gray-100 hover:bg-blue-600 hover:text-white text-gray-600 flex items-center justify-center transition-all duration-300 transform hover:scale-110">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                        </svg>
                    </button>
                    <button class="w-10 h-10 rounded-full bg-gray-100 hover:bg-blue-700 hover:text-white text-gray-600 flex items-center justify-center transition-all duration-300 transform hover:scale-110">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Article Content -->
            <article class="prose prose-lg max-w-none">
                <div class="blog-content font-inter text-gray-700 leading-relaxed">
                    {!! $blog['content'] !!}
                </div>
            </article>

            <!-- Tags -->
            <div class="mt-12 pt-8 border-t border-gray-200">
                <div class="flex flex-wrap items-center gap-3">
                    <span class="font-inter font-semibold text-gray-700">Tags:</span>
                    <span class="px-4 py-2 bg-red-50 text-red-600 rounded-full text-sm font-medium">{{ $blog['category'] }}</span>
                    <span class="px-4 py-2 bg-gray-100 text-gray-700 rounded-full text-sm font-medium">Max Holdings</span>
                    <span class="px-4 py-2 bg-gray-100 text-gray-700 rounded-full text-sm font-medium">Sri Lanka</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Related Articles -->
@if(count($relatedBlogs) > 0)
<section class="py-24 bg-gradient-to-b from-gray-50 to-white">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <!-- Section Header -->
            <div class="text-center mb-16">
                <div class="inline-flex items-center gap-2 bg-red-50 text-red-600 rounded-full px-6 py-2 mb-6 font-medium text-sm">
                    <div class="w-2 h-2 bg-red-500 rounded-full"></div>
                    <span class="font-inter font-semibold tracking-wide">MORE STORIES</span>
                </div>
                
                <h2 class="font-poppins font-bold text-4xl lg:text-5xl text-gray-900 mb-4 leading-tight">
                    Related <span class="text-red-500">Articles</span>
                </h2>
                <p class="font-inter text-xl text-gray-600 leading-relaxed">
                    Continue exploring our insights and stories
                </p>
            </div>

            <!-- Related Blog Cards -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach($relatedBlogs as $relatedBlog)
                    <article class="group relative bg-white border border-gray-100 rounded-2xl overflow-hidden shadow-md hover:shadow-xl transform transition-all duration-500 hover:scale-105 hover:-translate-y-2">
                        <!-- Image -->
                        <div class="relative aspect-[16/10] overflow-hidden">
                            <img src="{{ asset('images/' . $relatedBlog['image']) }}" 
                                alt="{{ $relatedBlog['title'] }}" 
                                class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent"></div>
                        </div>

                        <!-- Content -->
                        <div class="p-6">
                            <!-- Category -->
                            <span class="inline-block px-3 py-1 bg-red-50 text-red-600 rounded-full text-xs font-semibold mb-3">
                                {{ $relatedBlog['category'] }}
                            </span>

                            <!-- Title -->
                            <h3 class="font-poppins font-bold text-lg text-gray-900 mb-3 leading-tight group-hover:text-red-600 transition-colors duration-300 line-clamp-2">
                                {{ $relatedBlog['title'] }}
                            </h3>

                            <!-- Date -->
                            <div class="flex items-center gap-2 text-gray-500 text-sm mb-4">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                                <time datetime="{{ $relatedBlog['date'] }}">{{ $relatedBlog['date'] }}</time>
                            </div>

                            <!-- Read More Link -->
                            <a href="{{ route('blog.show', $relatedBlog['slug']) }}" 
                               class="inline-flex items-center gap-2 text-red-600 font-semibold text-sm group-hover:gap-3 transition-all duration-300">
                                <span>Read More</span>
                                <svg class="w-4 h-4 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </a>
                        </div>
                    </article>
                @endforeach
            </div>

            <!-- View All Blogs Button -->
            <div class="text-center mt-12">
                <a href="{{ route('blogs') }}" class="group inline-flex items-center gap-3 px-8 py-4 bg-gradient-to-r from-red-600 to-orange-600 hover:from-red-700 hover:to-orange-700 text-white font-semibold rounded-full shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-300">
                    <span>View All Articles</span>
                    <svg class="w-5 h-5 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>
@endif

<!-- CTA Section -->
<section class="py-24 bg-gradient-to-br from-gray-900 via-gray-800 to-red-900 text-white relative overflow-hidden">
    <!-- Animated Background -->
    <div class="absolute inset-0">
        <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-red-500/10 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute bottom-1/4 right-1/4 w-80 h-80 bg-orange-500/10 rounded-full blur-3xl animate-pulse" style="animation-delay: 2s;"></div>
    </div>
    
    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-3xl mx-auto text-center">
            <h2 class="font-poppins font-bold text-4xl lg:text-5xl mb-6 leading-tight">
                Ready to Learn <span class="bg-gradient-to-r from-red-400 to-orange-500 bg-clip-text text-transparent">More?</span>
            </h2>
            
            <p class="font-inter text-xl text-white/80 mb-10 leading-relaxed">
                Explore our services or get in touch with our team to discover how Max Holdings can help your business grow.
            </p>
            
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('services') }}" class="group px-8 py-4 bg-white text-gray-900 font-semibold rounded-full shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-300 flex items-center justify-center gap-2">
                    <span>Explore Services</span>
                    <svg class="w-5 h-5 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </a>
                <a href="{{ route('contact') }}" class="group px-8 py-4 bg-gradient-to-r from-red-600 to-orange-600 hover:from-red-700 hover:to-orange-700 text-white font-semibold rounded-full shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-300 flex items-center justify-center gap-2 border-2 border-white/20">
                    <span>Contact Us</span>
                    <svg class="w-5 h-5 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>

@endsection

@push('styles')
<style>
    .bg-clip-text {
        -webkit-background-clip: text;
        background-clip: text;
    }

    html {
        scroll-behavior: smooth;
    }

    .line-clamp-2 {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    /* Custom prose styling */
    .prose {
        color: #374151;
    }

    .prose p {
        margin-bottom: 1.5rem;
        line-height: 1.8;
    }

    .prose h2 {
        font-family: 'Poppins', sans-serif;
        font-weight: 600;
        font-size: 1.5rem;
        color: #111827;
        margin-top: 3rem;
        margin-bottom: 1.5rem;
    }

    .prose h3 {
        font-family: 'Poppins', sans-serif;
        font-weight: 600;
        font-size: 1.0rem;
        color: #1f2937;
        margin-top: 2.5rem;
        margin-bottom: 1rem;
    }

    .prose strong {
        color: #111827;
        font-weight: 600;
    }

    .prose ul, .prose ol {
        margin-top: 1.5rem;
        margin-bottom: 1.5rem;
        padding-left: 1.5rem;
    }

    .prose li {
        margin-bottom: 0.5rem;
    }
</style>
@endpush

@push('scripts')
<script>
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
</script>
@endpush