@extends('layouts.index')

<style type="text/css">

    .work-proses-inner.text-center {
        width: 70% ! important;
        /*margin: auto ! important;*/
        margin: auto ! important;
    }

    .row {
     margin-left: 0px !important; 
     margin-right: 0px !important; 
    }

    #text_h3 {
        width: 70% ! important;
        margin: auto ! important;
        padding-bottom: 35px ! important;
    }

    .text_to_colored {
        background: grey;
        /* margin: 5px; */
        padding: 4px;
    }

    #avatar_pack {
        width: 100px;
        max-width: 200px;
        height: 200px;
        max-height: 100px;
    }

    .to_left {
        margin-left: -40px;
    }
</style>


@section('content')

     <div class="counter-area fix area-padding-2">
            <div class="container">
                <!-- Start counter Area -->
                 <div class="row">
                    <div class="fun-content">
                        <div class="section-headline text-center">
                            <h3 id="text_h3">{{$desc_pack2}}</h3>
                              <iframe width="500" height="450" src="{{$video_pack}}">
                    </iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
        
      

       <div class="work-proses fix bg-color area-padding-2"  id="arrea">
            <div class="container">
                <div class="row">
                 
                        <div class="section-headline text-center">
                            <h3 class="text_to_colored">Ce que vous allez découvrir dans cette présentation :</h3>
                        </div>
                    
                </div>
                <div class="row">
                    <div class="work-proses-inner text-left">
                        @foreach($list_conseils as $list_conseil)
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="single-proses">
                                    <div class="row">
                                        <div class="col-md-5 col-sm-5 col-xs-12">
                                            <img src="{{asset('/public/img/conseilpack/'.$list_conseil->conseil_photo)}}" id="avatar_pack">
                                        </div>
                                        <div class="col-md-7 col-sm-7 col-xs-12 to_left">
                                            <p>{{$list_conseil->conseil_description}}</p>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        @endforeach   
                   <!--      <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="single-proses">
                                <div class="row">
                                    <div class="col-md-5 col-sm-5 col-xs-12">
                                            <img src="{{asset('/public/assets/img/background/fg.jpg')}}" id="avatar_pack">
                                    </div>
                                    <div class="col-md-7 col-sm-7 col-xs-12">
                                        <p>Retrouvez le sommeil avec ce CD d'hypnothérapie.</p>
                                    </div>
                                </div>
                                
                            </div>

                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="single-proses">
                                <div class="row">
                                    <div class="col-md-5 col-sm-5 col-xs-12">
                                        <img src="{{asset('/public/assets/img/background/b.jpg')}}" id="avatar_pack">
                                    </div>
                                    <div class="col-md-7 col-sm-7 col-xs-12">
                                        <p>Retrouvez le sommeil avec ce CD d'hypnothérapie.</p>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="single-proses">
                                <div class="row">
                                    <div class="col-md-5 col-sm-5 col-xs-12">
                                            <img src="{{asset('/public/assets/img/background/fg.jpg')}}" id="avatar_pack">
                                    </div>
                                    <div class="col-md-7 col-sm-7 col-xs-12">
                                        <p>Retrouvez le sommeil avec ce CD d'hypnothérapie.</p>
                                    </div>
                                </div>
                                
                            </div> -->
        
        
                        <!-- End column -->
                    </div>
                </div>
            </div>
    </div>		
        </div>
    @endsection