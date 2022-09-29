@extends('welcome')
@section('content')
@section('page', 'Data Supplier')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Data Supplier</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <a href="{{ route('supplier.create') }}">
                            <button class="btn btn-primary">Tambah Supplier</button>
                        </a>
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Supplier</th>
                                    <th>Alamat Supplier</th>
                                    <th>Telepon Supplier</th>
                                    <th>Nama Produk</th>
                                    <th>Harga Ambil</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($supplier as $item)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>{{ $item->namasupplier }}</td>
                                        <td>{{ $item->alamatsupplier }}</td>
                                        <td>{{ $item->teleponsupplier }}</td>
                                        <td>{{ $item->produk->namaproduk }}</td>
                                        <td>Rp. {{ number_format($item->hargaambil) }}</td>
                                        <td class="d-flex justify-content-center" style="gap: 20px;">
                                            <form onsubmit="return confirm('Apakah Anda yakin ?')"
                                                action="{{ route('supplier.destroy', $item->idsupplier) }}" method="POST">
                                                <a href="{{ route('supplier.edit', $item->idsupplier) }}"
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
                                            <td colspan="7" class="text-center text-mute">Tidak Ada Data</td>
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
