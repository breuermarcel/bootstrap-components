@props([
    'icon' => null,
    'color' => 'primary',
])

@php
    $attributes = $attributes->class(['badge bg-' . $color])->merge([
        //
    ]);
@endphp

<span {{ $attributes }}>
    <x-bs-components::icon :name="$icon"/>

    {{ $slot }}
</span>
