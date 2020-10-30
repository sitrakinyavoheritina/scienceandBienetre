
@extends('layouts.index')

@section('content')
    <div class="counter-area fix area-padding-2">
        <div class="container">
            <!-- Start counter Area -->
             <div class="row">
          
                    <div class="col-12 mb-2 backgr">
                        <h4 id="tilte_catalogue">Contact</h4>
                    </div>
                    <div class="ml-4 mt-4">
                        <ul id="inline_list">
                            <li> 
                            	<a href="{{route('accueil')}}">
                           			 Home </a>
                           	</li>
                            <li>&nbsp; > &nbsp;
                                <a href="">Contact
                        	    </a>
                        	</li>
                            
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    	</br>
    	</br>
        <div class="row " >
        	<div class="container  ml-4">
        		<h2>lorem umpsum</h2>
        		<h4>lorem umpsum text</h4>
        		<ul style="list-style: none;">
        			<li>email : xxxxxxxg@gmail.com</li>
        			<li>Tél. : 044 83 43 1444 00 ou +33 4155583 431 400</li>
        			<li>Du lundi au vendredi de 8h à 16h30</li>
        		</ul>
        		<h4>Service courrier</h4>

        		<ul style="list-style: none;">
        			<li>1544</li>
        			<li>38240 test</li>
        			<li>XXXX</li>
        		</ul>
        	</div>
        </div>

    </div> 
@endsection