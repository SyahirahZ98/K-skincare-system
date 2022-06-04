<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;


use App\Models\User;

use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        $data=product::all();
        return view("home", compact("data"));
    }

    public function redirects()
    {
      $usertype= Auth::user()->usertype;
      if($usertype=='2')
     {
         return view('admin.admin');
     } 
     else 
     {
         return view ('home');
     }
    }
}
