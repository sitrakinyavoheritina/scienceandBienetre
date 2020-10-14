
@include('layouts.index');
  
    <section id="fh5co-work" data-section="work">
        <div class="container">
            <div class="row">
                <div class="col-md-12 section-heading text-center">
                    <h2 class="to-animate">Catalogue</h2>
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 subtext to-animate">
                            <h3>Nos best sellers</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row row-bottom-padded-sm">
                @foreach($listpacks as $listpack)
                    <div class="col-md-6 col-sm-6 col-xxs-12">
                        <a href="images/work_1.jpg" class="fh5co-project-item image-popup to-animate">
                            <img src="{{ asset('img/pack/sommeil.png') }}" alt="Image" class="img-responsive">
                            <div class="fh5co-text">
                            <h2>{{$listpack->nom_pack}}</h2>
                            <span>{{$listpack->desc_pack}}</span>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

        <section id="fh5co-work" data-section="work">
        <div class="container">
            <div class="row">
                <div class="col-md-12 section-heading text-center">
                    <h3>Programmes et méthodes à l'unité</h3>
                </div>
            </div>
            <div class="row row-bottom-padded-sm">
                
                    <div class="col-md-6 col-sm-6 col-xxs-12">
                        <a href="images/work_1.jpg" class="fh5co-project-item image-popup to-animate">
                            <img src="{{ asset('img/pack/sommeil.png') }}" alt="Image" class="img-responsive">
                            <div class="fh5co-text">
                            <h2>CD Sommeil 1-2-3</h2>
                            <span>Retrouvez le sommeil avec ce CD d'hypnothérapie.</span>
                            </div>
                        </a>
                    </div>

                    <div class="col-md-6 col-sm-6 col-xxs-12">
                        <a href="images/work_1.jpg" class="fh5co-project-item image-popup to-animate">
                            <img src="{{ asset('img/pack/mincir.jpg') }}" alt="Image" class="img-responsive">
                            <div class="fh5co-text">
                            <h2>Stoppez le Stress et l'Anxiété</h2>
                            <span>Programme de formation à la gestion du stress en 21 jours.</span>
                            </div>
                        </a>
                    </div>
                
            </div>
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
