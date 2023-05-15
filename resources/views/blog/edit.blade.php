<x-guest-layout>
    <div class="min-h-screen">

        <!-- Page Content -->
        <main class="max-w-7xl p-12 mx-auto">
            <form action="{{ route('blogs.update', $blog) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="mb-6">
                    <x-label for="name" value="Name" class="dark:text-gray-300 mb-2">
                    </x-label>
                    <x-input type="text" name="name" value="{{ $blog->name }}" class="w-full block text-black">
                    </x-input>
                </div>

                <div class="mb-6">
                    <x-label for="image" class="dark:text-gray-300 mb-2"></x-label>
                    <x-input type="file" accepts="images/*" name="image" class="w-full block border">
                    </x-input>
                </div>
                <div class="mb-6">
                    <textarea class="description" name="description" value="">{{ $blog->description }}</textarea>
                </div>
                <div class="mb-6">
                    <x-button>Submit</x-button>
                </div>
            </form>
        </main>
    </div>
</x-guest-layout>


<script src="{{ asset('node_modules/tinymce/tinymce.js') }}"></script>
<script>
    tinymce.init({
        selector: 'textarea.description',
        width: 1000,
        height: 300
    });
</script>
