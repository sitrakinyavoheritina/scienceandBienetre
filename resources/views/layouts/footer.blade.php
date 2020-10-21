    <script src="{{asset('public/assets/js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('public/assets/js/popper.min.js')}}"></script>
    <script src="{{asset('public/assets/js/bootstrap.min.js')}}"></script>
    <!-- ALL PLUGINS -->
    <script src="{{asset('public/assets/js/jquery.superslides.min.js')}}"></script>
    <script src="{{asset('public/assets/js/bootstrap-select.js')}}"></script>
    <script src="{{asset('public/assets/js/inewsticker.js')}}"></script>
    <script src="{{asset('public/assets/js/bootsnav.js.')}}"></script>
    <script src="{{asset('public/assets/js/images-loded.min.js')}}"></script>
    <script src="{{asset('public/assets/js/isotope.min.js')}}"></script>
    <script src="{{asset('public/assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('public/assets/js/baguetteBox.min.js')}}"></script>
     <script src="{{asset('public/assets/js/jquery.waypoints.min.js')}}"></script>
   <!--  <script src="{{asset('public/assets/js/form-validator.min.js')}}"></script>
    <script src="{{asset('public/assets/js/contact-form-script.js')}}"></script> -->
    <script type="text/javascript">
    </script>
    <script src="{{asset('public/assets/js/custom.js')}}"></script>
    <script type="text/javascript">
        if ( $('#fh5co-home').length > 0 ) {    

            $('#fh5co-home').waypoint( function( direction ) {
                            // alert(direction)         
                if( direction === 'down' && !$(this.element).hasClass('animated') ) {


                    setTimeout(function() {
                        $('#fh5co-home .to-animate').each(function( k ) {
                            var el = $(this);
                            
                            setTimeout ( function () {
                                el.addClass('fadeInUp animated');
                            },  k * 200, 'easeInOutExpo' );
                            
                        });
                    }, 200);

                    
                    $(this.element).addClass('animated');
                        
                }
            } , { offset: '80%' } );

        }
    </script>
  <!-- Start copyright  -->
    <div class="footer-copyright">
        <p class="footer-company">All Rights Reserved. &copy; 2020 <a href="#">maquillage et soin de visage</a> Design By :
            <a href="https://html.design/">SK'HAY</a></p>
    </div>
    <!-- End copyright  -->