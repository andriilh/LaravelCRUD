@extends('layout/main')

@section('title', 'Students')


@section('container')
<div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class="mt-3">Detail Mahasiswa</h1>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $student->nama }}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{ $student->npm }}</h6>
                    <p class="card-text">{{$student->email}}</p>
                    <p class="card-text">{{$student->jurusan}}</p>

                <a href="{{ $student->id }}/edit" class="btn btn-success">Edit</a>
                    <form action="/students/{{ $student->id }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="btn btn-danger">Hapus</button>
                    </form>
                    <a href="/students" class="card-link">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
