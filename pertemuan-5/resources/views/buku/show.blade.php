@extends('layout')

@section('content')

<div class="row my-5">
    <div class="col-md-8 p-3 mx-auto">
        @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Detail Buku</h5>
            </div>
            <div class="card-body">
                <div>
                    <a href="{{ route('buku.index') }}" class="btn btn-sm btn-secondary">Kembali</a>
                    <a href="{{ route('buku.edit', $buku->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('buku.destroy', $buku->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus buku ini?');">Hapus</button>
                    </form>
                </div>
                <div class="mt-3">
                    <table>
                        <tr>
                            <td>
                                <strong>Judul</strong>
                            </td>
                            <td>: {{ $buku->judul }}</td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Pengarang</strong>
                            </td>
                            <td>: {{ $buku->pengarang }}</td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Tahun Terbit</strong>
                            </td>
                            <td>: {{ $buku->tahun_terbit }}</td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Penerbit</strong>
                            </td>
                            <td>: {{ $buku->penerbit }}</td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Kategori</strong>
                            </td>
                            <td>: {{ $buku->kategori }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection