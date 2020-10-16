@extends('layouts.index')

@section('content')
    <div class="counter-area fix area-padding-2">
        <div class="container">
            <!-- Start counter Area -->
             <div class="row">
                <div class="fun-content">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <!-- fun_text  -->
                        <div class="fun_text backgr">
                            <h4 id="tilte_catalogue">Catalogue</h4>
                        </div>
                        <div class="ml-4">
                            <ul id="inline_list">
                                <a href="{{route('accueil')}}">
                                    <li>Home </li>
                                </a>
                                <a href="{{ url('listpack') }}">
                                    <li>&nbsp; > &nbsp;Catalogue</li>
                                </a>
                            </ul>
                        </div>

                    </div>              
                </div>
            </div>
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
    <div class="counter-area fix area-padding-2" id="arrea">
        <div class="container">
            <!-- Start counter Area -->
             <div class="row">
                <div class="fun-content">
                    @foreach($listpacks as $listpack)
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <!-- fun_text  -->
                            <div class="fun_texte">
                                <span class="counter-icon">
                                    <!-- <i class="flaticon-035-savings"></i> -->
                                    <img src="{{asset('/public/img/pack/'.$listpack->avatar_pack)}}" id="avatar_pack">
                                </span>
                                <div class="section-headline text-center">
                                    <h4>{{$listpack->nom_pack}}</h4>
                                    <p>{{$listpack->desc_pack}}</p>
                                </div>
                                <a href="{{ url('conseil_pack')}}/{{$listpack->id_pack}}">
                                    <button class="to-animate btn btn-primary btn-lg"> cliquez ici pour voir la presentation complete</button>
                                </a>
                            </div>
                        </div>
                        <!-- <div class="col-md-6 col-sm-6 col-xs-12"> -->
                            <!-- fun_text  -->
                       <!--      <div class="fun_text">
                               <span class="counter-icon"><i class="flaticon-034-reward"></i></span>
                                <span class="counter">2209</span>
                                <h4>Total Members</h4>
                            </div>
                        </div> -->
                    @endforeach    
                </div>
            </div>
        </div>
    </div>

    <div class="work-proses fix bg-color area-padding-2"  id="arrea">
            <div class="container">
                <div class="row">
                    <div class="section-headline text-center">
                        <h3>Programmes et méthodes à l'unité</h3>
                    </div>
                </div>
                        <div class="row">
                            <div class="work-proses-inner text-center">
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <div class="single-proses">
                                        <div class="proses-content">
                                         <img src="{{asset('/public/img/logo/cd_sommeil.jpg')}} ">
                                            <div class="proses-text">
                                                <h4>CD Sommeil 1-2-3</h4>
                                            </div>
                                        </div>
                                        <p>Retrouvez le sommeil avec ce CD d'hypnothérapie.</p>
                                        <button>Voir la version complète</button>
                                    </div>
                                </div>
                                <!-- End column -->
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <div class="single-proses">
                                        <div class="proses-content">
                                            <img src="{{asset('/public/img/logo/stopper_stress.jpg')}} ">
                                            <div class="proses-text">
                                                <h4>Stoppez le Stress et l'Anxiété</h4>
                                            </div>
                                        </div>
                                        <p>Programme de formation à la gestion du stress en 21 jours.</p>
                                           <button>Voir la version complète</button>
                                    </div>
                                </div>
                                <!-- End column -->
              
                            </div>
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
        </div>

@endsection
        

        


   