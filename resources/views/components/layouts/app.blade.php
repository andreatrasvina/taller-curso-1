<!-- Plantilla reutilizable -->

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
{{--    <title>Aprendible - @yield('title')</title>--}}
    <title>Aprendible - {{ $title ?? '' }}</title>
    <meta name="description" content=" {{ $metaDescription ?? 'Default meta description' }}" />

</head>

<body>

<x-layouts.nav/>

{{ $slot }}

</body>

</html>

