<?php

namespace App\Http\Controllers;

use App\mLokasi;
use App\mProduksi;
use Illuminate\Http\Request;

class ProduksiController extends Controller
{
    public function show()
    {
        $data2 = mProduksi
        ::with(['lokasi'])->paginate(10);
        return view('produksi.produklist', ['data2' => $data2]);
    }
}