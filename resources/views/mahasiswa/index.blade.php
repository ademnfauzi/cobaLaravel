@extends('layout.main')

@section('title','Daftar Mahsiswa')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-10">
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
                @foreach( $mahasiswa as $m ) 
                <tr>
                    <td scope="row">{{ $loop->iteration }}</td>
                    <!-- $loop->iteration yang bisa membuat nomor keberapa data tersebut muncul dihalaman -->
                    <td scope="row">{{$m->nama}}</td>
                    <td scope="row">{{$m->npm}}</td>
                    <td scope="row">{{$m->email}}</td>
                    <td scope="row">{{$m->jurusan}}</td>
                    <td scope="row">
                        <a href="" class="badge badge-info">EDIT</a>
                        <a href="" class="badge badge-danger">HAPUS</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        
            </div>
        </div>
    </div>
@endsection
