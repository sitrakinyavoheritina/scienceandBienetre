<!DOCTYPE html>
<html>
<head>
  <title>test</title>
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
  
</head>
<body style="margin: 50px;">
<!--   <h1>premier index dans ma pages</h1>
  <button class="btn btn-danger">fdgfdgdfgdf</button> -->
  <nav class="navbar navbar-expand-lg fixed-top trans-navigation" style="background: #4dedf5;">
        <div class="container">
            <a class="navbar-brand" href="index.html">
                <img src="images/logo.png" alt="" class="img-fluid b-logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">
                    <i class="fa fa-bars"></i>
                </span>
              </button>

            <div class="collapse navbar-collapse justify-content-end" id="mainNav">
                <ul class="navbar-nav ">
                  <!--  <li class="nav-item dropdown">
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link smoth-scroll" href="{{url('accueil')}}">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link smoth-scroll" href="{{url('listpack')}}">catalogue</a>
                    </li>
           <!--          <li class="nav-item">
                        <a class="nav-link smoth-scroll" href="{{url('partenaire')}}">partenaires</a>
                    </li> -->

                    <li class="nav-item">
                        <a class="nav-link smoth-scroll" href="{{url('About')}}">a propos</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <script src="{{ asset('assets/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery/jquery.stellar.min.js') }}"></script>
</body>
</html>