<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDO;

class PackController extends Controller
{
    public function accueil() {
   		return view('dashboard');
    }

    public function index() {
   		return view('pack_catalogue');
    }

    public function listpack() {
      // dd('list pack no ato');
      $listpacks = DB::table('pack')
            ->get();
      return view('pack_catalogue',['listpacks' => $listpacks]);
    }

    // public function conseil_pack($id) {
    // 	$list_conseil = DB::table('conseil_pack')
    // 	->get();
    // return view('conseil_pack',compact('list_conseil'));
    // }
}
