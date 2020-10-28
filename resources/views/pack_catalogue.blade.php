@extends('layouts.index')
 <style type="text/css">

 </style>
@section('content')
    <div class="counter-area fix area-padding-2">
        <div class="container">
            <div class="row">       
                <div class="col-12 backgr" data-aos="fade-up"
                        data-aos-anchor-placement="center-bottom">
                        <h4 id="tilte_catalogue">Catalogue</h4>
                </div>
                <div class="ml-4 mt-4">
                    <ul id="inline_list">
                        <a href="{{route('accueil')}}">
                            <li>Home </li>
                        </a>
                        <a href="#">
                            <li>&nbsp; > &nbsp;Catalogue</li>
                        </a>
                    </ul>
                </div>
            </div>
            <hr>
        </div>
    </div> 
        <!-- Start Count area -->
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
                <h3>Nos best sellers</h3>
              <!--   <p>Help agencies to define their new business objectives and then create professional software.</p> -->
            </div>
        </div>
    </div>
    <!-- <div class="counter-area fix area-padding-2" id="arrea"> -->
    <div class="container">
        <!-- Start counter Area -->
        <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12">
                        <!-- fun_text  -->
                <div class="fun_texte"  data-aos="fade-right"
                    data-aos-offset="300"
                    data-aos-easing="ease-in-sine">
                    <span class="counter-icon">
                        <!-- <i class="flaticon-035-savings"></i> -->
                        <img src="{{asset('/public/img/pack/mincir.jpg')}}" id="avatar_pack">
                    </span>
                    <div class="section-headline text-center">
                        <h4>Lorem Ipsum is simply dummy text of the printing</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard </p>
                    </div>
                    <a href="{{ url('detail_pack/2')}}">
                        <button class="to-animate btn btn-primary btn-lg btn_detail"> voir la presentation complete</button>
                    </a>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
                        <!-- fun_text  -->
                        <div class="fun_texte"  data-aos="fade-left"
                            data-aos-offset="300"
                            data-aos-easing="ease-in-sine">
                            <span class="counter-icon">
                                <!-- <i class="flaticon-035-savings"></i> -->
                                <img src="{{asset('/public/img/pack/sommeil.png')}}" id="avatar_pack">
                            </span>
                            <div class="section-headline text-center">
                                <h4>Lorem Ipsum is simply dummy text of the printing</h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard</p>
                            </div>
                            <a href="{{ url('detail_pack/1')}}">
                                <button class="to-animate btn btn-primary btn-lg btn_detail"> voir la présentation complète</button>
                            </a>
                        </div>
            </div>
        </div>
    </div>
    <!-- </div> -->

    <!-- <div id="arrea"> -->
            <div class="container">
                <div class="row mt-4">
                    <div class=" section-headline text-center">
                            <h3 style="text-align: center;">Programmes et méthodes à l'unité</h3>
                    </div>
                </div>

                <div class="row">
                    <!-- <div class="text-center"> -->
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="single-proses">
                                <div class="proses-content">
                                 <img src="{{asset('/public/img/pack/cd_sommeil.jpg')}} "  id="avatar_conseil">
                                    <div class="prosess-text">
                                        <h4>Lorem Ipsum is simply dummy text of the printing </h4>
                                    </div>
                                </div>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
                                <a href="{{ url('detail_pack/1')}}">
                                   <button class="to-animate btn btn-primary btn-lg">Voir la version complète</button>
                                </a>
                            </div>
                        </div>
                        <!-- End column -->
                        <div class="col-md-4 col-sm-4 col-xs-12" >
                            <div class="single-proses">
                                <div class="proses-content">
                                    <img src="{{asset('/public/img/pack/stopper_stress.jpg')}} "  id="avatar_conseil">
                                    <div class="prosess-text">
                                        <h4>Lorem Ipsum is simply dummy text of the printing and</h4>
                                    </div>
                                </div>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been</p>
                                <a href=" {{ url('detail_pack/2')}}">
                                   <button class="to-animate btn btn-primary btn-lg">Voir la version complète</button>
                                </a>
                            </div>
                        </div>
                        <!-- End column -->
                                <!-- End column -->
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="single-proses">
                                <div class="proses-content">
                                    <img src="{{asset('/public/img/pack/boost.jpg')}} " id="avatar_conseil">
                                    <div class="prosess-text">
                                        <h4>Lorem Ipsum is simply dummy text</h4>
                                    </div>
                                </div>
                                <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard</p>
                                   <a href="{{ url('detail_pack/3')}}">
                                   <button class="to-animate btn btn-primary btn-lg">Voir la version complète</button>
                                </a>
                            </div>
                        </div>
                        <!-- End column -->
      
                    <!-- </div> -->
                </div>
                <div class=" text-left">
                    <h4>Références Scientifiques</h4>
                    <p>
                        Paternal obesity is associated with IGF2hypomethylation in newborns: results from a Newborn Epigenetics Study (NEST) cohort
                        Adelheid Soubry, Joellen M Schildkraut, Amy Murtha, Frances Wang, Zhiqing Huang, Autumn Bernal, Joanne Kurtzberg, Randy L Jirtle, Susan K Murphy & Cathrine Hoyo / BMC Medicine volume 11, Article number: 29 (2013)

                        Successful treatment of post-traumatic stress disorder reverses DNA methylation marks
                        Christiaan H. Vinkers, Elbert Geuze, Sanne J. H. van Rooij, Mitzy Kennis, Remmelt R. Schür, Danny M. Nispeling, Alicia K. Smith, Caroline M. Nievergelt, Monica Uddin, Bart P. F. Rutten, Eric Vermetten & Marco P. Boks / Molecular Psychiatry (2019)
                    </p>
                </div>
            </div>
    

@endsection
        

        


   