@extends('layouts.app')

@section('title', 'About Us - Max Holdings')

@section('content')
<!-- About Us Hero Section -->
<section class="bg-[#D9D9D9] py-16 md:py-24 lg:py-32">
    <div class="container mx-auto px-4">
        <div class="text-center text-white">
            <!-- About Us Title -->
            <h1 class="font-poppins font-bold text-2xl md:text-4xl lg:text-5xl mb-4 lg:mb-6">
                About Us
            </h1>
            
            <!-- Subtitle -->
            <p class="font-poppins italic text-base md:text-xl lg:text-2xl max-w-2xl mx-auto">
                One Vision. Many Ventures. Shared Success
            </p>
        </div>
    </div>
</section>

<!-- Company Information Section -->
<section class="py-16 md:py-20 lg:py-24 bg-white">
    <div class="container mx-auto px-4">
        <div class="flex flex-col lg:flex-row gap-8 lg:gap-16 items-start">
            <!-- Left Content - 70% -->
            <div class="w-full lg:w-[70%] space-y-6">
                <p class="font-inter text-base leading-[30px] text-[#2F2523] text-opacity-75">
                    Founded in 2021 and proudly Sri Lankan-owned, Max Holdings Pvt Ltd is more than a diversified business group; we are a catalyst for growth, innovation, and global collaboration. Headquartered in Minuwangoda, we operate through our subsidiaries, Max Engineering, Max Manpower & Consultancy, and Max Tourism delivering tailored solutions across industries while empowering businesses and brands both locally and internationally.
                </p>
                
                <p class="font-inter text-base leading-[30px] text-[#2F2523] text-opacity-75">
                    Over the years, we have helped numerous companies and brands thrive, connecting ideas to execution and transforming challenges into opportunities. From engineering precision and workforce solutions to immersive travel experiences, our approach is always holistic, adaptive, and forward-thinking.
                </p>
                
                <p class="font-inter text-base leading-[30px] text-[#2F2523] text-opacity-75">
                    At Max Holdings, we don't just provide services we create legacies. Driven by integrity, excellence, and innovation, we unite diverse sectors under one vision to redefine what's possible for our clients, inspire growth across industries, and leave a lasting impact on every community we serve.
                </p>
            </div>
            
            <!-- Right Content - 30% -->
            <div class="w-full lg:w-[30%] flex flex-col items-center lg:items-start">
                <div class="space-y-4 lg:space-y-6 w-full max-w-[360px]">
                <!-- Founded Card -->
                <div class="bg-[#FF2212] rounded-lg p-6 shadow-lg">
                    <p class="font-inter font-medium text-xl text-white mb-4">Founded</p>
                    <p class="font-poppins font-semibold text-xl text-white">2021</p>
                </div>
                
                <!-- Headquarters Card -->
                <div class="bg-[#FF2212] rounded-lg p-6 shadow-lg">
                    <p class="font-inter font-medium text-xl text-white mb-4">Headquarters</p>
                    <p class="font-poppins font-semibold text-xl text-white">Minuwangoda, Sri Lanka</p>
                </div>
                
                <!-- Subsidiaries Card -->
                <div class="bg-[#FF2212] rounded-lg p-6 shadow-lg">
                    <p class="font-inter font-medium text-xl text-white mb-4">Subsidiaries</p>
                    <p class="font-poppins font-semibold text-xl text-white">3 Specialized companies</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Subsidiaries Section -->
<section class="py-16 md:py-20 lg:py-24 bg-gray-50">
    <div class="container mx-auto px-4">
        <!-- Section Title -->
        <h2 class="font-poppins font-bold text-3xl md:text-4xl text-[#2F2523] text-center mb-16 md:mb-20 lg:mb-24">
            Our Subsidiaries
        </h2>
        
        <!-- Max Engineering -->
        <div class="flex flex-col lg:flex-row items-center gap-8 lg:gap-24 mb-12 lg:mb-16">
            <div class="w-full lg:w-5/12 max-w-sm lg:max-w-none flex-shrink-0">
                <img src="{{ asset('images/maxholdingsenglogo.png') }}" 
                    alt="Max Engineering Logo" 
                    class="rounded-lg w-80 mx-auto lg:mx-0">
            </div>
            
            <!-- Content -->
            <div class="w-full lg:w-7/12 text-center lg:text-left">
                <h3 class="font-poppins font-bold text-2xl md:text-2xl text-[#2F2523] mb-6">
                    Max Engineering
                </h3>
                <p class="font-inter text-base leading-[30px] text-[#2F2523] text-opacity-75">
                    At Max Engineering, we design and deliver advanced lift solutions that redefine safety, comfort, and efficiency. From residential complexes to commercial hubs and large-scale industrial projects, our focus is on creating reliable, future-ready systems that ensure accessibility and sustainable growth throughout Sri Lanka.
                </p>
            </div>
        </div>
        
        <!-- Max Manpower -->
        <div class="flex flex-col lg:flex-row-reverse items-center gap-8 lg:gap-24 mb-12 lg:mb-16">
            <div class="w-full lg:w-5/12 max-w-sm lg:max-w-none flex-shrink-0">
                <img src="{{ asset('images/maxholdingsmclogo.png') }}" 
                    alt="Max Engineering Logo" 
                    class="rounded-lg">
            </div>
            
            <!-- Content -->
            <div class="w-full lg:w-7/12 text-center lg:text-left">
                <h3 class="font-poppins font-bold text-2xl md:text-2xl text-[#2F2523] mb-6">
                    Max Manpower
                </h3>
                <p class="font-inter text-base leading-[30px] text-[#2F2523] text-opacity-75">
                    Max Manpower is your trusted partner for workforce excellence. We provide skilled and dependable staffing solutions, seamlessly connecting businesses with the right talent in construction, manufacturing, and FMCG industries. Our mission is to enhance operational efficiency, foster growth, and empower both employers and employees to achieve success.
                </p>
            </div>
        </div>
        
        <!-- Max Tourism -->
        <div class="flex flex-col lg:flex-row items-center gap-8 lg:gap-24">
            <div class="w-full lg:w-5/12 max-w-sm lg:max-w-none flex-shrink-0">
                <img src="{{ asset('images/maxholdingslogo1.png') }}" 
                    alt="Max Engineering Logo" 
                    class="rounded-lg">
            </div>
            
            <!-- Content -->
            <div class="w-full lg:w-7/12 text-center lg:text-left">
                <h3 class="font-poppins font-bold text-2xl md:text-2xl text-[#2F2523] mb-6">
                    Max Tourism
                </h3>
                <p class="font-inter text-base leading-[30px] text-[#2F2523] text-opacity-75">
                    Max Tourism opens the gateway to Sri Lanka's wonders through meaningful and responsible travel. We craft experiences that highlight the island's natural beauty and cultural richness, while uplifting local communities. With us, every journey becomes more than a trip it transforms into a lasting memory for global explorers.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Vision and Mission Section -->
<section class="py-16 md:py-20 lg:py-24 bg-white">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16">
            <!-- Vision -->
            <div class="text-center">
                <!-- Vision Icon Placeholder -->
                <div class="w-20 h-20 mx-auto mb-8">
                    <!-- Insert your Vision SVG icon here -->
                </div>
                
                <h3 class="font-poppins font-bold text-3xl md:text-4xl text-[#2F2523] mb-6">
                    Vision
                </h3>
                <p class="font-inter text-base leading-[30px] text-[#2F2523] text-opacity-75 max-w-md mx-auto">
                    To be the leading provider of innovative and reliable manpower solutions, empowering organizations and individuals to achieve sustainable growth and success globally.
                </p>
            </div>
            
            <!-- Mission -->
            <div class="text-center">
                <!-- Mission Icon Placeholder -->
                <div class="w-20 h-20 mx-auto mb-8">
                    <!-- Insert your Mission SVG icon here -->
                </div>
                
                <h3 class="font-poppins font-bold text-3xl md:text-4xl text-[#2F2523] mb-6">
                    Mission
                </h3>
                <p class="font-inter text-base leading-[30px] text-[#2F2523] text-opacity-75 max-w-md mx-auto">
                    To connect businesses with skilled and dedicated professionals, ensuring the right talent for the right opportunities. To foster trust and long-term partnerships through exceptional service, integrity, and professionalism. To support employees in achieving their career aspirations while contributing to organizational success. To deliver customized and efficient manpower solutions that align with client needs and industry demands.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Our Values Section -->
<section class="py-16 md:py-20 lg:py-24 bg-gray-50">
    <div class="container mx-auto px-4">
        <!-- Section Title -->
        <h2 class="font-poppins font-bold text-3xl md:text-4xl text-[#2F2523] text-center mb-12 md:mb-16 lg:mb-20">
            Our Values
        </h2>
        
        <!-- Values Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 md:gap-6 lg:gap-8">
            <!-- Integrity -->
            <div class="bg-[#55403F] rounded-lg p-6 text-center text-white">
                <!-- Icon Placeholder -->
                <div class="w-16 h-16 bg-gray-300 rounded-full mx-auto mb-4">
                    <!-- Replace with Integrity SVG icon -->
                </div>
                <h3 class="font-poppins font-medium text-xl mb-4">Integrity</h3>
                <p class="font-inter text-base leading-[30px]">
                    Acting with honesty and transparency in all endeavors.
                </p>
            </div>
            
            <!-- Excellence -->
            <div class="bg-[#55403F] rounded-lg p-6 text-center text-white">
                <!-- Icon Placeholder -->
                <div class="w-16 h-16 bg-gray-300 rounded-full mx-auto mb-4">
                    <!-- Replace with Excellence SVG icon -->
                </div>
                <h3 class="font-poppins font-medium text-xl mb-4">Excellence</h3>
                <p class="font-inter text-base leading-[30px]">
                    Striving for the highest standards in every solution and service.
                </p>
            </div>
            
            <!-- Innovation -->
            <div class="bg-[#55403F] rounded-lg p-6 text-center text-white">
                <!-- Icon Placeholder -->
                <div class="w-16 h-16 bg-gray-300 rounded-full mx-auto mb-4">
                    <!-- Replace with Innovation SVG icon -->
                </div>
                <h3 class="font-poppins font-medium text-xl mb-4">Innovation</h3>
                <p class="font-inter text-base leading-[30px]">
                    Adopting creative and forward-thinking approaches to challenges.
                </p>
            </div>
            
            <!-- Commitment -->
            <div class="bg-[#55403F] rounded-lg p-6 text-center text-white">
                <!-- Icon Placeholder -->
                <div class="w-16 h-16 bg-gray-300 rounded-full mx-auto mb-4">
                    <!-- Replace with Commitment SVG icon -->
                </div>
                <h3 class="font-poppins font-medium text-xl mb-4">Commitment</h3>
                <p class="font-inter text-base leading-[30px]">
                    Dedication to client success and long-term partnerships.
                </p>
            </div>
            
            <!-- Empowerment -->
            <div class="bg-[#55403F] rounded-lg p-6 text-center text-white">
                <!-- Icon Placeholder -->
                <div class="w-16 h-16 bg-gray-300 rounded-full mx-auto mb-4">
                    <!-- Replace with Empowerment SVG icon -->
                </div>
                <h3 class="font-poppins font-medium text-xl mb-4">Empowerment</h3>
                <p class="font-inter text-base leading-[30px]">
                    Enabling employees and clients to reach their full potential.
                </p>
            </div>
            
            <!-- Reliability -->
            <div class="bg-[#55403F] rounded-lg p-6 text-center text-white">
                <!-- Icon Placeholder -->
                <div class="w-16 h-16 bg-gray-300 rounded-full mx-auto mb-4">
                    <!-- Replace with Reliability SVG icon -->
                </div>
                <h3 class="font-poppins font-medium text-xl mb-4">Reliability</h3>
                <p class="font-inter text-base leading-[30px]">
                    Providing dependable and consistent solutions across sectors.
                </p>
            </div>
            
            <!-- Collaboration -->
            <div class="bg-[#55403F] rounded-lg p-6 text-center text-white">
                <!-- Icon Placeholder -->
                <div class="w-16 h-16 bg-gray-300 rounded-full mx-auto mb-4">
                    <!-- Replace with Collaboration SVG icon -->
                </div>
                <h3 class="font-poppins font-medium text-xl mb-4">Collaboration</h3>
                <p class="font-inter text-base leading-[30px]">
                    Fostering teamwork and strong relationships for shared success.
                </p>
            </div>
            
            <!-- Sustainability -->
            <div class="bg-[#55403F] rounded-lg p-6 text-center text-white">
                <!-- Icon Placeholder -->
                <div class="w-16 h-16 bg-gray-300 rounded-full mx-auto mb-4">
                    <!-- Replace with Sustainability SVG icon -->
                </div>
                <h3 class="font-poppins font-medium text-xl mb-4">Sustainability</h3>
                <p class="font-inter text-base leading-[30px]">
                    Delivering solutions that support long-term growth and responsible practices.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Our Journey of Excellence Section -->
<section class="py-16 md:py-20 lg:py-24 bg-white">
    <div class="container mx-auto px-4">
        <!-- Section Title -->
        <h2 class="font-poppins font-bold text-3xl md:text-4xl text-[#2F2523] text-center mb-8">
            Our Journey of Excellence
        </h2>
        
        <!-- Section Description -->
        <p class="font-inter font-semibold text-base italic leading-[30px] text-[#2F2523] text-opacity-75 text-center max-w-3xl mx-auto mb-12 md:mb-16">
            For over a decade, Max Holdings has been driven by innovation, trust, and impact. With a strong foundation built on collaboration and dedication, we have partnered with businesses across industries and borders delivering projects that inspire growth, empower communities, and create lasting value.
        </p>
        
        <!-- Stats Container -->
        <div id="stats" class="bg-[#FF2212] rounded-lg p-8 md:p-12">

            <div class="grid grid-cols-2 lg:grid-cols-4 gap-8 lg:gap-12 text-center text-white">
                <div class="pr-8 md:pr-12 border-white border-opacity-30 odd:border-r-2 lg:border-r-2 lg:last:border-r-0">
                    <div class="text-3xl md:text-4xl font-poppins font-semibold mb-2">
                        <span class="counter" data-target="10">0</span>+
                    </div>
                    <p class="font-inter font-medium text-base">Years of experience</p>
                </div>

                <div class="pr-8 md:pr-12 border-white border-opacity-30 odd:border-r-2 lg:border-r-2 lg:last:border-r-0">
                    <div class="text-3xl md:text-4xl font-poppins font-semibold mb-2">
                        <span class="counter" data-target="75">0</span>+
                    </div>
                    <p class="font-inter font-medium text-base">Trusted Clients</p>
                </div>

                <div class="pr-8 md:pr-12 border-white border-opacity-30 odd:border-r-2 lg:border-r-2 lg:last:border-r-0">
                    <div class="text-3xl md:text-4xl font-poppins font-semibold mb-2">
                        <span class="counter" data-target="150">0</span>+
                    </div>
                    <p class="font-inter font-medium text-base">Successful Projects</p>
                </div>

                <div class="pr-8 md:pr-12 border-white border-opacity-30 odd:border-r-2 lg:border-r-2 lg:last:border-r-0">
                    <div class="text-3xl md:text-4xl font-poppins font-semibold mb-2">
                        <span class="counter" data-target="3">0</span>+
                    </div>
                    <p class="font-inter font-medium text-base">Countries</p>
                </div>

            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', () => {
  const statsSection = document.getElementById('stats');
  if (!statsSection) return;

  const counters = statsSection.querySelectorAll('.counter');
  if (!counters.length) return;

  // Animation function using requestAnimationFrame
  function animateCounter(counter, duration = 2000) {
    const target = parseInt(counter.getAttribute('data-target'), 10) || 0;
    const startTime = performance.now();

    function step(now) {
      const elapsed = now - startTime;
      const progress = Math.min(elapsed / duration, 1); // 0..1
      const value = Math.floor(progress * target);
      counter.textContent = value;
      if (progress < 1) {
        requestAnimationFrame(step);
      } else {
        counter.textContent = target; // ensure exact final value
      }
    }

    requestAnimationFrame(step);
  }

  // IntersectionObserver to trigger when section becomes visible
  const observer = new IntersectionObserver((entries, obs) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        counters.forEach(counter => animateCounter(counter, 2000));
        obs.unobserve(entry.target); // only run once
      }
    });
  }, { threshold: 0.3 }); // trigger when ~30% visible

  observer.observe(statsSection);
});
</script>


@endsection