
@extends('layouts.index')
<style type="text/css">
    #header_row {
       color: red;
       font-color:red !important;
    }

    .main-menu ul.navbar-nav li a {
        background: rgba(0, 0, 0, 0) none repeat scroll 0 0 ! important;
    }
    #font_header li a {
       color: #605265;;
    }
    #avatar_pack {
        width: 100px;
        max-width: 100px;
        height: 100px;
        max-height: 100px;
    }
    ul#inline_list li{
        display:inline;
    }
    .description_apropos{
        font-size:larger;
        color: darkgray;
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
                            <div class="fun_text">
                                <h2 class="left">A propos</h2>
                            </div>
                            <div class="ml-4">
                                <ul id="inline_list">
                                    <li>Home </li>
                                    <li>&nbsp; > &nbsp;A propos</li>
                                </ul>
                                
                            </div>
                            <hr>
                        </div>              
                    </div>
                </div>
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