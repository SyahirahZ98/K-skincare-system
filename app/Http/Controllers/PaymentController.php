<?php

namespace App\Http\Controllers;

use App\Models\Cart;

use App\Models\Payment;

use Illuminate\Http\Request;
use App\Notifications\PaymentNotification;

class PaymentController extends Controller
{
    public function payment()
    {
        $cartItems = \Cart::getContent();
        return view('payment',  compact('cartItems'));
    }

    public function showdetails (Request $request)
    {
        foreach (\Cart::getContent() as $data){
            
            $payment= Payment::create([
             
                  'firstname'           => request('firstname'),
                  'lastname'            => request('lastname'),
                  'email'               =>  request('email'), 
                  'address'             =>  request('address'),
                   'city'               =>  request('city'),
                  'code'                =>  request('code'),
                  'notes'               =>  request('notes'),
                //   'image'               => request('image'),
                  
              ]);
             if ($image = $request->image) {
             $image =time().'.'.$image->getClientOriginalExtension();
             $request->image->move('invoice',$image);
             $payment->image=$image;
             $payment->save();
             }
            }
            
             $payment->notify(new PaymentNotification($payment));
             
             return redirect('/payment') ->with('Success','Your Payment already been made!');

    }
         
    }

