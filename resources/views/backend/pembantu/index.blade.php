    @extends('layouts.dash')
    @section('content')

    <center><h1>Data pembantu</h1></center>



                <table id="tab" class="table table-striped table-bordered" style="width:100%">
                <!-- <table class="table table-default"> -->


                <a href="{{url('admin/pembantu/create')}}"class="btn btn-primary form-control">Tambah Data</a><br><br>



                <thead>
                <tr class="bg-info">
                    <th><center>No</center></th>
                    <th>Kode </th>
                    <th>Nama </th>
                    <th>Umur</th>
                    <th>Jenis Kelamin</th>
                    <th>Pengalaman kerja</th>
                    <th>Foto KTP</th>
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
                            <td>{{ $data->umur}}</td>
                            <td>{{ $data->jk_pembantu}}</td>
                            <td>{{ $data->pengalaman_kerja }}</td>
                            <td><img src="{{ asset('assets/img/'.$data->photo_art.'') }}" alt="" height="100px" width="150px"></td>
                            <td>
                                        <button class="btn-lg"><a  href="{{route('pembantu.show',$data->id)}}"><span class="fa fa-eye"></span></a></button>
                                        <button class="btn-lg"><a  href="{{route('pembantu.edit',$data->id)}}"><span class="ti-pencil"></span></a></button>
                                        <form action="{{ route('pembantu.destroy', $data->id) }}" method="post">
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

