@props([
    'color' => 'primary',
])

@php
    $attributes = $attributes->class(['badge bg-' . $color])->merge([
        //
    ]);
@endphp

<span {{ $attributes }}>
    {{ $slot }}
</span>
