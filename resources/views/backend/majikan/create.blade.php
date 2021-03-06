@extends('layouts.dash')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><center><h1>Membuat Data Majikan</h1></center></div>
                <div class="card-body">
                    <form action="{{ route('majikan.store') }}" method="post">
                        {{ csrf_field() }}
                            <div class="form-group">
                                <label for="">Kode</label>
                                <input class="form-control" type="text" name="majikan_kode" value="M<?php echo (rand())?>" readonly>
                            </div>
                            <div class="form-group">
                                <label for="">Nama</label>
                                <input class="form-control" type="text" name="nama_majikan">
                            </div>
                            <div class="form-group">
                                <label for="">Jenis Kelamin</label>
                                <select name="jenis_kelamin" id="" class="form-control">
                                    <option value="Perempuan">Perempuan</option>
                                    <option value="Laki-laki">Laki-laki</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Alamat </label>
                                <textarea id="" class="form-control" name="alamat_majikan" rows="10" cols="50"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="">Nomor Ponsel</label>
                                <input class="form-control" type="text" name="no_ktp">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-outline-info">
                                Simpan Data
                                </button>
                            </div>
                            <div class="form-group">
                                <a href="{{ url('/admin/majikan') }}" class="btn btn-outline-info">Kembali</a>
                            </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
