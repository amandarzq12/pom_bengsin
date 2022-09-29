@extends('welcome')
@section('content')
@section('page', 'Tambah Data Supplier')
<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow rounded">
                <div class="card-body">
                    <form action="{{ route('supplier.store') }}" method="POST">

                        @csrf

                        <div class="form-group">
                            <label class="font-weight-bold">Nama Supplier</label>
                            <input type="text" class="form-control" name="namasupplier" placeholder="Masukkan Nama Supplier">
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">Alamat Supplier</label>
                            <input type="text" class="form-control" name="alamatsupplier" placeholder="Masukkan Alamat Supplier">
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">Telepon Supplier</label>
                            <input type="number" class="form-control" name="teleponsupplier" placeholder="Masukkan Telepon Supllier">
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">Pilih Produk</label>
                            <select class="form-control" name="idproduk" id="idproduk" required>
                                <option id="idproduk">--  Pilih Produk --</option>
                                @foreach ($produk as $item)
                                <option value="{{$item->idproduk}}">{{$item->namaproduk}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">Harga Ambil </label>
                            <input type="number" class="form-control" name="hargaambil" placeholder="Masukkan Harga Ambil">
                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-success">
                                Simpan</button>
                            <a href="{{ route('supplier.index') }}" class="btn btn-danger">
                                Kembali</a>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
