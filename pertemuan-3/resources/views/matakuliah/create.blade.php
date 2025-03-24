@extends('main')

@section('Tambah Mata Kuliah')

@section('content')
   <div class="row mt-5">
    <div class="col-md-6 mx-auto">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Tambah Data Mata Kuliah</div>
            </div>
            <div class="card-body">
                <form action="{{ route('matakuliah.store') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="kode" class="form-label">Kode</label>
                        <input type="text" name="kode" class="form-control" id="kode" required>
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" name="nama" class="form-control" id="nama" required>
                    </div>
                    <div class="mb-3">
                        <label for="sks" class="form-label">SKS</label>
                        <input type="number" name="sks" class="form-control" id="sks" required>
                    </div>
                    <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
   </div> 
@endsection