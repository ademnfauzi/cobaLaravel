@extends('layout.main')

@section('title','Detail Mahsiswa')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1 class="mt-3">Detail Mahasiswa</h1>
                    
                    <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $student->nama }}</h5>
                        <p class="card-text">{{ $student->npm }}</p>
                        <p class="card-text">{{ $student->email }}</p>
                        <p class="card-text">{{ $student->jurusan }}</p>

                        <button type="submit" class="btn btn-primary">EDIT</button>
                        <button type="submit" class="btn btn-danger">HAPUS</button>
                        <a href="/students" class="card-link">BACK</a>
                    </div>
                    </div>

            </div>
        </div>
    </div>
@endsection
