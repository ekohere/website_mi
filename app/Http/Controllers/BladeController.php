<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BladeController extends Controller
{
    public function tampil_kiri()
    {
       
        return view('frontend.tampil.left');
    }

     public function tampil_kanan()
    {
       
        return view('frontend.tampil.right');
    }

    public function index()
    {
       
        return view('admin.tampil.admin');
    }
}
