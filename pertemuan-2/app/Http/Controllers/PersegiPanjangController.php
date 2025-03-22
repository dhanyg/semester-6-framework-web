<?php

namespace App\Http\Controllers;

use App\Models\PersegiPanjang;
use Illuminate\Http\Request;

class PersegiPanjangController extends Controller
{
    public function index() {
        $url = url()->current();
        $arrayUrl = explode('/', $url);

        if (!(float) $arrayUrl[4]) {
            $message = 'Parameter panjang bukan angka!';
            return view('errors.invalid-panjang-lebar', compact('message'));
        }
        if (!(float) $arrayUrl[5]) {
            $message = 'Parameter lebar bukan angka!';
            return view('errors.invalid-panjang-lebar', compact('message'));
        }

        $persegiPanjang = new PersegiPanjang;
        $persegiPanjang->panjang = $arrayUrl[4];
        $persegiPanjang->lebar = $arrayUrl[5];
        $luas = $persegiPanjang->hitungLuas();

        return view('result', compact('persegiPanjang', 'luas'));
    }
}
