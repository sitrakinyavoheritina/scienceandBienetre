@extends('layouts.index')

<style type="text/css">
 .to_center {
    background: red ! important;
 }
/*    video::-webkit-media-controls-timeline {
        display: none;
    }*/

    #img_logo_pay {
    max-width: 100%;
    height: auto;
    width: 200px;
     text-align: center; 
    margin: auto;
    display: block;
}

.price_1, .price_2 {
 text-align: center;
}

.to_centr {
    margin: auto ! important;
    display: block ! important;
    width: 40%;
}
</style>


@section('content')
    <div class="container all_center">
        <div class="blog-area fix page-padding">
            <div class="container">
                <!-- Start counter Area -->
                 <div class="row">
                    <div class="col-md-5 col-sm-5 col-xs-12">
                          <h3 style="color: #e67474">{{$descript}}</h3>
                       
                            <p  class="to-animate">Le catalogue complet de nos programmes. Ces techniques simples et naturelles sont issues de nos recherches afin de vous permettre d’accéder à une meilleure qualité de vie</p>
                            <div class="pay_cart">
                                <img src="../public/img/logo/pay.png" id="img_logo_pay">
                                <h2 class="price_1">{{$prix_pack}}€</h2>
                                <div class="to_centr">
                                     <button class="btn btn-primary cart" onclick="addto_card(this)"> add to cart</button>
                                     <input type="checkbox" id="{{$first_icon}}" name="scales[]" value="10" checked class="cart">
                                </div>
                            </div>
                    </div>
                    <div class="col-md-7 col-sm-7 col-xs-12">
                            <h4 style="text-align: center; margin-top: 15px;">
                                Montez le son de vos haut-parleurs...
                            </h4>
                            <video id="Video_pack" width="100%" height="480" controls style="border: 5px solid #eeeeef; background: #138496;" >
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
                        <h3 style="color:#e67474">{{$value['descript']}}</h3>

                            <p  class="to-animate">Le catalogue complet de nos programmes. Ces techniques simples et naturelles sont issues de nos recherches afin de vous permettre d’accéder à une meilleure qualité de vie</p>
                            <div class="info_cart info_cart_{{$key}}">
                              <img src="../public/img/logo/pay.png" id="img_logo_pay">
                                <h2 class="price_2">{{$value['prix']}}€</h2>
                                <div class="to_centr">
                                    <button class="btn btn-primary btn_vid2"
                                    id="btn_{{$key}}" onclick="addto_card('{{$key}}')"> add to cart</button>
                                    <button class="btn btn-primary showskip2"onclick="to_hide('{{$key}}')">Skip</button>
                                   <input type="checkbox" id= "{{$value['icon']}}"  class="icon_{{$key}}" name="scales[]" value="12">
                                </div>
                            </div>
                    </div>
                    <div class="col-lg-7">
                        <h4 style="margin-top: 15px;">
                            Montez le son de vos haut-parleurs...
                        </h4>
                        <video id="Video_pack" width="100%" height="480" controls style="border: 5px solid #eeeeef; background: #138496;" onended = "videoendeded('{{$key}}')" >
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
            <a href="{{route('payement')}} ">
            <button id="accept">Pannier</button>
            </a>
        </div>

        <div class="row">
                <div class="section-headline text-center">
                    <h3 class="text_to_colored">Ce que vous allez découvrir dans cette présentation :</h3>
                </div>
        </div>
        <div class="row">
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
        </div>

    </div>
    @endsection