@extends('layouts.dash')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><center><h1>Membuat Data Pemesanan</h1></center></div>
                <div class="card-body">
                    <form action="{{ route('pemesanan.store') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                            <div class="form-group">
                                <label for="">Kode</label>
                                <input class="form-control" type="text" name="pemesanan_kode" value="PS<?php echo (rand())?>" readonly>
                            </div>
                            <div class="form-group">
                                <label for="">Nama</label>
                                <input class="form-control" type="text" name="n_pemesanan">
                            </div>
                            <div class="form-group">
                                <label for="">Kode Kategori</label>
                                <input class="form-control" type="text" name="kategori_kode">
                            </div>
                            <div class="form-group">
                                <label for="">Kode Pembantu</label>
                                <input class="form-control" type="text" name="pembantu_kode">
                            </div>
                            <div class="form-group">
                                <label for="">Durasi Kontrak</label>
                                <input class="form-control" type="text" name="durasi_kontrak">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-outline-info">
                                Simpan Data
                                </button>
                            </div>
                            <div class="form-group">
                                <a href="{{ url('pemesanan') }}" class="btn btn-outline-info">Kembali</a>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
