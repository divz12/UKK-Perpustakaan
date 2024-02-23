@extends('layouts.index')
@section('title','Edit Buku')

@section('content')
<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h4>Edit Buku</h4>
            </div>
            <div class="card-body">
                <form action="/book" method="post">
                    @csrf
                    @method('put')
                    <div class="mb-3">
                        <label for="name">Judul</label>
                        <input type="text" name="judul" class="form-control" value="{{ $book->judul }}">
                        <input type="hidden" name="id" class="form-control" value="{{ $book->id }}">
                    </div>
                    <div class="mb-3">
                        <label for="name">Penulis</label>
                        <input type="text" name="penulis" class="form-control" value="{{ $book->penulis }}">
                    </div>
                    <div class="mb-3">
                        <label for="name">Penerbit</label>
                        <input type="text" name="penerbit" class="form-control" value="{{ $book->penerbit }}">
                    </div>
                    <div class="mb-3">
                        <label for="name">Tahun Terbit</label>
                        <input type="date" name="tahun_terbit" class="form-control" value="{{ $book->tahun_terbit }}">
                    </div>
                    <div class="mb-3">
                        <label for="name">Kategori</label>
                        <select name="category_id" id="" class="form-control">
                            @foreach ($categories as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
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