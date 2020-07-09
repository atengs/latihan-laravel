@extends('layout.main')

@section('title', 'Form Data Mahasiswa')

@section('container')
  <div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3">Form Data Mahasiswa</h1>
                <form method="post" action="/students">
                {{ csrf_field() }}
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" id="nama" placeholder="Masukkan Nama" value="{{ old('nama')}}">
                        @error('nama')
                        <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="npm">NPM</label>
                        <input type="text" class="form-control @error('npm') is-invalid @enderror" name="npm" id="npm" placeholder="Masukkan NPM" value="{{ old('npm')}}">
                        @error('npm')
                        <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="emaila">Email</label>
                        <input type="text" class="form-control" name="email" id="email" placeholder="Masukkan Email" value="{{ old('email')}}">
                    </div>
                    <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <input type="text" class="form-control" name="jurusan" id="jurusan" placeholder="Jurusan" value="{{ old('jurusan')}}">
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah Data</button>
                </form>
            
       </div>
    </div>
  </div>
@endsection