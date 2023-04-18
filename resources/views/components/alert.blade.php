@props([
    'icon' => null,
    'color' => 'info',
    'dismissible' => false,
])

@php
    $attributes = $attributes->class(['alert alert-' . $color . ' fade show', 'alert-dismissible' => $dismissible])->merge([
        //
    ]);
@endphp

<div {{ $attributes }}>
    <x-bc::icon :name="$icon"/>

    {{ $slot }}

    @if ($dismissible)
        <x-bc::close dismiss="alert"/>
    @endif
</div>
