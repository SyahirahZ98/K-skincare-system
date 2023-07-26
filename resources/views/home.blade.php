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
                <div class="col-10">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">
                            <img src="assets/images/make-up.png" align="klassy cafe html template">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="#about">About</a></li>
                            <li class="submenu">
                                <a href="javascript:;">Categories</a>
                                <ul>
                                    <li><a href="{{url('/skincare')}}">Skincare</a></li>
                                    <li><a href="{{url('/body')}}">Body</a></li>
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
                        <li class="scroll-to-section">
                        <i class="bi bi-cart"></i>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="110" fill="currentColor" class="bi bi-cart" viewBox="0 5 16 16">
                                <a href="{{url('/cart')}}">
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
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    <div id="top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <div class="left-content">
                        <div class="inner-content">
                            <h4>NuSya Care</h4>
                            <h6>Feel Comfortable in Flawless Skin</h6>
                            <div class="main-white-button scroll-to-section">
                                <a href="#reservation">Make A Reservation</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="main-banner header-text">
                        <div class="Modern-Slider">
                          <!-- Item -->
                          <div class="item">
                            <div class="img-fill">
                                <img src="assets/images/slide-01.jpg" alt="">
                            </div>
                          </div>
                          <!-- // Item -->
                          <!-- Item -->
                          <div class="item">
                            <div class="img-fill">
                                <img src="assets/images/slide-02.jpg" alt="">
                            </div>
                          </div>
                          <!-- // Item -->
                          <!-- Item -->
                          <div class="item">
                            <div class="img-fill">
                                <img src="assets/images/slide-03.jpg" alt="">
                            </div>
                          </div>
                          <!-- // Item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** About Area Starts ***** -->
    <section class="section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="left-text-content">
                        <div class="section-heading">
                            <h6>About Us</h6>
                            <h2>We Let You Feel Beautiful Look Beautiful and Be Beautiful Inside and Out</h2>
                        </div>
                        <p>NuSya Care is one of the best website that we trust that nobody
                            ought to need to trade off their wellbeing for beauty. 
                            We appreciate the certainty, quality, and beauty with which all of you 
                            carry on with your life. We need to be your buddy as you go up against 
                            numerous symbols and find your own character and individual style.

                            <br><br>As your beauty amigo, we make your life a ton less complex by not just
                             furnishing you with master counsel and direction, 
                            yet additionally by delivering items appropriate to your doorstep. 
                            Please contact us for more information.</p>
                        <div class="row">
                            <div class="col-4">
                                <img src="assets/images/body/i4.png" alt="">
                            </div>
                            <div class="col-4">
                                <img src="assets/images/skincare/i2.png" alt="">
                            </div>
                            <div class="col-4">
                                <img src="assets/images/skincare/y1.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="right-content">
                        <div class="thumb">
                            <a rel="nofollow" href="https://www.youtube.com/watch?v=awrsUmwNyck"><i class="fa fa-play"></i></a>
                            <img src="assets/images/skincare.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** About Area Ends ***** -->
    @include("product")
    
    @include("consultant")

    @include("reservation")
    
    <!-- ***** Menu Area Starts ***** -->
    <section class="section" id="offers">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4 text-center">
                    <div class="section-heading">
                        <h6>NuSya Week</h6>
                        <h2>This Week’s Special Offer and Discount</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="row" id="tabs">
                        <div class="col-lg-12">
                            <div class="heading-tabs">
                                <div class="row">
                                    <div class="col-lg-6 offset-lg-3">
                                        <ul>
                                          <li><a href='#tabs-1'><img src="assets/images/summer-sale.png" alt="">Summer</a></li>
                                          <li><a href='#tabs-2'><img src="assets/images/snowflake.png" alt="">Winter</a></a></li>
                                          <li><a href='#tabs-3'><img src="assets/images/cherry.png" alt="">Spring Day</a></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <section class='tabs-content'>
                                <article id='tabs-1'>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="left-list">
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/images/skincare/c1.jpg" alt="">
                                                            <h4>Cosrx</h4>
                                                            <h6>Advanced Snail 96 Mucin Power Essence</h6>
                                                            <p>Protect the skin from moisture loss and keeps skin smooth and healthy</p>
                                                            <div class="price">
                                                                <h6>RM45</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/images/body/p1.jpg" alt="">
                                                            <h4>Pyunkang Yul</h4>
                                                            <h6>Intensive Ceramide Lotion</h6>
                                                            <p>Provides soothing, nourishing hydration for body</p>
                                                            <div class="price">
                                                                <h6>RM81.50</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/images/body/d2.jpg" alt="">
                                                            <h4>Dr Jart+</h4>
                                                            <h6>Ceramidin Body Lotion</h6>
                                                            <p>A cica cream that boosts skin's to irritation in 24 hours and 
                                                                help sooth redness.</p>
                                                            <div class="price">
                                                                <h6>RM104</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="right-list">
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/images/skincare/c4.jpg" alt="">
                                                            <h4>Cosrx</h4>
                                                            <h6>Centella Water Alcohol-Free Toner</h6>
                                                            <p>Recover and rejuvenate weakened and tired skin.</p>
                                                            <div class="price">
                                                                <h6>RM45.50</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/images/makeup/banila primer.jpg" alt="">
                                                            <h4>Banila.co</h4>
                                                            <h6>Prime Primer Hydrating</h6>
                                                            <p>Hydrating primer that covers skin imperfections while giving radiant finish</p>
                                                            <div class="price">
                                                                <h6>RM105</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/images/makeup/bb chusion la.jpg" alt="">
                                                            <h4>Laneige</h4>
                                                            <h6>BB Cushion Pore Control SPF 50+ PA++</h6>
                                                            <p>A new concept cushion BB cream with 5 active ingredients for 
                                                                whitening,sunscreen,sweat proof,soothing and makeup effects.</p>
                                                            <div class="price">
                                                                <h6>140</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>  
                                <article id='tabs-2'>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="left-list">
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/images/makeup/la serum.jpg" alt="">
                                                            <h4>Laneige</h4>
                                                           <h6>Glowy Makeup Serum</h6>
                                                            <p>Hydrating serum and glass skin primer that keeps oil in check 
                                                                for visibly smoother skin and long-lasting makeup wear.</p>
                                                            <div class="price">
                                                                <h6>RM112</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/images/skincare/y1.jpg" alt="">
                                                            <h4>Illiyoon</h4>
                                                            <h6>Oil Smoothing Cleanser</h6>
                                                            <p>Oil typed body cleanser with rich foam that softly 
                                                                cleanses and moisturizes dry skin without irritation and tight feeling after shower.</p>
                                                            <div class="price">
                                                                <h6>RM55</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/images/body/y3.jpg" alt="">
                                                            <h4>Illiyoon</h4>
                                                            <h6>Collagen Essential Cream in Lotion</h6>
                                                            <p>Low-molecular collagen is absorbed into the skin
                                                                 deeply, and makes your skin tired and tired over time with a healthy and elastic skin.</p>
                                                            <div class="price">
                                                                <h6>RM45</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="right-list">
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/images/skincare/y3.jpg" alt="">
                                                            <h4>Illiyoon</h4>
                                                            <h6>Ceramide Derma Moisturing Facial Cream </h6>
                                                            <p>This mild moisturizer instantly calms irritated skin and strengthen skin barrier for a healthy complexion.</p>
                                                            <div class="price">
                                                                <h6>RM28</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/images/skincare/y4.jpg" alt="">
                                                            <h4>Illiyoon</h4>
                                                            <h6>Ceramide Derma Relief Essence Skin Softener</h6>
                                                            <p>This mild skin softer instantly calms irritated skin and delivers deep moisture.</p>
                                                            <div class="price">
                                                                <h6>RM44</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/images/skincare/c3.jpg" alt="">
                                                            <h4>Corsx</h4>
                                                            <h6>AC Collection Blemish spot Clearing Serum</h6>
                                                            <p>Provides a total solution for calming, tone-balancing, recovering from acne damages</p>
                                                            <div class="price">
                                                                <h6>RM85</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>  
                                <article id='tabs-3'>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="left-list">
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/images/skincare/centella calming gel.png" alt="">
                                                            <h4>iUNIK</h4>
                                                            <h6>Centella Calming Gel Cream</h6>
                                                            <p>Refreshing and moisturizing oil-free cream that makes the skin clearer and more vibrant.</p>
                                                            <div class="price">
                                                                <h6>RM35</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/images/skincare/propolis vitamin serum.png" alt="">
                                                            <h4>iUNIK</h4>
                                                            <h6>Propolis Vitamin Synergy Serum</h6>
                                                            <p>Contains propolis and sea buckthorn extracts to soothe, nourish and revitalize at the same time.</p>
                                                            <div class="price">
                                                                <h6>RM50</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/images/makeup/peri ink airy.png" alt="">
                                                            <h4>Peripera</h4>
                                                            <h6>Ink Airy Velvet</h6>
                                                            <p>Extremely dry and chapped lips can feel the moisture of Ink Airy Velvet that leaves you out of words with just one touch.
                                                            </p>
                                                            <div class="price">
                                                                <h6>RM40</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="right-list">
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/images/makeup/la base corrector.jpg" alt="">
                                                            <h4>Laneige</h4>
                                                            <h6>Water Glow Base Corrector SPF 41 PA++</h6>
                                                            <p>Tone correction base that creates skin look brighter, youthful and as flawless as a baby's</p>
                                                            <div class="price">
                                                                <h6>RM105</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/images/makeup/e eyeliner.png" alt="">
                                                            <h4>Etude House</h4>
                                                            <h6>Cute Eyes Maker</h6>
                                                            <p>Get your puffy, smiley under eyes with ultra-simple Cute Eyes Maker</p>
                                                            <div class="price">
                                                                <h6>RM29</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="tab-item">
                                                            <img src="assets/images/makeup/banila compact.png" alt="">
                                                            <h4>Banila.co</h4>
                                                            <h6>Covericious Power Fit Longwear Cushion</h6>
                                                            <p>The foundation is touted to be a long-lasting product claiming to provide 36 hours of wear.</p>
                                                            <div class="price">
                                                                <h6>RM124</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>   
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
 
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
  </footer>
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