@extends('layout')
@section('input')
    <form action="/updatedata/{{ $data->id }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nis" class="form-label">NIS</label>
            <input type="text" class="form-control" id="nis" name="nis" placeholder="Masukkan NIS" value="{{ $data->nis }}">
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama" value="{{ $data->nama }}">
        </div>
        <div class="mb-3">
            <label for="kelas" class="form-label">Kelas</label>
            <input type="text" class="form-control" id="kelas" name="kelas" placeholder="Masukkan Kelas" value="{{ $data->kelas }}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
