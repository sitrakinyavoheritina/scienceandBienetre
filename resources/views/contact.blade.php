
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
@endsection