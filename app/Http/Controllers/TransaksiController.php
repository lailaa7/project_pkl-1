<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    //
    public function brgmasuk()
    {
        return view('transaksi/brgmasuk');
    }

    public function brgkeluar()
    {
        return view('transaksi/brgkeluar');
    }
}
