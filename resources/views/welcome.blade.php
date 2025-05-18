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
        <nav class="bg-white shadow-lg">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-16">
                    <div class="flex items-center">
                        <a href="/" class="text-2xl font-bold text-blue-800">Blogger</a>
                    </div>
                    <div class="flex  gap-6 items-center ">
                            <a href="/" class="text-gray-600 px-2 hover:text-gray-900">Home</a>
                            <a href="#" class="text-gray-600 px-2 hover:text-gray-900">About</a>
                            <a href="#" class="text-gray-600 px-2 hover:text-gray-900">Contact</a>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Main Content -->
        <main class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8 ">
            <div class="bg-white shadow-sm rounded-lg p-6">
                <h1 class="text-3xl font-bold text-gray-900 mb-6">Welcome to Our Blog</h1>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Blog Post Card -->
                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        <div class="p-6">
                            <h2 class="text-xl font-semibold text-gray-900 mb-2">Sample Blog Post</h2>
                            <p class="text-gray-600">This is a sample blog post description. Click to read more about this interesting topic.</p>
                            <a href="#" class="inline-block mt-4 text-blue-600 hover:text-blue-800">Read More →</a>
                            <p class="mt-4 ">Posted by Admin </p>
                        </div>
                    </div>
                    <!-- Repeat for more blog posts -->
                </div>
            </div>
        </main>

        <!-- Footer -->
        
    </body>
</html>
