
@include('layouts.index')

<!-- <h1>ato ny list pack</h1> -->
<div class="container">
    <div class="row">
        <div class="row" style="width: 100%;">
            <h1 style="margin: 50px;">Catalogue</h1>
        </div>
    </div>
     <div class="row">
        <h4>home/catalogue</h4> 
        <h1 style="text-align: center;padding: 50px; " >Nos best sellers</h1>

     </div>

        <div class="pack_list">
            <div class="row">
                @foreach($listpacks as $listpack)
                    <div class="col-3 col-sm-12 col-md-3">
                        <div class="card">
                           <img src="{{ asset('img/pack/sommeil.png') }}"/>
                            <h2>{{$listpack->nom_pack}}</h2>
                            <h6>{{$listpack->desc_pack}}</h6>
                            <a href="{{url('pack')}}/{{$listpack->id}}">
                                <button class="btn btn-default">Cliquer ici pour voir</button>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>




</div>