<nav class="nav-container">
    <div class="container">
        <div class="flex justify-between items-center h-20">
            <!-- Logo -->
            <div class="flex-shrink-0">
                <a href="{{ route('home') }}" class="flex items-center">
                    <img src="{{ asset('images/maxholdingslogo.jpg') }}" 
                         alt="Max Holdings Logo" 
                         class="h-12 w-auto">
                </a>
            </div>

            <!-- Desktop Navigation -->
            <div class="hidden lg:block">
                <div class="flex items-center space-x-8">
                    <a href="{{ route('home') }}" 
                       class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">
                        Home
                    </a>
                    <a href="{{ route('about') }}" 
                       class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}">
                        About
                    </a>
                    <a href="{{ route('services') }}" 
                       class="nav-link {{ request()->routeIs('services') ? 'active' : '' }}">
                        Services
                    </a>
                    <a href="{{ route('blogs') }}" 
                       class="nav-link {{ request()->routeIs('blogs') ? 'active' : '' }}">
                        Blogs
                    </a>
                    <a href="{{ route('contact') }}" 
                       class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}">
                        Contact
                    </a>
                </div>
            </div>

            <!-- Mobile menu button -->
            <div class="lg:hidden">
                <button type="button" 
                        class="mobile-menu-button"
                        aria-controls="mobile-menu" 
                        aria-expanded="false"
                        onclick="toggleMobileMenu()">
                    <span class="sr-only">Open main menu</span>
                    <!-- Hamburger icon -->
                    <svg id="hamburger-icon" class="w-6 h-6 text-black transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <!-- Close icon -->
                    <svg id="close-icon" class="w-6 h-6 text-black transition-transform duration-300 hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile menu -->
    <div class="lg:hidden mobile-menu-items hidden" id="mobile-menu">
        <div class="py-2">
            <a href="{{ route('home') }}" 
               class="mobile-nav-link {{ request()->routeIs('home') ? 'active' : '' }}">
                Home
            </a>
            <a href="{{ route('about') }}" 
               class="mobile-nav-link {{ request()->routeIs('about') ? 'active' : '' }}">
                About
            </a>
            <a href="{{ route('services') }}" 
               class="mobile-nav-link {{ request()->routeIs('services') ? 'active' : '' }}">
                Services
            </a>
            <a href="{{ route('blogs') }}" 
               class="mobile-nav-link {{ request()->routeIs('blogs') ? 'active' : '' }}">
                Blogs
            </a>
            <a href="{{ route('contact') }}" 
               class="mobile-nav-link {{ request()->routeIs('contact') ? 'active' : '' }}">
                Contact
            </a>
        </div>
    </div>
</nav>

<script>
function toggleMobileMenu() {
    const mobileMenu = document.getElementById('mobile-menu');
    const hamburgerIcon = document.getElementById('hamburger-icon');
    const closeIcon = document.getElementById('close-icon');
    
    if (mobileMenu.classList.contains('hidden')) {
        // Show menu
        mobileMenu.classList.remove('hidden');
        hamburgerIcon.classList.add('hidden');
        closeIcon.classList.remove('hidden');
    } else {
        // Hide menu
        mobileMenu.classList.add('hidden');
        hamburgerIcon.classList.remove('hidden');
        closeIcon.classList.add('hidden');
    }
}

// Close mobile menu when clicking outside
document.addEventListener('click', function(event) {
    const mobileMenu = document.getElementById('mobile-menu');
    const mobileMenuButton = document.querySelector('.mobile-menu-button');
    
    if (!mobileMenuButton.contains(event.target) && !mobileMenu.contains(event.target)) {
        mobileMenu.classList.add('hidden');
        document.getElementById('hamburger-icon').classList.remove('hidden');
        document.getElementById('close-icon').classList.add('hidden');
    }
});

// Close mobile menu on window resize
window.addEventListener('resize', function() {
    if (window.innerWidth >= 1024) {
        const mobileMenu = document.getElementById('mobile-menu');
        mobileMenu.classList.add('hidden');
        document.getElementById('hamburger-icon').classList.remove('hidden');
        document.getElementById('close-icon').classList.add('hidden');
    }
});
</script>