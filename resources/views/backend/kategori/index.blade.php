@extends('layouts.dash')

@section('content')

<center><h1>Data Kategori</h1></center>
<br>
    <div class="table-responsive">

        <a href="{{url('/kategori/create')}}"class="btn btn-primary form-control">Tambah Data</a><br><br>
        <table id="tab" class="table">
			<!-- <table class="table table-default"> -->
            <thead>
                <tr class="bg-info">
                    <th>No</th>
                    <th>Kode Kategori</th>
                    <th>Nama Kategori</th>
                    <th><center>Action</center></th>

                </tr>
                </thead>
	        <tbody>
		        @php
		        $no=1;
		        @endphp
		        @foreach($kategori as $data)
		            <tr>
			            <td>{{$no++}}</td>
			            <td>{{ $data->kategori_kode }}</td>
                        <td>{{ $data->kategori_nama }}</td>
						<td>
                            <center>
                                <button class="btn-lg"><a  href="{{route('kategori.edit',$data->id)}}"><span class="ti-pencil"></span></a></button>
                                <form action="{{ route('kategori.destroy', $data->id) }}" method="post">
								    @csrf
								    <input type="hidden" name="_method" value="DELETE">
							        <button class="btn-lg" type="submit"><span class="ti-trash"></span></button>
							    </form>
                            </center>
						</td>
		            </tr>
		        @endforeach
            </tbody>
        </table>
    </div>
@endsection

