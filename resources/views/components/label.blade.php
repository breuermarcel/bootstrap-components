@props([
    'label' => null,
])

@php
    $attributes = $attributes->class(['form-label'])->merge([
        //
    ]);
@endphp

@if ($label)
    <label {{ $attributes }}>
        {{ $label ?? $slot }}
    </label>
@endif
