<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

    <title>NuSya Care </title>
<!--
    
TemplateMo 558 Klassy Cafe

https://templatemo.com/tm-558-klassy-cafe

-->
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-klassy-cafe.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">

    </head>
    
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-11">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">
                            <img src="assets/images/make-up.png" align="klassy cafe html template">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="{{url('/')}}" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="#about">About</a></li>
                           	
                            <li class="scroll-to-section"><a href="#menu">Menu</a></li> 
                            <li class="submenu">
                                <a href="javascript:;">Categories</a>
                                <ul>
                                    <li><a href="{{url('/skincare')}}">Skincare</a></li>
                                    <li><a href="{{url('/body')}}">Body</a></li>
                                    <li><a href="{{url('/makeup')}}">Make up</a></li>
                
                                </ul>
                            </li>
                            <!-- <li class=""><a rel="sponsored" href="https://templatemo.com" target="_blank">External URL</a></li> -->
                            <li class="scroll-to-section"><a href="#reservation">Contact Us</a></li> 
                            <li>
                            @if (Route::has('login'))
                            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                @auth
                                <li>
                                    <x-app-layout>
  
                                    </x-app-layout>
                                </li>
                                @else
                                   <li><a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a></li>
            
                                    @if (Route::has('register'))
                                        <li><a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a></li>
                                    @endif
                                @endauth
                            </div>
                        @endif
                        </li>
                        @auth
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="110" fill="currentColor" class="bi bi-cart" viewBox="0 5 16 16">
                                <a href="{{url('/cart',Auth::user()->id)}}">
                                <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                            </svg>
                                                    
                        @endauth
                        </ul>        
                        <a class='menu-trigger'>
                            <span></span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <br>

    @foreach ($data2 as $data2)
    @if ($loop->iteration==1) 
    <div class="container">
        <br><br><br><img height="500" width="380" src="consultimage/{{$data2->image}}" alt="Chef #1">
        <div class="down-content"><br>
            <h4>{{$data2->name}}</h4>
            <span>{{$data2->speciality}}</span>
        </div><br>
        <p>Founder and CEO of Alluskin Sdn Bhd (2019).</p>
        <p>She is also ex former medical doctor and started to formulate
            the Alluskin during housemanship and formulating her products and 
            specialist for dry and sensitive skin</p>
    </div>
            @endif
   
    @if ($loop->iteration==2) 
    <div class="container">
    <br><br><br><img height="400" width="400" src="consultimage/{{$data2->image}}" alt="Chef #1">
        <div class="down-content"><br>
            <h4>{{$data2->name}}</h4>
            <span>{{$data2->speciality}}</span>
        </div><br>
        <p>Graduated from IIUM Gombak, Bachelor of Electronics & Computer Information Engineering in (2016)</p>
        <p>Active in social media platform such as twitter, blogger and instagram and work as influencer. </p>
        <p>In her blogger, there are a few tips that she shared which is what ingredients that we should avoid, how to check your skin type condition
            and the beauty tips.</p>
        </div>
        @endif

        @if ($loop->iteration==3) 
    <div class="container">
    <br><br><br><img height="400" width="400" src="consultimage/{{$data2->image}}" alt="Chef #1">
        <div class="down-content"><br>
            <h4>{{$data2->name}}</h4>
            <span>{{$data2->speciality}}</span>
        </div><br>
        <p>Graduated from IIUM Gombak, Bachelor of Accounting(Honours) in (2019).</p>
        <p>Active in social media platform such as twitter, instagram and currently doing her Master in Germany. </p>
        <p>She is also a Marketing Diretor of CIMA Young Leaders which is vibrant young people to strive for development of the youths in three main areas : community, engagement and exposure. </p>
        <p>Besides that, there are a few videos regarding her skin condition in Youtube that she shared during her journey as an acne fighters.</p>
    </div>
        @endif

    @endforeach

   










    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-xs-12">
                    <div class="right-text-content">
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="logo">
                        <a href="profile"><img src="assets/images/make-up.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-4 col-xs-12">
                    <div class="left-text-content">
                        <p>© Copyright NuSya Care.
                        
                       </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/datepicker.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/slick.js"></script> 
    <script src="assets/js/lightbox.js"></script> 
    <script src="assets/js/isotope.js"></script> 
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>
    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);
                
            });
        });

    </script>
  </body>
</html>
