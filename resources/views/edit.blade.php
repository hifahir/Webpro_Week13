@extends('layout.template')
@section('template')
<form action='{{url('pegawai/'.$data->nama)}}' method='post'>
@csrf
@method('PUT')
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <a href='{{url('pegawai')}}' class="btn btn-secondary">kembali</a><br><br>
        <div class="mb-3 row">
            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='nama'value="{{ $data->nama }}" id="nama">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="posisi" class="col-sm-2 col-form-label">Posisi</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='posisi' value="{{ $data->posisi }}"id="posisi">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="gaji" class="col-sm-2 col-form-label">Gaji</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='gaji' value="{{ $data->gaji }}" id="gaji">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">simpan</button></div>
        </div>
    </div>
</form>
@endsection