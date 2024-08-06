<?php

namespace App\Http\Controllers;

use App\Models\halamanstatis;
use Illuminate\Http\Request;

class Halaman extends Controller
{
    //
    public function tampil() {
        $pages = halamanstatis::all();
        return view("administrator.menu-utama.halamanbaru", compact(['pages']));
    }
}
