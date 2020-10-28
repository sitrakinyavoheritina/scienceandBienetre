@extends('layouts.index')


@section('content')

<div class="self-area area-padding">
    <div class="container">
        <div class="row">
            <!-- column end -->
            <div class="col-md-7 col-sm-7 col-xs-12">
                <div class="self-content" data-aos="fade-right"
                data-aos-offset="500"
                data-aos-easing="ease-in-sine">
                      <h2 class="to-animate">Toutes les solutions pour gagner en bien-être et en bonne santé se trouvent sur cette plateforme.</h2>
                    <!-- <h2 class="to-animate">La science au service de votre bien-être</h2> -->
                    <p class="to-animate">Que vous ayez des problèmes de poids à éliminer, des soucis de sommeil qui persistent, ou encore des maux de santé dus à une mauvaise immunité, trouvez sur ce site le guide qui vous indiquera quoi faire dans toutes ces situations. </p>
                    <a href="{{ url('listpack') }}">
                        <button class="to-animate btn btn-primary btn-lg"> decouvrez nos solutions</button>
                    </a>
                </div>
            </div>
            <div class="col-md-7 col-sm-7 col-xs-12">
            </div>
            <!-- column end -->
        </div>
    </div>
</div>




                      <!-- Start Support-service Area -->
<div class="support-service-area fix area-padding-2">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-headline text-center">
                    <!-- <h3>Why choose investment plan</h3>
                    <p>Help agencies to define their new business objectives and then create professional software.</p> -->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="support-all">
                <!-- Start About -->
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="support-services wow ">
                        <a class="support-images" href="#"><i class="fa fa-book"></i></a>
                        <div class="support-content"  data-aos="fade-left">
                            <h4>Catalogue</h4>
                            <h6>Consultez notre catalogue de packs à se procurer :</h6>
                            <ul class="list_cat_accueil">
                                <li>Les packs minceur, prise de poids et musculation</li>
                                <li>Le pack sommeil et entretien du cerveau</li>
                                <li>Le pack boost du système immunitaire</li>
                            </ul>
                            <p><a href="{{ url('listpack')}}" class="btn btn-primary">Consultez notre catalogue</a></p>
                        </div>
                    </div>
                </div>
                <!-- Start About -->
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="support-services ">
                        <a class="support-images" href="#"><i class="fa fa-phone-square"></i></a>
                        <div class="support-content" data-aos="fade-left">
                            <h4>Contact</h4>
                            <p>Science & Bien-Être Service Clients email : info@scienceetbienetre.com Tél. : 04 83 43 14 00 ou +33 483 431 400 Du lundi au vendredi de 8h à 16h30</p>
                            <p><a href="{{url('About')}}" class="btn btn-primary">Nous contacter en ligne</a></p>
                        </div>
                    </div>
                </div>
                <!-- Start services -->
            </div>
        </div>
    </div>
</div>
        <!-- End Support-service Area -->
@endsection
        

        


   