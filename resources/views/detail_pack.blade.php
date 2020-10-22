
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

    #img_pay {
        width: 437px;
        max-width: 437px;
        background: red ! important;
       
        margin-top: 15px;
    }

    .block_pay {
        margin: auto;
        display: block;
        text-align: center;
    }

    #img_client {
        width: 110px;
        height: 110px;
        float: left;
        margin: 15px;
    }

</style>


@section('content')
 <!-- Start Top Search -->
    <div class="top-search">
        <div class="container">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-search"></i></span>
                <input type="text" class="form-control" placeholder="Search">
                <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
            </div>
        </div>
    </div>
    <!-- End Top Search -->

    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>PACK DETAIL</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="accueil">PACK</a></li>
                        <li class="breadcrumb-item active">PACK DETAIL</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start About Page  -->
    <div class="about-box-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <h2 class="noo-sh-title">Retrouvez le sommeil dès ce soir grâce à cette vidéo
                    </h2>
                    <div class="block_pay">
                       
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        <img src="../public/images/payement.png" id="img_pay">
                        <div class="pay_cart">
                            <h2 class="noo-sh-title">10 € </h2>
                            <p><a class="btn hvr-hover pay_cart" href="#">ADD TO CART</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                     <h2 style="text-align: center;">Montez le son de vos haut-parleurs...</h2>
                    <div class="banner-frame"> 
                      <!--   <iframe width="600" height="480" src="../public/video/maquillage.mp4" >
                        </iframe> -->
                        <video id="Video_pack" controlsList="nodownload" width="600" height="480" controls style="border: 5px solid #eeeeef; background: #138496;" >
                            <source src="../public/video/maquillage.mp4" type="video/mp4">
                            Your browser does not support HTML5 video.
                        </video>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End About Page -->

    <div class="services-box-main">
        <div class="container">
            <div class="row my-3">
                <div class="col-sm-6 col-lg-6">
                    <div class="service-block-inner">
                        <img src="../public/images/img-2.jpg" id="img_client">
                        <div class="para_to">
                            <p style="padding-top: 20px;font-size: 18px;">La bonne et la mauvaise nouvelle si vous souffrez d'insomnie depuis plus de 5 mois</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="service-block-inner">
                        <img src="../public/images/img-1.jpg" id="img_client">
                        <div class="para_to">
                            <p style="padding-top: 20px; font-size: 18px;">La technique contre-intuitive et scientifiquement prouvée pour retrouver le sommeil en 9 minutes</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="service-block-inner">
                        <img src="../public/images/img-3.jpg" id="img_client">
                        <div class="para_to">
                            <p style="padding-top: 20px;font-size: 18px;">La bonne et la mauvaise nouvelle si vous souffrez d'insomnie depuis plus de 5 mois</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-6">
                    <div class="service-block-inner">
                        <img src="../public/images/img-2.jpg" id="img_client">
                        <div class="para_to">
                            <p style="padding-top: 20px; font-size: 18px;">La technique contre-intuitive et scientifiquement prouvée pour retrouver le sommeil en 9 minutes</p>
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
                    <img src="../public/images/all-bg-title.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="../public/images/blue-eyes-237438_1920.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="../public/images/body-painting-4696539_1920.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="../public/images/cosmetics-arranged-dusty-dark-background.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="../public/images/face-mask-2578428_1920.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="../public/images/slide7.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="../public/images/slide8.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="../public/images/slide10.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="../public/images/slide9.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Instagram Feed  -->
              
@endsection