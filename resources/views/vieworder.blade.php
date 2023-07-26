<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Order</title>
        <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    
        <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
    
        <link rel="stylesheet" href="assets/css/templatemo-klassy-cafe.css">
    
        <link rel="stylesheet" href="assets/css/owl-carousel.css">
    
        <link rel="stylesheet" href="assets/css/lightbox.css">
    
    </head>

    <body>
        
       
        <section class="section" id="invoice">
        <div class="container">
            {{-- @foreach ($data as $data) --}}
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="left-text-content">
                        <div class="section-heading">
                            <br><br><br>
                        <h1 style="text-align: center">Details Invoice</h1><br>
                        <td><img class="center" src="/invoice/{{$data->image}}"></td>
                        </div>
                    </div>
                </div>
                </div>
        {{-- @endforeach --}}
        </div>
        </section>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
       
        
    </body>
    </html>