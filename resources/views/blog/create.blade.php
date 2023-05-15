<x-guest-layout>



    <div class="min-h-screen">

        <!-- Page Content -->
        <main class="max-w-7xl p-12 mx-auto">
            <form action="{{ route('blogs.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-6">
                    <x-label for="name" value="Name" class=" mb-2"></x-label>
                    <x-input type="text" name="name" class="w-full block text-black" required></x-input>
                </div>

                <div class="mb-6">
                    <x-label for="image" value="Logo" class=" mb-2"></x-label>
                    <x-input type="file" accepts="images/*" name="image" class="w-full block border" required>
                    </x-input>
                </div>
                <div class="mb-6">
                    <textarea class="description w-full block" name="description"
                        placeholder="Description and Image(Copy and Paste or Drag)"></textarea>
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
        height: 300
    });
</script>
