<x-posts.layout>
    @foreach ($data as $key => $value )
        <x-posts.post title='{{ $value->title }}' description='{{ $value->description }}'
            date="{{ $value->created_at->isoFormat('dddd, D MMMM Y') }}" user='{{ $value->user->name }}'
            link="{{ route('post-detail', ['slug' => $value->slug]) }}" />
    @endforeach
    <div class="d-flex justify-content-between mb-4">
        <div>
            @if (!$data->onFirstPage())
                <a class="btn btn-primary text-uppercase"
                    href="{{ $data->previousPageUrl() }}">&larr;Newer Blogs</a>
            @endif
        </div>
        <div>
            @if ($data->hasMorePages())
                <a class="btn btn-primary text-uppercase" href="{{ $data->nextPageUrl() }}">Older Blogs
                    &rarr;</a>
            @endif
        </div>

    </div>
</x-posts.layout>