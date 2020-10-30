@extends('layouts.index')


@section('content')

<div class="self-area area-padding">
    <div class="container">
        <div class="row">
            <!-- column end -->
            <div class="col-md-7 col-sm-7 col-xs-12">
                <div class="self-content" data-aos=""
                data-aos-offset="500"
                data-aos-easing="ease-in-sine">
                      <h2 class="to-animate ">Toutes les solutions pour gagner en bien-être et en bonne santé se trouvent sur cette plateforme</h2>
                    <!-- <h2 class="to-animate">La science au service de votre bien-être</h2> -->
                    <p class="to-animate title">Que vous ayez des problèmes de poids à éliminer, des soucis de sommeil qui persistent, ou encore des maux de santé dus à une mauvaise immunité, trouvez sur ce site le guide qui vous indiquera quoi faire dans toutes ces situations </p>
                    <a href="{{ url('listpack') }}">
                        <button class="to-animate btn btn-primary accueil btn-lg"> découvrez nos solutions</button>
                    </a>
                </div>
            </div>
            <div class="col-md-7 col-sm-7 col-xs-12">
            </div>
            <!-- column end -->
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
         
            </div>
        </div>
    </div>
    <div class="row">
            <!-- Start About -->
            <div class="col-md-6 col-sm-6 col-xs-12 mt-5">
                <div class="support-services wow ">
                    <a class="support-images" href="#"><i class="fa fa-book icon_dash"></i></a>
                    <div class="support-content"  data-aos="fade-left">
                        <h4>Catalogue</h4>
                        <h6>Consultez notre catalogue de packs à se procurer :</h6>
                        <ul class="list_cat_accueil">
                            <li> <p> Les packs minceur, prise de poids et musculation</p></li>
                            <li> <p>Le pack sommeil et entretien du cerveau</p> </li>
                            <li> <p>Le pack boost du système immunitaire</p> </li>
                        </ul>
                        <p><a href="{{ url('listpack')}}" class="btn btn-primary accueil">Consultez notre catalogue</a></p>
                    </div>
                </div>
            </div>
            <!-- Start About -->
            <div class="col-md-6 col-sm-6 col-xs-12 mt-5">
                <div class="support-services ">
                    <a class="support-images" href="#"><i class="fa fa-phone-square icon_dash"></i></a>
                    <div class="support-content" data-aos="fade-left">
                        <h4>A propos</h4>
                        <p>N’oubliez pas, non plus de passer par notre <a href="{{url('Apropos')}}"> <span>a propos,</span></a> </p>
                        <p> un petit texte bien élaboré vous décrira ce que vous réserve chacun de nos packs. Alors, à vos écrans et à vos clics pour les mettre tous dans votre panier !</p>
                        <p><a href="{{url('Apropos')}}" class="btn btn-primary accueil ">A propos</a></p>
                    </div>
                </div>
            </div>
            <!-- Start services -->
    </div>
</div>

        <!-- End Support-service Area -->
@endsection
        

        


   