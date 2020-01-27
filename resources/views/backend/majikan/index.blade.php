<style type="text/css">
	th,td{
		text-align: center;
	}
</style>
<center><h1>Data majikan</h1></center>


	<div class="col-md-12">
            <table id="tab" class="table table-striped table-bordered" style="width:100%">
			<!-- <table class="table table-default"> -->

			<a href="{{url('/majikan/create')}}"class="btn btn-primary form-control">Tambah Data</a><br><br>



            <thead>
		    <tr class="bg-info">
		        <th>No</th>
                <th>Kode </th>
                <th>Nama </th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>Nomer KTP</th>
		        <th><center>Action</center></th>

		    </tr>
	        </thead>
	        <tbody>
		        @php
		        $no=1;
		        @endphp
		        @foreach($majikan as $data)
		            <tr>
			            <td>{{$no++}}</td>
			            <td>{{ $data->majikan_kode }}</td>
                        <td>{{ $data->nama_majikan }}</td>
                        <td>{{ $data->jenis_kelamin }}</td>
                        <td>{{ $data->alamat_majikan}}</td>
                        <td>{{ $data->no_ktp}}</td>
	                    <td>

								<div class="icon-container">
									<button class="btn-lg"><a  href="{{route('majikan.edit',$data->id)}}"><span class="ti-pencil"></span><span class="icon-name"></span></a></button>
								</div>

								{{-- <div class="icon-container">
									<button class="btn-lg"><a  href="{{route('majikan.show',$data->id)}}"><span class="ti-eye"></span><span class="icon-name"></span></a></button>
								</div> --}}

								<form action="{{ route('majikan.destroy', $data->id) }}" method="post">
								@csrf
								<input type="hidden" name="_method" value="DELETE">
								<div class="icon-container">
									<button class="btn-lg" type="submit"><span class="ti-trash"></span><span class="icon-name"></span></button>
								</div>
								</form>

						</td>
		            </tr>
		        @endforeach
            </tbody>
        </table>
    </div>
