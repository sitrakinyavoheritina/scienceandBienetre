<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDO;

class detailpackController extends Controller
{
    public function conseil_pack(Request $request,$id) {

      /*dd($id);*/
      


      switch ($id) {
        case '1':
            $url = '../public/video/Santevideo1.mp4';
            $prix_pack = '10';
            $first_icon = 'icon1';
            $descript = 'Sommeil et entretient cerveau';
            $video =  array(
                          0 => array(
                              'nom_video' => 'Video 2',
                              'urls' => '../public/video/Santevideo2.mp4',
                              'prix' => '12',
                              'icon' => 'icon2',
                              'descript' =>'Mincer,prise de poids,musculation'

                          ),
                          1 => array(
                              'nom_video' => 'Video 3',
                              'urls' => '../public/video/Santevideo3.mp4',
                              'prix' => '30',
                              'icon' => 'icon3',
                              'descript' =>'Boost du systeme immunitaire'

                          ),
                      );
          break;

        case '2':
          $url = '../public/video/Santevideo2.mp4';
          $prix_pack = '12';
          $first_icon = 'icon2';
          $descript = 'Mincer,prise de poids,musculation';


          $video =  array(
                          0 => array(
                              'nom_video' => 'Video 1',
                              'urls' => '../public/video/Santevideo1.mp4',
                              'prix' => '10',
                              'icon' => 'icon1',
                              'descript' =>'Sommeil et entretient cerveau'
                          ),
                          1 => array(
                              'nom_video' => 'Video 3',
                              'urls' => '../public/video/Santevideo3.mp4',
                              'prix' => '30',
                              'icon' => 'icon3',
                              'descript' =>'Boost du systeme immunitaire'

                          ),
                      );
          break;

        case '3':
          $url = '../public/video/Santevideo3.mp4';
          $first_icon = 'icon3';
          $prix_pack = '30';
          $descript = 'Boost du systeme immunitaire';
          $video =  array(
                          0 => array(
                              'nom_video' => 'Video 1',
                              'urls' => '../public/video/Santevideo1.mp4',
                              'prix' => '10',
                              'icon' => 'icon1',
                              'descript' =>'Sommeil et entretient cerveau'

                          ),
                          1 => array(
                              'nom_video' => 'Video 2',
                              'urls' => '../public/video/Santevideo2.mp4',
                              'prix' => '12',
                              'icon' => 'icon2',
                              'descript' =>'Mincer,prise de poids,musculation'

                          ),
                      );
          break;

        
   
      }
                
//$vid = json_encode($video);


      return view('detail_pack')->with(compact('video','url','id','prix_pack','first_icon','descript'));
    }
}
