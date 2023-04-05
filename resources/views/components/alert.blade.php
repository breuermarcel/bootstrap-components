@props([
    'color' => 'info',
    'dismissible' => false,
])

@php
    $attributes = $attributes->class(['alert alert-' . $color . ' fade show', 'alert-dismissible' => $dismissible])->merge([
        //
    ]);
@endphp

<div {{ $attributes }}>
    {{ $slot }}

    @if ($dismissible)
        <x-bs-components::close dismiss="alert" />
    @endif
</div>
