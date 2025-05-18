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
        <x-Posts.navigation/>
        <!-- Main Content -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-center">
                <div class="w-full md:w-4/5 lg:w-3/4 xl:w-2/3">
        
                    {{-- validasi gambar --}}
                    @if ($data)
                        <img src="{{ asset(getenv('CUSTOM_THUMBNAIL_LOCATION') . $data->thumbnail) }}"
                            alt="{{ $data->title }}" class="w-full h-auto rounded-lg shadow-lg object-cover">
                    @else
                        <p class="text-gray-600 text-center py-4">Data tidak ditemukan atau belum di publish.</p>
                    @endif
        
                    {{-- validasi judul --}}
                    @if ($data)
                        <h1 class="text-4xl font-bold text-gray-900 mt-8 mb-4">{{ $data->title }}</h1>
                        <p class="text-gray-600 mb-8">
                            <span class="italic">Created By</span> <span class="font-semibold text-gray-900">{{ $data->user->name }}</span> <span class="italic">On</span>
                            <span class="text-gray-700">{{ $data->created_at->isoFormat('dddd, D MMMM Y') }}</span>
                        </p>
                    @endif
        
                    <div class="prose prose-lg max-w-none mb-12">
                        {{-- validasi konten --}}
                        @if ($data)
                            {!! $data->content !!}
                        @endif
                    </div>
                </div>
            </div>
        
            {{-- Pagination --}}
            <div class="flex justify-between items-center py-8 border-t border-gray-200">
                <div class="flex-1">
                    @if ($pagination['next'])
                        <a href="{{ route('post-detail', ['slug' => $pagination['next']->slug]) }}" 
                           class="inline-flex items-center text-blue-600 hover:text-blue-800 transition-colors duration-200">
                            <span class="mr-2">&larr;</span>
                            <span class="text-sm">{{ $pagination['next']->title }}</span>
                        </a>
                    @endif
                </div>
                <div class="flex-1 text-right">
                    @if ($pagination['prev'])
                        <a href="{{ route('post-detail', ['slug' => $pagination['prev']->slug]) }}" 
                           class="inline-flex items-center text-blue-600 hover:text-blue-800 transition-colors duration-200">
                            <span class="text-sm">{{ $pagination['prev']->title }}</span>
                            <span class="ml-2">&rarr;</span>
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </body>
</html>
