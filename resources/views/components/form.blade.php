@props([
    'method' => 'POST',
    'action' => ''
])

@php
    $method = strtoupper($method);
    $isPost = in_array($method, ['POST', 'PUT', 'PATCH', 'DELETE']);
@endphp

<form class="flex flex-col" action="{{ $action }}" method="{{ $isPost ? 'POST' : 'GET' }}" {{ $attributes }}>
    @if($isPost)
        @csrf
        @if(!in_array($method, ['GET', 'POST']))
            @method($method)
        @endif
    @endif
    {{ $slot }}
</form>