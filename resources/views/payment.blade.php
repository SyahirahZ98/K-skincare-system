<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Checkout </title>
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

        <br>
        <div class="mt-20">
            @if(session()->get('Success'))
            <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-80" role="alert">
                <span class="font-medium">
            {{ session()->get('Success') }}  
        </span> </div><br />
        @endif
     </div>       
        <div class="container p-12 mx-auto">
            <div class="flex flex-col w-full px-0 mx-auto md:flex-row">
                <div class="flex flex-col md:w-full">
                    <h2 class="mb-4 font-bold md:text-xl text-heading ">Shipping Address</h2>
                    <form class="justify-center w-full mx-auto" action="{{url('/showdetails')}}" method="POST" enctype="multipart/form-data">
                      @csrf
                        <div class="">
                            <div class="space-x-0 lg:flex lg:space-x-4">
                                <div class="w-full lg:w-1/2">
                                    <label for="firstName" class="block mb-3 text-sm font-semibold text-gray-500">First
                                        Name</label>
                                    <input name="firstname" type="text" placeholder="First Name"
                                        class="w-full px-4 py-3 text-sm border border-gray-300 rounded lg:text-sm focus:outline-none focus:ring-1 focus:ring-blue-600">
                                </div>
                                <div class="w-full lg:w-1/2 ">
                                    <label for="firstname" class="block mb-3 text-sm font-semibold text-gray-500">Last
                                        Name</label>
                                    <input name="lastname" type="text" placeholder="Last Name"
                                        class="w-full px-4 py-3 text-sm border border-gray-300 rounded lg:text-sm focus:outline-none focus:ring-1 focus:ring-blue-600">
                                </div>
                            </div>
                            <div class="mt-4">
                                <div class="w-full">
                                    <label for="email"
                                        class="block mb-3 text-sm font-semibold text-gray-500">Email</label>
                                    <input name="email" type="text" placeholder="Email"
                                        class="w-full px-4 py-3 text-sm border border-gray-300 rounded lg:text-sm focus:outline-none focus:ring-1 focus:ring-blue-600">
                                </div>
                            </div>
                            <div class="mt-4">
                                <div class="w-full">
                                    <label for="address"
                                        class="block mb-3 text-sm font-semibold text-gray-500">Address</label>
                                    <textarea
                                        class="w-full px-4 py-3 text-xs border border-gray-300 rounded lg:text-sm focus:outline-none focus:ring-1 focus:ring-blue-600"
                                        name="address" cols="20" rows="4" placeholder="Address"></textarea>
                                </div>
                            </div>
                            <div class="space-x-0 lg:flex lg:space-x-4">
                                <div class="w-full lg:w-1/2">
                                    <label for="city"
                                        class="block mb-3 text-sm font-semibold text-gray-500">City</label>
                                    <input name="city" type="text" placeholder="City"
                                        class="w-full px-4 py-3 text-sm border border-gray-300 rounded lg:text-sm focus:outline-none focus:ring-1 focus:ring-blue-600">
                                </div>
                                <div class="w-full lg:w-1/2 ">
                                    <label for="code" class="block mb-3 text-sm font-semibold text-gray-500">
                                        Postcode</label>
                                    <input name="code" type="text" placeholder="Post Code"
                                        class="w-full px-4 py-3 text-sm border border-gray-300 rounded lg:text-sm focus:outline-none focus:ring-1 focus:ring-blue-600">
                                </div>
                            </div>
                            <div class="flex items-center mt-4">
                                <label class="flex items-center text-sm group text-heading">
                                    <input type="checkbox"
                                        class="w-5 h-5 border border-gray-300 rounded focus:outline-none focus:ring-1">
                                    <span class="ml-2">Save this information for next time</span></label>
                            </div>
                            <div class="relative pt-3 xl:pt-6"><label for="notes"
                                    class="block mb-3 text-sm font-semibold text-gray-500"> Notes
                                    (Optional)</label><textarea name="notes"
                                    class="flex items-center w-full px-4 py-3 text-sm border border-gray-300 rounded focus:outline-none focus:ring-1 focus:ring-blue-600"
                                    rows="4" placeholder="Notes for delivery"></textarea>
                            </div><br>
                            <h2 class="mb-4 font-bold md:text-xl text-heading ">Upload Invoice
                            </h2>
                            <div>
                              <input type="file" name="image" required="">
                          </div>

                            <div class="mt-4">
                                <button class="w-full px-6 py-2 text-blue-200 bg-blue-600 hover:bg-blue-900">Check Out</button>
                            </div>
                          </form>
                        </div>
                    </form>
                </div>
                <div class="flex flex-col w-full ml-0 lg:ml-12 lg:w-2/5">
                    <div class="pt-12 md:pt-0 2xl:ps-4">
                        <h2 class="text-xl font-bold">Order Summary</h2>
                        <div class="mt-8">
                            <div class="flex flex-col space-y-4">
                                <div class="flex space-x-4">
                                  @foreach ($cartItems as $products)  
                                  <div>
                                    <img src="/productimage/{{ $products->attributes->image }}" alt="image"
                                            class="w-60">
                                    </div>
                                    <div>
                                        <h3 class="text-xl font-bold">Details</h2>
                                        <p class="text-sm">{{ $products->name }}</p>
                                        <span> RM {{ $products->price }}</span>
                                        <p class="text-sm">Quantity: {{ $products->quantity}}</p>
                                    </div>
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M6 18L18 6M6 6l12 12" />
                                        </svg>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            
                        </div>
                        <div class="flex p-4 mt-4">
                            <h2 class="text-xl font-bold">Payment Details</h2>
                        </div>
                        <div
                            class="flex items-center w-full py-4 text-sm font-semibold border-b border-gray-300 lg:py-5 lg:px-3 text-heading last:border-b-0 last:text-base last:pb-0">
                            Shipping Tax :<span class="ml-2">RM5</span></div>
                        <div
                            class="flex items-center w-full py-4 text-sm font-semibold border-b border-gray-300 lg:py-5 lg:px-3 text-heading last:border-b-0 last:text-base last:pb-0">
                            Total :<span class="ml-2">RM{{ Cart::getTotal()+5}}</span></div>
                         &nbsp;<button type="button" class="btn btn-outline-primary"><a href="{{url('/order')}}">View Order</a></li></button>
                    </div>
                </div>
            </div>
        </div>
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