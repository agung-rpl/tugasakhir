<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BanController extends Controller
{
    public function ban(){
        return view('banproduk');
    }
}
