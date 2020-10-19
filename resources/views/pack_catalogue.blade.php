@extends('layouts.index')

@section('content')
   <!-- Start Products  -->
       <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>CATALOGUE</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">ACCUEIL</a></li>
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
                    <div class="title-all text-center">
                        <h1>Nos produits</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet lacus enim.</p>
                    </div>
                </div>
            </div>
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

            <div class="row special-list">
                <div class="col-lg-3 col-md-6 special-grid best-seller">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <img src="public/images/img-pro-01.jpg" class="img-fluid" alt="Image">
                            <div class="mask-icon">
               
                                <a class="cart" href="#">Voir Détail</a>
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
               
                                <a class="cart" href="#">Voir Détail</a>
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
                            <img src="public/images/img-pro-03.jpg" class="img-fluid" alt="Image">
                            <div class="mask-icon">
               
                                <a class="cart" href="#">Voir Détail</a>
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
                            <img src="public/images/img-pro-04.jpg" class="img-fluid" alt="Image">
                            <div class="mask-icon">
                                <a class="cart" href="#">Voir Detail</a>
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

        <!-- Start Services  -->
    <div class="services-box-main">
        <div class="container">
            <div class="row my-4">
                <div class="col-12">
                    <h2 class="noo-sh-title">Meet Our Team</h2>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="hover-team">
                        <div class="our-team"> <img src="public/images/img-1.jpg" alt="" />
                            <div class="team-content">
                                <h3 class="title">Williamson</h3> <span class="post">Web Developer</span> </div>
                            <div class="icon"> <i class="fa fa-plus" aria-hidden="true"></i> </div>
                        </div>
                        <div class="team-description">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent urna diam, maximus ut ullamcorper quis, placerat id eros. Duis semper justo sed condimentum rutrum. Nunc tristique purus turpis. Maecenas vulputate. </p>
                        </div>
                        <hr class="my-0"> </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="hover-team">
                        <div class="our-team"> <img src="public/images/img-2.jpg" alt="" />
                            <div class="team-content">
                                <h3 class="title">Kristiana</h3> <span class="post">Web Developer</span> </div>
                            <div class="icon"> <i class="fa fa-plus" aria-hidden="true"></i> </div>
                        </div>
                        <div class="team-description">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent urna diam, maximus ut ullamcorper quis, placerat id eros. Duis semper justo sed condimentum rutrum. Nunc tristique purus turpis. Maecenas vulputate. </p>
                        </div>
                        <hr class="my-0"> </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="hover-team">
                        <div class="our-team"> <img src="public/images/img-3.jpg" alt="" />
                            <div class="team-content">
                                <h3 class="title">Steve Thomas</h3> <span class="post">Web Developer</span> </div>
                            <div class="icon"> <i class="fa fa-plus" aria-hidden="true"></i> </div>
                        </div>
                        <div class="team-description">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent urna diam, maximus ut ullamcorper quis, placerat id eros. Duis semper justo sed condimentum rutrum. Nunc tristique purus turpis. Maecenas vulputate. </p>
                        </div>
                        <hr class="my-0"> </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="hover-team">
                        <div class="our-team"> <img src="public/images/img-1.jpg" alt="" />
                            <div class="team-content">
                                <h3 class="title">Voir detail</h3>
                                
                            </div>
                        </div>
                        <div class="team-description">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent urna diam, maximus ut ullamcorper quis, placerat id eros. Duis semper justo sed condimentum rutrum. Nunc tristique purus turpis. Maecenas vulputate. </p>
                        </div>
                        <hr class="my-0"> </div>
                </div>
            </div>

        </div>
    </div>
    <!-- End Services -->


@endsection
        

        


   