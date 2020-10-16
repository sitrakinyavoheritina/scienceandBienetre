
@extends('layouts.index')
<style type="text/css">
 
    .fun_text { 
        position: initial ! important;
        padding: 56px 30px ! important;
    }

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
                                 <h4 id="tilte_apropos">A propos</h4>
                            </div>
                            <div class="ml-4">
                                <ul id="inline_list">
                                    <li>
                                        <a href="{{route('accueil')}}">Home
                                        </a> 
                                    </li>
                                    <li>&nbsp; > &nbsp;A propos</li>
                                </ul>
                                
                            </div>
                            
                        </div>              
                    </div>
                </div>
            </br></br>
                <p class="description_apropos">
                    &nbsp;&nbsp;&nbsp;&nbsp;Science & Bien-Être est un laboratoire indépendant de recherche et développement dans le domaine du bien-être au naturel. Fort de 10 ans d’expérience, nos méthodes ont accompagné plus de 200 000 personnes dans plus de 80 pays.
                </p>
                <p class="description_apropos">
                    Que ce soit pour retrouver votre poids de forme, accéder à un meilleur sommeil, booster votre confiance en vous ou encore augmenter votre énergie au quotidien, nous proposons des solutions innovantes et radicales, en dehors des sentiers battus.
                </p>
                <p class="description_apropos">

                Notre unité de recherche est adossée à notre société mère : les éditions de la main bleue.
                </p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                
            </div>

        </div>
        
        
 
      

              
@endsection