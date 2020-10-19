@extends('layouts.index')

<style type="text/css">
 .to_center {
    background: red ! important;
 }
</style>


@section('content')

    <div class="container all_center">
        <div class="counter-area fix area-padding-2">
            <div class="container">
                <!-- Start counter Area -->
                 <div class="row">
                    <div class="fun-content">
                        <div class="section-headline text-center">
                            <h3 id="text_h3">Retrouvez le sommeil dès ce soir grâce à cette vidéo</h3>
                            <h4>
                                Montez le son de vos haut-parleurs...
                            </h4>
                            <iframe width="500" height="450" src="https://www.youtube.com/embed/yH4ZNsHAXKA">
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>
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


    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
<div class="carousel-inner">
<div class="carousel-item active">
<img class="d-block w-100" src="..." alt="First slide">
</div>
<div class="carousel-item">
<img class="d-block w-100" src="..." alt="Second slide">
</div>
<div class="carousel-item">
<img class="d-block w-100" src="..." alt="Third slide">
</div>
</div>
<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
<span class="carousel-control-prev-icon" aria-hidden="true"></span>
<span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
<span class="carousel-control-next-icon" aria-hidden="true"></span>
<span class="sr-only">Next</span>
</a>
</div>
    @endsection