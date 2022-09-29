@extends('welcome')
@section('content')
@section('page', 'Edit Data Supplier')
<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow rounded">
                <div class="card-body">
                    <form action="{{ route('supplier.update', $item->idsupplier) }}" method="POST">

                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label class="font-weight-bold">Nama Supplier</label>
                            <input type="text" class="form-control" name="namasupplier"
                                placeholder="Masukkan Nama Supplier" value="{{ $item->namasupplier }}">
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">Alamat Supplier</label>
                            <input type="text" class="form-control" name="alamatsupplier"
                                placeholder="Masukkan Alamat Supplier" value="{{ $item->alamatsupplier }}">
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">Telepon Supplier</label>
                            <input type="number" class="form-control" name="teleponsupplier"
                                placeholder="Masukkan Telepon Supllier" value="{{ $item->teleponsupplier }}">
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">Harga Ambil </label>
                            <input type="number" class="form-control" name="hargaambil"
                                placeholder="Masukkan Harga Ambil" value="{{ $item->hargaambil }}">
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">Pilih Produk</label>
                            <select class="form-control" name="idproduk" id="idproduk" required>
                                <option id="idproduk">{{$item->produk->namaproduk}}</option>
                                @foreach ($produk as $item)
                                    <option value="{{ $item->idproduk }}">{{ $item->namaproduk }}</option>
                                @endforeach
                            </select>
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
