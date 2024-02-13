<!-- hace referencia al nombre asignado en las rutas
    Se recomienda siempre asignar un nombre a las rutas y referenciarlas
    con el en vez de usar la ruta -->

<ul>
    <!-- sintaxis de PHP
    <li><a href="<?= route('home') ?>">EJEMPLO EN LA SINTAXIS CON PHP</a></li>
    -->
    <!-- sintaxis de blade -->
    <li><a href="{{ route('home') }}">Home</a></li>
    <li><a href="{{ route('posts.index') }}">Blog</a></li>
    <li><a href="{{ route('about') }}">About</a></li>
    <li><a href="{{ route('contact') }}">Contact</a></li>
</ul>
