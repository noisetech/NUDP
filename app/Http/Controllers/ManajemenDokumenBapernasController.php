<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManajemenDokumenBapernasController extends Controller
{
    public function index()
    {
        return view('pages.manajemen-dokumen.index');
    }

    public function data(Request $request) {}


    public function create()
    {
        return view('pages.manajemen-dokumen.tambah');
    }

    public function simpan(Request $request) {}
}
