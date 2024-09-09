<x-layout>
    <x-flex>
        <div class="bg-blue-500 p-6 rounded-lg flex flex-col items-center justify-center">
            <x-heading>Create a new Post</x-heading>
            <x-form method="POST" action="/create">
                <x-field name="title">Post Title</x-field>
                <div class="py-3 grid grid-cols-[1fr,2fr] gap-4 items-center">
                    <label class="text-right" for="content">Post Content</label>
                    <textarea name="content" rows="4" class="rounded-md p-1 text-black"></textarea>
                        @error("content")
                        <span class="text-red-400 text-sm block mt-2">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <x-button>Create</x-button>
            </x-form>
    </x-flex>
</x-layout>