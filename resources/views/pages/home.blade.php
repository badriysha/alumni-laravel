@extends('layouts.app')
@section('content')
<header class="container mb-5" id="carousel">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active text-center">
                <img src="/frontend/images/bg_carousel1.jpg" alt="" class="img-fluid">
            </div>
            <div class="carousel-item">
                <img src="/frontend/images/bg_carousel2.jpg" alt="" class="img-fluid">
            </div>
            <div class="carousel-item">
                <img src="/frontend/images/bg_carousel3.jpg" alt="" class="img-fluid">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</header>
<section class="news-section mb-5">
    <div class="container">
        <div href="#" class="news-body">
            <div class="list-title">
                <center>
                    <div class="title2">BERITA ALUMNI</div>
                </center>
            </div>
            <div class="row pt-2">
                @foreach ($news as $item)
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card mb-4">
                        <div class="row">
                            <div class="col-sm-12 col-md-4 col-lg-12">
                                <div class="post-img">
                                    <a href="{{ route('news-detail', $item->slug) }}">
                                        <img src="{{ Storage::url($item->image) }}" class="card-img-top">
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-8 col-lg-12">
                                <div class="card-body">
                                    <div class="card-title post-title">
                                        <h3>
                                            <a href="{{ route('news-detail', $item->slug) }}">{{ $item->title }}</a>
                                        </h3>
                                    </div>
                                    <span class="post-date"><i class="fa fa-clock-o pr-1" aria-hidden="true" style="font-size: 16px;"></i>{{ \Carbon\Carbon::create($item->post_date)->format('d F Y') }}</span>
                                    {{-- <p class="card-text mb-1 mt-1" style="none">
                                        {!! str_word_count($item->news_entry) > 60 ? substr($item->news_entry,0,125)."[..]" : $item->news_entry; !!}
                                    </p> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="btn-box text-right">
                <a href="{{ route('news') }}" class="btn btn-more">Berita lainnya<i class="fa fa-arrow-circle-right pl-1"
                        aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
</section>
<section class="info-section pt-5 pb-4 mb-4">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-4 body-custom">
                <!-- Jobs Section -->
                <section class="jobs-section mb-3 py-4 px-4">
                    <div class="row">
                        <div class="col-sm-12 col-lg-12">
                            <div class="job-header">
                                <div class="list-title">
                                    <center>
                                        <div class="title2">LOWONGAN</div>
                                    </center>
                                </div>
                            </div>
                            @foreach ($jobs as $item)
                                <article class="post-body pb-2 mb-1">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-4 col-lg-4 mb-3 post-image">
                                            <a href="#">
                                                <img src="{{ Storage::url($item->company_logo) }}" alt="Icon Job">
                                            </a>
                                        </div>
                                        <div class="col-sm-12 col-md-8 col-lg-8 post-content">
                                            <div class="post-title">
                                                <h3><a href="#">{{ $item->company_name }}</a></h3>
                                                <span class="post-date">
                                                    <i class="fa fa-clock-o pr-1" aria-hidden="true" style="font-size: 16px;"></i>
                                                    {{ \Carbon\Carbon::create($item->date)->format('d F Y') }}
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            @endforeach
                            <div class="text-right">
                                <a href="{{ route('news') }}" class="btn btn-more">Lainnya<i class="fa fa-arrow-circle-right pl-1"
                                        aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            <!-- Donasi -->
            <div class="col-12 col-md-12 col-lg-4 body-custom">
                <section class="donation-section mb-3 py-4 px-4">
                    <div class="row">
                        <div class="col-12">
                            <div class="job-header">
                                <div class="list-title">
                                    <center>
                                        <div class="title2">DONASI</div>
                                    </center>
                                </div>
                            </div>
                            <article class="post-body pb-2 mb-1">
                                <div class="row">
                                    <div class="col-sm-12 col-md-4 col-lg-4 mb-3 post-image">
                                        <a href="#">
                                            <img src="" alt="">
                                        </a>
                                    </div>
                                    <div class="col-sm-12 col-md-8 col-lg-8 post-content">
                                        <div class="post-title">
                                            <h3><a href="">Beasiswa Hafidz Qur'an</a></h3>
                                            <span class="post-date">
                                                <i class="fa fa-clock-o pr-1" aria-hidden="true" style="font-size: 16px;"></i>15 Juni 2020
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <div class="text-right">
                                <a href="{{ route('news') }}" class="btn btn-more">Lainnya<i class="fa fa-arrow-circle-right pl-1"
                                        aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            <!-- Schedule -->
            <div class="col-12 col-md-12 col-lg-4 body-custom">
                <section class="schedule-section mb-3 py-4 px-4">
                    <div class="row">
                        <div class="col-sm-12 col-lg-12">
                            <div class="job-header">
                                <div class="list-title">
                                    <center>
                                        <div class="title2">AGENDA</div>
                                    </center>
                                </div>
                            </div>
                            @foreach ($events as $event)
                            <article class="post-body pb-2 mb-1">
                                <div class="row">
                                    <div class="col-sm-4 col-md-4 col-lg-4 event-date text-center">
                                        <span>
                                            {{ \Carbon\Carbon::create($event->date)->format('d') }}
                                            <strong class="mt-2">{{ \Carbon\Carbon::create($event->date)->format('F') }}</strong>
                                        </span>
                                    </div>
                                    <div class="col-sm-8 col-md-8 col-lg-8 post-content">
                                        <div class="post-title">
                                            <h3><a href="">{{ $event->title }}</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            @endforeach
                            <div class="text-right">
                                <a href="{{ route('news') }}" class="btn btn-more">Lainnya<i class="fa fa-arrow-circle-right pl-1"
                                        aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    </div>
</section>
<section class="article-section mb-4">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12">
                <div class="profile-header">
                    <div class="list-title">
                        <center>
                            <div class="title2">TULISAN ALUMNI</div>
                        </center>
                    </div>
                </div>
                <div class="article-carousel owl-carousel owl-theme">
                    <div class="card-article text-center d-flex flex-column"
                        style="background-image: url('frontend/images/writer.jpg');">
                        <div class="article-category pb-2">Bisnis</div>
                        <div class="article-title">Ide Bisnis Tahun 2020</div>
                        <div class="article-button mt-auto">
                            <a href="details.html" class="btn btn-article-details px-4">
                                View Details
                            </a>
                        </div>
                    </div>
                    <div class="card-article text-center d-flex flex-column"
                        style="background-image: url('frontend/images/writer2.jpg');">
                        <div class="article-category pb-2">Akutansi Syariah</div>
                        <div class="article-title">Mengelola Bank Syariah</div>
                        <div class="article-button mt-auto">
                            <a href="details.html" class="btn btn-article-details px-4">
                                View Details
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@push('addon-style')
<link rel="stylesheet" href="{{ url('frontend/libraries/owl/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ url('frontend/libraries/owl/owl.theme.default.min.css') }}">
@endpush
@push('addon-script')
<script src="{{ url('frontend/libraries/owl/owl.carousel.min.js') }}"></script>
<script>
        $(function () {
            $('.article-carousel').owlCarousel({
                loop: true,
                margin: 20,
                autoplay: true,
                dots: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 3
                    }
                }
            })
        });
</script>
@endpush