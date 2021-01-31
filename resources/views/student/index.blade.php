@extends('layout/main')

@section('title', 'Students')


@section('container')
<div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class="mt-3">Daftar Mahasiswa</h1>
            <a href="/students/create" class="btn btn-primary">Tambah Data</a>
            @if (session('status'))
            <div class="alert alert-success mt-3">
                {{ session('status') }}
            </div>
            @endif
            
            <ul class="list-group mt-4">
                @foreach ($student as $student)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{ $student->nama }}
                <a href="/students/{{$student->id}}" class="badge badge-info">Details</a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection
