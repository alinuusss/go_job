<!DOCTYPE html>
<html lang="ru" class="{{ Cookie::get('theme', 'system') }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, maximum-scale=5">

    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')">

    @yield('head_scripts')

    <meta name="theme-color" content="">
    <meta name="robots" content="index, follow">

    <meta name="yandex-verification" content="ea85076076b79dc6" />

    @yield('og')

    @if(config('app.debug') === false)
        @include('includes.yandex_metrika')
    @endif

    @vite(['resources/styles/app.css', 'resources/js/app.js'])

</head>
<body>


<main>
    <div class="wrapper">
        <div class="mask"></div>

        <header>
            @include('includes.header')
        </header>

        <div>
            @yield('content')
        </div>
    </div>

    <footer>
        @include('includes.footer')
    </footer>
</main>

<script src="https://api-maps.yandex.ru/2.1/?lang=ru-RU"></script>
<script>
    ymaps.ready(() => {
        if (window.initYmap) {
            window.initYmap();
        }
    });
</script>

@vite('resources/js/app.js')
</body>
</html>
