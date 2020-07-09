@extends('layout.main')

@section('title', 'Daftar Mahasiswa')

@section('container')
  <div class="container">
    <div class="row">
      <h1 class="mt-3">Daftar Mahasiswa</h1>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">NPM</th>
                    <th scope="col">Email</th>
                    <th scope="col">Jurusan</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
            <tr>
            @foreach( $mahasiswa as $mhs )
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{$mhs->nama}}</td>
                <td>{{$mhs->npm}}</td>
                <td>{{$mhs->email}}</td>
                <td>{{$mhs->jurusan}}</td>
                <td>
                    <a href="" class="badge badge-success">edit</a>
                    <a href="" class="badge badge-danger">delete</a>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
        
    </div>
  </div>
@endsection