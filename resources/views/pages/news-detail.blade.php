@extends('layouts.news-detail')
@section('title', 'News Detail')
@section('content')
<div class="col-sm-12 col-md-12 col-lg-9 mb-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb" style="
        padding-left: 2px;">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Beranda</a></li>
            <li class="breadcrumb-item"><a href="{{ url('/news') }}">Berita</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $item->title }}</li>
        </ol>
    </nav>
    <article class="single-content">
        <div class="content-header mb-4">
            <div class="content-title mb-3">
                <h2>{{ $item->title }}</h2>
            </div>
            <span class="content-span"><i class="fa fa-clock-o pr-1 text-warning" aria-hidden="true" style="font-size: 18px;"></i>{{ \Carbon\Carbon::create($item->post_date)->format('d F Y') }}</span>
        </div>
        <div class="body-content">
            <div class="image-content text-center mb-4">
                <img src="{{ Storage::url($item->image) }}" alt="" style="max-width: 100%;">
            </div>
            <div class="text-content">
                {!! $item->news_entry !!}
            </div>
        </div>
    </article>
    <div class="share mt-4">
        <ul class="list-group text-center">
            <div class="share-header">
                <p>Share <i class="fa fa-share-square-o" aria-hidden="true"></i></p>
            </div>
            <li>
                <a href="#" style="background-color: #4266B2;">
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
            </li>
            <li>
                <a href="#" style="background-color: #E21434;">
                    <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
            </li>
            <li>
                <a href="#" style="background-color: #25D365;">
                    <i class="fa fa-whatsapp" aria-hidden="true"></i>
                </a>
            </li>
        </ul>
    </div>
</div>
@endsection