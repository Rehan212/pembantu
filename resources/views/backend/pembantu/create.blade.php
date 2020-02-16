@extends('layouts.dash')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><center><h1>Membuat Data Pembantu</h1></center></div>
                <div class="card-body">
                    <form action="{{ route('pembantu.store') }}" method="post">
                        {{ csrf_field() }}
                            <div class="form-group">
                                <label for="">Kode</label>
                                <input class="form-control" type="text" name="pembantu_kode">
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
                                <input class="form-control" type="text" name="jk_pembantu">
                            </div>
                            <div class="form-group">
                                <label for="">Pendidikan</label>
                                <input class="form-control" type="text" name="pendidikan">
                            </div>
                            <div class="form-group">
                                <label for="">Agama</label>
                                <input class="form-control" type="text" name="agama">
                            </div>
                            <div class="form-group">
                                <label for="">Status</label>
                                <input class="form-control" type="text" name="status">
                            </div>
                            <div class="form-group">
                                <label for="">Pengalaman Kerja</label>
                                <input class="form-control" type="text" name="pengalaman_kerja">
                            </div>
                            <div class="file-upload-inner ts-forms">
                                <div class="input prepend-big-btn">
                                        <label class="icon-right" for="prepend-big-btn">
                                            <i class="fa fa-download"></i>
                                        </label>
                                    <div class="file-button">
                                        Photo KTP
                                        <input required type="file" class="form-control" name="photo_art" onchange="document.getElementById('prepend-big-btn').value = this.value;">
                                    </div>
                                    <input type="text" readonly id="prepend-big-btn" disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-outline-info">
                                Simpan Data
                                </button>
                            </div>
                            <div class="form-group">
                                <a href="{{ url('pembantu') }}" class="btn btn-outline-info">Kembali</a>
                            </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
