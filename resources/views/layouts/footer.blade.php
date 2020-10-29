<?php 
    $route = Route::current();
    $name = Route::currentRouteName();
?>
        <!-- Start Footer Area -->
        <script src="{{asset('public/assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
        <!-- bootstrap js -->
        <script src="{{asset('public/assets/js/bootstrap.min.js')}}"></script>
        <!-- owl.carousel js -->
        <script src="{{asset('public/assets/js/owl.carousel.min.js')}}"></script>
          <!-- stellar js -->
        <script src="{{asset('public/assets/js/jquery.stellar.min.js')}}"></script>
        <!-- magnific js -->
        <script src="{{asset('public/assets/js/magnific.min.js')}}"></script>
        <!-- wow js -->
        <script src="{{asset('public/assets/js/wow.min.js')}}"></script>
        <!-- meanmenu js -->
        <script src="{{asset('public/assets/js/jquery.meanmenu.js')}}"></script>
        <!-- Form validator js -->
        <script src="{{asset('public/assets/js/form-validator.min.js')}}"></script>
        <!-- plugins js -->
        <script src="{{asset('public/assets/js/plugins.js')}}"></script>
        <!-- main js -->
        <script src="{{asset('public/assets/js/main.js')}}"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <script>

            current_route = "<?php echo $name;?>";
            if (current_route != 'accueil') {
                $('.nav-link').css('color','black');
            }

        AOS.init( {duration: 1200,
        easing: 'ease-in-out-back'});
        </script>
        <script type="text/javascript">
            var width = $(window).width();
        
            $('#body_fixd').css("min-width", width + "px !important");
            function myFunction() {
              var x = $("#accordeon").attr('aria-expanded') 

              if (x == "true") 
              {
              
                $("#iconebar").css('display','block');
                $("#iconex").css('display','none');

              } else {
              
                $("#iconebar").css('display','none');
                $("#iconex").css('display','block');
              }
              
            }




            $('.pay_cart').hide();
            $('.video2').hide();
            $('.video3').hide();
            $('.total').hide()
            var to_hide = function(key) {
                console.log('aze-'+key)
                $('#aze-'+key).hide();
                $('.icon_'+key).attr( 'checked', false )
            }

            var addto_card = function(key) {
                console.log(key)
                $('.icon_'+key).attr( 'checked', true )

            }
            var vid = document.getElementById("Video_pack");
                vid.onended = function() {
                $('.pay_cart').show();
            };

            $('.info_cart').hide();
            var videoendeded = function($key) {
                switch ($key) {
                    case '0':
                        $('.info_cart_0').show();
                    break;

                    case '1':
                        $('.info_cart_1').show();
                    break;
                }
            }

            $('.pay_cart').click(function() {
                $('.video2').show();
                $('.video3').show();
                $('.total').show()
            });

                $('.icon3').hide();
                $('.icon2').hide();

            $('.btn_vid3').click(function() {
                $('#icon3').attr( 'checked', true )
            });

            $('.btn_vid2').click(function() {
                // $('#icon2').show();
                $('#icon2').attr( 'checked', true )

            });


        $('#accept').click(function(){
            var total_price = 0;
            if ($('#icon1').is(":checked"))
            {
              var total_price = Number(total_price) + 10;
            }

            if ($('#icon2').is(":checked"))
            {
              var total_price = Number(total_price) +12;
            }

            if ($('#icon3').is(":checked"))
            {
              var total_price = Number(total_price) +30;
            }
              console.log(total_price);
              $('#total_price').html('total :' +total_price+'€');
        })


        </script>


        
        <footer class="footer1" style="bottom: 0!important;">
            <div class="footer-area-bottom">
                <div class="container">
                    <div class="row">
                        <!-- <div class="col-md-6 col-sm-6 col-xs-12"> -->
                            <div class="copyright" >
                               <!--  <p style="text-align: center;">
                                    Copyright © 2020
                                    <a href="#">sk'hay</a> All Rights Reserved
                                </p> -->
                            </div>
                                <ul id="inline_list" class="mx-auto justify-content-center" style="text-align: center;">
                                    <a href="{{url('About')}}">
                                        <li>A propos </li>
                                    </a>

                                    <a href="{{ url('listpack') }}">
                                        <li>&nbsp; - &nbsp;Mentions légales</li>
                                    </a>

                                    <a href="{{ url('contact') }}">
                                        <li>&nbsp; - &nbsp;Contact</li>
                                    </a>
                                </ul>
                        <!-- </div> -->
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer area -->
