@extends('layouts.index')
<style type="text/css">
 #header_row {
   color: red;
   font-color:red !important;
}

.main-menu ul.navbar-nav li a {
    background: rgba(0, 0, 0, 0) none repeat scroll 0 0 ! important;
}

#avatar_pack {
    width: 100px;
    max-width: 100px;
    height: 100px;
    max-height: 100px;
}

.section-headline {
    padding-bottom: 40px ! important;
    /* position: relative; */
}

.fun_texte { 
    background: #eaeaea;
    text-align: center;
    box-shadow: 0 0px 1px rgba(0, 0, 0, 0.1) ! important;
    padding: 40px 30px;
    position: initial;
    margin-bottom: 30px;
    border-radius: 5px;
}

.fun_text {
    position: initial ! important;
    padding: 56px 30px ! important;
}

#tilte_catalogue {
    font-size: 46px;
    line-height: 34px;
    /* margin-left: -197px; */
    text-align: left;
    margin-left: 77px;
    font-weight: bold;
    color: white;
}


#arrea {
    padding: 10px 0px 70px ! important;
}

ul#inline_list li{
    display:inline;
}


/*.fun_text::after {
    background: #d6d0c9 ! important;
}*/

/*.backgr {
  background: red ! important
}*/
</style>


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
                                    <img src="{{asset('/public/img/pack/'.$listpack->avatar)}}" id="avatar_pack">
                                </span>
                                <div class="section-headline text-center">
                                    <h4>{{$listpack->nom_pack}}</h4>
                                    <p>{{$listpack->desc_pack}}</p>
                                </div>
                                <!-- <span class="counter">{{$listpack->avatar}}</span> -->
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
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="section-headline text-center">
                            <h3>Programmes et méthodes à l'unité</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
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
                    </div>
                </div>
            </div>
        </div>

@endsection
        

        


   