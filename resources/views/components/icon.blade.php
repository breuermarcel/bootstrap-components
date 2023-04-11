@props([
    'name' => null,
    'color' => null
])


@php
    $attributes = $attributes->class([
        'bi bi-' . $name,
        $color !== null ?? 'text-' . $color
    ])->merge([
        //
    ]);
@endphp

@if($name)
    <i {{ $attributes }}></i>
@endif
