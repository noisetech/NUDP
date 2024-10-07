<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PdoController extends Controller
{
    public function index()
    {
        return view('pdo');
    }


    public function detail_pdo()
    {
        return view('detail-pdo');
    }
}
