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

    	$desc2_pack = DB::table('pack')
    	->where('id_pack',$id)
    	->pluck('desc2_pack')
        ->first();

        $video_pack = DB::table('pack')
    	->where('id_pack',$id)
    	->pluck('video_pack')
        ->first();
        $url_string=$video_pack;
		$url= str_replace('watch?v=','embed/', $url_string);

    return view('conseil_pack',['list_conseils' => $list_conseils,'desc_pack2' => $desc2_pack,'video_pack' => $url ]);
    }
}
