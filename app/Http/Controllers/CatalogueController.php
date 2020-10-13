<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDO;

class CatalogueController extends Controller
{
    public function listpack() {
    	// dd('list pack no ato');
    	$listpacks = DB::table('pack')
    				->get();
   		return view('pack_catalogue',['listpacks' => $listpacks]);
    }
}
