<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PersegiPanjang extends Model
{
    public $panjang;
    public $lebar;

    public function hitungLuas() {
        return $this->panjang * $this->lebar;
    }
}
