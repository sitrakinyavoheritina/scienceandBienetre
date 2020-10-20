@extends('layouts.index')
 <style type="text/css">
    .our-team img {
        width: 100% ! important;
        max-height: 289px ! important;
        height: 286px ! important;
    }

    .box-img-hover img {
        width: 100%;
        height: 286px;
        max-height: 286px;
    }
 </style>
@section('content')
   <!-- Start Products  -->
       <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>CATALOGUE</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('accueil')}}">ACCUEIL</a></li>
                        <li class="breadcrumb-item active">CATALOGUE</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <div class="products-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="special-menu text-center">
                        <div class="button-group filter-button-group">
                            <button class="active" data-filter="*">Tous</button>
                            <button data-filter=".best-seller">Best seller</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1>Best seller</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet lacus enim.</p>
                    </div>
                </div>
            </div>
      

            <div class="row special-list">
                <div class="col-lg-3 col-md-6 special-grid best-seller">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <img src="public/images/img-pro-01.jpg" class="img-fluid" alt="Image">
                            <div class="mask-icon">
               
                                <a class="cart" href="{{ url('conseil_pack')}}/1">Voir Détail</a>
                            </div>
                        </div>
                        <div class="why-text">
                            <h4>BB Crème liquide Dream fresh</h4>
                            <p>Lorem ipsum sit amet</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 special-grid top-featured">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <img src="public/images/img-pro-02.jpg" class="img-fluid" alt="Image">
                            <div class="mask-icon">
               
                                <a class="cart" href="{{ url('conseil_pack')}}/1">Voir Détail</a>
                            </div>
                        </div>
                        <div class="why-text">
                            <h4>Lorem ipsum dolor sit amet</h4>
                            <p>Lorem ipsum sit amet</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 special-grid top-featured">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <img src="public/images/slide10.jpg" class="img-fluid" alt="Image">
                            <div class="mask-icon">
               
                                <a class="cart" href="{{ url('conseil_pack')}}/1">Voir Détail</a>
                            </div>
                        </div>
                        <div class="why-text">
                            <h4>Lorem ipsum dolor sit amet</h4>
                            <p>Lorem ipsum sit amet</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 special-grid best-seller">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <img src="public/images/girl-3874885_1920.jpg" class="img-fluid" alt="Image">
                            <div class="mask-icon">
                                <a class="cart" href="{{ url('conseil_pack')}}/1">Voir Detail</a>
                            </div>
                        </div>
                        <div class="why-text">
                            <h4>Lorem ipsum dolor sit amet</h4>
                            <p>Lorem ipsum sit amet</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End Products  -->
             
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1>Programmes et méthodes à l'unité</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet lacus enim.</p>
                    </div>
                </div>
            </div>

        <!-- Start Services  -->
    <div class="services-box-main">
        <div class="container">
            <div class="row my-4">
                <div class="col-sm-6 col-lg-3">
                    <div class="hover-team">
                        <div class="our-team"> <img src="public/images/slide7.jpg" alt="" />
                            <div class="team-content">
                                <a href="{{ url('conseil_pack')}}/1">
                                    <h3 class="title">Voir detail</h3></a>
                            </div>
                        </div>
                        <div class="team-description">
                            <h4>Lorem ipsum dolor sit amet</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit </p>
                        </div>
                        <hr class="my-0"> </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="hover-team">
                        <div class="our-team"> <img src="public/images/slide9.jpg" alt="" />
                            <div class="team-content">
                                <a href="{{ url('conseil_pack')}}/1">
                                    <h3 class="title">Voir detail</h3></a>
                            </div>
                        </div>
                        <div class="team-description">
                            <h4>Lorem ipsum dolor sit amet</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                        </div>
                        <hr class="my-0"> </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="hover-team">
                        <div class="our-team"> <img src="public/images/big-img-02.jpg" alt="" />
                            <div class="team-content">
                                <a href="{{ url('conseil_pack')}}/1">
                                    <h3 class="title">Voir detail</h3></a>
                                </div>
                            </div>
                        <div class="team-description">
                            <h4>Lorem ipsum dolor sit amet</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                        </div>
                        <hr class="my-0"> </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="hover-team">
                        <div class="our-team"> <img src="public/images/img-1.jpg" alt="" />
                            <div class="team-content">
                                <a href="{{ url('conseil_pack')}}/1">
                                    <h3 class="title">Voir detail</h3></a>
                            </div>
                        </div>
                        <div class="team-description">
                            <h4>Lorem ipsum dolor sit amet</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                        </div>
                        <hr class="my-0"> </div>
                </div>
            </div>

        </div>
    </div>
    <!-- End Services -->


@endsection
        

        


   