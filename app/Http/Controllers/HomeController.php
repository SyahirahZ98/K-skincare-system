<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

use App\Models\Product;

use App\Models\Consultant;

use App\Models\Cart;

use App\Models\Body;

use App\Models\Payment;

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
      if($usertype=='1')
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

        $iunik = Product::where('description','iunik')->get();
        $innisfree = Product::where('description','innisfree')->get();
        $somebymi = Product::where('description','somebymi')->get();
        $illiyoon = Product::where('description','yoon')->get();
        $cosrx = Product::where('description','cosrx')->get();

       
        return view('skincare',compact('iunik','innisfree','somebymi','illiyoon','cosrx'));
    }

    public function iunik(){
        $iunik = Product::where('description','iunik')->get();
        return view('skincare.iunik',compact('iunik'));
    }

    public function innisfree(){
        $innisfree = Product::where('description','innisfree')->get();
        return view('skincare.innisfree',compact('innisfree'));
    }
    public function somebymi(){
        $somebymi = Product::where('description','somebymi')->get();
        return view('skincare.some',compact('somebymi'));
    }
    public function illiyoon(){
        $illiyoon = Product::where('description','yoon')->get();
        return view('skincare.illiyoon',compact('illiyoon'));
    }
    public function cosrx(){
        $cosrx = Product::where('description','cosrx')->get();
        return view('skincare.cosrx',compact('cosrx'));
    }

    public function body()
    {
        $innisfree = Product::where('description','=','innisfreebody')->get();
        $somebymi = Product::where('description','=','somebymibody')->get();
        $illiyoon = Product::where('description','=','yoonbody')->get();
        // dd($innisfree);
        return view('body',compact('innisfree','somebymi','illiyoon'));
    }

    public function innisfrees(){
        $innisfree = Product::where('description','=','innisfreebody')->get();
        return view('body.innisfree',compact('innisfree'));
    }
    public function somes(){
        $somebymi = Product::where('description','=','somebymibody')->get();
        return view('body.somebymi',compact('somebymi'));
    }
    public function illiyoons(){
        $illiyoon = Product::where('description','=','yoonbody')->get();
        return view('body.illiyoon',compact('illiyoon'));
    }
    public function pyunkangs(){
        $pyunkang = Product::where('description','pyun')->get();
        return view('body.pyunkang',compact('pyunkang'));
    }
    public function drjarts(){
        $drjart = Product::where('description','dr')->get();
        return view('body.drjart',compact('drjart'));
    }

    public function order ()
    {
        $data=Payment::all();
        return view("order", compact("data"));
    }

   
    public function vieworder ($id)
    {
        $data=Payment::find($id);
        return view("vieworder", compact("data"));
    }

    public function deleteorder($id)
    {
        $data=Payment::find($id);
        $data->delete();
        return redirect()->back();
    }

}
