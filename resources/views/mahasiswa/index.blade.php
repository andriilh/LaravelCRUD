@extends('layout/main')

@section('title', 'Mahasiswa')


@section('container')
<div class="container">
    <div class="row">
        <div class="col-10">
            <h1 class="mt-3">Daftar Mahasiswa</h1>

            <table class="table myTable" id="myTable">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">NPM</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col">Jurusan</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($mahasiswa as $mhs)
                    <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{$mhs->npm}}</td>
                        <td>{{$mhs->nama}}</td>
                        <td>{{$mhs->email}}</td>
                        <td>{{$mhs->jurusan}}</td>
                        <td>
                            <a href="" class="badge badge-primary">Edit</a>
                            <a href="" class="badge badge-danger">Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
