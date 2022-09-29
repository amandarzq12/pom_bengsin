@extends('welcome')
@section('content')
@section('page', 'Data Produk')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Data Produk</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <a href="{{ route('produk.create') }}">
                            <button class="btn btn-primary">Tambah Produk</button>
                        </a>
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Produk</th>
                                    <th>Deskripsi Produk</th>
                                    <th>Harga</th>
                                    <th>Stok</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($produk as $item)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>{{ $item->namaproduk }}</td>
                                        <td>{{ $item->deskripsi }}</td>
                                        <td>Rp. {{ number_format($item->harga) }}</td>
                                        <td>{{ $item->stok }}</td>
                                        <td class="d-flex justify-content-center" style="gap: 20px;">
                                            <form onsubmit="return confirm('Apakah Anda yakin ?')"
                                                action="{{ route('produk.destroy', $item->idproduk) }}" method="POST">
                                                <a href="{{ route('produk.edit', $item->idproduk) }}"
                                                    class="btn btn-warning"><i class="fas fa-edit"></i> Edit
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
