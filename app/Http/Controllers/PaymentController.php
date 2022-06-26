<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Payment;

use App\Models\Cart;

class PaymentController extends Controller
{
    public function payment()
    {
        $cartItems = \Cart::getContent();
        return view('payment',  compact('cartItems'));
    }

    public function showdetails (Request $request)
    {
        foreach (\Cart::getContent() as $cartItems){
        
            $payment= Payment::create([
             
                  'firstname'           => request('firstname'),
                  'lastname'            => request('lastname'),
                  'email'               =>  request('email'), 
                  'address'             =>  request('address'),
                   'city'               =>  request('city'),
                  'code'                =>  request('code'),
                  'notes'               =>  request('notes'),
                  //'image'               => request('image'),
                  
              ]);
             }
             if ($image = $request->image) {
             $image =time().'.'.$image->getClientOriginalExtension();
             $request->image->move('productimage',$image);
             $cartItems->image=$image;
             }
        
             return redirect('/payment') ->with('Success','Your Payment already been made');

    }
         
    }

