{{--@component('components.layout')--}}
<x-layouts.app
    title="Home"
    meta-description="Home meta description">

{{--    <x-slot name="title">--}}
{{--        Home title--}}
{{--    </x-slot>--}}

    <h1 class="my-4 font-serif text-3xl text-center text-sky-600 dark:text-sky-500">Home</h1>

    @auth
        <div class="text-amber-950">
            Authenticated User: {{ Auth::user()->name }}

        </div>
    @endauth
</x-layouts.app>

{{--@endcomponent--}}


