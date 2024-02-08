@extends('layouts.app')

@section('title', 'Blog')
@section('meta-description', 'Blog meta description')

@section('content')

    <h1>BLOG</h1>
{{--    @dump($posts)--}}

    @foreach($posts as $post)
        <h2>{{ $post['title'] }}</h2>
    @endforeach

@endsection


{{--<x-layouts.app--}}
{{--    title="Blog"--}}
{{--    meta-description="Blog meta description">--}}

{{--    <h1>BLOG</h1>--}}
{{--</x-layouts.app>--}}
