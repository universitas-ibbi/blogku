@extends('layouts.app')

@section('content')
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->content }}</p>

    <h2>Daftar Komentar Netizen</h2>

    <form action="/post/{{ $post->id }}/comment" method="POST">
        @csrf
        <input type="text" name="comment" class="form-control" placeholder="Tulis komentar Anda di sini">
        <input type="submit" value="Kirim Komentar" class="btn btn-primary mb-3">
    </form>

    <ul class="list-group">
        @foreach ($post->comments as $comment)
            <li class="list-group-item">
                {{ $comment->content }}
            </li>
        @endforeach
    </ul>
@endsection
