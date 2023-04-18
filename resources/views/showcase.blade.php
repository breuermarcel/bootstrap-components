<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config("bootstrap-components.name") }}</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
            crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
</head>
<body>

<nav class="navbar bg-body-tertiary mb-5">
    <div class="container-fluid">
        <a class="navbar-brand text-capitalize" href="#">{{ config("bootstrap-components.name") }}</a>
    </div>
</nav>

<x-bs-components::container>
    <div class="row">
        <div class="col-4">
            <nav id="navbar-main" class="h-100 flex-column align-items-stretch pe-4 border-end">
                <nav class="nav nav-pills flex-column sidebar">
                    <a class="nav-link" href="#item-1">Layout</a>
                    <nav class="nav nav-pills flex-column subnav">
                        <a class="nav-link ms-3 my-1" href="#item-1-1">Container</a>
                    </nav>

                    <a class="nav-link" href="#item-2">Content</a>
                    <nav class="nav nav-pills flex-column subnav">
                        <a class="nav-link ms-3 my-1" href="#item-2-1">Typography</a>
                        <a class="nav-link ms-3 my-1" href="#item-2-2">Images</a>
                        <a class="nav-link ms-3 my-1" href="#item-2-3">Tables</a>
                    </nav>

                    <a class="nav-link" href="#item-3">Forms</a>
                    <nav class="nav nav-pills flex-column subnav">
                        <a class="nav-link ms-3 my-1" href="#item-3-1">Overview</a>
                        <a class="nav-link ms-3 my-1" href="#item-3-2">Form Control</a>
                        <a class="nav-link ms-3 my-1" href="#item-3-3">Select</a>
                        <a class="nav-link ms-3 my-1" href="#item-3-4">Check & Radios</a>
                        <a class="nav-link ms-3 my-1" href="#item-3-5">Range</a>
                        <a class="nav-link ms-3 my-1" href="#item-3-6">Input Group</a>
                    </nav>

                    <a class="nav-link" href="#item-4">Components</a>
                    <nav class="nav nav-pills flex-column subnav">
                        <a class="nav-link ms-3 my-1" href="#item-4-1">Alerts</a>
                        <a class="nav-link ms-3 my-1" href="#item-4-2">Badges</a>
                        <a class="nav-link ms-3 my-1" href="#item-4-3">Buttons</a>
                        <a class="nav-link ms-3 my-1" href="#item-4-4">Cards</a>
                        <a class="nav-link ms-3 my-1" href="#item-4-5">Collapse</a>
                        <a class="nav-link ms-3 my-1" href="#item-4-6">Dropdowns</a>
                        <a class="nav-link ms-3 my-1" href="#item-4-7">Modals</a>
                        <a class="nav-link ms-3 my-1" href="#item-4-8">Navbar</a>
                        <a class="nav-link ms-3 my-1" href="#item-4-9">Offcanvas</a>
                        <a class="nav-link ms-3 my-1" href="#item-4-10">Popovers</a>
                        <a class="nav-link ms-3 my-1" href="#item-4-11">Spinners</a>
                        <a class="nav-link ms-3 my-1" href="#item-4-12">Toasts</a>
                        <a class="nav-link ms-3 my-1" href="#item-4-13">Tooltip</a>
                        <a class="nav-link ms-3 my-1" href="#item-4-14">Code</a>
                    </nav>
                </nav>
            </nav>
        </div>

        <div class="col-8">
            <div data-bs-spy="scroll" data-bs-target="#navbar-main" data-bs-smooth-scroll="true" tabindex="0"
                 style="height:800px;overflow:auto;">
                @include("bs-components::showcases.layout")
                <div class="border my-5"></div>
                @include("bs-components::showcases.content")
                <div class="border my-5"></div>
                @include("bs-components::showcases.forms")
                <div class="border my-5"></div>
                @include("bs-components::showcases.components")
            </div>
        </div>
    </div>
</x-bs-components::container>

</body>
</html>
