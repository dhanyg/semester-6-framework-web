@extends('main')

@section('title')
   List Mata Kuliah
@endsection

@section('content')
    @if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
        
    @endif
    <h1 class="text-center">Daftar Matakuliah</h1>
    <div class="mt-5 text-center">
        <a href="{{ route('matakuliah.create') }}" class="btn btn-sm btn-primary">Tambah Data</a>
    </div>
    <table class="mt-5 table table-sm table-hover">
        <thead>
            <tr class='text-center'>
                <th>Kode</th>
                <th>Nama</th>
                <th>SKS</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mataKuliah as $id => $item)
               <tr class='text-center'>
                  <td>
                    <a href="{{ route('matakuliah.show', $id) }}">{{$item['kode']}}</a>
                  </td>
                  <td>{{$item['nama']}}</td>
                  <td>{{$item['sks']}}</td>
                  <td>
                    <a href="{{ route('matakuliah.edit', $id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('matakuliah.destroy', $id) }}" class="d-inline" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Hapus data?')">Hapus</button>
                    </form>
                  </td>
               </tr>
            @endforeach
        </tbody>
    </table>
@endsection
