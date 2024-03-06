<nav class="bg-white p-5 border-b border-gray-300">
    <div class="container mx-auto flex items-center justify-center">

        <!-- Navegación -->
        <div class="space-x-20 mr-auto">
            <a href="{{ route('home') }}" class="font-bold text-lg {{ request()->routeIs('home') ? 'text-sky-600' : 'text-slate-400' }} hover:text-sky-600">Home</a>
            <a href="{{ route('posts.index') }}" class="font-bold text-lg {{ request()->routeIs('posts.*') ? 'text-sky-600' : 'text-slate-400' }} hover:text-sky-600">Blog</a>
            <a href="{{ route('about') }}" class="font-bold text-lg {{ request()->routeIs('about') ? 'text-sky-600' : 'text-slate-400' }} hover:text-sky-600">Acerca de</a>
            <a href="{{ route('contact') }}" class="font-bold text-lg {{ request()->routeIs('contact') ? 'text-sky-600' : 'text-slate-400' }} hover:text-sky-600">Contacto</a>
        </div>
        <div class="ml-auto">
            <a href="{{ route('register') }}" class="font-bold text-lg {{ request()->routeIs('register') ? 'text-sky-600' : 'text-slate-400' }} hover:text-sky-600">Registro</a>
        </div>
    </div>
</nav>
