<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicebookController extends Controller
{
    public function servicebook(){
        return view ('servicebooking');
    }
}
