@extends('layouts.app')

@section('title', 'Blog')
@section('meta-description', 'Blog meta description')

@section('content')


    <h1>BLOG</h1>
{{--    @dump($posts)--}}
    <a href="{{ route('posts.create') }}">Create new post</a>

    @foreach($posts as $post)
{{--    se accede al contenido de la base de datos por title como si fuera una propiedad de la clase    --}}
        <h2>
            <a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a>
        </h2>
    @endforeach

@endsection


{{--<x-layouts.app--}}
{{--    title="Blog"--}}
{{--    meta-description="Blog meta description">--}}

{{--    <h1>BLOG</h1>--}}
{{--</x-layouts.app>--}}
