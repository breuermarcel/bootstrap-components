@props([
    'size' => null,
])

@php
    $attributes = $attributes->class([$size ? 'container-' . $size : 'container'])->merge([
        //
    ]);
@endphp

<div {{ $attributes }}>
    {{ $slot }}
</div>
