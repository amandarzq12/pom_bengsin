@extends('welcome')
@section('content')
@section('page', 'Tambah Data Produk')
<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow rounded">
                <div class="card-body">
                    <form action="{{ route('produk.store') }}" method="POST">

                        @csrf

                        <div class="form-group">
                            <label class="font-weight-bold">Nama Produk</label>
                            <input type="text" class="form-control" name="namaproduk" placeholder="Masukkan Nama Produk">
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">Deskripsi</label>
                            <input type="text" class="form-control" name="deskripsi" placeholder="Masukkan Deskripsi Produk">
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">Harga</label>
                            <input type="number" class="form-control" name="harga" placeholder="Masukkan Harga Produk">
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">Stok</label>
                            <input type="text" class="form-control" name="stok" placeholder="Masukkan Stok Produk">
                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-success">
                                Simpan</button>
                            <a href="{{ route('produk.index') }}" class="btn btn-danger">
                                Kembali</a>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
