@extends('layout.template')
@section('template')
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <div class="pb-3">
          <a href='{{url('pegawai/create')}}' class="btn btn-primary">+ Tambah Data</a>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th class="col-md-1">Nama</th>
                    <th class="col-md-3">Posisi</th>
                    <th class="col-md-4">Gaji</th>
                    <th class="col-md-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                <tr>
                    <td>{{$item->nama}}</td>
                    <td>{{$item->posisi}}</td>
                    <td>{{$item->gaji}}</td>
                    <td>
                        <a href='{{url('pegawai/'.$item->nama.'/edit')}}' class="btn btn-warning btn-sm">Update</a>
                    </td>
                </tr>
                @endforeach>
            </tbody>
        </table>  
        {{$data->links()}}  
  </div>
@endsection