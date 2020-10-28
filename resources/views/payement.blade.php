

@extends('layouts.index')

@section('content')
        <div class="counter-area fix area-padding-2">
            <div class="container">
                <!-- Start counter Area -->
                <div class="row ">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="fun_text backgr">
                             <h4 id="tilte_apropos">Information</h4>
                        </div>
                        <div class="ml-4 mt-4">
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
            </br></br>

<div class="row">

    <div class="col-md-6  col-sm-6 col-xs-12">    
        <form>
            <div class="form-group">
                <label for="formGroupExampleInput">Nom</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput2">Prénoms</label>
                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="">
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput2">Adresse E-mail</label>
                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="">

              </div>
              <div class="form-group">
                <label for="formGroupExampleInput2">Numéro téléphone</label>
                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="">
              </div>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        </form>
    </div>
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