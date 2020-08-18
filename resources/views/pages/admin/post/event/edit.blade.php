@extends('layouts.admin')
@section('title', 'Update Event')
@section('content')
<div class="pcoded-content">
    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="icon-calendar bg-c-blue"></i>
                    <div class="d-inline">
                        <h5>Update Event</h5>
                        {{-- <span>Daftar berita terbaru</span> --}}
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class=" breadcrumb breadcrumb-title">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="icon-calendar"></i></a></li>
                        <li class="breadcrumb-item"><a href="{{ route('event.index') }}">Events</a> </li>
                        <li class="breadcrumb-item"><a href="#!">Update Event</a> </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-body">
                    {{-- start content --}}
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Event Form Inputs</h5>
                                </div>
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <div class="card-block">
                                    <form action="{{ route('event.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Category</label>
                                            <div class="col-sm-10">
                                                <select name="select" class="form-control">
                                                    <option value="opt1">Select Category
                                                    </option>
                                                    <option value="opt2">Type 2</option>
                                                    <option value="opt3">Type 3</option>
                                                    <option value="opt4">Type 4</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Date</label>
                                            <div class="col-sm-10">
                                                <input name="date" class="form-control" type="date" value="{{ $item->date }}" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Thumbnail</label>
                                            <div class="col-sm-10">
                                                <input type="file" name="image" class="form-control" value="{{ $item->image }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Event Title</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="title" class="form-control" value="{{ $item->title }}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <textarea class="form-control" id="editor" name="desc">{{ $item->desc }}</textarea>
                                        </div>
                                        <div class="form-group text-center">
                                            <button type="submit" class="btn btn-primary btn-block">Update</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('style-addon')
    <script type="text/javascript" src="{{ url('vendor/ckeditor4/ckeditor.js') }}"></script>
@endpush
@push('script-addon')
    <script>
        var options = {
        filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
        filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
        filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
        filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
        };
    </script>
    <script>
        CKEDITOR.replace('editor', options);
    </script>
@endpush