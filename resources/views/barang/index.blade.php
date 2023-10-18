@extends('layouts.main')

@section('content')


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 mt-3">
                <div>
                    <h3 class="text-center">Data Barang</h3>
                </div>
                <a class="btn btn-primary mb-2" href="{{ route('barang.create') }}">Tambah Data</a>
                <table class="table table-bordered" style="width:100%" >
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Nama</th>
                        <th>Jumlah</th>
                        <th>Harga Beli</th>
                        <th>Harga Jual</th>
                        <th>Fungsi</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>

                        @forelse ($barangs as $b)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $b->name }}</td>
                            <td>{{ $b->jumlah }}</td>
                            <td>{{ $b->harga_beli }}</td>
                            <td>{{ $b->harga_jual }}</td>
                            <td>{{ $b->fungsi }}</td>
                            <td class="text-center">
                                <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('barang.destroy', $b->id ) }}" method="POST">
                                <a class="btn btn-sm btn-warning" href="{{route('barang.edit', $b->id )}}">edit</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">hapus</button>
                                </form>
                                </td>
                        </tr>
                        @empty
                            <div class="alert alert-danger">
                                Data Belum tersedia
                            </div>
                        @endforelse


                    </tbody>
                  </table>
            </div>
        </div>
    </div>


@endsection

