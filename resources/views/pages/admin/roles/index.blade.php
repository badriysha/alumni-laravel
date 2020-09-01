@extends('layouts.admin')
@section('title', 'Roles')
@section('content')
<div class="pcoded-content">
    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="icon-lock-open bg-c-blue"></i>
                    <div class="d-inline">
                        <h5>Role Management</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class=" breadcrumb breadcrumb-title">
                        <li class="breadcrumb-item">
                        <a href="{{ route('dashboard') }}"><i class="icon-lock-open"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Berita</a> </li>
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
                        <a href=""><button class="btn btn-sm btn-primary">Create Role</button></a>
                        <div class="dt-responsive table-responsive">
                              <table id="base-style" class="table table-striped table-bordered nowrap">
                                  <thead>
                                      <tr>
                                          <th>ID</th>
                                          <th>Role Type</th>
                                          <th>Create At</th>
                                          <th>Action</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      
                                      <tr>
                                        <td>1</td>
                                        <td>SUPER-ADMIN</td>
                                        <td>All</td>
                                        <td class="text-center">
                                          <a href="" class="text-primary">
                                            <span class="icofont icofont-ui-edit"></span>
                                          </a>
                                          <a href="" class="text-danger px-2" onclick="event.preventDefault();document.getElementById('destroy-form').submit();">
                                            <i class="fa fa-trash"></i>
                                          </a>
                                          <form id="destroy-form" action="" method="POST" style="display: none">
                                          @csrf
                                          </form>
                                        </td>
                                      </tr>
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
  <link rel="stylesheet" type="text/css" href="{{ url('backend/css/responsive.bootstrap4.min.css') }}">
@endpush
@push('script-addon')
    <script src="{{ url('backend/js/jquery.datatables.min.js') }}" type="text/javascript"></script>
    <script src="{{ url('backend/js/datatables.bootstrap4.min.js') }}" type="text/javascript"></script>
    <script src="{{ url('backend/js/datatables.responsive.min.js') }}" type="text/javascript"></script>
    <script src="{{ url('backend/js/data-table-custom.js') }}" type="text/javascript"></script>
@endpush
