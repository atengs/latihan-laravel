@extends('layout.main')

@section('title', 'Form Ubah Mahasiswa')

@section('container')
  <div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3">Form Ubah Mahasiswa</h1>
                <form method="post" action="/students/{{ $student->id}}">
                @method('patch')
                @csrf
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" id="nama" placeholder="Masukkan Nama" value="{{ $student->nama }}">
                        @error('nama')
                        <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="npm">NPM</label>
                        <input type="text" class="form-control @error('npm') is-invalid @enderror" name="npm" id="npm" placeholder="Masukkan NPM" value="{{ $student->npm}}">
                        @error('npm')
                        <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="emaila">Email</label>
                        <input type="text" class="form-control" name="email" id="email" placeholder="Masukkan Email" value="{{ $student->email }}">
                    </div>
                    <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <input type="text" class="form-control" name="jurusan" id="jurusan" placeholder="Jurusan" value="{{ $student->jurusan }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Ubah Data</button>
                </form>
            
       </div>
    </div>
  </div>
@endsection