
@include('layouts.index')

    <section id="fh5co-home" data-section="home" style="background-image: url(images/full_image_2.jpg);" data-stellar-background-ratio="0.5">
        <div class="gradient"></div>
        <div class="container">
            <div class="text-wrap rediuc">
                <div class="text-inner">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <h1 class="to-animate">Méthodes innovantes pour améliorer votre vie</h1>
                            <h2 class="to-animate">La science au service de votre bien-être</h2>
                            <p class="to-animate">Profitez des découvertes les plus récentes pour transformer votre quotidien et améliorer votre bien-être</p>
                            <a href="{{ url('listpack') }}">
                                <button class="to-animate btn btn-primary btn-lg"> decouvrez nos solution</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="slant"></div>
    </section>

    <section id="fh5co-intro" class="a_la_une">
        <div class="container">
            <div class="row row-bottom-padded-lg">
                <div class="fh5co-block pers_block to-animate" style="background-image: url(images/img_8.jpg);">
                    <div class="overlay-darker"></div>
                    <div class="overlay"></div>
                    <div class="fh5co-text">
                        <i class="fh5co-intro-icon icon-wrench"></i>
                        <h2>Catalogue</h2>
                        <p>Le catalogue complet de nos programmes. Ces techniques simples et naturelles sont issues de nos recherches afin de vous permettre d’accéder à une meilleure qualité de vie. Retrouvez une silhouette tonique, accédez à un sommeil profond et réparateur, apprenez à vous relaxer efficacement, etc.</p>
                        <p><a href="{{ url('listpack')}}" class="btn btn-primary">Consultez notre catalogue</a></p>
                    </div>
                </div>
                <div class="fh5co-block pers_block to-animate" style="background-image: url(images/img_10.jpg);">
                    <div class="overlay-darker"></div>
                    <div class="overlay"></div>
                    <div class="fh5co-text">
                        <i class="fh5co-intro-icon icon-rocket"></i>
                        <h2>Contact</h2>
                        <p>Science & Bien-Être
                            Service Clients
                            email : info@scienceetbienetre.com
                            Tél. : 04 83 43 14 00 ou +33 483 431 400
                            Du lundi au vendredi de 8h à 16h30</p>
                        <p><a href="{{url('About')}}" class="btn btn-primary">Nous contacter en ligne</a></p>
                    </div>
                </div>
            </div>
<!--             <div class="row watch-video text-center to-animate">
                <span>Watch the video</span>

                <a href="https://vimeo.com/channels/staffpicks/93951774" class="popup-vimeo btn-video"><i class="icon-play2"></i></a>
            </div> -->
        </div>
    </section>

    <footer id="footer" role="contentinfo" style="
    padding-bottom: 0em ! important;">
        <a href="#" class="gotop js-gotop"><i class="icon-arrow-up2"></i></a>
        <div class="container">
            <div class="">
                <div class="col-md-12 text-center">
                    <p>All Rights Reserved. <br>Created by <a href="http://freehtml5.co/" target="_blank"></a>Skhay</p>
                    
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <ul class="social social-circle">
                        <li><a href="#"><i class="icon-twitter"></i></a></li>
                        <li><a href="#"><i class="icon-facebook"></i></a></li>
                        <li><a href="#"><i class="icon-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>


   