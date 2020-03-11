@extends('layouts.dash')
@section('content')

<style type="text/css">
	th,td{
		text-align: center;
	}
</style>
<center><h1>Data Pemesanan</h1></center>

<a href="{{url('/admin/pemesanan/create')}}"class="btn btn-primary form-control">Tambah Data</a><br><br>

	        <table id="tab" class="table table-striped table-bordered" style="width:100%">
			<!-- <table class="table table-default"> -->
            <thead>
		    <tr class="bg-info">
		        <th>No</th>
                    <th>Kode pemesanan </th>
                    <th>kode Kategori</th>
                    <th>Kode Pembatu</th>
                    <th>Durasi Kontrak</th>
		            <th><center>Action</center></th>

		        </tr>
	            </thead>
	            <tbody>
		            @php
		            $no=1;
		            @endphp
		            @foreach($pemesanan as $data)
		                <tr>
			                <td>{{$no++}}</td>
			                <td>{{ $data->majikan->nama_majikan }}</td>
                            <td>{{ $data->kategori->kategori_nama}}</td>
                            <td>{{ $data->pembantu->pembantu_kode }}</td>
                            <td>{{ $data->durasi_kontrak}}</td>
	                        <td>
								<button class="btn-lg"><a  href="{{route('pemesanan.edit',$data->id)}}"><span class="ti-pencil"></span></a></button>
                                <form action="{{ route('pemesanan.destroy', $data->id) }}" method="post">
								    @csrf
								    <input type="hidden" name="_method" value="DELETE">
							        <button class="btn-lg" type="submit"><span class="ti-trash"></span></button>
							    </form>
						    </td>
		                </tr>
		            @endforeach
                </tbody>
            </table>


    @endsection
{{-- <div class="icon-container">
									<button class="btn-lg"><a  href="{{route('pemesanan.show',$data->id)}}"><span class="ti-eye"></span><span class="icon-name"></span></a></button>
								</div> --}}
