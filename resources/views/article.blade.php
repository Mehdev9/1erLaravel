@extends('layout')
@push('styles')
    <link rel="stylesheet" href="/css/article.css">
@endpush
@section('content')
    <h1>Nos articles</h1>
    <div class="carte">
        @foreach ($articles as $article)
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">
                        <p>{{ $article->title }}</p>
                    </h5><br>
                    {{-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> --}}
                    <img src="..." class="card-img-top" alt="post"><br>
                    <a href="{{ $article->id }}" class="btn btn-warning">ouvrir ce post</a>
                    @includeWhen($article->id == 1, 'button')
                </div>
            </div>
        @endforeach
    </div>
@endsection


