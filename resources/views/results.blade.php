<x-layout>
    <div class="container mx-auto pt-20 px-4">
        <h1 class="text-3xl font-bold mb-6 text-gray-800">Search Results:</h1>
        @if($posts->count() > 0)
            <x-grid>
                @foreach ($posts as $post)
                    <x-card :post="$post" />
                @endforeach
            </x-grid>
        @else
            <p class="text-xl text-gray-600">No posts found matching your search.</p>
        @endif
    </div>
</x-layout>