@extends('layouts.admin')
@section('content')
<div class="content mt-3">
  <div class="animated fadeIn">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row d-inline">
                      <div class="col-sm-4 col-md-4">
                        Daftar User
                      </div>
                      <div class="col-sm-8 col-md-8">
                        <a href="{{ route('user.create') }}" class="btn btn-primary btn-sm float-right ml-2"><i class="fa fa-plus"></i>&nbsp; Create User</a>
                        <a href="{{ route('user.create') }}" class="btn btn-success btn-sm float-right ml-2"><i class="fa fa-upload"></i>&nbsp; Excel</a>
                      </div>
                    </div>
                </div>
                <div class="card-body">
                    <table id="bootstrap-data-table-export" class="table table-striped table-bordered" style="width: 100%">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Type</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                          @forelse ($items as $item)
                          <tr style="font-weight: 300; font-size: 14px;">
                              <td>{{ $item->name }}</td>
                              <td>{{ $item->email }}</td>
                              <td>{{ $item->roles }}</td>
                              <td>
                                  <a href="{{ route('user.edit', $item->id) }}" class="btn btn-info btn-sm">
                                      <i class="fa fa-pencil"></i>
                                  </a>
                                  <form action="{{ route('user.destroy', $item->id) }}" method="POST" class="d-inline">
                                      @csrf
                                      @method('delete')
                                      <button type="submit" class="btn btn-danger btn-sm">
                                        <i class="fa fa-trash-o"></i>
                                      </button>
                                  </form>
                              </td>
                          </tr>
                        @empty
                          <tr>
                              <td colspan="5" class="text-center">Data Kosong</td>
                          </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('addon-style')
<link rel="stylesheet" href="{{ url('backend/vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ url('backend/vendors/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}">
@endpush
@push('addon-script')
  <script src="{{ url('backend/vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
  <script src="{{ url('backend/vendors/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
  <script src="{{ url('backend/vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') }}"></script>
  <script src="{{ url('backend/assets/js/init-scripts/data-table/datatables-init.js') }}"></script>
@endpush