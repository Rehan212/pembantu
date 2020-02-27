@extends('layouts.dash')
    @section('content')
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                            <div class="card-header"><center><h1>Mengubah Data pembantu</h1></center></div>
                            <div class="card-body">
                                <form action="{{ route('pembantu.update', $pembantu->id) }}" method="post">
                                        <input name="_method" type="hidden" value="PATCH">
                                        {{ csrf_field() }}
                                        <div class="form-group">
                                            <label for="">Kode pembantu</label>
                                            <input class="form-control" value="{{ $pembantu->pembantu_kode }}" type="text" name="pembantu_kode">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Nama pembantu</label>
                                            <input class="form-control" value="{{ $pembantu->n_pembantu }}" type="text" name="n_pembantu">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Alamat</label>
                                            <input class="form-control" value="{{ $pembantu->alamat_pembantu }}" type="text area" name="alamat_pembantu">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Umur</label>
                                            <input class="form-control" value="{{ $pembantu->umur }}" type="text" name="umur">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Jenis Kelamin</label>
                                            <input class="form-control" value="{{ $pembantu->jk_pembantu }}" type="text" name="jk_pembantu">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Pendidikan</label>
                                            <input class="form-control" value="{{ $pembantu->pendidikan }}" type="text area" name="pendidikan">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Agama</label>
                                            <input class="form-control" value="{{ $pembantu->agama }}" type="text" name="agama">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Status</label>
                                            <input class="form-control" value="{{ $pembantu->status }}" type="text" name="status">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Pengalaman Kerja</label>
                                            <input class="form-control" value="{{ $pembantu->pengalaman_kerja }}" type="text" name="pengalaman_kerja">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Foto</label>
                                            @if (isset($pembantu) && $pembantu->photo_art)
                                                <p>
                                                    <img src="{{ asset('assets/img/'
                                                        .$pembantu->photo_art.'') }}"
                                                    style="margin-top:15px;margin-bottom:15px;
                                                        max-height:100px; border:1px; border-color:black;">
                                                </p>
                                            @endif
                                            <input class="form-control{{ $errors->has('photo_art') ? ' has-error' : '' }}" type="file"
                                                name="photo_art" id="" value="{{ $pembantu->photo_art }}">
                                                    @if ($errors->has('photo_art'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('photo_art') }}</strong>
                                                        </span>
                                                    @endif
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
