<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contactController extends Controller
{
    public function showContactPage(Request $request) {
    	return view('contact');
   }
}
