@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="col-md-6">
                <div class="card " style="background-color: rgb(161, 161, 161)" >
                    <div class="card-body">
                      <h5 class="card-title text-center mb-4">Tambah Data</h5>
                      <form onsubmit="return confirm('Apakah Ini Sudah Benar?');" action="{{ route('barang.store')}}" method="post">
                        @csrf
                        <div class="row g-3 align-items-center">

                            <div class="col-md-3 mb-2">
                              <label for="inputPassword6" class="col-form-label">Nama</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" id="inputPassword6" class="form-control" name="name" placeholder="Masukan Nama" required>
                            </div>
                        </div>

                        <div class="row g-3 align-items-center">
                            <div class="col-md-3 mb-2">
                                <label for="inputPassword6" class="col-form-label">Jumlah</label>
                            </div>
                            <div class="col-md-8">
                                <input type="number" id="inputPassword6" class="form-control" name="jumlah" placeholder="Masukan Jumlah" required>
                            </div>
                        </div>

                        <div class="row g-3 align-items-center">
                            <div class="col-md-3 mb-2">
                                <label for="inputPassword6" class="col-form-label">Harga Beli</label>
                            </div>
                            <div class="col-md-8">
                                <input type="number" id="inputPassword6" class="form-control" name="harga_beli" placeholder="Masukan Harga Beli" required>
                            </div>
                        </div>

                        <div class="row g-3 align-items-center">
                            <div class="col-md-3 mb-2">
                                <label for="inputPassword6" class="col-form-label">Harga jual</label>
                            </div>
                            <div class="col-md-8">
                                <input type="number" id="inputPassword6" class="form-control" name="harga_jual" placeholder="Masukan Harga Jual" required>
                            </div>
                        </div>

                        <div class="row g-3 align-items-center">
                            <div class="col-md-3 mb-2">
                                <label for="inputPassword6" class="col-form-label">Fungsi</label>
                            </div>
                            <div class="col-md-8">
                              <textarea class="form-control" id="inputPassword6" rows="4" name="fungsi" placeholder="Masukan Fungsi" required></textarea>

                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary  mt-3">Submit</button>
                        <a href="{{ route('barang.index') }}"class="btn btn-warning mt-3 ">Cancel</a>
                    </form>
                    </div>
                  </div>
            </div>
        </div>
    </div>

@endsection
