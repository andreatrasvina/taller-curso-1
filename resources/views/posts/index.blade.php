<x-layouts.app
    title="Blog"
    meta-description="Blog meta description">


    <h1>BLOG</h1>
{{--    @dump($posts)--}}
    <a href="{{ route('posts.create') }}">Create new post</a>

    @foreach($posts as $post)
{{--    se accede al contenido de la base de datos por title como si fuera una propiedad de la clase    --}}
        <div style="display: flex; align-items: baseline">
            <h2>
                <a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a>
            </h2> &nbsp;
            <a href="{{ route('posts.edit', $post) }}">Edit</a>
        </div>
    @endforeach

</x-layouts.app>



{{--<x-layouts.app--}}
{{--    title="Blog"--}}
{{--    meta-description="Blog meta description">--}}

{{--    <h1>BLOG</h1>--}}
{{--</x-layouts.app>--}}
