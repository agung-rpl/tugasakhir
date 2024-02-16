<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OliController extends Controller
{
    public function oli(){
        return view ('oliproduk');
    }
}
