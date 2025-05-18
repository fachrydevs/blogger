<nav class="bg-white shadow-lg">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex items-center">
                <a href="/" class="text-2xl font-bold text-blue-800">Blogger</a>
            </div>
            <div class="flex  gap-6 items-center ">
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
</nav>