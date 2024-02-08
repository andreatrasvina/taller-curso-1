<!-- Plantilla reutilizable -->

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Aprendible - @yield('title')</title>
        <meta name="description" content="@yield('meta-description', 'Default meta description')" />
    </head>

    <body>

    <!-- directivas de blade -->
    @include('partials.nav') <!-- Incluye el navegador -->

    @yield('content') <!-- Permite dejar un espacio en blanco para cada página,
                           será el contenido individual y diferente que contiene el sitio -->

</body>

</html>

