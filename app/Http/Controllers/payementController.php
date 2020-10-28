<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class payementController extends Controller
{
    public function payementInfo() {
   		return view('payement');
    }
}
