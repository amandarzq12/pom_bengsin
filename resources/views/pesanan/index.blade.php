@extends('welcome')
@section('content')
@section('page', 'Data Pesanan')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Data Pesanan</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <a href="{{ route('pesanan.create') }}">
                            <button class="btn btn-primary">Tambah Pesanan</button>
                        </a>
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>ID Pesanan</th>
                                    <th>Tanggal</th>
                                    <th>Nama Pelanggan</th>
                                    <th>Jumlah</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($pesanan as $item)
                                    <tr>
                                        <td>{{ $item->idpesanan }}</td>
                                        <td>{{ $item->created_at }}</td>
                                        <td>{{ $item->Pembeli->namapelanggan }}</td>
                                        <td>2</td>
                                        <td class="d-flex justify-content-center" style="gap: 20px;">
                                            <form onsubmit="return confirm('Apakah Anda yakin ?')"
                                                action="{{ route('pesanan.destroy', $item->idpesanan) }}"
                                                method="POST">
                                                <a href="{{ route('pesanan.edit', $item->idpesanan) }}"
                                                    class="btn btn-warning"><i class="fas fa-edit"></i> Tampilkan
                                                </a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger"><i
                                                        class="fas fa-trash"></i> Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="text-center text-mute">Tidak Ada Data</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>
<!-- /.content -->
@endsection
