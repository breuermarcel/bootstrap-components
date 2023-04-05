@props([
    'icon' => null,
    'label' => null,
    'color' => 'info',
    'dismissible' => true,
])

@php
    $attributes = $attributes->class(['alert alert-' . $color . ' fade show', 'alert-dismissible' => $dismissible])->merge([
        //
    ]);
@endphp

<div {{ $attributes }}>
    {{ $label ?? $slot }}

    @if ($dismissible)
        <x-bs::close dismiss="alert" />
    @endif
</div>
