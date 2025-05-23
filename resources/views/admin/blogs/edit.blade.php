<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Tulisan
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-2xl">
                    <section>
                        <header>
                            <h2 class="text-lg font-medium dark:text-white text-gray-900">
                                Edit Data Tulisan
                            </h2>

                            <p class="mt-1 text-sm text-gray-600">
                                Silakan melakukan perubahan data
                            </p>
                        </header>

                        <form method="post" action="{{ route('admin.blogs.update', ['post' => $data->id]) }}"
                            class="mt-6 space-y-6" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            {{-- Kolom edit title --}}
                            <div>
                                <x-input-label for="title" value="Title" />
                                <x-text-input id="title" name="title" type="text" class="mt-1 block w-full"
                                    value="{{ old('title', $data->title) }}" />

                            </div>

                            {{-- Kolom edit deskripsi --}}
                            <div>
                                <x-input-label for="description" value="Description" />
                                <x-text-input id="description" name="description" type="text"
                                    class="mt-1 block w-full" value="{{ old('description', $data->description) }}" />

                            </div>

                            {{-- Kolom edit thumbnail --}}
                            <div>
                                <x-input-label for="file_input" value="Thumbnail" />

                                @isset($data->thumbnail)
                                    <img src="{{ asset(getenv('CUSTOM_THUMBNAIL_LOCATION') . $data->thumbnail) }}"
                                        alt="thumbnail" class="w-1/4 h-1/4 rounded-md mb-4 cursor-pointer" id="thumbnail" />
                                @else
                                    <p class="text-gray-500">No thumbnail available</p>
                                @endisset

                                <input type="file" id="file_input" name="thumbnail"
                                    class="w-full border border-gray-300 rounded-md" />
                            </div>


                            {{-- Kolom edit konten dengan text editor from trix --}}
                            <div>
                                <x-textarea-trix value="{!! old('content', $data->content) !!}" id="x"
                                    name="content"></x-textarea-trix>
                            </div>

                            {{-- Kolom status --}}
                            <div>
                                <x-select name="status">
                                    <option value="draft"
                                        {{ old('status', $data->status) == 'draft' ? 'selected' : '' }}>Simpan sebagai
                                        draft
                                    </option>
                                    <option value="publish"
                                        {{ old('status', $data->status) == 'publish' ? 'selected' : '' }}>Publish
                                    </option>
                                </x-select>
                            </div>

                            {{-- Button --}}
                            <div class="flex items-center gap-4">
                                <a href="{{ route('admin.blogs.index') }}">
                                    <x-secondary-button>Kembali</x-secondary-button>
                                </a>
                                <x-primary-button>Simpan</x-primary-button>
                            </div>

                        </form>
                    </section>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Box untuk Preview Thumbnail Image -->
    <div id="imageModal" class="hidden fixed z-10 inset-0 overflow-y-auto">
        <div class="flex items-center justify-center min-h-screen">
            <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
            </div>
            <div class="bg-white rounded-lg overflow-hidden shadow-xl transform transition-all sm:max-w-lg sm:w-full">
                <img id="modalImage" src="" alt="Preview" class="w-full">
            </div>
        </div>
    </div>

    {{-- JS untuk menghandle modal box thumbnail --}}
    <script>
        document.getElementById('thumbnail').addEventListener('click', function() {
            var modal = document.getElementById('imageModal');
            var modalImage = document.getElementById('modalImage');
            modalImage.src = this.src;
            modal.classList.remove('hidden');
        });

        document.getElementById('imageModal').addEventListener('click', function() {
            this.classList.add('hidden');
        });
    </script>
</x-app-layout>
