@extends('layout/main')

@section('title', 'Tambah Data')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class="mt-3">Tambah Data Mahasiswa</h1>
            <form class="mt-3" method="POST" action="/students">
                @csrf
                <div class="form-group">
                    <label for="nama">Nama Lengkap</label>
                <input type="text" class="form-control @error ('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama') }}">
                    @error('nama')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="npm">NPM</label>
                    <input type="number" class="form-control @error ('npm') is-invalid @enderror" id="npm" name="npm" value="{{ old('npm') }}">
                    @error('npm')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control @error ('npm') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}">
                    @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="jurursan">Jurusan</label>
                    <select class="form-control" id="jurursan" name="jurusan" value="{{ old('jurusan') }}">
                        <option value="Teknik Informatika">Teknik Informatika</option>
                        <option value="Teknik Industri">Teknik Industri</option>
                        <option value="Desain Komunikasi Visual">Desain Komunikasi Visual</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
