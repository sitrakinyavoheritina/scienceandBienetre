<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDO;

class conseilpackController extends Controller
{
    public function conseil_pack($id) {
    	$list_conseils = DB::table('conseil_pack')
    	->where('id_pack',$id)
    	->get();
    return view('conseil_pack',['list_conseils' => $list_conseils]);
    }
}
