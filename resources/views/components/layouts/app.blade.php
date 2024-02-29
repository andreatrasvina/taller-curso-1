<!-- Plantilla reutilizable -->

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
{{--    <title>Aprendible - @yield('title')</title>--}}
    <title>Aprendible - {{ $title ?? '' }}</title>
    <meta name="description" content=" {{ $metaDescription ?? 'Default meta description' }}" />
{{--    <link rel="stylesheet" href="/css/app.scss">--}}
{{--    <script src="/js/app.js"></script>--}}
    @vite(['resources/css/app.scss', 'resources/js/app.js'])

</head>

<body>

<x-layouts.nav/>

@if(session('status'))
    <div class="status">
        {{ session('status') }}
    </div>
@endif

{{ $slot }}

</body>

</html>

