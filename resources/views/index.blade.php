<x-layout>
    <x-grid>
        @foreach ($posts as $post)
        <x-card :post="$post"></x-card>
        @endforeach
    </x-grid>
</x-layout>