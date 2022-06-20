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
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-klassy-cafe.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">

    </head>

    <body>
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
                                <li class="submenu">
                                    <a href="javascript:;">Categories</a>
                                    <ul>
                                        <li><a href="{{url('/body')}}">Body</a></li>
                                        <li><a href="{{url('/skincare')}}">Skincare</a></li>
                                    </ul>
                                </li>
                                <!-- <li class=""><a rel="sponsored" href="https://templatemo.com" target="_blank">External URL</a></li> -->
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
                
                                    @endauth
                                </div>
                            @endif
                                </li>
                                <li>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="100" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                                        <a href="#">
                                        <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                    </svg>
                                </li>
                            </ul>        
                            <a class='menu-trigger'>
                                <span></span>
                            </a>
                            <!-- ***** Menu End ***** -->
                        </nav>
                    </div>
                </div>
            </div>
            <br><br>
            <div class="container">
                <div class="row">
                  <div class="col-md-4">
                    <div class="thumbnail">
                      <a href="assets/images/makeup/1.jpg" target="_blank">
                        <img src="assets/images/makeup/1.jpg" alt="Lights" style="width:100%">
                        <div class="caption">
                          <p><b>Focallure</b></p>
                          <p>12 Colors Eyes Pen</p>
                          <p>RM17.66</p><br> <button style="color:white" class="btn btn-primary btn-sm" type="Submit" value="Save">Add to Cart</button>
                        </div>
                        </a>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="thumbnail">
                      <a href="assets/images/makeup/2.jpg" target="_blank">
                        <img src="assets/images/makeup/2.jpg" alt="Nature" style="width:100%">
                        <div class="caption">
                            <p><b>Focallure</b></p>
                            <p>Face Liquid Blusher</p>
                            <p>RM18.12</p><br><button style="color:white" class="btn btn-primary btn-sm" type="Submit" value="Save">Add to Cart</button>
                        </div>
                      </a>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="thumbnail">
                      <a href="assets/images/makeup/3.jpg" target="_blank">
                        <img src="assets/images/makeup/3.jpg" alt="Fjords" style="width:100%">
                        <div class="caption">
                            <p><b>Focallure</b></p>
                            <p>Combination Highlighther Pallete</p>
                          <p>RM35.32</p><br><button style="color:white" class="btn btn-primary btn-sm" type="Submit" value="Save">Add to Cart</button>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
            </div>
            <br>
            <div class="container">
                <div class="row">
                  <div class="col-md-4">
                    <div class="thumbnail">
                      <a href="assets/images/makeup/4.jpg" target="_blank">
                        <img src="assets/images/makeup/4.jpg" alt="Lights" style="width:100%">
                        <div class="caption">
                            <p><b>Focallure</b></p>
                            <p>10 Colors Eyeshadow Pallete</p>
                          <p>RM27.20</p><br><button style="color:white" class="btn btn-primary btn-sm" type="Submit" value="Save">Add to Cart</button>
                        </div>
                      </a>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="thumbnail">
                      <a href="assets/images/makeup/5.jpg" target="_blank">
                        <img src="assets/images/makeup/5.jpg" alt="Nature" style="width:100%">
                        <div class="caption">
                            <p><b>Focallure</b></p>
                            <p>15 Colors Waterproof Eyeshadow</p>
                          <p>RM77.14</p><br><button style="color:white" class="btn btn-primary btn-sm" type="Submit" value="Save">Add to Cart</button>
                        </div>
                      </a>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="thumbnail">
                      <a href="assets/images/makeup/6.jpg" target="_blank">
                        <img src="assets/images/makeup/6.jpg" alt="Fjords" style="width:100%">
                       <div class="caption">
                            <p><b>Focallure</b></p>
                            <p>Dual-Use Eyeliner Cream</p>
                          <p>RM27.20</p><br> <button style="color:white" class="btn btn-primary btn-sm" type="Submit" value="Save">Add to Cart</button>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
            </div>
            <br>
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
        </header>
    </body>
    </html>