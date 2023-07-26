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

     <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <style>
                .sidebar1 {
            background: #F17153;
            /* For browsers that do not support gradients */
            background: -webkit-linear-gradient(#F17153, #F58D63, #f1ab53);
            /* For Safari 5.1 to 6.0 */
            background: -o-linear-gradient(#F17153, #F58D63, #f1ab53);
            /* For Opera 11.1 to 12.0 */
            background: -moz-linear-gradient(#F17153, #F58D63, #f1ab53);
            /* For Firefox 3.6 to 15 */
            background: linear-gradient(#F17153, #F58D63, #f1ab53);
            /* Standard syntax */
            padding: 0px;
            min-height: 100%;
        }
        .logo {
            max-height: 130px;
        }
        .logo>img {
            margin-top: 30px;
            padding: 3px;
            border: 3px solid white;
            border-radius: 100%;
        }
        .list {
            color: #fff;
            list-style: none;
            padding-left: 0px;
        }
        .list::first-line {
            color: rgba(255, 255, 255, 0.5);
        }
        .list> li, h5 {
            padding: 5px 0px 5px 40px;
        }
        .list>li:hover {
            background-color: rgba(255, 255, 255, 0.2);
            border-left: 5px solid white;
            color: white;
            font-weight: bolder;
            padding-left: 35px;
        }.main-content{
        text-align:center;
        }
                body {
        min-height: 100vh;
        background: #fafafa;
        }


        .social-link {
        width: 30px;
        height: 30px;
        border: 1px solid #ddd;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #666;
        border-radius: 50%;
        transition: all 0.3s;
        font-size: 0.9rem;
        }

        .social-link:hover,
        .social-link:focus {
        background: #ddd;
        text-decoration: none;
        color: #555;
        }

        .progress {
        height: 10px;
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
                                        <li><a href="{{url('/body')}}">Body</a></li>
                                        <li><a href="{{url('/skincare')}}">Skincare</a></li>
                                    </ul>
                                </li>
                                <!-- <li class=""><a rel="sponsored" href="https://templatemo.com" target="_blank">External URL</a></li> -->
                                <li class="scroll-to-section"><a href="{{url('/')}}">Contact Us</a></li> 
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
                                <li class="scroll-to-section">
                                    <i class="bi bi-cart"></i>
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="100" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
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
            <br><br>
        </header>
            <br><br><br><br><br><br>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-2 col-sm-4 sidebar1">
                        <br>
                        <div class="left-navigation">
                            <ul class="list">
                                <h5><strong>BRANDS</strong></h5>
                                <li><a href="{{url('/innisfrees')}}">innisfree</li></a>
                                <li><a href="{{url('/illiyoons')}}">Illiyoon</li></a>
                                <li><a href="{{url('/somes')}}">Somebymi</li></a>
                                <li><a href="{{url('/pyunkangs')}}">Pyunkang Yul</li></a>
                                <li><a href="{{url('/drjarts')}}">Dr Jart+</li></a>
                            </ul>
                            <br>
                        </div>
                    </div>
                    <div class="col-md-10 col-sm-8 main-content">
                        <h2 class="font-weight-bold mb-2">Body Care</h2>
                        <p class="font-italic text-muted mb-4">"Beautiful skin requires commitment, not a miracle. - Erno Laszlo.</p>
                                    
            <div class="row pb-5 mb-4">
                @foreach ($pyunkang as  $pyunkang)
                  
              <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                <!-- Card-->
                <div class="card rounded shadow-sm border-0">
                    
                  <div class="card-body p-4"><img src="/productimage/{{ $pyunkang->image}}" width="300px" alt="" class="img-fluid d-block mx-auto mb-3">
                    <h5> <a href="#" class="text-dark">{{ $pyunkang->name}}</a></h5>
                    <p class="small text-muted font-italic">{{ $pyunkang->price}}</p>
                    <ul class="list-inline small">
                      <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                      <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                      <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                      <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                      <li class="list-inline-item m-0"><i class="fa fa-star-o text-success"></i></li>
                    </ul>
                    <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" value="{{ $pyunkang->id }}" name="id">
                        <input type="hidden" value="{{ $pyunkang->name }}" name="name">
                        <input type="hidden" value="{{ $pyunkang->quantity}}" name="quantity">
                        <input type="hidden" value="{{ $pyunkang->price}}"  name="price">
                        <input type="hidden" value="{{ $pyunkang->image }}"  name="image">
                        <input type="hidden" value="1" name="quantity">
                        <button class="btn btn-outline-primary">Add to Cart</button>
                    </form>
                  </div>
                </div>
              </div>
             
              @endforeach
             
            </div>
                </div>
            </div>
            </div>
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
       
        
    </body>
    </html>