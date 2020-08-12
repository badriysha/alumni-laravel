@extends('layouts.search')
@section('title', 'Cari Alumni')
@section('content')
<section class="search-section">
    <div class="container">
        <div class="search">
            <div class="row card-search">
                <div class="col-sm-12 offset-md-2 col-md-8">
                    <div class="search-header py-3">
                        <center>
                            <h2>Cari Data Alumni</h2>
                        </center>
                    </div>
                    <div class="search-body">
                        <div class="input-group mb-3 px-5">
                            <input type="text" class="form-control" placeholder="nama, jurusan, profesi"
                                aria-label="Recipient's username" aria-describedby="button-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="button"
                                    id="button-addon2">Cari</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection