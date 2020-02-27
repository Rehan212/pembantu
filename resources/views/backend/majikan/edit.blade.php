@extends('layouts.dash')
    @section('content')
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                            <div class="card-header"><center><h1>Mengubah Data Majikan</h1></center></div>
                            <div class="card-body">
                                <form action="{{ route('majikan.update', $majikan->id) }}" method="post">
                                        <input name="_method" type="hidden" value="PATCH">
                                        {{ csrf_field() }}
                                        <div class="form-group">
                                            <label for="">Kode Majikan</label>
                                            <input class="form-control" value="{{ $majikan->majikan_kode }}" type="text" name="majikan_kode">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Nama Majikan</label>
                                            <input class="form-control" value="{{ $majikan->nama_majikan }}" type="text" name="nama_majikan">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Jenis Kelamin</label>
                                            <input class="form-control" value="{{ $majikan->jenis_kelamin }}" type="text" name="jenis_kelamin">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Alamat</label>
                                            <input class="form-control" value="{{ $majikan->alamat_majikan }}" type="text area" name="alamat_majikan">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Nomor KTP</label>
                                            <input class="form-control" value="{{ $majikan->no_ktp }}" type="text" name="no_ktp">
                                        </div>
                                        <div class="form-group">
                                                <button type="submit" class="btn btn-outline-info">
                                                Simpan Data
                                                </button>
                                            </div>
                                            <div class="form-group">
                                                <a href="{{ url('admin/majikan') }}" class="btn btn-outline-info">Kembali</a>
                                            </div>
                                </form>
                            </div>
                    </div>
                </div>
            </div>
        </div>

@endsection
