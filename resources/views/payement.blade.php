

@extends('layouts.index')

@section('content')
        <div class="counter-area fix area-padding-2">
            <div class="container">
                <!-- Start counter Area -->
                <div class="row ">
                    <div class="fun-content">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <!-- fun_text  -->
                            <div class="fun_text backgr">
                                 <h4 id="tilte_apropos">Information</h4>
                            </div>
                            <div class="ml-4">
                                <ul id="inline_list">
                                    <li>
                                        <a href="{{route('accueil')}}">Home
                                        </a> 
                                    </li>
                                    <li>&nbsp; > &nbsp;Information</li>
                                </ul>
                                
                            </div>
                            
                        </div>              
                    </div>

                </div>
            </br></br>
            <div class="row">
            	               <!-- Start Left contact -->
                <div class="col-md-6 col-sm-6 col-xs-12">
                	<h4>etape 1</h4>
                    <div class="contact-form">
                        <div class="row">
                            <form id="contactForm" method="POST" action="http://rockstheme.com/rocks/aievari-live/contact.php" class="contact-form">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <input type="text" id="name" class="form-control" placeholder="Nom" required data-error="Please enter your name">
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <input type="text" id="name" class="form-control" placeholder="Prenom" required data-error="Please enter your name">
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <input type="text" id="name" class="form-control" placeholder="Adresse E-mail" required data-error="Please enter your name">
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <input type="number" id="name" class="form-control" placeholder="Votre numero de téléphone" required data-error="Please enter your name">
                                    <div class="help-block with-errors"></div>
                                </div>
                     
                        
                                <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                                    <button type="submit" id="submit" class="add-btn contact-btn">Send Message</button>
                                    <div id="msgSubmit" class="h3 text-center hidden"></div> 
                                    <div class="clearfix"></div>
                                </div>   
                            </form>  
                        </div>
                    </div>

                </div>
                <!-- End Left contact -->

          	    <div class="col-md-6 col-sm-6 col-xs-12">
          	    	<h4>liste pannier</h4>
     			<hr>
                    <div class="footer-content last-content">
                        <div class="footer-head">
                            <div class="footer-contacts">
								<p><span>Pack geomincir :   </span>30€</p>
								<p><span>Pack Sommeil : </span> 12€</p>
								<p><span>Total   :</span> 42€</p>
							</div> 
                        </div>
                    </div>
                </div>
 
            </div>
        </div>
    </div>
@endsection