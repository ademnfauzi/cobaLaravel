@extends('layout.main')

@section('title','Form Ubah Mahsiswa')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h1 class="mt-3">FORM UBAH DATA MAHASISWA</h1>
                    <form method="post" action="/students/{{ $student->id }}">
                        @method('patch')
                        <!-- sebuah input hidden yg bernilai token acak yg dibuat oleh laravel, yg nantinya laravel akan mencocokannya sendiri -->
                        @csrf 
                        <div class="input-group mb-3">
                            <span class="input-group-text">Nama</span>
                            <!-- @error('nama') is-invalid @enderror = menampilkan validasi -->
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ $student->nama }}">
                            <!-- value="{{ old('nama') }}" : untuk mereturn input terakhir yg ia buat -->
                            <div class="invalid-feedback">
                            @error('nama')
                                {{ $message }}
                            @enderror
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text">NPM</span>
                            <input type="text" class="form-control @error('npm') is-invalid @enderror" id="npm" name="npm" value="{{ $student->npm }}">
                            <div class="invalid-feedback">
                            @error('npm')
                                {{ $message }}
                            @enderror
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text">Email</span>
                            <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ $student->email }}">
                            <div class="invalid-feedback">
                            @error('email')
                                {{ $message }}
                            @enderror
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text">Jurusan</span>
                            <input type="text" class="form-control @error('jurusan') is-invalid @enderror" id="jurusan" name="jurusan" value="{{ $student->jurusan }}">
                            <div class="invalid-feedback">
                            @error('jurusan')
                                {{ $message }}
                            @enderror
                            </div>
                        </div>
                        <button type="submit" id="submit" class="btn btn-primary float-right">UBAH</button>
                    </form>
            </div>
        </div>
    </div>
@endsection
