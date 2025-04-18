@extends('layout')

@section('content')
<div class="row my-5">
    <div class="col-md-10 p-3 mx-auto">
        @if (session('success'))
        <div class="mb-2 alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <h1 class="text-center">Manajemen Buku</h1>
        <div class="text-center">
            <a href="{{ route('buku.create') }}" class="mt-3 btn btn-sm btn-primary">Tambah Buku</a>
            <div class="card mt-3">
                @if($buku->count() < 1)
                    <p class="mt-3">Tidak ada data buku.</p>
                @else
                <table class="table table-sm table-hovered">
                    <thead>
                        <tr>
                            <th>#</th>  
                            <th>Judul</th>  
                            <th>Pengarang</th>  
                            <th>Tahun</th>  
                            <th>Penerbit</th>  
                            <th>Kategori</th>  
                            <th>Aksi</th>  
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($buku as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <a href="{{ route('buku.show', $item->id) }}">{{ $item->judul }}</a>
                            </td>
                            <td>{{ $item->pengarang }}</td>
                            <td>{{ $item->tahun_terbit }}</td>
                            <td>{{ $item->penerbit }}</td>
                            <td>{{ $item->kategori }}</td>
                            <td>
                                <a href="{{ route('buku.edit', $item->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                <form action="{{ route('buku.destroy', $item->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus buku ini?');">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection