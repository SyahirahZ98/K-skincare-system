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

    <style>
            .sidebar li .submenu{ 
        list-style: none; 
        margin: 0; 
        padding:2px;
        padding-left: 4rem; 
        padding-right: 4rem;
        background-color: lightpink;
        }
        </style>
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
                                        <li><a href="{{url('/skincare')}}">Skincare</a></li>
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
                                  @auth
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="100" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                                        <a href="{{url('/cart',Auth::user()->id)}}">
                                        <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                    </svg>
                                    @endauth
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
           
            <br> <div class="row">
            <aside class="col-lg-2"> 
        <!-- ============= COMPONENT ============== -->
        <nav class="sidebar card py-2 mb-4" >
        <ul class="nav flex-column" id="nav_accordion">
            <li class="nav-item">
                <a class="nav-link" href="#">Pyungkng Yul</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">innisfree</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Somebymi</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Dr Jart+</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Illiyoon</a>
            </li>
            
        </ul>
        </nav>
        <!-- ============= COMPONENT END// ============== -->	
                </aside>
                <main>
                    <div class="container">
                        @foreach ( $products as $id)
                        <form action="{{url('/cart',$id)}}" method="post">
                          @csrf 
                         <div class="row">
                            <div class="col-4">
                            <div class="thumbnail">
                              <a href="/productimage/{{$id->image}}" target="_blank">
                                <img src="/productimage/{{$id->image}}" alt="Lights" style="width:100%">
                                <div class="caption">
                                  <p><b>{{ $id->title }}</b></p>
                                  <p>{{ $id->price }}</p> 
                                </div>
                                </a>
                                <input type="number" name="quantity" min="1"  value="1" style="width: 50px;">
                                <input type="submit" value="Add to Cart">
                            </div>
                          </div>
                         </div>
                        </form>  
                      @endforeach
                           
                    </div>
                </main>
            </div>
         
           
                  <script>
                    document.addEventListener("DOMContentLoaded", function(){
                document.querySelectorAll('.sidebar .nav-link').forEach(function(element){
    
                 element.addEventListener('click', function (e) {

                let nextEl = element.nextElementSibling;
                let parentEl  = element.parentElement;	

                if(nextEl) {
                    e.preventDefault();	
                    let mycollapse = new bootstrap.Collapse(nextEl);
                
                if(nextEl.classList.contains('show')){
                mycollapse.hide();
                } else {
                    mycollapse.show();
                    // find other submenus with class=show
                    var opened_submenu = parentEl.parentElement.querySelector('.submenu.show');
                    // if it exists, then close all of them
                    if(opened_submenu){
                    new bootstrap.Collapse(opened_submenu);
                }
                            }
                        }
                    }); // addEventListener
                }) // forEach
                }); 
                </script>
            <br><br>

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