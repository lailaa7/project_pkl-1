<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasterController extends Controller
{
    //
    public function index()
    {
        return view('master/databrg');
    }

    public function kategori()
    {
        return view('master/kategori');
    }

    public function addkategori()
    {
        return view('master/addkategori');
    }
}
