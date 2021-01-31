@extends('layout/main')

@section('title', 'Edit Data')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class="mt-3">Edit Data Mahasiswa</h1>
        <form class="mt-3" method="POST" action="/students/{{ $student->id }}">
                @method('patch')
                @csrf
                <div class="form-group">
                    <label for="nama">Nama Lengkap</label>
                <input type="text" class="form-control @error ('nama') is-invalid @enderror" id="nama" name="nama" value="{{ $student->nama }}">
                    @error('nama')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="npm">NPM</label>
                    <input type="number" class="form-control @error ('npm') is-invalid @enderror" id="npm" name="npm" value="{{ $student->npm }}">
                    @error('npm')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control @error ('npm') is-invalid @enderror" id="email" name="email" value="{{ $student->email }}">
                    @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="jurursan">Jurusan</label>
                    <select class="form-control" id="jurursan" name="jurusan" value="">
                        <option value="Teknik Informatika" @if ($student->jurusan == "Teknik Informatika")
                            {{ "selected" }}
                        @endif>Teknik Informatika</option>
                        <option value="Teknik Industri" @if ($student->jurusan == "Teknik Industri")
                            {{ "selected" }}
                        @endif>Teknik Industri</option>
                        <option value="Desain Komunikasi Visual" @if ($student->jurusan == "Desain Komunikasi Visual")
                            {{ "selected" }}
                        @endif>Desain Komunikasi Visual</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Ubah Data</button>
            </form>
        </div>
    </div>
</div>
@endsection
