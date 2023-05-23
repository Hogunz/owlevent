<x-guest-layout>
    <div class="min-h-screen">

        <!-- Page Content -->
        <main class="max-w-7xl p-12 mx-auto">
            <form action="{{ route('gigs.update', $gig) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <h1 class="text-2xl">Overview</h1>
                <div class="mb-6">
                    <x-label for="title" value="Name" class="dark:text-gray-300 mb-2"></x-label>
                    <x-input type="text" name="title" :value="$gig->title" class="w-full block text-black"></x-input>
                </div>
                <div class="mb-6">
                    <x-label for="category" value="Category" class="dark:text-gray-300 mb-2"></x-label>
                    <select name="category_id" id="category_id" class="w-full block border">
                        <option value="{{ $gig->category_id }}">{{ $gig->category->name }}</option>
                    </select>
                </div>
                <div class="mb-6">
                    <x-label for="description" value="Description" class="dark:text-gray-300 mb-2"></x-label>
                    <textarea name="description" class="w-full block text-black">{{ $gig->description }}</textarea>
                </div>

                <h1 class="text-2xl">Pricing</h1>
                @foreach ($gig->gigPackages as $package)
                    <div class="mb-6">
                        <x-label for="package" value="Package" class="dark:text-gray-300 mb-2"></x-label>
                        <x-input type="text" name="packages[{{ $loop->index }}][package]" :value="$package->package"
                            class="w-full block text-black"></x-input>
                    </div>
                    <div class="mb-6">
                        <x-label for="price" value="Price" class="dark:text-gray-300 mb-2"></x-label>
                        <x-input type="text" name="packages[{{ $loop->index }}][price]" :value="number_format($package->price, 2, '.', ',')"
                            class="w-full block text-black"></x-input>
                    </div>
                    <div class="mb-6">
                        <x-label for="price_description" value="Description" class="dark:text-gray-300 mb-2"></x-label>
                        <textarea name="packages[{{ $loop->index }}][description]" class="w-full block text-black">{{ $package->description }}</textarea>
                    </div>
                @endforeach

                <h1 class="text-2xl">FAQ</h1>
                @foreach ($gig->faqs as $faq)
                    <div class="mb-6">
                        <x-label for="question" value="Question" class="dark:text-gray-300 mb-2"></x-label>
                        <textarea name="faqs[{{ $loop->index }}][question]" class="w-full block text-black">{{ $faq->question }}</textarea>
                    </div>
                    <div class="mb-6">
                        <x-label for="answer" value="Answer" class="dark:text-gray-300 mb-2"></x-label>
                        <textarea name="faqs[{{ $loop->index }}][answer]" class="w-full block text-black">{{ $faq->answer }}</textarea>
                    </div>
                @endforeach

                <h1 class="text-2xl">Portfolio</h1>
                @foreach ($gig->gigUploads as $upload)
                    <div class="mb-6">
                        <x-label for="image" class="dark:text-gray-300 mb-2"></x-label>
                        <x-input type="file" name="uploads[]" class="w-full block border"></x-input>
                    </div>
                @endforeach

                <div class="mb-6">
                    <x-button>Submit</x-button>
                </div>
            </form>
        </main>
    </div>
</x-guest-layout>
