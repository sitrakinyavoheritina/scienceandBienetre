@extends('layouts.index')

<style type="text/css">
 .to_center {
    background: red ! important;
 }
    video::-webkit-media-controls-timeline {
    display: none;
    }
</style>


@section('content')
    <div class="container all_center">
        <div class="counter-area fix area-padding-2 ">
            <div class="container">
                <!-- Start counter Area -->

                 <div class="row">
                    <div class="col-lg-5">
                          <h3 id="text_h3">Retrouvez le sommeil dès ce soir grâce à cette vidéo</h3>
                            <h4>
                                Montez le son de vos haut-parleurs...
                            </h4>
                            <div class="pay_cart">
                                <h2 class="price_1">{{$prix_pack}}€</h2>
                                 <button class="btn btn-primary" onclick="addto_card(this)"> add to cart</button>
                                 <input type="checkbox" id="{{$first_icon}}" name="scales[]" value="10" checked>
                            </div>
                    </div>
                    <div class="col-lg-7">
                            <video id="Video_pack" width="600" height="480" controls style="border: 5px solid #eeeeef; background: #138496;" >
                            <source src="{{$url}}" type="video/mp4">
                            Your browser does not support HTML5 video.
                        </video>
                    </div>
                </div>
            </div>
        </div>

        @foreach($video as $key => $value)
        <div class="counter-area fix area-padding-2 video2" id="aze-{{$key}}" >
            <div class="container">
                <!-- Start counter Area -->
                 <div class="row">
                    <div class="col-lg-5">
                        <h3 id="text_h3">{{$value['nom_video']}}</h3>
                        <h4>
                            Montez le son de vos haut-parleurs...
                        </h4>
                            <div class="info_cart info_cart_{{$key}}">
                                <h2 class="price_2">{{$value['prix']}}€</h2>
                                <button class="btn btn-primary btn_vid2"
                                id="btn_{{$key}}" onclick="addto_card('{{$key}}')"> add to cart</button>
                                <button class="btn btn-primary showskip2"onclick="to_hide('{{$key}}')">Skip</button>
                               <input type="checkbox" id= "{{$value['icon']}}"  class="icon_{{$key}}" name="scales[]" value="12">
                            </div>
                    </div>
                    <div class="col-lg-7">
                        <video id="Video_pack" width="600" height="480" controls style="border: 5px solid #eeeeef; background: #138496;" onended = "videoendeded('{{$key}}')" >
                            <source src="{{$value['urls']}}" type="video/mp4">
                                Your browser does not support HTML5 video.
                        </video>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

        
        <hr>
        <div class="total text-center">
            <button id="accept">Pannier</button>
            <h2 id="total_price"></h2>
        </div>
       <div class="work-proses fix bg-color area-padding-2"  id="arrea">
                <div class="row">
                        <div class="section-headline text-center">
                            <h3 class="text_to_colored">Ce que vous allez découvrir dans cette présentation :</h3>
                        </div>
                </div>
                <div class="row">
                    <div class="to_center">
                            <div class="col-md-6 col-sm-12 col-xs-12" >
                                <div class="single-proses">
                                    <div class="row">
                                        <div class="col-md-5 col-sm-5 col-xs-12">
                                            <img src="{{asset('/public/img/conseilpack/b1.jpg')}}" id="avatar_packe">
                                        </div>
                                        <div class="col-md-7 col-sm-7 col-xs-12 to_left">
                                            <p>La bonne et la mauvaise nouvelle si vous souffrez d'insomnie depuis plus de 5 mois</p>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12" >
                                <div class="single-proses">
                                    <div class="row">
                                        <div class="col-md-5 col-sm-5 col-xs-12">
                                            <img src="{{asset('/public/img/conseilpack/b1.jpg')}}" id="avatar_packe">
                                        </div>
                                        <div class="col-md-7 col-sm-7 col-xs-12 to_left">
                                            <p>La bonne et la mauvaise nouvelle si vous souffrez d'insomnie depuis plus de 5 mois</p>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-12 col-xs-12" >
                                <div class="single-proses">
                                    <div class="row">
                                        <div class="col-md-5 col-sm-5 col-xs-12">
                                            <img src="{{asset('/public/img/conseilpack/b2.jpg')}}" id="avatar_packe">
                                        </div>
                                        <div class="col-md-7 col-sm-7 col-xs-12 to_left">
                                            <p>Comment retrouver un sommeil profond de manière 100% naturelle</p>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-12 col-xs-12" >
                                <div class="single-proses">
                                    <div class="row">
                                        <div class="col-md-5 col-sm-5 col-xs-12">
                                            <img src="{{asset('/public/img/conseilpack/b3.jpg')}}" id="avatar_packe">
                                        </div>
                                        <div class="col-md-7 col-sm-7 col-xs-12 to_left">
                                            <p>La vérité sur vos problèmes de sommeil et pourquoi ils sont toujours là</p>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        <!-- End column -->
                    </div>
            </div>
        </div>  

    </div>
    @endsection