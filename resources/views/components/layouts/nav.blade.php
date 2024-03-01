<nav class="bg-slate-800 p-5">
    <div class="container mx-auto flex items-center justify-center">

        <!-- Navegación -->
        <div class="space-x-20">
            <a href="{{ route('home') }}" class="text-white font-bold text-lg {{ request()->routeIs('home') ? 'text-white' : 'text-slate-400' }} hover:text-white">Home</a>
            <a href="{{ route('posts.index') }}" class="text-white font-bold text-lg {{ request()->routeIs('posts.*') ? 'text-white' : 'text-slate-400' }} hover:text-white">Blog</a>
            <a href="{{ route('about') }}" class="text-white font-bold text-lg {{ request()->routeIs('about') ? 'text-white' : 'text-slate-400' }} hover:text-white">Acerca de</a>
            <a href="{{ route('contact') }}" class="text-white font-bold text-lg {{ request()->routeIs('contact') ? 'text-white' : 'text-slate-400' }} hover:text-white">Contacto</a>
        </div>
    </div>
</nav>
