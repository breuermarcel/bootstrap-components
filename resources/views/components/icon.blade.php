@props([
    'name' => null,
])

@php
    $attributes = $attributes->class(['bi bi-' . $name])->merge([
        //
    ]);
@endphp

@if ($name)
    <i {{ $attributes }}></i>
@endif
