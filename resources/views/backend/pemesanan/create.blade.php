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
                                <label for="">Kode Kategori</label>
                                <select class="form-control" name="kategori_nama">
                                    <option value="" disabled>-- Pilih Data Kategori--</option>
                                        @foreach($kategori as $data)
                                            <option value="{{ $data->id }}">{{ $data->kategori_nama }}</option>
                                        @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Kode Pembantu</label>
                                <select class="form-control" name="pembantu_kode">
                                    <option value="" disabled>-- Pilih Kode Pembantu--</option>
                                        @foreach($pembantu as $data)
                                            <option value="{{ $data->id }}">{{ $data->pembantu_kode }}</option>
                                        @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                    <label for="">Kode Majikan</label>
                                    <select class="form-control" name="nama_majikan">
                                        <option value="" disabled>-- Pilih Kode Majikan--</option>
                                            @foreach($majikan as $data)
                                                <option value="{{ $data->id }}">{{ $data->nama_majikan }}</option>
                                            @endforeach
                                    </select>
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
