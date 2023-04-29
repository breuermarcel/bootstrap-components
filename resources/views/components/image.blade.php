@props([
    'src' => null,
    'alt' => '',
    'title' => ''
])

@php
    $attributes = $attributes->class(['img-fluid'])->merge([
        'src' => $src,
        'alt' => $alt,
        'title' => $title
    ]);
@endphp

<img {{ $attributes }}>
