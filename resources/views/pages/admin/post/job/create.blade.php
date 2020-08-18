@extends('layouts.admin')
@section('title', 'Tambah Lowongan')
@section('content')
<div class="pcoded-content">
    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="icon-briefcase bg-c-blue"></i>
                    <div class="d-inline">
                        <h5>Lowongan</h5>
                        {{-- <span>Daftar berita terbaru</span> --}}
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class=" breadcrumb breadcrumb-title">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item"><a href="{{ route('job.index') }}">Jobs</a> </li>
                        <li class="breadcrumb-item"><a href="#!">Create Job</a> </li>
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
                                    <h5>Job Form Inputs</h5>
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
                                    <form action="{{ route('job.store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Date</label>
                                            <div class="col-sm-10">
                                                <input name="date" class="form-control" type="date" value="{{ old('date') }}" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Company Logo</label>
                                            <div class="col-sm-10">
                                                <input type="file" name="company_logo" class="form-control" value="{{ old('company_logo') }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Company Name</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="company_name" class="form-control" value="{{ old('company_name') }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Position</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="position" class="form-control" value="{{ old('position') }}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <textarea class="form-control" id="editor" name="jobdesc">{{ old('news_entry') }}</textarea>
                                        </div>
                                        <div class="form-group text-center">
                                            <button type="submit" class="btn btn-primary btn-block">Submit</button>
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