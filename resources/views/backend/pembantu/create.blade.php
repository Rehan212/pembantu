@extends('layouts.dash')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><center><h1>Membuat Data Pembantu</h1></center></div>
                <div class="card-body">
                    <form action="{{ route('pembantu.store') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                            <div class="form-group">
                                <label for="">Kode</label>
                                <input class="form-control" type="text" name="pembantu_kode" value="P<?php echo (rand())?>" readonly>
                            </div>
                            <div class="form-group">
                                <label for="">Nama</label>
                                <input class="form-control" type="text" name="n_pembantu">
                            </div>
                            <div class="form-group">
                                <label>Alamat </label>
                                <textarea id="" class="form-control" name="alamat_pembantu" rows="10" cols="50"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="">Umur</label>
                                <input class="form-control" type="text" name="umur">
                            </div>
                            <div class="form-group">
                                <label for="">Jenis Kelamin</label>
                                <select name="jk_pembantu" id="" class="form-control">
                                    <option value="P">Perempuan</option>
                                    <option value="L">Laki-laki</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Pendidikan</label>
                                <select class="form-control" name="pendidikan" id="">
                                    <option value="SMP">SMP</option>
                                    <option value="MA">MA</option>
                                    <option value="SMA">SMA</option>
                                    <option value="SMK">SMK</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Agama</label>
                                <select class="form-control" name="agama" id="">
                                    <option value="Islam">Islam</option>
                                    <option value="Kristen">Kristen</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Buddha">Buddha</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Status</label>
                                <select class="form-control" name="status" id="" >
                                    <option value="Sudah Menikah">Sudah Menikah</option>
                                    <option value="Belum Menikah">Belum Menikah</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Pengalaman Kerja</label>
                                <input class="form-control" type="text" name="pengalaman_kerja">
                            </div>

                            <div class="form-group">
                                    <div class="file-upload-inner ts-forms">
                                            <div class="input prepend-big-btn">
                                                <div class="file-button">
                                                    Foto
                                                    <input required type="file" class="form-control" name="photo_art" onchange="document.getElementById('prepend-big-btn').value = this.value;">
                                                </div>
                                            </div>
                                        </div>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-outline-info">
                                Simpan Data
                                </button>
                            </div>
                            <div class="form-group">
                                <a href="{{ url('admin/pembantu') }}" class="btn btn-outline-info">Kembali</a>
                            </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
