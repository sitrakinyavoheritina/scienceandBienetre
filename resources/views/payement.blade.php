

@extends('layouts.index')

<style type="text/css">
    #test > tbody > tr td:last-child {
    /* background: #ff0000; */
        font-size: 18px;
        font-weight: bold;
        color: black;
        font-family: system-ui;
    }
    #test > tbody > tr:last-child {
     background: #eaeaea; 
    }
</style>
@section('content')
<div class="container">
    <div class="counter-area fix area-padding-2">
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
                    <button class="btn btn-lg btn-primary btn-block" type="submit">OK</button>
                </form>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <h4 class="mt-4 center">Commande</h4>
      
                <table class="table" id="test">
                    <thead>
                        <tr>
                            <th scope="col">PACK</th>
                            <th scope="col">PRIX</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">pack minceur,</th>
                            <td>12€</td>
                      
                        </tr>
                        <tr>
                            <th scope="row">pack sommeil</th>
                            <td>30€</td>
                        </tr>
                        <tr>
                            <th scope="row">Total</th>
                            <td>42€</td>
                        </tr>
                    </tbody>
                </table>
            </div>
           
        </div>
    </div>
</div>
@endsection