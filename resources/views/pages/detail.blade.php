@extends('layouts.app')

@section('content')
    <div class="container p-4">
        <div class="row g-5">
            <div class="col-md-12">
                <article class="blog-post">
                    <h2 class="display-5 link-body-emphasis mb-1">{{ $berita->judul }}</h2>
                    <p class="blog-post-meta">{{ $berita->created_at }} by <a href="#">Media Berita</a></p>
                    <img src="{{ asset('img/gambar/' . $berita->gambar) }}" class="mb-3 bd-placeholder-img card-img-top"
                        alt="">
                    {!! $berita->isi !!}
                </article>
                <a class="btn btn-primary " href="/">Back</a>
            </div>
        </div>
    </div>
@endsection
