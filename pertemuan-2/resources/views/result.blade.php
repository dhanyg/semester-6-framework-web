@extends('layouts.app')

@section('content')
   <div class="row m-5">
        <div class="col-md-8 mx-auto">
            <div class="alert alert-success">
                <p class="text-center">Nilai panjang = {{ $persegiPanjang->panjang }}, lebar = {{ $persegiPanjang->lebar }}, luas persegi panjang = {{ $luas }}.</p>
            </div>
        </div>
   </div>
@endsection
