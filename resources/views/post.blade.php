@extends('layouts.app')

@section('content')
    <h2>{{ $post->title }}</h2>

    <div>
        {{ $post->content }}
    </div>
@endsection
