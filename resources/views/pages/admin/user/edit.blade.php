@extends('layouts.admin')
@section('content')
<div class="content mt-3">
    <div class="card">
        <div class="card-header">
            <strong>Edit User</strong>
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
            <form action="{{ route('user.update', $item->id) }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                @csrf
                @method('PUT')
                <div class="form-group">
                        <div class="row">
                            <div class="col-sm-12 col-md-10 col-lg-6">
                                <div class="form-group">
                                    <label for="name" class=" form-control-label">Name</label>
                                    <input type="text" class="form-control" name="name" value="{{ $item->name }}" placeholder="user name">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-10 col-lg-6">
                                <div class="form-group">
                                    <label for="roles" class=" form-control-label">Type</label>
                                    <select name="roles" class="form-control">
                                        @if ($item->roles == 'USER')
                                        <option value="USER" selected>User</option>
                                        <option value="ADMIN">Admin</option>
                                        @elseif($item->roles == 'ADMIN')
                                        <option value="USER">User</option>
                                        <option value="ADMIN" selected>Admin</option>
                                        @endif
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-10 col-lg-6">
                                <div class="form-group">
                                    <label for="email" class=" form-control-label">Email</label>
                                    <input type="email" class="form-control" name="email" value="{{ $item->email }}" placeholder="email" readonly>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-10 col-lg-6">
                                <div class="form-group">
                                    <label for="password" class=" form-control-label">Password</label>
                                    <input type="password" class="form-control" name="password" placeholder="password">
                                </div>
                            </div>
                        </div>
                        <div class="form-group my-4">
                            <label for="image" class=" form-control-label">Profile</label>
                            <input type="file" name="image" class="form-control-file">
                        </div>
                        <div class="row text-center mt-4">
                            <div class="col-sm-12 col-md-3 mt-2 order-2 order-md-1">
                                <a href="{{ route('user.index') }}" class="btn btn-outline-secondary btn-block">Cancel</a>
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