@extends('layouts.admin')
@section('title', 'Lowongan')
@section('content')
<div class="pcoded-content">
    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="icon-briefcase bg-c-blue"></i>
                    <div class="d-inline">
                        <h5>Daftar Lowongan</h5>
                        {{-- <span>Daftar berita terbaru</span> --}}
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class=" breadcrumb breadcrumb-title">
                        <li class="breadcrumb-item">
                        <a href="{{ route('dashboard') }}"><i class="icon-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Jobs</a> </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-body">
                    {{-- start table --}}
                    <div class="card">
                      <div class="card-block">
                        <a href="{{ route('job.create') }}"><button class="btn btn-sm btn-primary">Create Job</button></a>
                        <div class="dt-responsive table-responsive">
                              <table id="base-style" class="table table-striped table-bordered nowrap">
                                  <thead>
                                      <tr>
                                          <th>Nama Perusahaan</th>
                                          <th>Jabatan</th>
                                          <th>Author</th>
                                          <th>Tanggal</th>
                                          <th>Action</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      @forelse ($items as $item)
                                      <tr>
                                        <td>{{ $item->company_name }}</td>
                                        <td>{{ $item->position }}</td>
                                        <td>{{ $item->users->name }}</td>
                                        <td>{{ \Carbon\Carbon::create($item->date)->format('Y/m/d') }}</td>
                                        <td class="text-center">
                                          <a href="{{ route('job.edit', $item->id) }}" class="text-primary">
                                            <span class="icofont icofont-ui-edit"></span>
                                          </a>
                                          <a href="{{ route('job.destroy', $item->id) }}" class="text-danger px-2" onclick="event.preventDefault();document.getElementById('destroy-form').submit();">
                                            <i class="fa fa-trash"></i>
                                          </a>
                                          <form id="destroy-form" action="{{ route('job.destroy', $item->id) }}" method="POST" style="display: none">
                                          @csrf
                                          </form>
                                        </td>
                                      </tr>
                                      @empty
                                          <tr>
                                            <td colspan="4" class="text-center">Data Kosong</td>
                                          </tr>
                                      @endforelse
                                  </tbody>
                              </table>
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
  <link rel="stylesheet" type="text/css" href="{{ url('backend/css/datatables.bootstrap4.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ url('backend/css/buttons.datatables.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ url('backend/css/responsive.bootstrap4.min.css') }}">
@endpush
@push('script-addon')
    <script src="{{ url('backend/js/jquery.datatables.min.js') }}" type="text/javascript"></script>
    <script src="{{ url('backend/js/datatables.buttons.min.js') }}" type="text/javascript"></script>
    <script src="{{ url('backend/js/datatables.buttons.min-2.js') }}" type="text/javascript"></script>
    <script src="{{ url('backend/js/buttons.flash.min.js') }}" type="text/javascript"></script>
    <script src="{{ url('backend/js/buttons.html5.min.js') }}" type="text/javascript"></script>
    <script src="{{ url('backend/js/datatables.bootstrap4.min.js') }}" type="text/javascript"></script>
    <script src="{{ url('backend/js/datatables.responsive.min.js') }}" type="text/javascript"></script>
    <script src="{{ url('backend/js/responsive.bootstrap4.min.js') }}" type="text/javascript"></script>
    <script src="{{ url('backend/js/data-table-custom.js') }}" type="text/javascript"></script>
@endpush