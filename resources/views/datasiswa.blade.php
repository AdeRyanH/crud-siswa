@extends('layout')
@section('table')
    <div class="mt-5"></div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">NIS</th>
                <th scope="col">Nama</th>
                <th scope="col">Kelas</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $data)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $data->nis }}</td>
                    <td>{{ $data->nama }}</td>
                    <td>{{ $data->kelas }}</td>
                    <td><a href="/delete/{{ $data->id }}"><button class="btn btn-danger">Delete</button></a>
                        <a href="/update/{{ $data->id }}"><button class="btn btn-warning">Update</button></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="/input">
        <button type="submit" class="btn btn-primary">Tambah Siswa</button>
    </a>
@endsection
