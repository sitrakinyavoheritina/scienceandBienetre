@extends('layouts.index')

<style type="text/css">
.prev {
    cursor: pointer;
position: absolute;
top: 50%;
width: auto;
padding: 16px;
margin-top: -22px;
color: white;
font-weight: bold;
font-size: 25px;
transition: 0.6s ease;
border-radius: 0 3px 3px 0;
user-select: none;
z-index: 100000;
}

.next {
    cursor: pointer;
position: absolute;
top: 50%;
width: auto;
padding: 16px;
margin-top: -22px;
color: white;
font-weight: bold;
font-size: 25px;
transition: 0.6s ease;
border-radius: 0 3px 3px 0;
user-select: none;
z-index: 100000;
right: 0 ! important;
}

.next {
    cursor: pointer;
position: absolute;
top: 50%;
width: auto;
padding: 16px;
margin-top: -22px;
color: white;
font-weight: bold;
font-size: 25px;
transition: 0.6s ease;
border-radius: 0 3px 3px 0;
user-select: none;
z-index: 100000;
}
.slick-slide .slick-current .slick-active {
    background-repeat: no-repeat! important;
    background-size: cover! important;
    background-position: top center! important;
    background-attachment: scroll! important;
    z-index: 1! important;
    position: relative! important;
    padding: 100px 0px;
}
#fixe_in_slide {
    position: absolute;
    margin-top: -55%;
}
</style>
@section('content')

<div class="">
  <!--   <div class="container">
        <div class="row"> -->
              <div class="your-class ">
                 <div><img src="{{asset('public/img/background/make_up.jpg')}}" style="height: 100%; width: 100%;"  ></div>
                <div><img src="{{asset('public/img/background/make_up2.jpg')}}" style="height: 100%; width: 100%;" ></div>
                <div><img src="{{asset('public/img/background/make_up3.jpg')}}" style="height: 100%; width: 100%;" ></div>
                <div><img src="{{asset('public/img/background/make_up4.jpg')}}" style="height: 100%; width: 100%;" ></div>
              </div>
              <div class="row" id="fixe_in_slide">
                <div class="col-md-7 col-sm-7 col-xs-12">
                    <div class="self-content">
                          <h1 class="to-animate">Méthodes innovantes pour améliorer votre vie</h1>
                        <h2 class="to-animate">La science au service de votre bien-être</h2>
                        <p class="to-animate">Profitez des découvertes les plus récentes pour transformer votre quotidien et améliorer votre bien-être</p>
                        <a href="{{ url('listpack') }}">
                            <button class="to-animate btn btn-primary btn-lg"> decouvrez nos solution</button>
                        </a>
                    </div>
                </div>
              </div>
            <!-- column end -->
    <!--         <div class="col-md-7 col-sm-7 col-xs-12">
                <div class="self-content">
                      <h1 class="to-animate">Méthodes innovantes pour améliorer votre vie</h1>
                    <h2 class="to-animate">La science au service de votre bien-être</h2>
                    <p class="to-animate">Profitez des découvertes les plus récentes pour transformer votre quotidien et améliorer votre bien-être</p>
                    <a href="{{ url('listpack') }}">
                        <button class="to-animate btn btn-primary btn-lg"> decouvrez nos solution</button>
                    </a>
                </div>
            </div>
            <div class="col-md-7 col-sm-7 col-xs-12">
            </div> -->
            <!-- column end -->
  <!--       </div>
    </div> -->
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
                        <div class="support-content">
                            <h4>Catalogue</h4>
                            <p>Le catalogue complet de nos programmes. Ces techniques simples et naturelles sont issues de nos recherches afin de vous permettre d’accéder à une meilleure qualité de vie. Retrouvez une silhouette tonique, accédez à un sommeil profond et réparateur, apprenez à vous relaxer efficacement, etc.</p>
                            <p><a href="{{ url('listpack')}}" class="btn btn-primary">Consultez notre catalogue</a></p>
                        </div>
                    </div>
                </div>
                <!-- Start About -->
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="support-services ">
                        <a class="support-images" href="#"><i class="fa fa-phone-square"></i></a>
                        <div class="support-content">
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


    <div class="prev"> <span> ❮ </span> </div>
    <div class="next"><span> ❯ </span> </div>


        <!-- End Support-service Area -->
@endsection
        

        


   