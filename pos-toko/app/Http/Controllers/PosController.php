<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PosController extends Controller
{
    public function index()
    {
        // TODO P12: layar transaksi kasir
        return response('', 200);
    }

    public function store(Request $request)
    {
        // TODO P12: simpan transaksi + kurangi stok dalam DB::transaction()
        return response('', 200);
    }

    public function history()
    {
        // Riwayat transaksi kasir (navigasi P05)
        return response('', 200);
    }
}
