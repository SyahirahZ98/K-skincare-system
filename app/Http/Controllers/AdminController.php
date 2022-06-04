<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use App\Models\Product;

class AdminController extends Controller
{
    public function user()
    {
        $data=user::all();
        return view("admin.users", compact("data"));
    }
    public function deleteuser($id)
    {
        $data=user::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function deletemenu($id) 
    {

        $data=product::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function updateview($id) 
    {

        $data=product::find($id);
        return view("admin.updateview", compact("data"));
    }

    public function update(Request $request, $id)
    {
        $data=product::find($id);

        $image = $request->image;
        $imagename =time().'.'.$image->getClientOriginalExtension();
        $request->image->move('productimage',$imagename);
        $data->image=$imagename;

        $data->title=$request->title;
        $data->price=$request->price;
        $data->description=$request->description;
        $data->save();
        return redirect()->back();
    }

    public function productmenu()
    {
        $data =product::all();
        return view("admin.productmenu",compact("data"));
    }

    public function upload(Request $request)
    {
      $data = new product;

      $image = $request->image;
        $imagename =time().'.'.$image->getClientOriginalExtension();
        $request->image->move('productimage',$imagename);
        $data->image=$imagename;

        $data->title=$request->title;
        $data->price=$request->price;
        $data->description=$request->description;
        $data->save();
        return redirect()->back();
    }
}

