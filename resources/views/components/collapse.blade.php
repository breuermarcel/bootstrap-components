@props([
    'id' => null,
    'button' => '',
])

@php
    $id = bin2hex(random_bytes(18));
@endphp

<x-bc::button :target="$id" toggle="collapse">{{ $button }}</x-bc::button>

<div class="collapse" id="{{ $id }}">
    {{ $slot }}
</div>
