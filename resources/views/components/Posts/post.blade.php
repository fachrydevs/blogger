@props(['title', 'date', 'description', 'user', 'link'])
<div class="bg-white  overflow-hidden">
    <div class="p-6">
        <h2 class="text-xl font-semibold text-gray-900 mb-2">{{ $title }}</h2>
        <p class="text-gray-600">
            @isset($description)
                {{ $description }}
            @endisset
        </p>
        <a href="{{ $link }}" class="inline-block mt-4 text-blue-600 hover:text-blue-800">Read More →</a>
        <p class="mt-4">Posted by <a href="#!">{{ $user }}</a> {{ $date }}</p>
    </div>
</div>