@extends('layouts.index')
@section('title','Tambah Buku')

@section('content')
<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h4>Tambah Buku</h4>
            </div>
            <div class="card-body">
                <form action="buku" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="name">Judul</label>
                        <input type="text" name="judul" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="name">Penulis</label>
                        <input type="text" name="penulis" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="name">Penerbit</label>
                        <input type="text" name="penerbit" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="name">Tahun Terbit</label>
                        <input type="date" name="tahun_terbit" class="form-control">
                    </div>

                    <div class="mb-3">
                        <button class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
    
@endsection