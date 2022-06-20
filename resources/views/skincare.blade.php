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
                                        <li><a href="{{url('/makeup')}}">Make up</a></li>
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
           
                  <form action="{{url('/addtocart')}}" method="post">
                    @csrf 
                    <div class="row">
                  <div class="col-md-4">
                    <div class="thumbnail">
                      <a href="assets/images/skincare/cleansing oil.png" target="_blank">
                        <img src="assets/images/skincare/cleansing oil.png" alt="Lights" style="width:100%">
                        <div class="caption">
                          <p><b>(iUNIK) Calendula Complete Cleansing Oil 200ml</b></p>
                          <p>RM60</p> 
                        </div>
                        </a>
                        <input type="number" name="quantity" min="1"  value="1" style="width: 50px;">
                        <input type="submit" value="Add to Cart">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="thumbnail">
                      <a href="assets/images/skincare/buble cleansing foam.jpg" target="_blank">
                        <img src="assets/images/skincare/buble cleansing foam.jpg" alt="Nature" style="width:100%">
                        <div class="caption">
                          <p><b>(iUNIK) Centella Bubble Cleansing Foam 150ml</b></p>
                          <p>RM40</p><br>
                        </div>
                      </a>
                      <input type="number" name="quantity" min="0" style="width: 50px;">
                        <input type="submit" value="Add to Cart">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="thumbnail">
                      <a href="assets/images/skincare/centella calming gel.png" target="_blank">
                        <img src="assets/images/skincare/centella calming gel.png" alt="Fjords" style="width:100%">
                        <div class="caption">
                          <p><b>(iUNIK) Centella Calming Gel Cream 60ml</p></b>
                          <p>RM56.90</p><br>
                        </div>
                      </a>
                        <input type="number" name="quantity" min="0" style="width: 50px;">
                        <input type="submit" value="Add to Cart">
                    </div>
                  </div>
                </form>
              
                </div>
            
            </div>
            <br>
            <div class="container">
              <form action="{{url('/addtocart')}}" method="post">
                @csrf 
                <div class="row">
                  <div class="col-md-4">
                    <div class="thumbnail">
                      <a href="assets/images/skincare/noni light oil serum.png" target="_blank">
                        <img src="assets/images/skincare/noni light oil serum.png" alt="Lights" style="width:100%">
                        <div class="caption">
                          <p><b>(iUNIK) Noni Light Oil Serum 50ml</b></p>
                          <p>RM69.90</p>
                          <input type="number" name="quantity" min="1"  value="1" style="width: 50px;">
                          <input type="submit" value="Add to Cart">
                        </div>
                      </a>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="thumbnail">
                      <a href="assets/images/skincare/propolis vitamin serum.png" target="_blank">
                        <img src="assets/images/skincare/propolis vitamin serum.png" alt="Nature" style="width:100%">
                        <div class="caption">
                          <p><b>(iUNIK) Propolis Vitamin Synergy Serum 50ml</b></p>
                          <p>RM35</p>
                          <input type="number" name="quantity" min="1"  value="1" style="width: 50px;">
                          <input type="submit" value="Add to Cart"></div>
                      </a>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="thumbnail">
                      <a href="assets/images/skincare/rose galactomyces serum.png" target="_blank">
                        <img src="assets/images/skincare/rose galactomyces serum.png" alt="Fjords" style="width:100%">
                        <div class="caption">
                          <p><b>(iUNIK) Rose Galactomyces synergy Serum 50ml</p></b>
                          <p>RM45</p> 
                          <input type="number" name="quantity" min="1"  value="1" style="width: 50px;">
                          <input type="submit" value="Add to Cart">
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