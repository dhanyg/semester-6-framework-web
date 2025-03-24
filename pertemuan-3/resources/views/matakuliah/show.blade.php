@extends('main')

@section('title')
   Detail Mata Kuliah
@endsection

@section('content')
    <h1 class="text-center">Detail Matakuliah</h1>
    <div class='mt-5'>
       <a href="{{ route('matakuliah.edit', $id) }}" class="btn btn-sm btn-warning">Edit</a>
       <form action="{{ route('matakuliah.destroy', $id) }}" class="d-inline" method="POST">
           @csrf
           @method('delete')
           <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Hapus data?')">Hapus</button>
       </form>
    </div>
    <table class="mt-3 table table-sm table-bordered table-hover">
        <tr>
            <th class="px-2">Kode</th>
            <td class="px-2">{{$matakuliah['kode']}}</td>
        </tr>
        <tr>
            <th class="px-2">Nama</th>
            <td class="px-2">{{$matakuliah['nama']}}</td>
        </tr>
        <tr>
            <th class="px-2">SKS</th>
            <td class="px-2">{{$matakuliah['sks']}}</td>
        </tr>
    </table>
@endsection
