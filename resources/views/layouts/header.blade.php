<!doctype html>
<html class="no-js" lang="en">
    
<!-- Mirrored from rockstheme.com/rocks/aievari-live/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Mar 2020 08:27:43 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>science et bien etre</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- favicon -->        
   <!--      <link rel="shortcut icon" type="image/x-icon" href="public/img/logo/favicon.ico"> -->

        <!-- all css here -->

        <!-- bootstrap v3.3.6 css -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

        <!-- owl.carousel css -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
        <!-- <link rel="stylesheet" href="{{asset('public/assets/css/owl.transitions.css')}}"> -->
       <!-- Animate css -->
        <link rel="stylesheet" href="{{asset('public/assets/css/animate.css')}}">
        <!-- meanmenu css -->
        <link rel="stylesheet" href="{{asset('public/assets/css/meanmenu.min.css')}}">
        <!-- font-awesome css -->
        <link rel="stylesheet" href="{{asset('public/assets/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('public/assets/css/themify-icons.css')}}">
        <!-- <link rel="stylesheet" href="{{asset('public/assets/css/flaticon.css')}}"> -->
        <!-- magnific css -->
        <link rel="stylesheet" href="{{asset('public/assets/css/magnific.min.css')}}">
        <!-- style css -->
        <link rel="stylesheet" href="{{asset('public/assets/css/style.css')}}">
        <!-- responsive css -->
        <link rel="stylesheet" href="{{asset('public/assets/css/responsive.css')}}">
        <link rel="stylesheet" href="{{asset('public/assets/css/personalise.css')}}">
        <style type="text/css">
            .self-content {
                    background: #e4e2e2;
                    padding: 50px 30px 50px 50px;
                    border-radius: 14px;
                    opacity: 0.8;
                }
            .header-one {
                position: absolute;
                top: 0;
                /* left: 0; */
                width: 100%;
                height: auto;
                z-index: 999;
            }
            #navbar-list-2 ul.navbar-nav li a {
                background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
                color: #fff;
                font-size: 16px;
                font-weight: 700;
                padding: 33px 15px 12px;
                text-transform: uppercase;
                position: relative;
                text-shadow: 1px 1px 2px #000000;
            }
            .nav-item.active .nav-link,
              .nav-item:focus .nav-link,
              .nav-item:hover .nav-link {
                  color: #E6922E!important;
                  border-bottom: solid;
              }

              .show > .nav-link,
              .active > .nav-link,
              .nav-link.show,
              .nav-link.active {
                color: #E6922E!important;
              }
            @media (max-width: 767px){
               
                #navbar-list-2 ul.navbar-nav li a {
                    background: #fdfcfc none repeat scroll 0 0;
                    color: #3d5368;
                    display: block;
                    float: left;
                    font-size: 14px;
                    font-weight: 400;
                    margin: 0;
                    padding: 13px 10px;
                    text-align: left;
                    text-decoration: none;
                    text-transform: capitalize;
                    width: 90%;
                }

                .navbar-toggler {
                    background-color: dimgrey;
                }

                .header-one {
                    position: inherit;
                }
                .area-padding-2 {
                    padding: 0px 0px 70px!important;
                }
                .fa {
                    width: 17px;
                }
            }

        </style>

        <!-- modernizr css -->
        <script src="{{asset('public/assets/js/vendor/modernizr-2.8.3.min.js')}}"></script>
        
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <style type="text/css">
            
        </style>
    </head>
        <body>

        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

            <div id="preloader"></div>
            <header class="header-one">
            <nav class="navbar navbar-dark bg-dark navbar-expand-sm"style="background: transparent!important;">
              <!-- <a class="navbar-brand" href="#">
                <img src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/logo_white.png" width="30" height="30" alt="logo">
                BootstrapBay
              </a> -->

              <button class="navbar-toggler ml-auto mr-1" type="button" data-toggle="collapse" data-target="#navbar-list-2" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"id="accordeon" style="text-align: right!important;"onclick="myFunction()">
                <span class="navbar-toggler-icon" id="iconebar"></span>
                <span class="fa fa-times" id="iconex"style="display: none"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbar-list-2">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item ">
                    <a class="nav-link" href="{{route('accueil')}}">Accueil <span class="sr-only">Accueil</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{url('listpack')}} ">Catalogue</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{url('Apropos')}}">A propos</a>
                  </li>
                </ul>
              </div>
            </nav>
            </header>
 
        
     
            </body>

</html>