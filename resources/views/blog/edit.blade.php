<x-guest-layout>
    <div class="min-h-screen">

        <!-- Page Content -->
        <main class="mx-auto max-w-7xl p-12">
            <x-auth-validation-errors></x-auth-validation-errors>
            <form action="{{ route('blogs.update', $blog) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="mb-6">
                    <x-label for="name" value="Name" class="mb-2 dark:text-gray-300">
                    </x-label>
                    <x-input type="text" name="name" value="{{ $blog->name }}" class="block w-full text-black">
                    </x-input>
                </div>
                <div class="mb-6">
                    <select type="" id="default_standard" name="category_id"
                        class="peer block w-full appearance-none border-0 border-b-2 border-gray-300 bg-transparent py-2.5 px-0 text-sm text-black focus:border-gray-300 focus:outline-none focus:ring-0"
                        placeholder=" ">
                        <option value="" selected hidden>Type of Category</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-6">
                    <x-label for="image" class="mb-2 dark:text-gray-300"></x-label>
                    <x-input type="file" accepts="images/*" name="image" class="block w-full border">
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
