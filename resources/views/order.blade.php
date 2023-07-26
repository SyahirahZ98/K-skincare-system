<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Order</title>
        <meta name="author" content="">
        <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">
        
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
                    <div class="col-10">
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
                                        <li><a href="{{url('/body')}}">Body</a></li>
                    
                                    </ul>
                                </li>
                                <!-- <li class=""><a rel="sponsored" href="https://templatemo.com" target="_blank">External URL</a></li> -->
                                <li class="scroll-to-section"><a href="{{url('/order')}}}}>Contact Us</a></li> 
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
        </header>
        <br><br><br><br><br><br>
        <div class="container">
        <h1>Customer Order Details</h1><br>
       <table class="table table-striped w-auto ">
          <thead>
            <tr>
                <th>Id</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>City</th>
                <th>Code</th>
                <th>Notes</th>
                <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ( $data as  $data)
            <tr class="table-info">
                  <td>{{ $data->id}}</td>
                  <td>{{ $data->firstname}}</td>
                  <td>{{ $data->lastname}}</td>
                  <td>{{ $data->email}}</td>
                   <td>{{ $data->address}}</td>
                    <td>{{ $data->city}}</td>
                    <td>{{ $data->code}}</td>
                    <td>{{ $data->notes}}</td>
                    <td><a href="{{url('/vieworder', $data->id) }}" class="btn btn-primary btn-sm">
                      </i>View</a>&nbsp;&nbsp;<a href="{{url('/deleteorder', $data->id) }}" class="btn btn-primary btn-sm">
                       </i>Delete</a></td>
            </tr>
            @endforeach
          </tbody>
        </table>
        </div>
        <br><br><br><br>
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
                          <a href="{{url('/')}}"><img src="assets/images/make-up.png" alt=""></a>
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

