@extends('layouts.index')
<style type="text/css">
    #font_header li a {
        color: #605265;;
    }

    .work-proses-inner.text-center {
        width: 70% ! important;
        /*margin: auto ! important;*/
        margin: auto ! important;
    }

    .row {
     margin-left: 0px !important; 
     margin-right: 0px !important; 
    }

</style>

@section('content')

     <div class="counter-area fix area-padding-2">
            <div class="container">
                <!-- Start counter Area -->
                 <div class="row">
                    <div class="fun-content">
                        <div class="section-headline text-center">
                            <h3>Si vous essayez encore de mincir comme au 20e siècle, vous devez voir ceci</h3>
                              <iframe width="420" height="345" src="https://www.youtube.com/embed/tgbNymZ7vqY">
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
                            <h3>Ce que vous allez découvrir dans cette présentation :</h3>
                        </div>
                    
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="row">
                            <div class="work-proses-inner text-left">
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
                                        
                                    </div>
                
                
                                <!-- End column -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>		
        </div>
    @endsection