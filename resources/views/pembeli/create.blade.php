@extends('welcome')
@section('content')
@section('page', 'Tambah Data Pembeli')
<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow rounded">
                <div class="card-body">
                    <form action="{{ route('pembeli.store') }}" method="POST">

                        @csrf

                        <div class="form-group">
                            <label class="font-weight-bold">Nama Pembeli</label>
                            <input type="text" class="form-control" name="namapelanggan" placeholder="Masukkan Nama Pembeli">
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">Alamat Pembeli</label>
                            <input type="text" class="form-control" name="alamatpelanggan" placeholder="Masukkan Alamat Pembeli">
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">Telepon Pembeli</label>
                            <input type="text" class="form-control" name="teleponpelanggan" placeholder="Masukkan Telepon Pembeli">
                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-success">
                                Simpan</button>
                            <a href="{{ route('pembeli.index') }}" class="btn btn-danger">
                                Kembali</a>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
