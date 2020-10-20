@extends('layouts.index')

<style type="text/css">
.owl-carousel .owl-item img {
    display: block;
    width: 100% ! important;
    max-width: 150px ! important;
    max-height: 150px ! important;
    height: 121px ! important;
}

.instagram-box {
    padding: 30px 0px ! important;
}

.services-box-main {
    padding: 20px 0px ! important;
}

.instagram-box::before {
    background: rgb(224 226 228) ! important;
}
</style>
@section('content')
    <!-- Start Slider -->
    <div id="slides-shop" class="cover-slides">
        <ul class="slides-container">
            <li class="text-center">
                <img src="public/img/background/make_up.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Bienvenue dans<br> Maquillage et soin de visage</strong></h1>
                            <p class="m-b-40">Prenez en main la beauté de votre regard </p>
                            <p><a class="btn hvr-hover" href="{{ url('listpack')}}">Nos solution</a></p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-center">
                <img src="public/img/background/make_up2.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Bienvenue dans<br> Maquillage et soin de visage</strong></h1>
                            <p class="m-b-40">Prenez en main la beauté de votre regard  </p>
                            <p><a class="btn hvr-hover" href="{{ url('listpack')}}">Nos solution</a></p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-center">
                <img src="public/img/background/make_up3.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Bienvenue dans<br> Maquillage et soin de visage</strong></h1>
                            <p class="m-b-40">Prenez en main la beauté de votre regard </p>
                            <p><a class="btn hvr-hover" href="{{ url('listpack')}}">Nos solution</a></p>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <div class="slides-navigation">
            <a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
            <a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
        </div>
    </div>

    <div class="services-box-main">
        <div class="container">
            <div class="row my-5">
                <div class="col-sm-6 col-lg-4">
                    <div class="service-block-inner">
                        <h3>CATALOGUE</h3>
                        <p>Le catalogue complet de nos programmes. Ces techniques simples et naturelles sont issues de nos recherches afin de vous permettre d’accéder à une meilleure qualité de vie</p>
                        <div class="submit-button text-center">
                            <a href="{{ url('listpack')}}">
                                <button class="btn hvr-hover" id="submit" type="submit">Nos catalogue</button>
                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                <div class="clearfix"></div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="service-block-inner">
                        <h3>CONTACT</h3>
                        <p>email : info@scienceetbienetre.com
                            Tél. : 04 83 43 14 00 ou +33 483 431 400
                            Du lundi au vendredi de 8h à 16h30</p>
                            <div class="submit-button text-center">
                                <a href="{{url('contact')}}">
                                    <button class="btn hvr-hover" id="submit" type="submit">Nous contacter</button>
                                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                                    <div class="clearfix"></div>
                                </a>
                            </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="service-block-inner">
                        <h3>A PROPOS</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                           <div class="submit-button text-center">
                            <a href=" {{url('About')}} ">
                                <button class="btn hvr-hover" id="submit" type="submit">Info Détail</button>
                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                <div class="clearfix">
                            </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Start Instagram Feed  -->
    <div class="instagram-box">
        <div class="main-instagram owl-carousel owl-theme">
            <div class="item">
                <div class="ins-inner-box">
                    <img src="public/images/all-bg-title.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="public/images/blue-eyes-237438_1920.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="public/images/body-painting-4696539_1920.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="public/images/cosmetics-arranged-dusty-dark-background.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="public/images/face-mask-2578428_1920.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="public/images/slide7.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="public/images/slide8.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="public/images/slide10.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="public/images/slide9.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Instagram Feed  -->


        <!-- End Support-service Area -->
@endsection
        

        


   