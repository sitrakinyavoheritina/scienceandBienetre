
@extends('layouts.index')

@section('content')
  
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
        			<li>email : xxxxxxxx@ xxxxxxxx.com</li>
        			<li>Tél. : 04 83 43 14 00 ou +33 483 431 400</li>
        			<li>Du lundi au vendredi de 8h à 16h30</li>
        		</ul>
        		<h4>Service courrier</h4>

        		<ul style="list-style: none;">
        			<li>XXXXX</li>
        			<li>XXXXX</li>
        			<li>XXXXXX</li>
        		</ul>
        	</div>
        </div>
@endsection