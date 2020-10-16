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
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

          <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

   
              <script type="text/javascript">
                $(document).ready(function(){
                  $('.your-class').slick({
                    prevArrow: $('.prev'),
                    nextArrow: $('.next'),
                    // autoplay:true,
                    speed: 2000,
                    infinite:true
                  });
                });
              </script>
  
        
        <footer class="footer1" style="bottom: 0!important;">
            <div class="footer-area-bottom">
                <div class="container">
                    <div class="row">
                        <!-- <div class="col-md-6 col-sm-6 col-xs-12"> -->
                            <div class="copyright" >
                                <p style="text-align: center;">
                                    Copyright © 2020
                                    <a href="#">sk'hay</a> All Rights Reserved
                                </p>
                            </div>
                                <ul id="inline_list"  style="text-align: center;">
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
