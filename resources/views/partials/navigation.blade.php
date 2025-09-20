<nav class="bg-white shadow-sm sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-20">
            <!-- Logo -->
            <div class="flex-shrink-0">
                <a href="{{ route('home') }}" class="flex items-center">
                    <div class="text-2xl font-bold text-primary font-poppins">
                        <span class="text-primary">MAX</span>
                        <span class="text-black text-xs align-top">HOLDINGS PVT LTD</span>
                    </div>
                </a>
            </div>

            <!-- Desktop Navigation -->
            <div class="hidden md:block desktop-menu">
                <div class="ml-10 flex items-baseline space-x-8">
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
            <div class="md:hidden mobile-menu">
                <button type="button" 
                        class="mobile-menu-button inline-flex items-center justify-center p-2 rounded-md text-black hover:text-primary focus:outline-none focus:text-primary"
                        aria-controls="mobile-menu" 
                        aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <!-- Hamburger icon -->
                    <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <!-- Close icon (hidden by default) -->
                    <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile menu -->
    <div class="md:hidden mobile-menu-items" id="mobile-menu" style="display: none;">
        <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3 bg-white border-t">
            <a href="{{ route('home') }}" 
               class="nav-link block {{ request()->routeIs('home') ? 'active' : '' }}">
                Home
            </a>
            <a href="{{ route('about') }}" 
               class="nav-link block {{ request()->routeIs('about') ? 'active' : '' }}">
                About
            </a>
            <a href="{{ route('services') }}" 
               class="nav-link block {{ request()->routeIs('services') ? 'active' : '' }}">
                Services
            </a>
            <a href="{{ route('blogs') }}" 
               class="nav-link block {{ request()->routeIs('blogs') ? 'active' : '' }}">
                Blogs
            </a>
            <a href="{{ route('contact') }}" 
               class="nav-link block {{ request()->routeIs('contact') ? 'active' : '' }}">
                Contact
            </a>
        </div>
    </div>
</nav>

<script>
// Mobile menu toggle
document.addEventListener('DOMContentLoaded', function() {
    const mobileMenuButton = document.querySelector('.mobile-menu-button');
    const mobileMenu = document.querySelector('#mobile-menu');
    const hamburgerIcon = mobileMenuButton.querySelector('svg:first-child');
    const closeIcon = mobileMenuButton.querySelector('svg:last-child');

    mobileMenuButton.addEventListener('click', function() {
        const isOpen = mobileMenu.style.display !== 'none';
        
        if (isOpen) {
            mobileMenu.style.display = 'none';
            hamburgerIcon.classList.remove('hidden');
            closeIcon.classList.add('hidden');
        } else {
            mobileMenu.style.display = 'block';
            hamburgerIcon.classList.add('hidden');
            closeIcon.classList.remove('hidden');
        }
    });
});
</script>