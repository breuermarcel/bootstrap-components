@props([
    'color' => 'primary',
    'size' => null,
    'type' => 'button',
    'route' => null,
    'routeParams' => null,
    'href' => null,
    'dismiss' => null,
    'toggle' => null,
    'stretchedLink' => null,
    'title' => null,
])

@php
    if ($route) {
        if ($routeParams) {
            $href = route($route, $routeParams);
        } else {
            $href = route($route);
        }
    }

    $attributes = $attributes->class(['btn btn-' . $color, 'btn-' . $size => $size, $stretchedLink ? 'stretched-link' : null])->merge([
        'type' => $href ? $type : null,
        'href' => $href,
        'data-bs-dismiss' => $dismiss,
        'data-bs-toggle' => $toggle,
        'title' => $title
    ]);
@endphp

<{{ $href ? 'a' : 'button' }} {{ $attributes }}>
    {{ $slot }}
</{{ $href ? 'a' : 'button' }}>
