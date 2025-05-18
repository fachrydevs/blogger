<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Blogger</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased h-screen relative bg-gray-100 ">
        <!-- Navigation -->
        <x-posts.navigation/>
        <!-- Main Content -->
        <main class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8 ">
            <div class="bg-white shadow-sm rounded-lg p-6">
                <h1 class="text-3xl font-bold text-gray-900 mb-6">
                    @if (isset(Auth::user()->id))
                        Welcome, {{ Auth::user()->name }}
                    @else
                        Welcome to Our Blog
                    @endif
                </h1>
                <div class="grid  grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12">
                    <!-- Blog Post Card -->
                    {{ $slot }}
                    <!-- Repeat for more blog posts -->
                </div>
            </div>
        </main>
    </body>
</html>
