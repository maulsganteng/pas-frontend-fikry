@extends('layouts.app')

@section('content')
    <div class="container mt-3">
        <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://awsimages.detik.net.id/visual/2023/10/09/cover-topik-hamas_169.jpeg?w=650"
                        class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://awsimages.detik.net.id/visual/2023/10/09/cover-topik-hamas_169.jpeg?w=650"
                        class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://asset-2.tstatic.net/aceh/foto/bank/images/Tentara-Bayaran-Rusia-Wagner-di-Kota-Soledar-Ukraina.jpg"
                        class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <div class="container my-3 text-center h1">
        <marquee behavior="alternate" direction=""><span style="color: red">Berita</span>Terbaru</marquee>
    </div>
    <div class="container ">
        <div class="row">
            @foreach ($allBerita as $item)
                <div class="col-lg-4 col-md-6 mt-3">
                    <div class="card ">
                        <img src="{{ asset('img/gambar/' . $item->gambar) }}" class="bd-placeholder-img card-img-top"
                            alt="">
                        <div class="card-body">
                            <div class="card-title h5 fw-bold">{{ Str::limit($item->judul, 25, '...') }}</div>
                            <p>{{ now()->format('F j, Y') }}</p>
                            <p class="card-text">{!! Str::words($item->isi, 30, '...') !!}</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <a href="{{ route('detail', $item->id) }}" class="btn btn-md btn-outline-secondary">Read</a>
                                <span class="fw-bold">{{ $item->kategori->nama_kategori }}</span></small>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
