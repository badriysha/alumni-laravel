@extends('layouts.admin')
@section('content')
<div class="content mt-3">
    <div class="card">
        <div class="card-header">
            Create <strong>New Job</strong>
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
        <div class="card-body card-block">
            <form action="{{ route('job.store') }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                @csrf
                <div class="form-group">
                        <div class="row">
                            <div class="col-sm-12 col-md-10 col-lg-6">
                                <div class="form-group">
                                    <label for="company_name" class=" form-control-label">Company Name</label>
                                    <input type="text" class="form-control" name="company_name" value="{{ old('company_name') }}" placeholder="enter company name">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-10 col-lg-6">
                                <div class="form-group">
                                    <label for="date" class=" form-control-label">Date</label>
                                    <input type="date" class="form-control" name="date" value="{{ old('date') }}" placeholder="Tanggal">
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-4">
                            <label for="position" class=" form-control-label">Position</label>
                            <input type="text" class="form-control" name="position" value="{{ old('position') }}" placeholder="enter position">
                        </div>
                        <div class="form-group mt-4">
                            <label for="company_logo" class=" form-control-label">Company Logo</label>
                            <input type="file" name="company_logo" class="form-control-file">
                        </div>
                        <div class="form-group mt-5">
                            <textarea name="jobdesc" rows="10" class="form-control">{{ old('jobdesc') }}</textarea>
                        </div>
                        <div class="row text-center">
                            <div class="col-sm-12 col-md-3 mt-2 order-2 order-md-1">
                                <a href="{{ route('job.index') }}" class="btn btn-outline-secondary btn-block">Cancel</a>
                            </div>
                            <div class="col-sm-12 col-md-3 mt-2 order-1 order-md-2">
                                <button type="submit" class="btn btn-primary btn-block">Submit</button>
                            </div>
                        </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@push('addon-style')
    <script src="{{ url('backend/vendors/ckeditor/ckeditor.js') }}"></script>
@endpush
@push('addon-script')
<script>
    CKEDITOR.replace('jobdesc', {
        extraPlugins: 'easyimage'
    });
</script>
@endpush