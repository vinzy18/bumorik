<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Pemilihan;
use Illuminate\Http\Request;

class PemilihanController
{
    public function index() {
        return view('frontend.pemilihan', [
            "data" => Pemilihan::class
        ]);
    }


}
