<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Order</title>
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
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
            </div>
        </header>
        <br><br><br><br><br><br><br><br>
        <h1>Customer Order Details</h1><br>
        <table class="table align-middle mb-0 bg-white">
            <thead class="bg-light">
              <tr>
                <th>Name</th>
                <th>Title</th>
                <th>Status</th>
                <th>Position</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <div class="d-flex align-items-center">
                    <img
                        src="https://mdbootstrap.com/img/new/avatars/8.jpg"
                        alt=""
                        style="width: 45px; height: 45px"
                        class="rounded-circle"
                        />
                    <div class="ms-3">
                      <p class="fw-bold mb-1">John Doe</p>
                      <p class="text-muted mb-0">john.doe@gmail.com</p>
                    </div>
                  </div>
                </td>
                <td>
                  <p class="fw-normal mb-1">Software engineer</p>
                  <p class="text-muted mb-0">IT department</p>
                </td>
                <td>
                  <span class="badge badge-success rounded-pill d-inline">Active</span>
                </td>
                <td>Senior</td>
                <td>
                  <button type="button" class="btn btn-link btn-sm btn-rounded">
                    Edit
                  </button>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="d-flex align-items-center">
                    <img
                        src="https://mdbootstrap.com/img/new/avatars/6.jpg"
                        class="rounded-circle"
                        alt=""
                        style="width: 45px; height: 45px"
                        />
                    <div class="ms-3">
                      <p class="fw-bold mb-1">Alex Ray</p>
                      <p class="text-muted mb-0">alex.ray@gmail.com</p>
                    </div>
                  </div>
                </td>
                <td>
                  <p class="fw-normal mb-1">Consultant</p>
                  <p class="text-muted mb-0">Finance</p>
                </td>
                <td>
                  <span class="badge badge-primary rounded-pill d-inline"
                        >Onboarding</span
                    >
                </td>
                <td>Junior</td>
                <td>
                  <button
                          type="button"
                          class="btn btn-link btn-rounded btn-sm fw-bold"
                          data-mdb-ripple-color="dark"
                          >
                    Edit
                  </button>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="d-flex align-items-center">
                    <img
                        src="https://mdbootstrap.com/img/new/avatars/7.jpg"
                        class="rounded-circle"
                        alt=""
                        style="width: 45px; height: 45px"
                        />
                    <div class="ms-3">
                      <p class="fw-bold mb-1">Kate Hunington</p>
                      <p class="text-muted mb-0">kate.hunington@gmail.com</p>
                    </div>
                  </div>
                </td>
                <td>
                  <p class="fw-normal mb-1">Designer</p>
                  <p class="text-muted mb-0">UI/UX</p>
                </td>
                <td>
                  <span class="badge badge-warning rounded-pill d-inline">Awaiting</span>
                </td>
                <td>Senior</td>
                <td>
                  <button
                          type="button"
                          class="btn btn-link btn-rounded btn-sm fw-bold"
                          data-mdb-ripple-color="dark"
                          >
                    Edit
                  </button>
                </td>
              </tr>
            </tbody>
          </table>
    </body>
</html>

