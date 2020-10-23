<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDO;

class conseilpackController extends Controller
{
    public function conseil_pack(Request $request,$id) {

      /*dd($id);*/
      


      switch ($id) {
        case '1':
            $url = '../public/video/Santevideo1.mp4';
            $prix_pack = '10';
            $video =  array(
                          0 => array(
                              'nom_video' => 'Video 2',
                              'urls' => '../public/video/Santevideo2.mp4',
                              'prix' => '12'
                          ),
                          1 => array(
                              'nom_video' => 'Video 3',
                              'urls' => '../public/video/Santevideo3.mp4',
                              'prix' => '30'
                          ),
                      );
          break;

        case '2':
          $url = '../public/video/Santevideo2.mp4';
          $prix_pack = '12';
          $video =  array(
                          0 => array(
                              'nom_video' => 'Video 1',
                              'urls' => '../public/video/Santevideo1.mp4',
                              'prix' => '10'
                          ),
                          1 => array(
                              'nom_video' => 'Video 3',
                              'urls' => '../public/video/Santevideo3.mp4',
                              'prix' => '30'
                          ),
                      );
          break;

        case '3':
          $url = '../public/video/Santevideo3.mp4';
          $prix_pack = '30';
          $video =  array(
                          0 => array(
                              'nom_video' => 'Video 1',
                              'urls' => '../public/video/Santevideo1.mp4',
                              'prix' => '10'
                          ),
                          1 => array(
                              'nom_video' => 'Video 2',
                              'urls' => '../public/video/Santevideo2.mp4',
                              'prix' => '12'
                          ),
                      );
          break;

        
   
      }
                
//$vid = json_encode($video);


      return view('conseil_pack')->with(compact('video','url','id','prix_pack'));
    }
}
