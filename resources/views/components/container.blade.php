@props([
    'fluid' => null,
    'size' => null
])

@php
    $attributes = $attributes->class([$fluid ? 'container-fluid' : ($size ? 'container-' . $size : 'container')])->merge([
        //
    ]);
@endphp

<div {{ $attributes }}>
    {{ $slot }}
</div>
