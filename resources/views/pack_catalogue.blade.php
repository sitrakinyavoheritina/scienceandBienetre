@extends('layouts.index')
<style type="text/css">
 #header_row {
   color: red;
   font-color:red !important;
}

.main-menu ul.navbar-nav li a {
    background: rgba(0, 0, 0, 0) none repeat scroll 0 0 ! important;
}
#font_header li a {
   color: #605265;;
}
#avatar_pack {
    width: 100px;
    max-width: 100px;
    height: 100px;
    max-height: 100px;
}
</style>


@section('content')
        <div class="counter-area fix area-padding-2">
            <div class="container">
                <!-- Start counter Area -->
                 <div class="row">
                    <div class="fun-content">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <!-- fun_text  -->
                            <div class="fun_text">
                                <h4>catalogue</h4>
                            </div>
                        </div>              
                    </div>
                </div>
            </div>

        </div>
 
            <!-- Start Count area -->
             <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-headline text-center">
                    <h3>Nos best sellers</h3>
                  <!--   <p>Help agencies to define their new business objectives and then create professional software.</p> -->
                </div>
            </div>
        </div>
        <div class="counter-area fix area-padding-2">
            <div class="container">
                <!-- Start counter Area -->
                 <div class="row">
                    <div class="fun-content">
                        @foreach($listpacks as $listpack)
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <!-- fun_text  -->
                                <div class="fun_text">
                                    <span class="counter-icon">
                                        <!-- <i class="flaticon-035-savings"></i> -->
                                        <img src="{{asset('/public/img/pack/'.$listpack->avatar)}}" id="avatar_pack">
                                    </span>
                                    <div class="section-headline text-center">
                                        <h4>{{$listpack->nom_pack}}</h4>
                                        <p>{{$listpack->desc_pack}}</p>
                                    </div>
                                    <!-- <span class="counter">{{$listpack->avatar}}</span> -->
                                    <a href="{{ url('conseil_pack')}}/{{$listpack->id_pack}}">
                                        <button class="to-animate btn btn-primary btn-lg"> decouvrez nos solution</button>
                                    </a>
                                </div>
                            </div>
                            <!-- <div class="col-md-6 col-sm-6 col-xs-12"> -->
                                <!-- fun_text  -->
                           <!--      <div class="fun_text">
                                   <span class="counter-icon"><i class="flaticon-034-reward"></i></span>
                                    <span class="counter">2209</span>
                                    <h4>Total Members</h4>
                                </div>
                            </div> -->
                        @endforeach    
                    </div>
                </div>
            </div>
        </div>

                      <!-- Start Support-service Area -->
        <!-- End Support-service Area -->
@endsection
        

        


   