<header class="bg-white shadow-md">
    <div class="container mx-auto px-4">
        <div class="flex justify-between items-center py-4">
            <!-- Logo -->
            <div>
                <a href="{{ route('home') }}" class="text-2xl font-bold text-blue-600">
                    My Portfolio
                </a>
            </div>
            
            <!-- Navigation -->
            <nav class="hidden md:flex space-x-8">
                <a href="{{ route('home') }}" 
                   class="text-gray-700 hover:text-blue-600 {{ request()->routeIs('home') ? 'text-blue-600 font-medium' : '' }}">
                    Home
                </a>
                <a href="{{ route('skills') }}" 
                   class="text-gray-700 hover:text-blue-600 {{ request()->routeIs('skills') ? 'text-blue-600 font-medium' : '' }}">
                    Skills
                </a>
                <a href="{{ route('projects') }}" 
                   class="text-gray-700 hover:text-blue-600 {{ request()->routeIs('projects*') ? 'text-blue-600 font-medium' : '' }}">
                    Projects
                </a>
                <a href="{{ route('academic') }}" 
                   class="text-gray-700 hover:text-blue-600 {{ request()->routeIs('academic') ? 'text-blue-600 font-medium' : '' }}">
                    Academic
                </a>
                <a href="{{ route('achievements') }}" 
                   class="text-gray-700 hover:text-blue-600 {{ request()->routeIs('achievements') ? 'text-blue-600 font-medium' : '' }}">
                    Achievements
                </a>
                <a href="{{ route('about') }}" 
                   class="text-gray-700 hover:text-blue-600 {{ request()->routeIs('about') ? 'text-blue-600 font-medium' : '' }}">
                    About
                </a>
                <a href="{{ route('contact') }}" 
                   class="text-gray-700 hover:text-blue-600 {{ request()->routeIs('contact*') ? 'text-blue-600 font-medium' : '' }}">
                    Contact
                </a>
            </nav>
            
            <!-- Mobile menu button -->
            <button class="md:hidden text-gray-700 focus:outline-none">
                <i class="fas fa-bars text-xl"></i>
            </button>
        </div>
        
        <!-- Mobile menu -->
        <div class="md:hidden hidden" id="mobile-menu">
            <div class="flex flex-col space-y-3 pb-4">
                <a href="{{ route('home') }}" 
                   class="text-gray-700 hover:text-blue-600 {{ request()->routeIs('home') ? 'text-blue-600 font-medium' : '' }}">
                    Home
                </a>
                <!-- Add other mobile menu items similarly -->
            </div>
        </div>
    </div>
</header>