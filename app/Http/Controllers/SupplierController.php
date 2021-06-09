<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SupplierController extends Controller
{
    //
    public function supplier()
    {
        return view('supplier/supplier');
    }

    public function add()
    {
        return view('supplier/addsupplier');
    }
}
