@extends('welcome')
@section('content')
@section('page', 'Tambah Data Pesanan')
<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow rounded">
                <div class="card-body">
                    <form action="{{ route('pesanan.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label class="font-weight-bold">Pilih Pembeli</label>
                            <select class="form-control" name="idpelanggan" id="idpelanggan" required>
                                <option id="">--  Pilih Pembeli --</option>
                                @foreach ($pembeli as $item)
                                <option value="{{$item->idpelanggan}}">{{$item->namapelanggan}}</option>
                                @endforeach
                            </select>
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
