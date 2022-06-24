<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

use App\Models\Product;

use App\Models\Consultant;

use App\Models\Cart;

use App\Models\Body;

class HomeController extends Controller
{
    public function index()
    {
        $data=product::all();
        $data2=consultant::all();
        return view("home", compact("data","data2"));
    }

    public function redirects()
    {
        $data=product::all();
        $data2=consultant::all();

      $usertype= Auth::user()->usertype;
      if($usertype=='2')
     {
         return view('admin.admin');
     } 
     else 
     {
         return view ('home',compact('data','data2'));
     }
    }

    public function infoconsult()
    {
        $data2=consultant::all();
        return view('infoconsult',compact('data2'));
    }

    public function skincare()
    {
        $products = Product::all();
        return view('skincare',compact('products'));
    }

    public function body()
    {
       
        return view('body');
    }

    public function makeup()
    {
        return view('makeup');
    }

    public function addtocart(Request $request,$id)
    {
        $data=cart::all();
        if(Auth::id())
        {
            $user_id=Auth::id();
            $productid=$id;
            $quantity=$request->quantity;

            $cart=new cart;
            $cart->user_id=$user_id;
            $cart->product_id=$productid;
            $cart->quantity=$quantity;
            $cart->save();

            return redirect()->back(); 
        }
        else 
        {
            return redirect('/login');
        }
        
    }

    public function cart(Request $request,$id)
    {
        $cart_product = Cart::all();
        $products=Cart::where('user_id',$id)->join('products','carts.product_id','=','product_id')->get();
        return view('cart', compact('cart_product','products'));
    }
}

