@extends('layouts.app')

@section('content')
   <div class="row m-5">
        <div class="col-md-8 mx-auto">
            <div class="alert alert-danger">
                <p class="text-center">Tidak ditemukan parameter <b>lebar</b>!</p>
                <p class="text-center">Silakan akses halaman dengan url http://localhost:8000/persegipanjang/&lt;nilai_panjang&gt;/&lt;nilai_lebar&gt;</p>
            </div>
        </div>
   </div>
@endsection
