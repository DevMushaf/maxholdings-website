@extends('layouts.app')

@section('title', 'About Us - Max Holdings')

@section('content')
<!-- About Us Hero Section -->
<section class="relative py-16 md:py-24 lg:py-32 bg-center bg-cover bg-no-repeat" 
         style="background-image: url('{{ asset('images/abouthero.webp') }}');">

    <div class="absolute inset-0 bg-gradient-to-r from-black/60 via-black/40 to-black/20 z-0"></div>

    <div class="container mx-auto px-4">
        <div class="text-center text-white">
            <!-- About Us Title -->
            <h1 class="font-poppins font-bold text-2xl md:text-4xl lg:text-5xl mb-4 lg:mb-6 drop-shadow-lg">
                About Us
            </h1>
            
            <!-- Subtitle -->
            <p class="font-poppins italic text-base md:text-xl lg:text-2xl max-w-2xl mx-auto drop-shadow-md">
                One Vision. Many Ventures. Shared Success
            </p>
        </div>
    </div>
</section>

<!-- Company Information Section -->
<section class="py-20 lg:py-28 bg-gradient-to-b from-white to-gray-50">
  <div class="container mx-auto px-4">
    <div class="flex flex-col lg:flex-row gap-12 lg:gap-20 items-start">
      
      <!-- Left Content -->
      <div class="w-full lg:w-2/3 space-y-6">
        <p class="font-inter text-lg leading-relaxed text-gray-700">
          Founded in 2021 and proudly Sri Lankan-owned, Max Holdings Pvt Ltd is more than a diversified business group; we are a catalyst for growth, innovation, and global collaboration. Headquartered in Minuwangoda, we operate through our subsidiaries, Max Engineering, Max Manpower & Consultancy, and Max Tourism delivering tailored solutions across industries while empowering businesses and brands both locally and internationally.
        </p>
        
        <p class="font-inter text-lg leading-relaxed text-gray-700">
          Over the years, we have helped numerous companies and brands thrive, connecting ideas to execution and transforming challenges into opportunities. From engineering precision and workforce solutions to immersive travel experiences, our approach is always holistic, adaptive, and forward-thinking.
        </p>
        
        <p class="font-inter text-lg leading-relaxed text-gray-700">
          At Max Holdings, we don't just provide services—we create legacies. Driven by integrity, excellence, and innovation, we unite diverse sectors under one vision to redefine what's possible for our clients, inspire growth across industries, and leave a lasting impact on every community we serve.
        </p>
      </div>
      
      <!-- Right Content -->
      <div class="w-full lg:w-1/3 flex flex-col items-center lg:items-start">
        <div class="grid gap-6 w-full max-w-sm">
          
          <!-- Founded Card -->
          <div class="bg-white border border-gray-200 rounded-2xl p-6 shadow-md hover:shadow-xl transition duration-300 transform hover:-translate-y-1">
            <div class="flex items-center gap-4">
              <div class="bg-gradient-to-tr from-red-500 to-orange-500 text-white p-3 rounded-xl shadow-md">
                <i class="fas fa-calendar-alt text-2xl"></i>
              </div>
              <div>
                <p class="font-inter text-sm text-gray-500 uppercase tracking-wide">Founded</p>
                <p class="font-poppins font-bold text-2xl text-gray-900">2021</p>
              </div>
            </div>
          </div>

          <!-- Headquarters Card -->
          <div class="bg-white border border-gray-200 rounded-2xl p-6 shadow-md hover:shadow-xl transition duration-300 transform hover:-translate-y-1">
            <div class="flex items-center gap-4">
              <div class="bg-gradient-to-tr from-red-500 to-orange-500 text-white p-3 rounded-xl shadow-md">
                <i class="fas fa-map-marker-alt text-2xl"></i>
              </div>
              <div>
                <p class="font-inter text-sm text-gray-500 uppercase tracking-wide">Headquarters</p>
                <p class="font-poppins font-bold text-xl text-gray-900">Minuwangoda, Sri Lanka</p>
              </div>
            </div>
          </div>

          <!-- Subsidiaries Card -->
          <div class="bg-white border border-gray-200 rounded-2xl p-6 shadow-md hover:shadow-xl transition duration-300 transform hover:-translate-y-1">
            <div class="flex items-center gap-4">
              <div class="bg-gradient-to-tr from-red-500 to-orange-500 text-white p-3 rounded-xl shadow-md">
                <i class="fas fa-building text-2xl"></i>
              </div>
              <div>
                <p class="font-inter text-sm text-gray-500 uppercase tracking-wide">Subsidiaries</p>
                <p class="font-poppins font-bold text-xl text-gray-900">3 Specialized companies</p>
              </div>
            </div>
          </div>
          
        </div>
      </div>
      
    </div>
  </div>
</section>


<!-- Our Subsidiaries Section -->
<section class="py-16 md:py-20 lg:py-24 bg-gray-50">
  <div class="container mx-auto px-4">
    <!-- Section Title -->
    <h2 class="font-poppins font-bold text-3xl md:text-4xl text-[#2F2523] text-center mb-16">
      Our Subsidiaries
    </h2>

    <div class="space-y-12">
      <!-- Max Engineering -->
      <div class="flex flex-col lg:flex-row items-center overflow-hidden rounded-2xl shadow-lg">
        <!-- Image -->
        <div class="w-full lg:w-5/12 bg-[#E6F0FF] flex items-center justify-center p-8">
          <img src="{{ asset('images/maxholdingsenglogo.png') }}" 
               alt="Max Engineering Logo" 
               class="rounded-lg w-56 md:w-64">
        </div>
        <!-- Content -->
        <div class="w-full lg:w-7/12 bg-white p-8 md:p-12">
          <h3 class="font-poppins font-bold text-2xl text-[#2F2523] mb-4">
            Max Engineering
          </h3>
          <p class="font-inter text-base leading-relaxed text-[#2F2523]/75">
            At Max Engineering, we design and deliver advanced lift solutions that redefine safety, comfort, and efficiency. From residential complexes to commercial hubs and large-scale industrial projects, our focus is on creating reliable, future-ready systems that ensure accessibility and sustainable growth throughout Sri Lanka.
          </p>
        </div>
      </div>

      <!-- Max Manpower -->
      <div class="flex flex-col lg:flex-row-reverse items-center overflow-hidden rounded-2xl shadow-lg">
        <!-- Image -->
        <div class="w-full lg:w-5/12 bg-[#FFF2E6] flex items-center justify-center p-8">
          <img src="{{ asset('images/maxholdingsmclogo.png') }}" 
               alt="Max Manpower Logo" 
               class="rounded-lg w-56 md:w-64">
        </div>
        <!-- Content -->
        <div class="w-full lg:w-7/12 bg-white p-8 md:p-12">
          <h3 class="font-poppins font-bold text-2xl text-[#2F2523] mb-4">
            Max Manpower
          </h3>
          <p class="font-inter text-base leading-relaxed text-[#2F2523]/75">
            Max Manpower is your trusted partner for workforce excellence. We provide skilled and dependable staffing solutions, seamlessly connecting businesses with the right talent in construction, manufacturing, and FMCG industries. Our mission is to enhance operational efficiency, foster growth, and empower both employers and employees to achieve success.
          </p>
        </div>
      </div>

      <!-- Max Tourism -->
      <div class="flex flex-col lg:flex-row items-center overflow-hidden rounded-2xl shadow-lg">
        <!-- Image -->
        <div class="w-full lg:w-5/12 bg-[#E6F0FF] flex items-center justify-center p-8">
          <img src="{{ asset('images/maxholdingslogo1.png') }}" 
               alt="Max Tourism Logo" 
               class="rounded-lg w-56 md:w-64">
        </div>
        <!-- Content -->
        <div class="w-full lg:w-7/12 bg-white p-8 md:p-12">
          <h3 class="font-poppins font-bold text-2xl text-[#2F2523] mb-4">
            Max Tourism
          </h3>
          <p class="font-inter text-base leading-relaxed text-[#2F2523]/75">
            Max Tourism opens the gateway to Sri Lanka's wonders through meaningful and responsible travel. We craft experiences that highlight the island's natural beauty and cultural richness, while uplifting local communities. With us, every journey becomes more than a trip—it transforms into a lasting memory for global explorers.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="py-16 md:py-20 lg:py-24 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16">
            <!-- Vision Card -->
            <div 
                data-aos="fade-up"
                data-aos-delay="100"
                class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-shadow duration-500 text-center">
                <!-- Vision Icon -->
                <div class="w-28 h-28 mx-auto mb-6 rounded-full bg-gradient-to-tr from-red-400 to-red-600 flex items-center justify-center shadow-lg transform transition-transform duration-500 hover:scale-110">
                    <img src="{{ asset('images/vision.png') }}" alt="Vision Icon" class="w-16 h-16 object-contain">
                </div>
                
                <h3 class="font-poppins font-extrabold text-3xl md:text-4xl text-gray-800 mb-4 relative inline-block">
                    Vision
                    <span class="block w-12 h-1 bg-red-500 mt-2 mx-auto rounded-full"></span>
                </h3>
                
                <p class="font-inter text-gray-700 leading-7 max-w-md mx-auto">
                    To be the leading provider of innovative and reliable manpower solutions, empowering organizations and individuals to achieve sustainable growth and success globally.
                </p>
            </div>
            
            <!-- Mission Card -->
            <div 
                data-aos="fade-up"
                data-aos-delay="200"
                class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-shadow duration-500 text-center">
                <!-- Mission Icon -->
                <div class="w-28 h-28 mx-auto mb-6 rounded-full bg-gradient-to-tr from-blue-400 to-blue-600 flex items-center justify-center shadow-lg transform transition-transform duration-500 hover:scale-110">
                    <img src="{{ asset('images/mission.png') }}" alt="Mission Icon" class="w-16 h-16 object-contain">
                </div>
                
                <h3 class="font-poppins font-extrabold text-3xl md:text-4xl text-gray-800 mb-4 relative inline-block">
                    Mission
                    <span class="block w-12 h-1 bg-blue-500 mt-2 mx-auto rounded-full"></span>
                </h3>
                
                <p class="font-inter text-gray-700 leading-7 max-w-md mx-auto">
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
                <img src="{{ asset('images/integrity.png') }}" alt="Integrity" class="w-16 h-16 mx-auto mb-4">

                <h3 class="font-poppins font-medium text-xl mb-4">Integrity</h3>
                <p class="font-inter text-base leading-[30px]">
                    Acting with honesty and transparency in all endeavors.
                </p>
            </div>
            
            <!-- Excellence -->
            <div class="bg-[#55403F] rounded-lg p-6 text-center text-white">
                <img src="{{ asset('images/excellence.png') }}" alt="Excellence" class="w-16 h-16 mx-auto mb-4">
                
                <h3 class="font-poppins font-medium text-xl mb-4">Excellence</h3>
                <p class="font-inter text-base leading-[30px]">
                    Striving for the highest standards in every solution and service.
                </p>
            </div>
            
            <!-- Innovation -->
            <div class="bg-[#55403F] rounded-lg p-6 text-center text-white">
                <img src="{{ asset('images/innovation.png') }}" alt="Innovation" class="w-16 h-16 mx-auto mb-4">
                
                <h3 class="font-poppins font-medium text-xl mb-4">Innovation</h3>
                <p class="font-inter text-base leading-[30px]">
                    Adopting creative and forward-thinking approaches to challenges.
                </p>
            </div>
            
            <!-- Commitment -->
            <div class="bg-[#55403F] rounded-lg p-6 text-center text-white">
                <img src="{{ asset('images/commitment.png') }}" alt="Commitment" class="w-16 h-16 mx-auto mb-4">
                
                <h3 class="font-poppins font-medium text-xl mb-4">Commitment</h3>
                <p class="font-inter text-base leading-[30px]">
                    Dedication to client success and long-term partnerships.
                </p>
            </div>
            
            <!-- Empowerment -->
            <div class="bg-[#55403F] rounded-lg p-6 text-center text-white">
                <img src="{{ asset('images/empowerment.png') }}" alt="Empowerment" class="w-16 h-16 mx-auto mb-4">
                
                <h3 class="font-poppins font-medium text-xl mb-4">Empowerment</h3>
                <p class="font-inter text-base leading-[30px]">
                    Enabling employees and clients to reach their full potential.
                </p>
            </div>
            
            <!-- Reliability -->
            <div class="bg-[#55403F] rounded-lg p-6 text-center text-white">
                <img src="{{ asset('images/reliability.png') }}" alt="Reliability" class="w-16 h-16 mx-auto mb-4">
                
                <h3 class="font-poppins font-medium text-xl mb-4">Reliability</h3>
                <p class="font-inter text-base leading-[30px]">
                    Providing dependable and consistent solutions across sectors.
                </p>
            </div>
            
            <!-- Collaboration -->
            <div class="bg-[#55403F] rounded-lg p-6 text-center text-white">
                <img src="{{ asset('images/collaboration.png') }}" alt="Collaboration" class="w-16 h-16 mx-auto mb-4">

                <h3 class="font-poppins font-medium text-xl mb-4">Collaboration</h3>
                <p class="font-inter text-base leading-[30px]">
                    Fostering teamwork and strong relationships for shared success.
                </p>
            </div>
            
            <!-- Sustainability -->
            <div class="bg-[#55403F] rounded-lg p-6 text-center text-white">
                <img src="{{ asset('images/sustainability.png') }}" alt="Sustainability" class="w-16 h-16 mx-auto mb-4">

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