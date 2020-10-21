@extends('layouts.app')

@section('content')

    <div class="mb-20">
        <h1>Welcome to my blog</h1>
        <p>The party starts here!</p>
    </div>

    @foreach ($posts as $post)
        <a class="block leading-none mb-16 text-4xl" href="/{{ $post->slug }}">{{ $post->title }}</a>
    @endforeach

@endsection
