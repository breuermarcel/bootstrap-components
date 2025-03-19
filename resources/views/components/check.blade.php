@props([
    'label' => null,
    'switch' => false,
])

@php
    $attributes = $attributes->class(['form-check-input'])->merge([
        'type' => 'checkbox',
    ]);
@endphp

<div>
    <x-bc::label :label="$label" />

    <div class="form-check {{ $switch ? 'form-switch' : '' }}">
        <input {{ $attributes }}>
    </div>
</div>
