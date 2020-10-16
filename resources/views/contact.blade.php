
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
                            <h4 id="tilte_catalogue">Contact</h4>
                        </div>
                        <div class="ml-4">
                            <ul id="inline_list">
                                <li> 
                                	<a href="{{route('accueil')}}">
                               			 Home </a>
                               	</li>
                                <li>&nbsp; > &nbsp;
                                    <a href="{{ url('contact') }}">Contact
                            	    </a>
                            	</li>
                                
                            </ul>
                        </div>

                    </div>              
                </div>
            </div>
        </div>
    	</br>
    	</br>
        <div class="row " >
        	<div class="container  ml-4">
        		<h2>Science & Bien-Être</h2>
        		<h4>Service clients</h4>
        		<ul style="list-style: none;">
        			<li>email : info@scienceetbienetre.com</li>
        			<li>Tél. : 04 83 43 14 00 ou +33 483 431 400</li>
        			<li>Du lundi au vendredi de 8h à 16h30</li>
        		</ul>
        		<h4>Service courrier</h4>

        		<ul style="list-style: none;">
        			<li>BP 32</li>
        			<li>38240 Meylan</li>
        			<li>FRANCE</li>
        		</ul>
        	</div>
        </div>

    </div> 
@endsection