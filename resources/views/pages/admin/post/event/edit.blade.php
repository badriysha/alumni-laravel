@extends('layouts.admin')
@section('content')
<div class="content mt-3">
    <div class="card">
        <div class="card-header">
            Create <strong>Event</strong>
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
            <form action="{{ route('event.update', $item->id) }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                @csrf
                @method('PUT')
                <div class="form-group">
                        <div class="row">
                            <div class="col-sm-12 col-md-10 col-lg-6">
                                <div class="form-group">
                                    <label for="date" class=" form-control-label">Date</label>
                                    <input type="date" class="form-control" name="date" value="{{ $item->date }}" placeholder="Tanggal">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-10 col-lg-6">
                                <div class="form-group">
                                    <label for="post_date" class=" form-control-label">Category</label>
                                    <select name="category" class="form-control">
                                        <option value="" holder>select category</option>
                                        <option value="">Kajian</option>
                                        <option value="">Bisnis</option>
                                        <option value="">Webinar</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-4">
                            <label for="title" class=" form-control-label">Event Title</label>
                            <input type="text" class="form-control" name="title" value="{{ $item->title }}" placeholder="enter event title">
                        </div>
                        <div class="form-group mt-4">
                            <label for="image" class=" form-control-label">Thumbnail</label>
                            <input type="file" name="image" class="form-control-file">
                        </div>
                        <div class="form-group mt-5">
                            <textarea name="desc" rows="10" class="form-control">{{ $item->desc }}</textarea>
                        </div>
                        <div class="row text-center">
                            <div class="col-sm-12 col-md-3 mt-2 order-2 order-md-1">
                                <a href="{{ route('event.index') }}" class="btn btn-outline-secondary btn-block">Cancel</a>
                            </div>
                            <div class="col-sm-12 col-md-3 mt-2 order-1 order-md-2">
                                <button type="submit" class="btn btn-primary btn-block">Update</button>
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
    CKEDITOR.replace( 'desc' );
</script>
@endpush