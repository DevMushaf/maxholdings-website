@extends('layouts.app')

@section('title', 'Contact Us - Max Holdings')

@section('content')
<!-- Contact Hero Section -->
<section class="relative min-h-screen flex items-center justify-center overflow-hidden bg-center bg-cover bg-no-repeat" 
         style="background-image: url('{{ asset('images/contacthero.webp') }}');">
    
    <!-- Enhanced Gradient Overlay -->
    <div class="absolute inset-0 bg-gradient-to-br from-black/70 via-black/50 to-transparent z-0"></div>
    
    <!-- Animated Background Elements -->
    <div class="absolute inset-0 z-1">
        <div class="absolute top-1/4 left-1/4 w-72 h-72 bg-red-500/10 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute bottom-1/3 right-1/4 w-96 h-96 bg-red-500/10 rounded-full blur-3xl animate-pulse" style="animation-delay: 1s;"></div>
    </div>

    <div class="container mx-auto px-4 z-10 relative">
        <div class="text-center text-white max-w-5xl mx-auto">
            
            <!-- Enhanced Title with Animation -->
            <h1 class="hero-title font-poppins font-bold text-white mb-8 leading-tight animate-fade-in-up text-3xl md:text-5xl lg:text-6xl xl:text-7xl">
                Contact <span class="bg-gradient-to-r from-red-400 to-orange-500 bg-clip-text text-transparent">Us</span>
            </h1>
            
            <!-- Enhanced Subtitle -->
            <p class="font-inter text-base md:text-lg lg:text-xl text-white/80 max-w-3xl mb-12 leading-relaxed text-center mx-auto animate-fade-in-up">
                Let's Create Success Together
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

<!-- Contact Info Section -->
<section class="py-24 lg:py-32 bg-gradient-to-b from-gray-50 to-white relative overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-5">
        <div class="absolute inset-0" style="background-image: radial-gradient(circle at 1px 1px, #333 1px, transparent 0); background-size: 40px 40px;"></div>
    </div>
    
    <div class="container mx-auto px-4 relative z-10">
        <!-- Section Header -->
        <div class="text-center mb-16">
            <h2 class="font-poppins font-bold text-4xl lg:text-5xl text-gray-900 mb-6">
                Our Contact <span class="text-red-500">Details</span>
            </h2>
            <p class="font-inter text-lg leading-relaxed text-gray-600 max-w-3xl mx-auto">
                We aim to create integrated growth and success for the company and its employees by respecting the needs of the industry and providing quality human resources services.
            </p>
        </div>
        
        <!-- Contact Cards Grid - Updated with Consistent Colors -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl mx-auto">
            
            <!-- Phone Contact Card -->
            <div class="group relative bg-white border border-gray-100 rounded-3xl overflow-hidden shadow-md hover:shadow-lg transform transition-all duration-500 hover:scale-[1.02] hover:-translate-y-2 hover:border-red-200 h-full flex flex-col">
                <div class="absolute inset-0 bg-gradient-to-br from-red-500/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                
                <div class="p-8 text-center flex-1 flex flex-col justify-between relative">
                    <!-- Icon -->
                    <div class="w-20 h-20 bg-gradient-to-br from-red-500 to-orange-500 rounded-2xl flex items-center justify-center mb-6 mx-auto transform group-hover:scale-110 group-hover:rotate-6 transition-all duration-500 shadow-lg">
                        <i class="fas fa-phone-alt text-white text-3xl"></i>
                    </div>
                    
                    <!-- Phone Numbers -->
                    <div class="mb-6 flex-grow">
                        <h3 class="font-poppins font-bold text-2xl text-gray-900 mb-4 group-hover:text-red-700 transition-colors duration-300">
                            Call Us
                        </h3>
                        <div class="space-y-2">
                            <a href="tel:0777623864" class="block font-inter text-lg text-gray-700 hover:text-red-500 transition-colors duration-300">
                                0777623864
                            </a>
                            <a href="tel:0772415915" class="block font-inter text-lg text-gray-700 hover:text-red-500 transition-colors duration-300">
                                0772415915
                            </a>
                            <a href="tel:0777893778" class="block font-inter text-lg text-gray-700 hover:text-red-500 transition-colors duration-300">
                                0777893778
                            </a>
                        </div>
                        <p class="font-inter text-sm text-gray-500 mt-4">Support 24/7</p>
                    </div>
                    
                    <!-- CTA Button -->
                    <a href="tel:0777623864" class="inline-flex items-center justify-center gap-2 bg-gradient-to-r from-red-600 to-orange-600 hover:from-red-700 hover:to-orange-700 text-white font-poppins font-semibold px-6 py-3 rounded-full shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-300">
                        <i class="fas fa-phone text-sm"></i>
                        <span>CALL US NOW</span>
                    </a>
                </div>
            </div>

            <!-- Email Contact Card -->
            <div class="group relative bg-white border border-gray-100 rounded-3xl overflow-hidden shadow-md hover:shadow-lg transform transition-all duration-500 hover:scale-[1.02] hover:-translate-y-2 hover:border-red-200 h-full flex flex-col">
                <div class="absolute inset-0 bg-gradient-to-br from-red-500/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                
                <div class="p-8 text-center flex-1 flex flex-col justify-between relative">
                    <!-- Icon -->
                    <div class="w-20 h-20 bg-gradient-to-br from-red-500 to-orange-500 rounded-2xl flex items-center justify-center mb-6 mx-auto transform group-hover:scale-110 group-hover:rotate-6 transition-all duration-500 shadow-lg">
                        <i class="fas fa-envelope text-white text-3xl"></i>
                    </div>
                    
                    <!-- Email -->
                    <div class="mb-6 flex-grow">
                        <h3 class="font-poppins font-bold text-2xl text-gray-900 mb-4 group-hover:text-red-700 transition-colors duration-300">
                            Email Us
                        </h3>
                        <a href="mailto:inquiries@maxholdingsl.com" class="font-inter text-lg text-gray-700 hover:text-red-500 transition-colors duration-300 break-all">
                            inquiries@maxholdingsl.com
                        </a>
                        <p class="font-inter text-sm text-gray-500 mt-4">Mon - Sat : 8.00-17.00</p>
                    </div>
                    
                    <!-- CTA Button -->
                    <a href="mailto:inquiries@maxholdingsl.com" class="inline-flex items-center justify-center gap-2 bg-gradient-to-r from-red-600 to-orange-600 hover:from-red-700 hover:to-orange-700 text-white font-poppins font-semibold px-6 py-3 rounded-full shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-300">
                        <i class="fas fa-paper-plane text-sm"></i>
                        <span>MAIL US NOW</span>
                    </a>
                </div>
            </div>

            <!-- Location Contact Card -->
            <div class="group relative bg-white border border-gray-100 rounded-3xl overflow-hidden shadow-md hover:shadow-lg transform transition-all duration-500 hover:scale-[1.02] hover:-translate-y-2 hover:border-red-200 h-full flex flex-col">
                <div class="absolute inset-0 bg-gradient-to-br from-red-500/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                
                <div class="p-8 text-center flex-1 flex flex-col justify-between relative">
                    <!-- Icon -->
                    <div class="w-20 h-20 bg-gradient-to-br from-red-600 to-orange-600 rounded-2xl flex items-center justify-center mb-6 mx-auto transform group-hover:scale-110 group-hover:rotate-6 transition-all duration-500 shadow-lg">
                        <i class="fas fa-map-marked-alt text-white text-3xl"></i>
                    </div>
                    
                    <!-- Locations -->
                    <div class="mb-6 flex-grow">
                        <h3 class="font-poppins font-bold text-2xl text-gray-900 mb-4 group-hover:text-red-700 transition-colors duration-300">
                            Visit Us
                        </h3>
                        <div class="font-inter text-base text-gray-700 leading-relaxed space-y-1">
                            <p>Minuwangoda,</p>
                            <p>Kaduwela, Mawanella,</p>
                            <p>Hatton, Norwood</p>
                        </div>
                        <p class="font-inter text-sm text-gray-500 mt-4">Mon - Sat : 8.00-17.00</p>
                    </div>
                    
                    <!-- CTA Button -->
                    <a href="#map-section" class="inline-flex items-center justify-center gap-2 bg-gradient-to-r from-red-600 to-orange-600 hover:from-red-700 hover:to-orange-700 text-white font-poppins font-semibold px-6 py-3 rounded-full shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-300">
                        <i class="fas fa-location-arrow text-sm"></i>
                        <span>GET IN TOUCH</span>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Get In Touch Section with Form and Map -->
<section id="map-section" class="py-24 lg:py-32 bg-white relative overflow-hidden">
    <!-- Background Elements -->
    <div class="absolute top-0 right-0 w-1/3 h-1/3 bg-gradient-to-bl from-red-50 to-transparent"></div>
    <div class="absolute bottom-0 left-0 w-1/3 h-1/3 bg-gradient-to-tr from-red-50 to-transparent"></div>
    
    <div class="container mx-auto px-4 relative z-10">
        <!-- Section Header -->
        <div class="text-center mb-16">
            <h2 class="font-poppins font-bold text-4xl lg:text-5xl text-gray-900 mb-6">
                Get In <span class="text-red-500">Touch</span>
            </h2>
            <p class="font-inter text-lg leading-relaxed text-gray-600 max-w-3xl mx-auto">
                Have a question or want to work together? Fill out the form below and we'll get back to you as soon as possible.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start max-w-7xl mx-auto">
            
            <!-- Contact Form -->
            <div class="relative">
                <div class="absolute inset-0 bg-gradient-to-br from-red-100 to-orange-100 rounded-3xl blur-2xl opacity-30"></div>
                <div class="relative bg-white rounded-3xl p-8 md:p-12 shadow-2xl border border-gray-100">
                    <form action="#" method="POST" class="space-y-6">
                        @csrf
                        
                        <!-- Name Input -->
                        <div class="group">
                            <label for="name" class="block font-inter text-sm font-semibold text-gray-700 mb-2">Your Name*</label>
                            <input 
                                type="text" 
                                id="name" 
                                name="name" 
                                required
                                placeholder="John Doe"
                                class="w-full px-4 py-3 rounded-xl border-2 border-gray-200 focus:border-red-500 focus:ring-4 focus:ring-red-100 transition-all duration-300 font-inter text-gray-900 placeholder-gray-400"
                            >
                        </div>

                        <!-- Email Input -->
                        <div class="group">
                            <label for="email" class="block font-inter text-sm font-semibold text-gray-700 mb-2">Your Email*</label>
                            <input 
                                type="email" 
                                id="email" 
                                name="email" 
                                required
                                placeholder="john@example.com"
                                class="w-full px-4 py-3 rounded-xl border-2 border-gray-200 focus:border-red-500 focus:ring-4 focus:ring-red-100 transition-all duration-300 font-inter text-gray-900 placeholder-gray-400"
                            >
                        </div>

                        <!-- Phone Input -->
                        <div class="group">
                            <label for="phone" class="block font-inter text-sm font-semibold text-gray-700 mb-2">Your Phone*</label>
                            <input 
                                type="tel" 
                                id="phone" 
                                name="phone" 
                                required
                                placeholder="+94 77 123 4567"
                                class="w-full px-4 py-3 rounded-xl border-2 border-gray-200 focus:border-red-500 focus:ring-4 focus:ring-red-100 transition-all duration-300 font-inter text-gray-900 placeholder-gray-400"
                            >
                        </div>

                        <!-- Message Input -->
                        <div class="group">
                            <label for="message" class="block font-inter text-sm font-semibold text-gray-700 mb-2">Message*</label>
                            <textarea 
                                id="message" 
                                name="message" 
                                rows="6" 
                                required
                                placeholder="Tell us about your project or inquiry..."
                                class="w-full px-4 py-3 rounded-xl border-2 border-gray-200 focus:border-red-500 focus:ring-4 focus:ring-red-100 transition-all duration-300 font-inter text-gray-900 placeholder-gray-400 resize-none"
                            ></textarea>
                        </div>

                        <!-- Submit Button -->
                        <button 
                            type="submit"
                            class="w-full bg-gradient-to-r from-red-600 via-orange-500 to-red-600 hover:from-red-700 hover:via-orange-600 hover:to-red-700 text-white font-poppins font-bold text-lg px-8 py-4 rounded-xl shadow-lg hover:shadow-2xl transform hover:scale-105 transition-all duration-300 flex items-center justify-center gap-3 group"
                        >
                            <span>SEND MESSAGE</span>
                            <i class="fas fa-paper-plane transform group-hover:translate-x-1 transition-transform duration-300"></i>
                        </button>

                        <p class="text-center font-inter text-sm text-gray-500 mt-4">
                            <i class="fas fa-lock text-red-500 mr-1"></i>
                            Your information is safe with us
                        </p>
                    </form>
                </div>
            </div>

            <!-- Map Container -->
            <div class="relative h-full min-h-[600px] lg:min-h-[700px]">
                <div class="absolute inset-0 bg-gradient-to-br from-red-100 to-orange-100 rounded-3xl blur-2xl opacity-30"></div>
                <div class="relative bg-white rounded-3xl overflow-hidden shadow-2xl border border-gray-100 h-full">
                    <!-- Map Header -->
                    <div class="bg-gradient-to-r from-gray-900 to-gray-800 p-6 flex items-center justify-between">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 bg-gradient-to-br from-red-500 to-orange-500 rounded-full flex items-center justify-center">
                                <i class="fas fa-map-marker-alt text-white"></i>
                            </div>
                            <div>
                                <h3 class="font-poppins font-bold text-white text-lg">Our Location</h3>
                                <p class="font-inter text-gray-300 text-sm">Kopiwatta, Sri Lanka</p>
                            </div>
                        </div>
                        <a href="https://maps.app.goo.gl/j3bDFPdAY4WMoe8a6" target="_blank" class="text-white hover:text-red-400 transition-colors duration-300">
                            <i class="fas fa-external-link-alt text-lg"></i>
                        </a>
                    </div>
                    
                    <!-- Map Embed -->
                    <div class="relative h-[550px] lg:h-[620px]">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126756.22125840187!2d79.73296279726561!3d6.874794100000015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2e5334187af55%3A0x25836bf7418cbc00!2sMax%20Holdings!5e0!3m2!1sen!2slk!4v1759308187091!5m2!1sen!2slk"
                            width="100%" 
                            height="100%" 
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade"
                            class="grayscale-0 hover:grayscale-0 transition-all duration-500"
                        ></iframe>
                        
                        <!-- Map Overlay Info -->
                        <div class="absolute bottom-6 left-6 right-6 bg-white/95 backdrop-blur-sm rounded-xl p-4 shadow-lg border border-gray-200">
                            <div class="flex items-start gap-3">
                                <div class="w-10 h-10 bg-gradient-to-br from-red-500 to-orange-500 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-location-arrow text-white"></i>
                                </div>
                                <div>
                                    <p class="font-poppins font-bold text-gray-900 text-sm mb-1">Head Office</p>
                                    <p class="font-inter text-xs text-gray-600">Minuwangoda, Western Province, Sri Lanka</p>
                                    <a href="https://maps.app.goo.gl/j3bDFPdAY4WMoe8a6" target="_blank" class="inline-flex items-center gap-1 text-red-500 text-xs font-semibold mt-2 hover:text-red-600 transition-colors duration-300">
                                        <span>Get Directions</span>
                                        <i class="fas fa-arrow-right text-xs"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
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

<!-- Enhanced JavaScript for Interactions -->
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
    // Form Validation and Animation
    // -------------------------------
    const form = document.querySelector('form');
    if (form) {
        const inputs = form.querySelectorAll('input, textarea');
        
        // Add focus animations
        inputs.forEach(input => {
            input.addEventListener('focus', function() {
                this.parentElement.classList.add('scale-105');
                this.parentElement.style.transition = 'transform 0.3s ease';
            });
            
            input.addEventListener('blur', function() {
                this.parentElement.classList.remove('scale-105');
            });
        });
        
        // Form submission
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const submitBtn = this.querySelector('button[type="submit"]');
            const originalText = submitBtn.innerHTML;
            
            // Show loading state
            submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i> Sending...';
            submitBtn.disabled = true;
            
            // Simulate form submission (replace with actual submission logic)
            setTimeout(() => {
                submitBtn.innerHTML = '<i class="fas fa-check mr-2"></i> Message Sent!';
                submitBtn.classList.remove('from-red-600', 'to-red-600');
                submitBtn.classList.add('from-green-500', 'to-emerald-600');
                
                // Reset form
                setTimeout(() => {
                    form.reset();
                    submitBtn.innerHTML = originalText;
                    submitBtn.disabled = false;
                    submitBtn.classList.remove('from-green-500', 'to-emerald-600');
                    submitBtn.classList.add('from-red-600', 'to-red-600');
                }, 2000);
            }, 2000);
        });
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
    document.querySelectorAll('.group, h2, h3, form, iframe').forEach(el => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(30px)';
        el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        scrollObserver.observe(el);
    });
    
    // -------------------------------
    // Parallax Effect for Hero Section
    // -------------------------------
    const hero = document.querySelector('section.relative.min-h-screen');
    if (hero) {
        window.addEventListener('scroll', () => {
            const scrolled = window.pageYOffset;
            const parallaxElements = hero.querySelectorAll('.container');
            parallaxElements.forEach(el => {
                el.style.transform = `translateY(${scrolled * 0.3}px)`;
            });
        });
    }
    
    // -------------------------------
    // Phone Number Format
    // -------------------------------
    const phoneInput = document.getElementById('phone');
    if (phoneInput) {
        phoneInput.addEventListener('input', function(e) {
            let value = e.target.value.replace(/\D/g, '');
            if (value.length > 0) {
                if (value.startsWith('94')) {
                    value = '+' + value;
                } else if (value.startsWith('0')) {
                    value = '+94 ' + value.substring(1);
                }
            }
            e.target.value = value;
        });
    }
    
    // -------------------------------
    // Map Interaction Enhancement
    // -------------------------------
    const mapIframe = document.querySelector('iframe');
    if (mapIframe) {
        // Prevent scroll zoom until clicked
        mapIframe.style.pointerEvents = 'none';
        
        const mapContainer = mapIframe.parentElement;
        mapContainer.addEventListener('click', () => {
            mapIframe.style.pointerEvents = 'auto';
        });
        
        mapContainer.addEventListener('mouseleave', () => {
            mapIframe.style.pointerEvents = 'none';
        });
    }
    
    // -------------------------------
    // Add Floating Animation
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
        
        @keyframes gradient-shift {
            0%, 100% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
        }
        
        .animate-gradient {
            background-size: 200% 200%;
            animation: gradient-shift 3s ease infinite;
        }
    `;
    document.head.appendChild(style);
    
    // -------------------------------
    // Contact Card Hover Effects
    // -------------------------------
    const contactCards = document.querySelectorAll('.group.relative');
    contactCards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-10px)';
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0)';
        });
    });
    
    // -------------------------------
    // Success Message Animation
    // -------------------------------
    function showSuccessMessage(message) {
        const successDiv = document.createElement('div');
        successDiv.className = 'fixed top-8 right-8 bg-gradient-to-r from-green-500 to-emerald-500 text-white px-6 py-4 rounded-xl shadow-2xl z-50 flex items-center gap-3 animate-slide-in';
        successDiv.innerHTML = `
            <i class="fas fa-check-circle text-2xl"></i>
            <div>
                <p class="font-poppins font-bold">${message}</p>
                <p class="font-inter text-sm opacity-90">We'll get back to you soon!</p>
            </div>
        `;
        
        document.body.appendChild(successDiv);
        
        setTimeout(() => {
            successDiv.style.animation = 'slide-out 0.5s ease forwards';
            setTimeout(() => successDiv.remove(), 500);
        }, 4000);
    }
    
    // -------------------------------
    // Add slide animations
    // -------------------------------
    const slideStyle = document.createElement('style');
    slideStyle.textContent = `
        @keyframes slide-in {
            from {
                transform: translateX(400px);
                opacity: 0;
            }
            to {
                transform: translateX(0);
                opacity: 1;
            }
        }
        
        @keyframes slide-out {
            from {
                transform: translateX(0);
                opacity: 1;
            }
            to {
                transform: translateX(400px);
                opacity: 0;
            }
        }
        
        .animate-slide-in {
            animation: slide-in 0.5s ease forwards;
        }
    `;
    document.head.appendChild(slideStyle);
});
</script>

@endsection