@extends('layouts.app')

@section('content')
    <div class="d-flex flex-row-reverse my-3">
        <a href="/create" class="btn btn-success">Tambah Baru</a>
    </div>
    @foreach ($posts as $post)
        <div class="card mb-4">
            <div class="card-body">
                <h2 class="card-title">{{ $post->title }}</h2>
                <p class="card-text">
                    {{ $post->content }}
                </p>
                <a href="#" class="btn btn-primary">Read More &rarr;</a>
            </div>
        </div>
    @endforeach
@endsection
