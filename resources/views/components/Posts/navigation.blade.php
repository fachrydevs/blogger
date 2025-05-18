<nav x-data="{ isOpen: false }" class="bg-white shadow-lg">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex items-center">
                <a href="/" class="text-2xl font-bold text-blue-800">Blogger</a>
            </div>
            <!-- Mobile menu button -->
            <div class="-mr-2 flex items-center md:hidden">
                <button @click="isOpen = !isOpen" type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': isOpen, 'inline-flex': !isOpen }" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': !isOpen, 'inline-flex': isOpen }" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <!-- Desktop menu -->
            <div class="hidden md:flex md:gap-6 md:items-center">
                <a href="/" class="text-gray-600 px-2 hover:text-gray-900">Home</a>
                @if (isset(Auth::user()->id))
                    @if (Auth::user()->isAdmin())
                        <a href="{{ route('dashboard') }}" class="text-gray-600 px-2 hover:text-gray-900">Dashboard</a>
                    @endif
                    <a href="{{ route('logout') }}" class="text-gray-600 px-2 hover:text-gray-900">Logout</a>
                @else
                    <a href="{{ route('login') }}" class="text-gray-600 px-2 hover:text-gray-900">Login</a>
                    <a href="{{ route('register') }}" class="text-gray-600 px-2 hover:text-gray-900">Register</a>
                @endif
            </div>
        </div>
    </div>
    <!-- Mobile menu -->
    <div :class="{'block': isOpen, 'hidden': !isOpen}" class="md:hidden">
        <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
            <a href="/" class="block text-gray-600 px-2 py-2 hover:text-gray-900">Home</a>
            @if (isset(Auth::user()->id))
                @if (Auth::user()->isAdmin())
                    <a href="{{ route('dashboard') }}" class="block text-gray-600 px-2 py-2 hover:text-gray-900">Dashboard</a>
                @endif
                <a href="{{ route('logout') }}" class="block text-gray-600 px-2 py-2 hover:text-gray-900">Logout</a>
            @else
                <a href="{{ route('login') }}" class="block text-gray-600 px-2 py-2 hover:text-gray-900">Login</a>
                <a href="{{ route('register') }}" class="block text-gray-600 px-2 py-2 hover:text-gray-900">Register</a>
            @endif
        </div>
    </div>
</nav>