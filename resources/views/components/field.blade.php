@props(['name' => 'name', 'type' => 'text'])

@php
if ($name == "password" || $name == "password_confirmation") {
    $type = "password";
}
@endphp

<div class="py-3 grid grid-cols-[1fr,2fr] gap-4 items-center">
    <label class="text-right" for="{{ $name }}">{{ $slot }}</label>
    <div>
        <input
            class="p-1 text-black rounded-md w-full"
            size="30"
            type="{{ $type }}"
            name="{{ $name }}"
            id="{{ $name }}"
            value="{{ old($name) }}">
        @error($name)
        <span class="text-red-400 text-sm block mt-2">{{ $message }}</span>
        @enderror
    </div>
</div>