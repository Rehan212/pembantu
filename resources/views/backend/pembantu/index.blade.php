    @extends('layouts.template')
    @section('content')

    <center><h1>Data pembantu</h1></center>


        <div class="col-md-12">
                <table id="tab" class="table table-striped table-bordered" style="width:100%">
                <!-- <table class="table table-default"> -->


                <a href="{{url('pembantu/create')}}"class="btn btn-primary form-control">Tambah Data</a><br><br>



                <thead>
                <tr class="bg-info">
                    <th><center>No</center></th>
                    <th>Kode </th>
                    <th>Nama </th>
                    <th>Alamat</th>
                    <th>Umur</th>
                    <th>Jenis Kelamin</th>
                    <th>Pendidikan</th>
                    <th>Agama</th>
                    <th>Status</th>
				    <th>Pengalaman kerja</th>
		            <th><center>Action</center></th>
                </tr>

                </thead>
                <tbody>
                    @php
                    $no=1;
                    @endphp
                    @foreach($pembantu as $data)
                        <tr>
                            <td>{{$no++}}</td>
			                <td>{{ $data->pembantu_kode }}</td>
                            <td>{{ $data->n_pembantu }}</td>
                            <td>{{ $data->alamat_pembantu }}</td>
                            <td>{{ $data->umur}}</td>
                            <td>{{ $data->jk_pembantu}}</td>
                            <td>{{ $data->pendidikan }}</td>
                            <td>{{ $data->agama}}</td>
                            <td>{{ $data->status}}</td>
						    <td>{{ $data->pengalaman_kerja }}</td>
                            <td>
                                    <div class="icon-container">
                                            <button class="btn-lg"><a  href="{{route('pembantu.edit',$data->id)}}"><span class="ti-pencil"></span><span class="icon-name"></span></a></button>
                                        </div>

                                        <form action="{{ route('pembantu.destroy', $data->id) }}" method="post">
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
    @endsection

