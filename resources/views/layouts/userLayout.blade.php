<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    <title>Job Agency</title>

    <link rel="stylesheet" type="text/css" href="{{asset('frontendAssets/css/bootstrap.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('frontendAssets/css/font-awesome.css')}}">

    <link rel="stylesheet" href="{{asset('frontendAssets/css/style.css')}}">

    </head>
    
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
      <div class="preloader-inner">
        <span class="dot"></span>
        <div class="dots">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </div>
    <!-- ***** Preloader End ***** -->
   
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">Job Agency<em> Website</em></a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li><a href="{{route('landing.index')}}" class="active">Home</a></li>

                            @auth
                            <li><a href="{{route('user.index')}}">Dashboard</a></li>
                            @endAuth
                            
                            @guest
                                
                            <li><a href="{{route('login')}}">login</a></li>
                            @endguest
                           
                            
                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    <div class="main-banner" id="top">
        <video autoplay muted loop id="bg-video">
            <source src="assets/images/video.mp4" type="video/mp4" />
        </video>

        <div class="video-overlay header-text">
            <div class="caption">
                <h6>Lorem ipsum dolor sit amet</h6>
                <h2>Find the perfect <em>Job</em></h2>
               
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

 
    @yield('content')

    



    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p>
                        Copyright © 2020 Company Name
                        - Template by: <a href="https://www.phpjabbers.com/">PHPJabbers.com</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="{{asset('frontendAssets/js/jquery-2.1.0.min.js')}}"></script>

    <!-- Bootstrap -->
    <script src="{{asset('frontendAssets/js/popper.js')}}"></script>
    <script src="{{asset('frontendAssets/js/bootstrap.min.js')}}"></script>

    <!-- Plugins -->
    <script src="{{asset('frontendAssets/js/scrollreveal.min.js')}}"></script>
    <script src="{{asset('frontendAssets/js/waypoints.min.js')}}"></script>
    <script src="{{asset('frontendAssets/js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('frontendAssets/js/imgfix.min.js')}}"></script> 
    <script src="{{asset('frontendAssets/js/mixitup.js')}}"></script> 
    <script src="{{asset('frontendAssets/js/accordions.js')}}"></script>
    
    <!-- Global Init --><script src="{{asset('frontendAssets/js/custom.js')}}"></script>

  </body>
</html>