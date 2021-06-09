<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    //
    public function index()
    {
        return view('peminjaman/peminjaman');
    }

    public function addpinjam()
    {
        return view('peminjaman/addpinjam');
    }
}
