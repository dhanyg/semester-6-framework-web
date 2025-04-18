@extends('layout')

@section('content')
<div class="row">
    <div class="col-md-8 p-3 mx-auto">
        @if (session('success'))
        <div class="mb-2 alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <div class="mb-2">
            <a href="{{ route('buku.index') }}" class="btn btn-sm btn-secondary">Kembali</a>
        </div>
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Form Edit Buku</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('buku.update', $buku->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="judul" class="form-label">Judul</label>
                        <input type="text" class="form-control" id="judul" name="judul"  value="{{ old('judul', $buku->judul) }}">
                        @error('judul')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="pengarang" class="form-label">Pengarang</label>
                        <input type="text" class="form-control" id="pengarang" name="pengarang"  value="{{ old('pengarang', $buku->pengarang) }}">
                        @error('pengarang')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="tahun" class="form-label">Tahun</label>
                        <input type="number" class="form-control" id="tahun" name="tahun_terbit"  value="{{ old('tahun', $buku->tahun_terbit) }}">
                        @error('tahun')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="penerbit" class="form-label">Penerbit</label>
                        <input type="text" class="form-control" id="penerbit" name="penerbit"  value="{{ old('penerbit', $buku->penerbit) }}">
                        @error('penerbit')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="kategori" class="form-label">Kategori</label>
                        <input type="text" class="form-control" id="kategori" name="kategori"  value="{{ old('kategori', $buku->kategori) }}">
                        @error('kategori')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection