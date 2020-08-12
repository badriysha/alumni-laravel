@extends('layouts.news')
@section('title', 'News')
@section('content')
<div class="col-sm-12 col-md-12 col-lg-9 mb-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb" style="
        padding-left: 2px;">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Beranda</a></li>
            <li class="breadcrumb-item"><a href="{{ url('/news') }}">Berita</a></li>
            <li class="breadcrumb-item active" aria-current="page">Halaman 1</li>
        </ol>
    </nav>
    <div class="all-content py-2 mb-3">
        @foreach ($news as $item)
        <article class="content-list mb-4">
            <div class="row">
                <div class="col-sm-12 col-md-4 col-lg-4 pb-3">
                    <div class="content-image">
                        <a href="{{ route('news-detail', $item->slug) }}">
                            <img src="{{ Storage::url($item->image) }}" alt=""
                                class="img-fluid">
                        </a>
                    </div>
                </div>
                <div class="col-sm-12 col-md-8 col-lg-8">
                    <div class="content-body">
                        <div class="content-title title3">
                            <h3>
                                <a href="{{ route('news-detail', $item->slug) }}">{{ $item->title }}</a>
                            </h3>
                        </div>
                        <p class="content-info">
                            <i class="fa fa-calendar" aria-hidden="true"></i><span>{{ \Carbon\Carbon::create($item->post_date)->format('F n, Y') }}</span>
                        </p>
                        <div class="content-entry pb-0">
                            <p>
                                {!! str_word_count($item->news_entry) > 60 ? substr($item->news_entry,0,250)."[..]" : $item->news_entry; !!}
                            </p>
                            <a href="{{ route('news-detail', $item->slug) }}" class="btn-more mt-0 px-0"
                                style="font-size: 14px;">Selengkapnya<i
                                    class="fa fa-arrow-circle-right pl-1" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </article>
        @endforeach
    </div>
    {{-- <nav aria-label="...">
        <ul class="pagination justify-content-center">
            <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
            </li>
            <li class="page-item active" aria-current="page">
                <a class="page-link" href="#">1 <span class="sr-only">(current)</span></a>
            </li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item">
                <a class="page-link" href="#">Next</a>
            </li>
        </ul>
    </nav> --}}
</div>
@endsection