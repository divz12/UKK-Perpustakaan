@extends('layouts.index')

@section('content')

<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">List Category</h5>
       <div class="d-flex ">
        <a href="/tambah-category" class="btn btn-dark btn-sm me-2">Tambah Category</a>
       
       </div>
    </div>
    <div class="table-responsive text-nowrap">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Category</th>
                    <th>Action</th>
                </tr>
            </thead>
        </table>
    </div>
</div>
@if (Session::get('status') == 'success')
<div class="bs-toast toast fade show bg-success position-fixed bottom-0 end-0 m-3" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header">
        <i class="bx bx-bell me-2"></i>
        <div class="me-auto fw-semibold">Berhasil</div>
        <small>Now</small>
        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <div class="toast-body">
        {{ Session::get('message') }}
    </div>
</div>
@endif

<style>
    @media (max-width: 767px) {
        .bs-toast {
            max-width: 200px;
            font-size: 12px;
        }
    }
</style>

@endsection